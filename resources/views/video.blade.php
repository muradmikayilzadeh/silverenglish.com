@extends('layouts.index')
	<link rel="stylesheet" href="{{url('assets/css/video.css')}}">
@section('content')

<section id="videoPanel" class="col-md-12 col-sm-12 col-xs-12">
	
	<div class="container">
		
		
		<h1 class="text-center"><b>{{$video->name}}</b></h1>

		<br>

		<div class="embed-responsive embed-responsive-4by3">
			
			<video class="embed-responsive-item" controls autoplay>
			
				<source class="embed-responsive-item" src="../../{{$video->src}}">

			</video>

		</div>


	</div>

</section>

@stop
