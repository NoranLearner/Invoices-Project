<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;
use App\Models\invoices_details;
use App\Models\invoices_attachments;
use Illuminate\Support\Facades\Storage;

class InvoicesDetailsController extends Controller
{
    function __construct(){
        // $this->middleware('permission: ', ['only' => ['edit']]);
        // $this->middleware('permission: حذف المرفق', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

// __________________________________________________________________________ //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

// __________________________________________________________________________ //

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoices_details  $invoices_details
     * @return \Illuminate\Http\Response
     */
    public function show(invoices_details $invoices_details)
    {
        //
    }

// __________________________________________________________________________ //

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoices_details  $invoices_details
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo $id;
        $invoices = invoices::where('id',$id)->first();
        $details  = invoices_details::where('id_invoice',$id)->get();
        $attachments  = invoices_attachments::where('invoice_id',$id)->get();

        return view('invoices.details_invoice',compact('invoices','details','attachments'));
    }

// __________________________________________________________________________ //

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoices_details  $invoices_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoices_details $invoices_details)
    {
        //
    }

// __________________________________________________________________________ //

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoices_details  $invoices_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $invoices = invoices_attachments::findOrFail($request->id_file);
        // Delete from database
        $invoices->delete();
        // Delete from public folder
        Storage::disk('public_uploads')->delete($request->invoice_number.'/'.$request->file_name);
        session()->flash('delete', 'تم حذف المرفق بنجاح');
        return back();
    }

// __________________________________________________________________________ //

    // For view invoice attachments
    // https://laravel.com/docs/8.x/filesystem
    // config/filesystems.php
    public function open_file($invoice_number,$file_name)
    {
        $files = Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($invoice_number.'/'.$file_name);
        return response()->file($files);
    }

// __________________________________________________________________________ //

    // For download invoice attachments
    //
    public function download_file($invoice_number,$file_name)
    {
        $files = Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($invoice_number.'/'.$file_name);
        return response()->download($files);
    }

}
