<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;
use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;

class InvoicesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reports.invoices_report');
    }

//==========================================================================================================================

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//==========================================================================================================================

    //For search invoices

    public function search_invoices(Request $request)
    {

        $radio = $request->radio;

        // في حالة البحث بنوع الفاتورة

        if ($radio == 1) {

            // في حالة عدم تحديد التاريخ
            if ($request->type && $request->start_at == '' && $request->end_at == '') {
                $invoices = invoices::select('*')->where('status', '=', $request->type)->get();
                $type = $request->type;
                return view('reports.invoices_report', compact('type'))->withDetails($invoices);
            }

            // في حالة تحديد التاريخ
            else {
                $start_at = date($request->start_at);
                $end_at = date($request->end_at);
                $type = $request->type;
                $invoices = invoices::whereBetween('invoice_date', [$start_at, $end_at])->where('status', '=', $request->type)->get();
                return view('reports.invoices_report', compact('type', 'start_at', 'end_at'))->withDetails($invoices);
            }

        }

        // في البحث برقم الفاتورة
        else {
            $invoices = invoices::select('*')->where('invoice_number', '=', $request->invoice_number)->get();
            return view('reports.invoices_report')->withDetails($invoices);
        }

    }

//==========================================================================================================================

    // For export excel with maatwebsite package
    public function export()
    {
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }

}
