<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use App\Models\sections;
use Illuminate\Http\Request;
use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;

class CustomerReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = sections::all();
        return view('reports.customers_report',compact('sections'));
    }

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

    public function search_customers(Request $request)
    {
        // return $request;

        // في حالة البحث بدون تاريخ

        if ($request->section && $request->product && $request->start_at == '' && $request->end_at == '') {
            $invoices = invoices::select('*')->where('section_id', '=', $request->section)->where('product', '=', $request->product)->get();
            $sections = sections::all();
            return view('reports.customers_report', compact('sections'))->withDetails($invoices);
        }

        // في حالة البحث بتاريخ

        else {
            $start_at = date($request->start_at);
            $end_at = date($request->end_at);
            $invoices = invoices::whereBetween('invoice_date', [$start_at, $end_at])->where('section_id', '=', $request->section)->where('product', '=', $request->product)->get();
            $sections = sections::all();
            return view('reports.customers_report', compact('sections'))->withDetails($invoices);
        }

    }

    //==========================================================================================================================

    // For export excel with maatwebsite package

    public function export()
    {
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }

}
