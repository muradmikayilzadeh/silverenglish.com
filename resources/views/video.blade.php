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


		<h2 class="text-center"><b>Digər leksiyalar</b></h2>
		
		<ul class="list-group">

		@foreach($videos as $video)
							
			<a href="{{url('/watchvideo'.'/'.$video->id,$course->id)}}">

				<li id="item" class="list-group-item col-md-12 col-sm-12 col-xs-12">

					<div class="col-md-3 col-sm-3 col-xs-12">
									
						<div class="row">
										
							<video class="embed-responsive-item">
											
								<source class="embed-responsive-item" src="../../{{$video->src}}">

							</video>

						</div>

					</div>
								
					<div class="col-md-9 col-sm-9 col-xs-9">
									
						<h3><b>{{$video->name}}</b></h3>

					</div>

				</li>

			</a>

		@endforeach

		</ul>


	</div>

</section>

@stop
