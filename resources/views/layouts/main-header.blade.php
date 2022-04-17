<!-- main-header opened -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">

                    <!-- ############################################################################################## -->

                    <div class="main-header-left ">

                        {{-- http://127.0.0.1:8000/navigation --}}
                        {{-- https://icons.getbootstrap.com/ --}}

                        <nav class="nav main-nav flex-column flex-md-row">

                            <a class="nav-link" href="{{ url('/' . $page='home') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                </svg>
                            </a>

                            @can('الاقسام')
                            <a class="nav-link" href="{{ url('/' . $page='sections') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                    <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z"/>
                                </svg>
                            </a>
                            @endcan

                            @can('المنتجات')
                            <a class="nav-link" href="{{ url('/' . $page='products') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </a>
                            @endcan

                            @can('قائمة الفواتير')
                            <a class="nav-link" href="{{ url('/' . $page='invoices') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-receipt side-menu__icon" viewBox="0 0 16 16">
                                    <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                                    <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </a>
                            @endcan

                            @can('قائمة المستخدمين')
                            <a class="nav-link" href="{{ url('/' . ($page = 'users')) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                </svg>
                            </a>
                            @endcan

                        </nav>

                    </div>

                    <!-- ############################################################################################## -->

                    <div class="main-header-right">

						<div class="nav nav-item">

                            <!-- ------------------------------------------------------------------------------- -->

                            <!-- Zoom Page -->

                            <div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
                                        <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                                    </svg>
                                </a>
							</div>

                            <!-- ------------------------------------------------------------------------------- -->

                            <!-- For Add Invoice Notification -->

                            @can('الاشعارات')
                            {{-- @if (Auth::user()->roles_name == ["owner"]) --}}
                            <!-- Start Add Invoice Notification -->
							<div class="dropdown nav-item main-header-notification">
								<a class="new nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <span class="pulse"></span>
                                </a>
								<div class="dropdown-menu" style="min-width: 345px;">
									<div class="menu-header-content bg-primary text-right">
										<div class="d-flex">
											<h6 class="dropdown-title mb-1 text-white font-weight-semibold">الاشعارات</h6>
											<span class="badge badge-pill badge-warning mr-auto my-auto float-left">
                                                <a href="{{ url('MarkAsRead_all') }}">تعين قراءة الكل</a>
                                            </span>
										</div>
										<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-14">
                                            عدد الاشعارات غير المقروءة :
                                            <span id="notifications_count">
                                                {{ auth()->user()->unreadNotifications->count() }}
                                            </span>
                                        </p>
									</div>
                                    <div id="unreadNotifications">
                                        @foreach (auth()->user()->unreadNotifications as $notification)

                                            <div class="main-notification-list Notification-scroll">
                                                <a class="d-flex p-2 border-bottom" href="{{ url('InvoicesDetails') }}/{{ $notification->data['id'] }}">
                                                    <div class="notifyimg bg-primary">
                                                        {{-- https://icons8.com/line-awesome --}}
                                                        <i class="lar la-bell text-white"></i>
                                                    </div>
                                                    <div class="mr-2">
                                                        <h5 class="notification-label mb-2">
                                                            {{ $notification->data['title'] }}
                                                            {{ $notification->data['user'] }}
                                                        </h5>
                                                        <div class="notification-subtext">
                                                            {{ $notification->created_at }}
                                                        </div>
                                                    </div>
                                                    <div class="mr-auto" >
                                                        <i class="las la-angle-left text-left text-muted"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        @endforeach
                                    </div>
								</div>
							</div>
                            <!-- End Add Invoice Notification-->
                            {{-- @endif --}}
                            @endcan

                            <!-- ------------------------------------------------------------------------------- -->

                            <!-- User Dropdown Menu-->

                            <div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href="">
                                    <img src="{{URL::asset('assets/img/faces/6.jpg')}}">
                                </a>
								<div class="dropdown-menu" style="min-width: 270px;">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user">
                                                <img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}" class="">
                                            </div>
											<div class="mr-3 my-auto">
												<h6>{{ Auth::user() -> name }}</h6>
                                                <span>{{ Auth::user() -> email }}</span>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href="{{ url('/' . $page='profile') }}">
                                        <i class="bx bx-user-circle"></i> الصفحة الشخصية
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/' . $page='editprofile') }}">
                                        <i class="bx bx-edit"></i> تعديل الصفحة الشخصية
                                    </a>
									<a class="dropdown-item" href="/users/{{Auth::user()->id}}/edit">
                                        <i class="bx bx-slider-alt"></i> إعدادات الحساب
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="bx bx-log-out"></i> تسجيل خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</div>
							</div>

                            <!-- ------------------------------------------------------------------------------- -->

                        </div>

                    </div>

                    <!-- ############################################################################################## -->

				</div>
			</div>
<!-- /main-header -->
