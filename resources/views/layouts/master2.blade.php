<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Invoices Program">
		<meta name="Author" content="Morasoft - Noran">
        <meta name="Keywords" content="invoices dashboard">

        <style>
            .mystyle, .main-body{
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                position: relative;
                /* direction: rtl; */
            }
        </style>

        @include('layouts.head')
    </head>

    {{-- <body class="main-body bg-primary-transparent"> --}}
    <body class="mystyle bg-primary-transparent">
        {{--
        <!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
        --}}
        @yield('content')
        @include('layouts.footer-scripts')
    </body>

</html>
