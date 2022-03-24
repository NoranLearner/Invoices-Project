@extends('layouts.master')

@section('title')
    الاقسام
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
                <h4 class="content-title mb-0 my-auto">الاعدادات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الاقسام</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')

<!-- row -->
<div class="row">

    <!-- Alert in modal -->
    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('Error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- End Alert -->

    <!--div-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0"> الاقسام</h4>
                    <!-- Basic modal -->
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">اضافه قسم</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- example , example1 -->
                    <table id="example1" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">اسم القسم</th>
                                <th class="border-bottom-0">الوصف</th>
                                <th class="border-bottom-0">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>25251515</td>
                                <td>24-3-2022</td>
                                <td>1-4-2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->

    <!-- Basic modal -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">اضافه قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="{{ route('sections.store') }}" method="post">
                            {{ csrf_field() }}
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم القسم</label>
                                <input type="text" class="form-control" id="section_name" name="section_name">
                            </div>
    
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">ملاحظات</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
    
                            <div class="modal-footer">
                                <button type="submit" class="btn ripple btn-success">حفظ</button>
                                <button type="button" class="btn ripple btn-secondary" data-dismiss="modal">اغلاق</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Basic modal -->

</div>
<!-- /row -->
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
    <!-- Internal Modal js-->
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>
@endsection

