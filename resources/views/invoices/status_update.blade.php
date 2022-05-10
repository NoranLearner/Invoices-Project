@extends('layouts.master')

@section('title')
تغير حالة الدفع
@stop

@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">قائمة الفواتير</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تغيير حاله دفع الفاتورة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')

<!-- row -->
<div class="row">

    <!--div-->
    <div class="col-lg-12 col-md-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">تغيير حاله دفع الفاتورة</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('status_update',['id' => $invoices->id])}}" method="post" autocomplete="off">
                    {{ csrf_field() }}

                    <!--First Row-->
                    <div class="row">
                        <!--First Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">رقم الفاتورة</label>
                            <input type="hidden" name="invoice_id" value="{{$invoices->id}}">
                            <input type="text" class="form-control" id="inputName" name="invoice_number" value="{{$invoices->invoice_number}}" required readonly>
                        </div>
                        <!--Second Col-->
                        <div class="col">
                            <label>تاريخ الفاتورة</label>
                            <input class="form-control" name="invoice_date" type="text" value="{{$invoices->invoice_date}}" required readonly>
                        </div>
                        <!--Third Col-->
                        <div class="col">
                            <label>تاريخ الاستحقاق</label>
                            <input class="form-control" name="due_date" type="text" value="{{$invoices->due_date}}" required readonly>
                        </div>
                    </div>
                    <!-- End First Row-->

                    <!--Second Row-->
                    <div class="row">
                        <!--First Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">القسم</label>
                            <select name="section" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')" readonly>
                                <!--placeholder-->
                                <option value=" {{$invoices->section->id}}"> {{$invoices->section->section_name}} </option>
                            </select>
                        </div>
                        <!--Second Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">المنتج</label>
                            <select name="product" id="product" class="form-control" readonly>
                                <option value="{{$invoices->product}}"> {{$invoices->product}}</option>
                            </select>
                        </div>
                        <!--Third Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">مبلغ التحصيل</label>
                            <input type="text" class="form-control" id="inputName" name="amount_collection" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{$invoices->amount_collection}}" readonly>
                        </div>
                    </div>
                    <!-- End Second Row-->

                    <!--Third Row-->
                    <div class="row">
                        <!--First Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">مبلغ العمولة</label>
                            <input type="text" class="form-control form-control-lg" id="amount_Commission" name="amount_Commission" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{$invoices->amount_Commission}}" required readonly>
                        </div>
                        <!--Second Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">الخصم</label>
                            <input type="text" class="form-control form-control-lg" name="discount" id="discount" title="يرجي ادخال مبلغ الخصم" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{$invoices->discount}}" required readonly>
                        </div>
                        <!--Third Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">نسبة ضريبة القيمة المضافة</label>
                            <select name="rate_vat" id="rate_vat" class="form-control">
                                <!--placeholder-->
                                <option value="{{$invoices->rate_vat}}"> {{$invoices->rate_vat}} </option>
                            </select>
                        </div>
                    </div>
                    <!-- End Third Row-->

                    <!--Forth Row-->
                    <div class="row">
                        <!--First Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">قيمة ضريبة القيمة المضافة</label>
                            <input type="text" class="form-control" id="value_vat" name="value_vat" value="{{$invoices->value_vat}}" readonly>
                        </div>
                        <!--Second Col-->
                        <div class="col">
                            <label for="inputName" class="control-label">الاجمالي شامل الضريبة</label>
                            <input type="text" class="form-control" id="total" name="total" value="{{$invoices->total}}" readonly>
                        </div>
                    </div>
                    <!-- End Forth Row-->

                    <!--Fifth Row-->
                    <div class="row">
                        <!--First Col-->
                        <div class="col">
                            <label for="exampleTextarea">ملاحظات</label>
                            <textarea class="form-control" id="exampleTextarea" name="note" rows="3" readonly> {{$invoices->note}} </textarea>
                        </div>
                    </div>
                    <!-- End Fifth Row-->

                    <br/>

                    <!--Six Row-->
                    <div class="row">
                        <div class="col">
                            <label for="exampleTextarea">حالة الدفع</label>
                            <select class="form-control" id="status" name="status" required>
                                <option selected="true" disabled="disabled">-- حدد حالة الدفع --</option>
                                <option value="مدفوعة">مدفوعة</option>
                                <option value="مدفوعة جزئيا">مدفوعة جزئيا</option>
                            </select>
                        </div>

                        <div class="col">
                            <label>تاريخ الدفع</label>
                            <input class="form-control fc-datepicker" name="payment_date" placeholder="YYYY-MM-DD" type="text" required>
                        </div>
                    </div>
                    <!-- End Six Row-->

                    <br/>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">تحديث حالة الدفع</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/div-->

</div>
<!-- /row -->
<!-- row closed -->

</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection

@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
    <!-- For Date Picker -->
    <script>
        var date = $('.fc-datepicker').datepicker({dateFormat: 'yy-mm-dd'}).val();
    </script>
@endsection
