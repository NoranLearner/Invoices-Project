<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\invoices;
use App\Models\sections;
use Illuminate\Http\Request;
use App\Exports\InvoicesExport;
use App\Models\invoices_details;
use App\Notifications\AddInvoice;
use Illuminate\Support\Facades\DB;
use App\Models\invoices_attachments;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = invoices::all();
        return view('invoices.invoices', compact('invoices'));
    }

// __________________________________________________________________________ //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = sections::all();
        return view('invoices.add_invoice', compact('sections'));
    }

// __________________________________________________________________________ //

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        //Add Invoices Table
        invoices::create([
            'invoice_number' => $request->invoice_number,
            'invoice_date' => $request->invoice_date,
            'due_date' => $request->due_date,
            'section_id' => $request->section,
            'product' => $request->product,
            'amount_collection' => $request->amount_collection,
            'amount_Commission' => $request->amount_Commission,
            'discount' => $request->discount,
            'rate_vat' => $request->rate_vat,
            'value_vat' => $request->value_vat,
            'total' => $request->total,
            'status' => 'غير مدفوعة',
            'value_status' => 2,
            'note' => $request->note,
        ]);

        // Add Invoices Details Table

        $invoice_id = invoices::latest()->first()->id;

        invoices_details::create([
            'id_invoice' => $invoice_id,
            'invoice_number' => $request->invoice_number,
            'product' => $request->product,
            'section' => $request->section,
            'status' => 'غير مدفوعة',
            'value_status' => 2,
            'note' => $request->note,
            'user' => (Auth::user()->name),
        ]);

        // For Invoices Attachments
        if ($request->hasFile('pic')) {

            // validation
            // $this->validate($request, ['pic' => 'required|mimes:pdf|max:1000'], ['pic.mimes' => 'تم الحفظ : خطأ المرفق لابد ان يكون pdf']);

            $invoice_id = invoices::latest()->first()->id;
            $image = $request->file('pic');
            $file_name = $image->getClientOriginalName();
            $invoice_number = $request->invoice_number;

            $attachments = new invoices_attachments();
            $attachments->file_name = $file_name;
            $attachments->invoice_number = $invoice_number;
            $attachments->Created_by = Auth::user()->name;
            $attachments->invoice_id = $invoice_id;
            $attachments->save();

            // move pic
            $imageName = $request->pic->getClientOriginalName();
            $request->pic->move(public_path('Attachments/' . $invoice_number), $imageName);
        }

        // Notification - For send mail - https://laravel.com/docs/8.x/notifications#mail-notifications
        $user = User::first();
        // First Method
        // $user->notify(new AddInvoice($invoice_id));
        // Second Method
        Notification::send($user, new AddInvoice($invoice_id));

        // Alert
        session()->flash('Add', 'تم اضافة الفاتورة بنجاح');
        return back();
    }

// __________________________________________________________________________ //

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // For change payment status
        $invoices = invoices::where('id', $id)->first();
        $sections = sections::all();
        return view('invoices.status_update', compact('sections', 'invoices'));
    }

// __________________________________________________________________________ //

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoices = invoices::where('id', $id)->first();
        $sections = sections::all();
        return view('invoices.edit_invoice', compact('sections', 'invoices'));
    }

// __________________________________________________________________________ //

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $invoices = invoices::findOrFail($request->invoice_id);
        $invoices->update([
            'invoice_number' => $request->invoice_number,
            'invoice_date' => $request->invoice_date,
            'due_date' => $request->due_date,
            'product' => $request->product,
            'section_id' => $request->section,
            'amount_collection' => $request->amount_collection,
            'amount_Commission' => $request->amount_Commission,
            'discount' => $request->discount,
            'value_vat' => $request->value_vat,
            'rate_vat' => $request->rate_vat,
            'total' => $request->total,
            'note' => $request->note,
        ]);

        session()->flash('edit', 'تم تعديل الفاتورة بنجاح');
        return back();
    }

// __________________________________________________________________________ //

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // For check
        // return $request;

        $id = $request->invoice_id;
        $invoices = invoices::where('id', $id)->first();

        /*
        // Permanently Delete
        $invoices->forceDelete();
        session()->flash('delete_invoice');
        return redirect('/invoices');
        */

        /*
        // Soft Delete - Remove from invoices page not from database
        $invoices->delete();
        session()->flash('delete_invoice');
        return redirect('/invoices');
        */

        $attachments = invoices_attachments::where('invoice_id', $id)->first();

        // Look in archive_invoice.blade.php file
        $id_page =$request->id_page;

        // For Permanently Delete , Delete Attachments
        // If id_page==2 , Archive this invoice
        if (!$id_page==2) {
            // invoice has attachment
            if (!empty($attachments->invoice_number)) {
                Storage::disk('public_uploads')->deleteDirectory($attachments->invoice_number);
            }
            // Permanently Delete
            $invoices->forceDelete();
            session()->flash('delete_invoice');
            return redirect('/invoices');
        }

        else {
            // Soft Delete - For Archive invoice
            $invoices->delete();
            session()->flash('archive_invoice');
            return redirect('/archive_invoice');
        }
    }

// __________________________________________________________________________ //

    // For show products in add invoice page
    public function getproducts($id)
    {
        $products = DB::table("products")->where("section_id", $id)->pluck("product_name", "id");
        return json_encode($products);
    }

// __________________________________________________________________________ //

    // For save payment value in database
    public function status_update($id, Request $request){

        $invoices = invoices::findOrFail($id);

        // Form status_show page
        if ($request->status === 'مدفوعة') {

            // Make change in invoices page
            $invoices->update([
                'value_status' => 1,
                'status' => $request->status,
                'payment_date' => $request->payment_date,
            ]);

            // Add payment status in invoices_details page
            invoices_details::create([
                'id_invoice' => $request->invoice_id,
                'invoice_number' => $request->invoice_number,
                'product' => $request->product,
                'section' => $request->section,
                'status' => $request->status,
                'value_status' => 1,
                'note' => $request->note,
                'payment_date' => $request->payment_date,
                'user' => (Auth::user()->name),
            ]);
        }

        else {

            // Make change in invoices page
            $invoices->update([
                // Anything else
                'value_status' => 3,
                'status' => $request->status,
                'payment_date' => $request->payment_date,
            ]);

            // Add payment status in invoices_details page
            invoices_Details::create([
                'id_invoice' => $request->invoice_id,
                'invoice_number' => $request->invoice_number,
                'product' => $request->product,
                'section' => $request->section,
                'status' => $request->status,
                'value_status' => 3,
                'note' => $request->note,
                'payment_date' => $request->payment_date,
                'user' => (Auth::user()->name),
            ]);

        }

        session()->flash('Status_Update');
        return redirect('/invoices');
    }

// __________________________________________________________________________ //

// For show paid invoices
public function invoice_paid(){
    $invoices = invoices::where('value_status', 1)->get();
    return view('invoices.invoices_paid',compact('invoices'));
}

// __________________________________________________________________________ //

// For show unpaid invoices
public function invoice_unpaid(){
    $invoices = invoices::where('value_status',2)->get();
    return view('invoices.invoices_unpaid',compact('invoices'));
}

// __________________________________________________________________________ //

// For show partial paid invoices
public function invoice_partial(){
    $invoices = invoices::where('value_status',3)->get();
    return view('invoices.invoices_partial',compact('invoices'));
}

// __________________________________________________________________________ //

// For print invoice
public function print_invoice($id){
    $invoices = invoices::where('id', $id)->first();
    return view('invoices.print_invoice',compact('invoices'));
}

// __________________________________________________________________________ //

// For export excel with maatwebsite package
public function export()
    {
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }

// __________________________________________________________________________ //
}



