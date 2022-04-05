<?php

namespace App\Exports;

use App\Models\invoices;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return invoices::all();

        return invoices::select('invoice_number', 'invoice_date', 'due_date', 'section', 'product', 'total', 'status', 'payment_date', 'note')->get();
    }
}
