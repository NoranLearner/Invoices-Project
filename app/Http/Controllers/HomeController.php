<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $count_all= invoices::count();
        $count_invoices_paid = invoices::where('value_status', 1)->count();
        $count_invoices_partial = invoices::where('value_status', 3)->count();
        $count_invoices_unpaid = invoices::where('value_status', 2)->count();


        // Paid invoices
        if($count_invoices_paid == 0){
        $percent_paid = 0;
        }
        else{
        $percent_paid = round(($count_invoices_paid / $count_all) *100);
        }

        // Partial invoices
        if($count_invoices_partial == 0){
        $percent_partial = 0;
        }
        else{
        $percent_partial = round(($count_invoices_partial / $count_all) *100);
        }

        // Unpaid invoices
        if($count_invoices_unpaid == 0){
        $percent_unpaid = 0;
        }
        else{
        $percent_unpaid = round(($count_invoices_unpaid / $count_all) *100);
        }

        // ---------------------------------------------------------------------------

        // Start Pie Chart - Doughnut Chart

        $PieChart = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 300, 'height' => 200])
        ->labels(['الفواتير غير المدفوعة', 'الفواتير المدفوعة جزئيا', 'الفواتير المدفوعة'])
        ->datasets([
            [
                'backgroundColor' => ['rgba(247, 119, 140, 0.7)', 'rgba(247, 106, 45, 0.7)', 'rgba(2, 150, 102, 0.7)'],
                'data' => [$percent_unpaid , $percent_partial, $percent_paid]
            ]
        ])
        ->options([]);

        // End Pie Chart - Doughnut Chart

        // ---------------------------------------------------------------------------

        // Start Bar Chart

        $BarChart = app()->chartjs
        ->name('barChartTest')
        ->type('bar')
        ->size(['width' => 300, 'height' => 200])
        // ->labels(['Label x'])
        ->datasets([
            [
                "label" => "الفواتير غير المدفوعة",
                'backgroundColor' => ['rgba(247, 119, 140, 0.7)'],
                'data' => [$percent_unpaid, 100]
            ],
            [
                "label" => "الفواتير المدفوعة جزئيا",
                'backgroundColor' => ['rgba(247, 106, 45, 0.7)'],
                'data' => [$percent_partial, 50]
            ],
            [
                "label" => "الفواتير المدفوعة",
                'backgroundColor' => ['rgba(2, 150, 102, 0.7)'],
                'data' => [$percent_paid, 0]
            ],
        ])
        ->options([]);

        // End Bar Chart

        // ---------------------------------------------------------------------------

        return view('home', compact('PieChart', 'BarChart'));
    }
}
