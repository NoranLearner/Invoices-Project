@extends('layouts.master')

@section('title')
ارشيف الفواتير
@stop

@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ارشيف الفواتير</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')

<!-- Alert -->

@if (session()->has('delete_invoice'))
    <script>
        window.onload = function() {
            notif({
                msg: "تم حذف الفاتورة بنجاح",
                type: "success"
            })
        }
    </script>
@endif

@if (session()->has('archive_invoice'))
    <script>
        window.onload = function() {
            notif({
                msg: "تم أرشفة الفاتورة بنجاح",
                type: "success"
            })
        }
    </script>
@endif

@if (session()->has('restore_invoice'))
    <script>
        window.onload = function() {
            notif({
                msg: "تم استعادة الفاتورة بنجاح",
                type: "success"
            })
        }
    </script>
@endif

<!-- End Alert -->

<!-- row -->
<div class="row">

    <!--div-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">ارشيف الفواتير</h4>
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
                                <th class="border-bottom-0">الملاحظات</th>
                                <th class="border-bottom-0">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td>{{ $invoice-> id }}</td>
                                    <td>{{ $invoice-> invoice_number }}</td>
                                    <td>{{ $invoice-> invoice_date }}</td>
                                    <td>{{ $invoice-> due_date }}</td>
                                    <td>{{ $invoice-> product }}</td>
                                    {{-- Use Relationship --}}
                                    {{-- Click to show invoices details --}}
                                    <td>
                                        <a href="{{url('InvoicesDetails')}}/{{$invoice-> id}}"> {{ $invoice-> section -> section_name }} </a>
                                    </td>
                                    <td>{{ $invoice-> discount }}</td>
                                    <td>{{ $invoice-> rate_vat }}</td>
                                    <td>{{ $invoice-> value_vat }}</td>
                                    <td>{{ $invoice-> total }}</td>
                                    <td>
                                        @if ($invoice->value_status == 1)
                                            <span class="text-success"> {{$invoice->status}} </span>
                                        @elseif($invoice->value_status == 2)
                                            <span class="text-danger"> {{$invoice->status}} </span>
                                        @else
                                            <span class="text-warning"> {{$invoice->status}} </span>
                                        @endif
                                    </td>
                                    <td>{{ $invoice-> note }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn ripple btn-light btn-sm" data-toggle="dropdown" type="button" aria-expanded="false" aria-haspopup="true"> العمليات
                                                <i class="fas fa-caret-down ml-1"></i>
                                            </button>
                                            <div class="dropdown-menu tx-13" style="border:1px solid #ddd">
                                                <!-- Restore archived invoice  -->
                                                <a href="#" class="dropdown-item" data-invoice_id="{{$invoice->id}}" data-toggle="modal" data-target="#Transfer_invoice">
                                                    <i class="text-warning fas fa-exchange-alt"></i>
                                                    &nbsp;&nbsp; نقل الى الفواتير
                                                </a>
                                                <!-- Delete invoice -->
                                                <a href="#" class="dropdown-item" data-invoice_id="{{$invoice->id}}" data-toggle="modal" data-target="#delete_invoice">
                                                    <i class="text-danger fas fa-trash"></i>
                                                    &nbsp;&nbsp;حذف الفاتورة
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->

    <!-- Restore modal -->
    <div class="modal fade" id="Transfer_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إلغاء أرشفة الفاتورة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('archive_invoice.update','test')}}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <p>هل انت متاكد من إلغاء عملية الارشفة ؟</p>
                    <br/>
                    <!--For use in script-->
                    <input type="hidden" name="invoice_id" id="invoice_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn ripple btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn ripple btn-danger">تاكيد</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Restore modal-->

    <!-- Delete modal -->
    <div class="modal fade" id="delete_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف الفاتورة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- If found problem go to test, http://127.0.0.1:8000/invoices/test-->
                <form action="{{route('archive_invoice.destroy','test')}}" method="post">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <p>هل انت متاكد من عملية الحذف ؟</p>
                    <br/>
                    <!--For use in script-->
                    <input type="hidden" name="invoice_id" id="invoice_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn ripple btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn ripple btn-danger">تاكيد</button>
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
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
    <!-- Internal Modal js-->
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>
    <!-- For Restore Modal js-->
    <script>
        $('#Transfer_invoice').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var invoice_id = button.data('invoice_id')
            var modal = $(this)
            modal.find('.modal-body #invoice_id').val(invoice_id);
        })
    </script>
    <!-- For Delete Modal js-->
    <script>
        $('#delete_invoice').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var invoice_id = button.data('invoice_id')
            var modal = $(this)
            // Here input hidden
            modal.find('.modal-body #invoice_id').val(invoice_id);
        })
    </script>
@endsection

