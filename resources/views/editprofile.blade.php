@extends('layouts.master')

@section('title')
    تعديل الصفحة الشخصية
@stop

@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">تعديل الصفحة الشخصية</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
				<!-- row -->
				<div class="row row-sm">

                    <!-- ===================================================================================-->

                    <!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">

										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}">
                                            <a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>

										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{ Auth::user() -> name }}</h5>
											</div>
										</div>

										<h6>السيرة الذاتية</h6>

										<div class="main-profile-bio">
											السيرة الذاتية..
                                            <a href="">إلخ</a>
										</div>

                                        <!-- main-profile-bio -->

										<div class="row">
											<div class="col-md-4 col mb20">
												<h5>947</h5>
												<h6 class="text-small text-muted mb-0">متابعون</h6>
											</div>
											<div class="col-md-4 col mb20">
												<h5>583</h5>
												<h6 class="text-small text-muted mb-0">تغريدات</h6>
											</div>
											<div class="col-md-4 col mb20">
												<h5>48</h5>
												<h6 class="text-small text-muted mb-0">منشورات</h6>
											</div>
										</div>

										<hr class="mg-y-30">

										<label class="main-content-label tx-13 mg-b-20">مواقع التواصل الاجتماعى</label>
										
                                        <div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-github"></i>
												</div>
												<div class="media-body">
													<span>Github</span> 
                                                    <a href="https://github.com/">github.com</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>Twitter</span> 
                                                    <a href="https://twitter.com/">twitter.com</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>Linkedin</span> 
                                                    <a href="https://www.linkedin.com/">linkedin.com</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-md-link"></i>
												</div>
												<div class="media-body">
													<span>My Portfolio</span> 
                                                    <a href=""></a>
												</div>
											</div>
										</div>

										<hr class="mg-y-30">

										<h6>المهارات</h6>

										<div class="skill-bar mb-4 clearfix mt-3">
											<span>HTML5 / CSS3</span>
											<div class="progress mt-2">
												<div class="progress-bar bg-primary-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
											</div>
										</div>

										<!--skill bar-->

										<div class="skill-bar mb-4 clearfix">
											<span>Javascript</span>
											<div class="progress mt-2">
												<div class="progress-bar bg-danger-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 89%"></div>
											</div>
										</div>

										<!--skill bar-->

										<div class="skill-bar mb-4 clearfix">
											<span>Bootstrap</span>
											<div class="progress mt-2">
												<div class="progress-bar bg-success-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
											</div>
										</div>

										<!--skill bar-->

										<div class="skill-bar clearfix">
											<span>PHP</span>
											<div class="progress mt-2">
												<div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
											</div>
										</div>

										<!--skill bar-->

									</div>
                                    <!-- main-profile-overview -->
								</div>
							</div>
						</div>

                        <!-- ------------------------------------------------------------ -->

						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label tx-13 mg-b-25">
									تواصل معى
								</div>
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-icon bg-primary-transparent text-primary">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body mr-3">
											<span>رقم التليفون</span>
											<div>
												+245 354 654
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-success-transparent text-success">
											<i class="icon ion-logo-slack"></i>
										</div>
										<div class="media-body mr-3">
											<span>برنامج Slack</span>
											<div>
												@spruko.w
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-info-transparent text-info">
											<i class="icon ion-md-locate"></i>
										</div>
										<div class="media-body mr-3">
											<span>العنوان الحالى</span>
											<div>
												San Francisco, CA
											</div>
										</div>
									</div>
								</div><!-- main-profile-contact-list -->
							</div>
						</div>
					</div>
                    <!-- /Col -->

                    <!-- ===================================================================================-->

					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="mb-4 main-content-label">المعلومات الشخصية</div>
								<form class="form-horizontal">
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">اللغة</label>
											</div>
											<div class="col-md-9">
												<select class="form-control select2">
                                                    <option>Arabic</option>
													<option>Us English</option>
												</select>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">الاسم</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">اسم المستخدم</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="اسم المستخدم" value="{{ Auth::user() -> name }}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">الاسم الأول</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="الاسم الأول" value="الاسم الأول">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">اسم العائلة</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="اسم العائلة" value="اسم العائلة">
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">معلومات الاتصال</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">الايميل</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="الايميل" value="{{ Auth::user() -> email }}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">الموقع</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="الموقع" value="@web.w">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">رقم التليفون</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="رم التليفون" value="+245 354 654">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">العنوان</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="العنوان">العنوان</textarea>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">مواقع التواصل الاجتماعى</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Twitter</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="twitter" value="twitter.com">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Facebook</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="facebook" value="facebook.com">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Google+</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="google" value="google.com">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Linked in</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="linkedin" value="linkedin.com">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Github</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="github" value="github.com">
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">السيرة الذاتية</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">معلومات السيرة الذاتية</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="السيرة الذاتية">السيرة الذاتية</textarea>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">تفضيلات البريد الإلكتروني</div>
									<div class="form-group mb-0">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">مستخدم تم التحقق منه</label>
											</div>
											<div class="col-md-9">
												<div class="custom-controls-stacked">
													<label class="ckbox mg-b-10">
                                                        <input checked="" type="checkbox">
                                                        <span> Accept to receive post or page notification emails</span>
                                                    </label>
													<label class="ckbox">
                                                        <input checked="" type="checkbox">
                                                        <span> Accept to receive email sent to multiple recipients</span>
                                                    </label>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="card-footer text-left">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
							</div>
						</div>
					</div>
					<!-- /Col -->

                    <!-- ===================================================================================-->

				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection

@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection
