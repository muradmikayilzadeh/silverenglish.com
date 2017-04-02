@extends('layouts.index')
<link rel="stylesheet" href="{{url('assets/css/courses.css')}}">
@section('content')
<section id="banner" class="col-md-12 col-sm-12 col-xs-12 text-center">
	
	
	<div class="row">
		<div class="gray col-md-12 col-sm-12 col-xs-12"></div>
		<div class="container">
			
			<h2>Kurslar</h2>
			<div class="line"></div>
			
		</div>
	</div>
</section>

<section id="courses" class="col-md-12 col-sm-12 col-xs-12">
	
	<div class="container">
		
		@php
		use App\User;
		@endphp

		@foreach($courses as $course)
		@if($course->active!='0')

			<div class="course col-md-3 col-sm-6 col-xs-12">
				<div class="body">
					<img src="../{{$course->img}}" class="img img-responsive">
					<div class="yazi">
						
						@php
							$user=User::find($course->instructor);
						@endphp

						<p class="name">{{$course->name}}</p>
						<img src="../{{$user->avatar}}" alt="">
						<p class="author">{{$user->name.' '.$user->surname}}</p>
						
					</div>
					<div class="price">
						<p class="value" onclick="location.href='{{url('/course',$course->id)}}'">{{$course->price}} AZN</p>
						
						<div class="user pull-right">
							<i class="fa fa-user"></i>
							<span>4</span>
							<i class="fa fa-comments-o"></i>
							<span>2</span>
						</div>
					</div>
				</div>
			</div>

		@endif
		@endforeach

	</div>
</section>
<script src="{{url('assets/js/fmCourses.js')}}"></script>
<script src="{{url('assets/js/mobileMenu.js')}}"></script>
@stop