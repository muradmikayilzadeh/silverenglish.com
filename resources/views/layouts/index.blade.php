<!DOCTYPE html>
<html lang="az">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="silver,english,silverenlish,silver english,rufatdargahli,muradmikayilzade,english,ingilis dili,kurs">
	<meta name="author" content="Silver English">
	<meta name="description" content="Silver English ingilis dili kursu">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

	<title>silverenglish.com</title>

	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/awesome/css/font-awesome.css')}}">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<script src="{{url('assets/vendor/js/jquery-3.1.0.js')}}"></script>
	
</head>
<body>

		<div class="container-fluid">
			

				<div class="row">

				
						<section id="bar" class="col-md-12 col-sm-12 col-xs-12">
							

								<div class="container">
									
									@if(!isset($_SESSION['userTrue']))
										<i class="fa fa-sign-in"></i>
										<a href="{{url('/login')}}">Daxil ol</a>

										<i class="fa fa-user-plus"></i>
										<a href="{{url('/register')}}">Qeydiyyatdan keç</a>
										
										@else
										<i class="fa fa-user"></i>
										<a href="{{url('/myprofile')}}">Profilim</a>

										<i class="fa fa-sign-out"></i>
										<a href="{{url('/logout')}}">Çıxış</a>

									@endif

								</div>


						</section>		

						
						<section id="menu" class="col-md-12 col-xs-12 col-sm-12">
								

									<div class="container">
										

											<div class="logo col-md-2 col-sm-2 col-xs-2">

												<div class="row">
													
													<img src="{{url('assets/images/menu/logo.png')}}" alt="">
													
												</div>

											</div>


											<ul class="computer">

												<li>
													<a href="{{url('/')}}">
														<i class="fa fa-home"></i>
														Ana səhifə
													</a>
												</li>


												<li>
													<a href="{{url('/#price')}}">Dərslər</a>
												</li>


												<li>
													<a href="{{url('/#team')}}">
														Komandamız
													</a>
												</li>


												<li>
													<a href="{{url('/courses')}}">
														Kurslar	
													</a>
												</li>


												<li>
													<a href="{{url('/#news')}}">
														Məqalələr
													</a>
												</li>


												<li>
													<a href="{{url('/#whatsayaboutus')}}">
														Fikirlər
													</a>
												</li>

											</ul>

											<div class="col-md-10 col-sm-10 col-xs-10">

												<i class="fa fa-bars pull-right"></i>
								
											</div>


											<ul class="mobile col-md-12 col-sm-12 col-xs-12">

												<li>
													<a href="{{url('/')}}">
														<i class="fa fa-home"></i>
														Ana səhifə
													</a>
												</li>


												<li>
													<a href="{{url('/#price')}}">Dərslər</a>
												</li>


												<li>
													<a href="{{url('/#team')}}">
														Komandamız
													</a>
												</li>


												<li>
													<a href="{{url('/courses')}}">
														Kurslar	
													</a>
												</li>


												<li>
													<a href="{{url('/#news')}}">
														Məqalələr
													</a>
												</li>


												<li>
													<a href="{{url('/#whatsayaboutus')}}">
														Fikirlər
													</a>
												</li>
												
											</ul>
									</div>

						</section>

						@yield('content')

						<section id="footer" class="col-md-12 col-xs-12 col-sm-12">
							
							<div class="row">

								<div class="col-md-12">
											

										<div class="container">
											Copyright © 2017 silverenglish.com
										</div>


								</div>

							</div>

						</section>

				</div>
				

		</div>

{{-- Some extras --}}
<video width="640px" height="360px" class="mainVideo hidden" controls autoplay>

	<source src="" type="video/mp4">

</video>

<script src="{{url('assets/js/video.js')}}"></script>
</body>

{{-- 	<script src="assets/js/fmCourses.js"></script>
	<script src="assets/js/mobileMenu.js"></script>
	<script src="assets/js/fmPost.js')}}"></script>
	<script src="assets/js/mobileMenu.js"></script>
	<script src="assets/js/fixedMenu.js"></script>
	<script src="assets/js/mobileMenu.js"></script>
	<script src="assets/js/scrollSlow.js"></script>
	<script src="assets/js/whatSay.js"></script>
	<script src="assets/js/slider.js"></script> --}}
</html>


