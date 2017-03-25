@extends('layouts.index')
<link rel="stylesheet" href="{{url('assets/css/course.css')}}">
@section('content')

<section id="path" class="col-md-12 col-sm-12 col-xs-12">
	
	<div class="container">
		<a href="{{url('/')}}">Ana Səhifə</a>
		<span>></span>
		<a href="{{url('/courses')}}">Kurslar</a>
		<span>></span>
		<a href="{{url('/course',$course->id)}}">{{$course->name}}</a>
	</div>
</section>
<section id="courseContent" class="col-md-12 col-xs-12 col-sm-12">
	
	<div class="container">
		
		<h2 class="heading">{{$course->name}}</h2>
		<div class="line"></div>
		
		<div class="userLine col-md-4 col-md-offset-4">
			
			<div class="col-md-4">
				<i class="fa fa-user"></i>
				<span>{{count($students)}}</span>
				<p>ŞAGİRD</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-star"></i>
				<span>2.7</span>
				<p>REVIEWS(3)</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-clock-o"></i>
				<span>4.0</span>
				<p>SAAT</p>
			</div>
		</div>
		
		<div class="about col-md-8">
			
			<img src="../{{$course->img}}" class="img img-responsive">
			<div class="courseLine">
				<ul>
					<li>
						<a href="">About</a>
					</li>
					<li>
						<a href="">Curriculum</a>
					</li>
					<li>
						<a href="">Instructor</a>
					</li>
					<li>
						<a href="">Reviews</a>
					</li>
				</ul>
			</div>
			<div class="textSection">
				
				<h2>KURS HAQQINDA</h2>
				<p>{{$course->description}}</p>
			</div>

		</div>
		<div class="col-md-4">
			
			<div class="col-md-12">
				
				<div class="sidebar col-md-12 col-xs-12 col-sm-12">
					
					<div class="take">
						<p>{{$course->price}} AZN</p>
						<button onclick="location.href='{{url('/start',$course->id)}}'">KURSA BAŞLA</button>
					</div>
					<div class="share">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-instagram"></i>
					</div>
					<div class="author">
						<img src="../{{$ins->avatar}}" alt="">
						<p class="name">{{$ins->name.' '.$ins->surname}}</p>
						<span>TƏLİMATÇI</span>
					</div>
					<div class="features">
						<h4 class="header">XÜSUSİYYƏTLƏR</h4>
						<div class="line"></div>
						<ul>
							<li>
								<i class="fa fa-file-text"></i>
								Leksiya
							</li>
							<li>
								<i class="fa fa-clock-o"></i>
								Zaman
							</li>
							<li>
								<i class="fa fa-level-up"></i>
								Səviyyə
							</li>
							<li>
								<i class="fa fa-globe"></i>
								Dil
							</li>
							<li>
								<i class="fa fa-shield"></i>
								Sertifikat
							</li>
						</ul>
						<ul>
							<li>
								7
							</li>
							<li>
								4.0
							</li>
							<li>
								{{$course->skill}}
							</li>
							<li>
								{{$course->language}}
							</li>
							<li>
								@if($course->certificate!='0')
									Var

									@else
									Yox
								@endif
							</li>
						</ul>
					</div>
					<div class="tags">
						
						<h4 class="header">MÖVZULAR</h4>
						<div class="line"></div>
						
						@foreach($tags as $tag)

						<p class="tag">{{$tag->name}}</p>

						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="{{url('assets/js/fmPost.js')}}"></script>
<script src="{{url('assets/js/mobileMenu.js')}}"></script>
@stop