<!-- main-sidebar -->

		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

		<aside class="app-sidebar sidebar-scroll">

			<div class="main-sidebar-header active">
                <img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo">
                <h4 style="color:rgb(15, 143, 185);"> &nbsp; برنامج الفواتير</h4>

                {{-- Appear word and icon --}}
				{{-- <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}">
                    <img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo">
                </a> --}}
                {{-- mobile effect --}}
				{{-- <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}">
                    <img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo">
                </a> --}}
                {{-- Appear icon --}}
				{{-- <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}">
                    <img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo">
                </a> --}}
                {{-- mobile effect --}}
				{{-- <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}">
                    <img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo">
                </a> --}}
			</div>

			<div class="main-sidemenu">

				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
                            {{-- http://127.0.0.1:8000/avatar --}}
							{{-- <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/6.jpg')}}"> --}}
                            <img alt="user-img" class="avatar avatar-xl bg-info rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
                            <span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user() -> name }}</h4>
							<span class="mb-0 text-muted">{{ Auth::user() -> email }}</span>
						</div>
					</div>
				</div>

				<ul class="side-menu">

                    {{-- الرئيسية --}}

                    <li class="side-item side-item-category">برنامج الفواتير</li>

					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='home') }}">
                            {{-- https://design-system.w3.org/styles/svg-icons.html --}}
                            {{-- https://icons.getbootstrap.com/ --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill side-menu__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            <span class="side-menu__label">الرئيسية</span>
                        </a>
					</li>

                    {{-- الفواتير --}}

					<li class="side-item side-item-category">الفواتير</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt side-menu__icon" viewBox="0 0 16 16">
                                <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <span class="side-menu__label">الفواتير</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
						<ul class="slide-menu">
                            <li><a class="slide-item" href="{{ url('/' . $page='invoices') }}">قائمة الفواتير</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='invoices_paid') }}">الفواتير المدفوعة</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='invoices_unpaid') }}">الفواتير غير المدفوعة</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='invoices_partial') }}">الفواتير المدفوعه جزئيا</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='archive_invoice') }}">أرشفة الفواتير</a></li>
						</ul>
					</li>

                    {{-- التقارير --}}

					<li class="side-item side-item-category">التقارير</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading side-menu__icon" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
                            </svg>
                            <span class="side-menu__label">التقارير</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
						<ul class="slide-menu">
                            <li><a class="slide-item" href="{{ url('/' . $page='cards') }}">تقارير الفواتير</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='darggablecards') }}">تقارير العملاء</a></li>
						</ul>
					</li>

                    {{-- المستخدمين --}}

					<li class="side-item side-item-category">المستخدمين</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill side-menu__icon" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                            <span class="side-menu__label">المستخدمين</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
						<ul class="slide-menu">
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'users')) }}">قائمة المستخدمين</a></li>
							<li><a class="slide-item" href="{{ url('/' . ($page = 'roles')) }}">صلاحيات المستخدمين</a></li>
						</ul>
					</li>

                    {{-- الاعدادات --}}

					<li class="side-item side-item-category">الاعدادات</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill side-menu__icon" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                            </svg>
                            <span class="side-menu__label">الاعدادات</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
						<ul class="slide-menu">
                            <li><a class="slide-item" href="{{ url('/' . $page='sections') }}">الاقسام</a></li>
							<li><a class="slide-item" href="{{ url('/' . $page='products') }}">المنتجات</a></li>
						</ul>
					</li>

				</ul>

			</div>

		</aside>

<!-- main-sidebar -->
