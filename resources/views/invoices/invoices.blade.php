@extends('layouts.master')

@section('title')
    قائمة الفواتير
@stop

@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الفواتير</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')

<!-- row -->
<div class="row">

    <!--div-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">قائمة الفواتير</h4>
                    {{-- <i class="mdi mdi-dots-horizontal text-gray"></i> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{-- example , example1 --}}
                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">رقم الفاتورة</th>
                                <th class="border-bottom-0">تاريخ الفاتورة</th>
                                <th class="border-bottom-0">تاريخ الاستحقاق</th>
                                <th class="border-bottom-0">المنتج</th>
                                <th class="border-bottom-0">القسم</th>
                                <th class="border-bottom-0">الخصم</th>
                                <th class="border-bottom-0">نسبة الضريبة</th>
                                <th class="border-bottom-0">قيمة الضريبة</th>
                                <th class="border-bottom-0">الاجمالي</th>
                                <th class="border-bottom-0">الحالة</th>
                                <th class="border-bottom-0">ملاحظات</th>
                                <th class="border-bottom-0">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                                <td>منتج</td>
                                <td>البنك الاهلى</td>
                                <td>40%</td>
                                <td>2400</td>
                                <td>2000</td>
                                <td>4400</td>
                                <td>غير مدفوعه</td>
                                <td>لم يتم السداد</td>
                                <td>دفع</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->

</div>
<!-- /row -->

				{{-- <!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="morris-wrapper-demo" id="morrisBar1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="morris-wrapper-demo" id="morrisBar2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row --> --}}

				{{-- <!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-md-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
								</div>
                            </div>
                        </div>
					</div><!-- col-6 -->
				</div>
                <!-- /row --> --}}


				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection

@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
@endsection

