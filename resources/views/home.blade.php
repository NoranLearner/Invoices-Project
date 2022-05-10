@extends('layouts.master')

@section('title')
    الصفحة الرئيسية
@endsection

@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الصفحة الرئيسية</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection


@section('content')

<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title col-xl-6 tx-16">"مرحبا بك فى برنامج الفواتير"</h4>
                </div>
            </div>
            <div class="card-body">

                <!-- ------------------------------------------------------------------------------------- -->

                <!-- row opened -->
                <div class="row row-sm">

                    <!-- col opened -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-14 text-white">اجمالى الفواتير</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
                                                {{ number_format(\App\Models\invoices::sum('Total'), 2) }}
                                            </h4>
											<p class="mb-0 tx-14 text-white op-7"> عدد الفواتير :
                                                {{ \App\Models\invoices::count() }}
                                            </p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7">100%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
                    <!-- col closed -->

                    <!-- ------------------------------------------------ -->

                    <!-- col opened -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-14 text-white">الفواتير المدفوعة</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
                                                {{ number_format(\App\Models\invoices::where('value_status', 1)->sum('Total'), 2) }}
                                            </h4>
											<p class="mb-0 tx-14 text-white op-7"> عدد الفواتير :
                                                {{ \App\Models\invoices::where('value_status', 1)->count() }}
                                            </p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7">
                                                @php
                                                    $count_all= \App\Models\invoices::count();
                                                    $count_invoices_paid = \App\Models\invoices::where('value_status', 1)->count();
                                                    if($count_invoices_paid == 0){
                                                    echo $count_invoices_paid = 0;
                                                    }
                                                    else{
                                                    echo $count_invoices_paid = round(($count_invoices_paid / $count_all) *100). '%';
                                                    }
                                                @endphp
                                            </span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
                    <!-- col closed -->

                    <!-- ------------------------------------------------ -->

                    <!-- col opened -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-14 text-white">الفواتير المدفوعة جزئيا</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
                                                {{ number_format(\App\Models\invoices::where('value_status', 3)->sum('Total'), 2) }}
                                            </h4>
											<p class="mb-0 tx-14 text-white op-7"> عدد الفواتير :
                                                {{ \App\Models\invoices::where('value_status', 3)->count() }}
                                            </p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7">
                                                @php
                                                    $count_all= \App\Models\invoices::count();
                                                    $count_invoices_partial = \App\Models\invoices::where('value_status', 3)->count();
                                                    if($count_invoices_partial == 0){
                                                    echo $count_invoices_partial = 0;
                                                    }
                                                    else{
                                                    echo $count_invoices_partial = round(($count_invoices_partial / $count_all) *100) . '%';
                                                    }
                                                @endphp
                                            </span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
                    <!-- col closed -->

                    <!-- ------------------------------------------------ -->

                    <!-- col opened -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-14 text-white">الفواتير غير المدفوعة</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
                                                {{ number_format(\App\Models\invoices::where('value_status', 2)->sum('Total'), 2) }}
                                            </h4>
											<p class="mb-0 tx-14 text-white op-7"> عدد الفواتير :
                                                {{ \App\Models\invoices::where('value_status', 2)->count() }}
                                            </p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7">
                                                @php
                                                    $count_all= \App\Models\invoices::count();
                                                    $count_invoices_unpaid = \App\Models\invoices::where('value_status', 2)->count();
                                                    if($count_invoices_unpaid == 0){
                                                    echo $count_invoices_unpaid = 0;
                                                    }
                                                    else{
                                                    echo $count_invoices_unpaid = round(($count_invoices_unpaid / $count_all) *100) . '%';
                                                    }
                                                @endphp
                                            </span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
                    <!-- col closed -->

                </div>
                <!-- row closed -->

                <!-- ------------------------------------------------------------------------------------- -->

                <!-- row opened -->
                <div class="row row-sm mg-t-50">

                    <!-- col opened -->
                    <div class="col-xl-6 col-lg-12 col-md-12 col-xm-12">
                        <p class="tx-14 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
                                <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            &nbsp; نسبة إحصائية الفواتير
                        </p>
                        <!-- Start Pie Chart - Doughnut Chart -->
                        {!! $PieChart->render() !!}
                        <!-- End Pie Chart - Doughnut Chart -->
                    </div>
                    <!-- col closed -->

                    <!-- ------------------------------------------------ -->

                    <!-- col opened -->
                    <div class="col-xl-6 col-lg-12 col-md-12 col-xm-12">
                        <p class="tx-14 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                            &nbsp; نسبة إحصائية الفواتير
                        </p>
                        <!-- Start BarChart -->
                        {!! $BarChart->render() !!}
                        <!-- End BarChart -->
                    </div>
                    <!-- col closed -->

                </div>
                <!-- row closed -->

                <!-- ------------------------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
</div>
<!-- row closed -->

</div>
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection


@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
