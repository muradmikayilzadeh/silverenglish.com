@extends('layouts.index')
<link rel="stylesheet" href="{{url('assets/css/posts.css')}}">
@section('content')
<section id="banner" class="col-md-12 col-sm-12 col-xs-12 text-center">
	
	
	<div class="row">
		<div class="gray col-md-12 col-sm-12 col-xs-12"></div>
		<div class="container">
			
			<h2>MƏQALƏLƏR</h2>
			<div class="line"></div>
			
		</div>
	</div>
</section>

<section id="news" class="col-md-12 col-sm-12 col-xs-12">
	
	<div class="container">
		
		@php
		function zaman($vaxt){
		$aylar=['Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avqust','Sentyabr','Oktyabr','Dekabr'];
		$ay=explode('-',$vaxt);
		$saat=explode(' ', $ay[2]);
		return $saat[0].' '.$aylar[$ay[1]-1].' '.$ay[0].' '.$saat[1];
		}
		@endphp

		<br>
		<h2><b>Mövzu</b> <small>Komputer Programlasdirma</small></h2>
		
		@foreach($blogs as $blog)
		
		@if($blog->active!='0')

		<div class="col-md-4 col-sm-12 col-xs-12">
			
			<img src="../{{$blog->img}}" class="img img-resonsive img-thumbnail">
			<h3>
			<a href="{{url('blog',$blog->id)}}">{{substr($blog->title,0,25)}}@if(strlen($blog->title)>25)...@endif</a>
			</h3>
			<div class="downBox">
				<div class="time">
					<i class="fa fa-clock-o"></i>
					<span>{{zaman($blog->created_at)}}</span>
				</div>
			</div>

		</div>

		@endif

		@endforeach

	</div>
</section>
@stop