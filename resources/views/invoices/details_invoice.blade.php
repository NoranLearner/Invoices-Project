@extends('layouts.master')

@section('title')
    تفاصيل الفاتورة
@stop

@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Internal Input tags css-->
<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">قائمة الفواتير</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تفاصيل الفاتورة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')

<!-- Alert in modal -->

@if (session()->has('Add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Add') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('edit') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<!-- End Alert -->

<!-- row -->
<div class="row">

    <!--div-->
    <div class="col-xl-12">
        <div class="card mg-b-20" id="tabs-style2">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">تفاصيل الفاتورة</h4>
                </div>
            </div>
            <div class="card-body">

                <div class="panel panel-primary tabs-style-2">

                    <div class=" tab-menu-heading">
                        <div class="tabs-menu1">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs main-nav-line">
                                <li><a href="#tab4" class="nav-link active" data-toggle="tab">معلومات الفاتورة</a></li>
                                <li><a href="#tab5" class="nav-link" data-toggle="tab">حالات الدفع</a></li>
                                <li><a href="#tab6" class="nav-link" data-toggle="tab">المرفقات</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body tabs-menu-body main-content-body-right border">
                        <div class="tab-content">

                            <div class="tab-pane active" id="tab4">
                                <div class="table-responsive mt-15">
                                    <table class="table center-aligned-table mb-0 table-hover" style="text-align:center">
                                        <thead>
                                            <tr class="text-dark">
                                                <th>رقم الفاتورة</th>
                                                <th>تاريخ الفاتورة</th>
                                                <th>تاريخ الاستحقاق</th>
                                                <th>المنتج</th>
                                                <th>القسم</th>
                                                <th>مبلغ التحصيل</th>
                                                <th>مبلغ العمولة</th>
                                                <th>الخصم</th>
                                                <th>نسبة الضريبة</th>
                                                <th>قيمة الضريبة</th>
                                                <th>الاجمالي من الضريبة</th>
                                                <th>الحالة الحالية</th>
                                                <th>الملاحظات</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>{{ $invoices-> invoice_number }}</td>
                                                <td>{{ $invoices-> invoice_date }}</td>
                                                <td>{{ $invoices-> due_date }}</td>
                                                <td>{{ $invoices-> product }}</td>
                                                {{-- Use Relationship between invoices and sections--}}
                                                <td>{{ $invoices-> section -> section_name }}</td>
                                                <td>{{ $invoices-> amount_collection }}</td>
                                                <td>{{ $invoices-> amount_Commission }}</td>
                                                <td>{{ $invoices-> discount }}</td>
                                                <td>{{ $invoices-> rate_vat }}</td>
                                                <td>{{ $invoices-> value_vat }}</td>
                                                <td>{{ $invoices-> total }}</td>
                                                <td>
                                                    @if ($invoices->value_status == 1)
                                                        <span class="badge badge-pill badge-success"> {{$invoices->status}} </span>
                                                    @elseif($invoices->value_status == 2)
                                                        <span class="badge badge-pill badge-danger"> {{$invoices->status}} </span>
                                                    @else
                                                        <span class="badge badge-pill badge-warning"> {{$invoices->status}} </span>
                                                    @endif
                                                </td>
                                                <td>{{ $invoices-> note }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab5">
                                <div class="table-responsive mt-15">
                                    <table class="table center-aligned-table mb-0 table-hover" style="text-align:center">
                                        <thead>
                                            <tr class="text-dark">
                                                <th>#</th>
                                                <th>رقم الفاتورة</th>
                                                <th>المنتج</th>
                                                <th>القسم</th>
                                                <th>حالة الدفع</th>
                                                <th>تاريخ الدفع </th>
                                                <th>الملاحظات</th>
                                                <th>تاريخ الاضافة </th>
                                                <th>المستخدم</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- invoice may have different status -->
                                            @foreach ($details as $x)
                                                <tr>
                                                    <td>{{ $x-> id }}</td>
                                                    <td>{{ $x-> invoice_number }}</td>
                                                    <td>{{ $x-> product }}</td>
                                                    <td>{{ $invoices-> section -> section_name }}</td>
                                                    <td>
                                                        @if ($x->value_status == 1)
                                                            <span class="badge badge-pill badge-success"> {{$x->status}} </span>
                                                        @elseif($x->value_status == 2)
                                                            <span class="badge badge-pill badge-danger"> {{$x->status}} </span>
                                                        @else
                                                            <span class="badge badge-pill badge-warning"> {{$x->status}} </span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $x-> payment_date }}</td>
                                                    <td>{{ $x-> note }}</td>
                                                    <td>{{ $x-> created_at }}</td>
                                                    <td>{{ $x -> user }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab6">
                                <div class="table-responsive mt-15">
                                    <table class="table center-aligned-table mb-0 table-hover" style="text-align:center">
                                        <thead>
                                            <tr class="text-dark">
                                                <th scope="col">#</th>
                                                <th scope="col">اسم الملف</th>
                                                <th scope="col">قام بالاضافة</th>
                                                <th scope="col">تاريخ الاضافة</th>
                                                <th scope="col">العمليات</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- Many attachements for invoice -->
                                            @foreach ($attachments as $x)
                                                <tr>
                                                    <td>{{ $x-> id }}</td>
                                                    <td>{{ $x->  file_name}}</td>
                                                    <td>{{ $x->  Created_by}}</td>
                                                    <td>{{ $x->  created_at}}</td>
                                                    <td colspan="2">
                                                        {{-- For view invoice attachments --}}
                                                        <a class="btn btn-outline-success btn-sm"
                                                        href="{{ url('View_file') }}/{{ $invoices->invoice_number }}/{{ $x->file_name }}"
                                                        role="button"> <i class="fas fa-eye"></i> &nbsp; عرض</a>

                                                        {{-- For download invoice attachments --}}
                                                        <a class="btn btn-outline-info btn-sm"
                                                        href="{{ url('download') }}/{{ $invoices->invoice_number }}/{{ $x->file_name }}"
                                                        role="button"> <i class="fas fa-download"></i> &nbsp; تحميل</a>

                                                        {{-- For delete invoice attachments --}}
                                                        <button class="btn btn-outline-danger btn-sm"
                                                        data-toggle="modal"
                                                        data-file_name="{{ $x->file_name }}"
                                                        data-invoice_number="{{ $x->invoice_number }}"
                                                        data-id_file="{{ $x->id }}"
                                                        data-target="#delete_file"> <i class="fas fa-trash"></i> &nbsp; حذف </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--/div-->

    <!-- Delete modal -->
    <div class="modal fade" id="delete_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">حذف المرفق</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('delete_file')}}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p class="text-center">
                            <h6 style="color:red"> هل انت متاكد من عملية حذف المرفق ؟</h6>
                        </p>
                        <input type="hidden" name="id_file" id="id_file" value="">
                        <input type="hidden" name="file_name" id="file_name" value="">
                        <input type="hidden" name="invoice_number" id="invoice_number" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Delete modal-->

</div>
<!-- /row -->
<!-- row closed -->

</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection

@section('js')
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{ URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Internal Input tags js-->
    <script src="{{ URL::asset('assets/plugins/inputtags/inputtags.js') }}"></script>
    <!--- Tabs JS-->
    <script src="{{ URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tabs.js') }}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
    <!-- Internal Prism js-->
    <script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>
    <!-- For Delete Modal js-->
    <script>
        $('#delete_file').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_file = button.data('id_file')
            var file_name = button.data('file_name')
            var invoice_number = button.data('invoice_number')
            var modal = $(this)
            modal.find('.modal-body #id_file').val(id_file);
            modal.find('.modal-body #file_name').val(file_name);
            modal.find('.modal-body #invoice_number').val(invoice_number);
        })
    </script>
@endsection
