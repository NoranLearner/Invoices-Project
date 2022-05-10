@extends('layouts.master2')

@section('title')
    إنشاء حساب جديد
@stop

@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">

    <div class="row no-gutter">

        <!-- The content half -->

        <div class="col-md-6 col-lg-6 col-xl-7 bg-white">

            <div class="login d-flex align-items-center py-2">

                <div class="container p-0">

                    <div class="row">

            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">

                <div class="card-sigin">

                    <div class="main-signup-header">

                        <h2 class="mb-4">مرحبا بك
                            <img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="ht-40" alt="logo">
                        </h2>

                        <h5 class="font-weight-semibold mb-4">إنشاء حساب جديد</h5>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('الاسم') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('البريد الالكترونى') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('كلمة المرور') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('تأكيد كلمة المرور') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-main-primary btn-block">
                                {{ __('إنشاء حساب جديد') }}
                            </button>

                        </form>

                    </div>

                </div>

            </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End -->

        <!-- The image half -->

        <div class="col-md-6 col-lg-6 col-xl-5 d-none d-md-flex bg-primary-transparent">
            <div class="row wd-100p mx-auto text-center">
                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                    {{-- <img src="{{URL::asset('assets/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo"> --}}
                    <img src="{{URL::asset('assets/img/media/login_1.jpg')}}" class="my-auto mx-auto ht-xl-80p wd-md-100p wd-xl-80p" alt="logo">
                </div>
            </div>
        </div>

        <!-- End -->

    </div>

</div>

@endsection

@section('js')
@endsection
