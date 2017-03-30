@extends('layouts.index')
	<link rel="stylesheet" href="{{url('assets/css/courseset.css')}}">
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
		
		<form action="{{url('/course/name/update',$course->id)}}" method="post" class="header text-center">
			
			{{csrf_field()}}
			<br class="hidden"><br class="hidden"><br class="hidden">
			<div class="input-group">
				
				<input type="text" class="form-control hidden" value="{{$course->name}}" name="name">

				<div class="input-group-btn ">

					<input type="submit" class="hidden btn btn-default" value="Yenilə">
					
				</div>

			</div>

		</form>

		<script>
					
			$('.heading').click(function(event) {

				$(this).hide()

				$('.header input, .header br').removeClass('hidden')

			});

		</script>

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
			
			<label for="pic">
				<img src="../{{$course->img}}" class="img img-responsive">
			</label>
			
			<form action="{{url('/course/pic/update',$course->id)}}" class="picture" method="post" enctype="multipart/form-data">
				
				{{csrf_field()}}
				<input type="file" class="hidden" id="pic" name="img">

			</form>

			<script>
		
				$('.picture #pic').change(function(event) {
					
					$('.picture').submit()

				});

			</script>

			<div class="courseLine">
				<ul>

					<li>

						<a id="about" style="cursor: pointer">Haqqında</a>

					</li>

					<li>

						<a id="curriculum" style="cursor: pointer">Kurikulum</a>

					</li>

				</ul>
			</div>

			<div id="textSection" class="textSection">
				
				<h2>KURS HAQQINDA</h2>
				<p class="text">{{$course->description}}</p>


				<form action="{{url('/course/desc/update',$course->id)}}" method="post" class="desc">
					
					{{csrf_field()}}

					<textarea name="description" class="hidden form-control" cols="30" rows="10">{{$course->description}}</textarea>
					
					<br>

					<input type="submit" class="hidden btn btn-default" value="Yenilə">

				</form>

				<script>
					
					$('.text').click(function(event) {

						$(this).hide()

						$('.desc input, .desc textarea').removeClass('hidden')

					});

				</script>
				
			</div>

			<div id="videos">
				
				<br><br>
				<form action="{{url('/course/addvideo',$course->id)}}" class="addVideo" method="post" enctype="multipart/form-data">
					
					<label for="film" style="font-size: 25px">
						<i class="fa fa-film"></i>
						Video əlavə edin
					</label>

					<input type="file" name="video" id="film" class="hidden">

				</form>

				<script>
					
					$('.addVideo input').change(function(event) {
						
						$('.addVideo').submit()

					});

				</script>

			</div>

			<script src="{{url('assets/js/about.js')}}"></script>

		</div>
		<div class="col-md-4">
			
			<div class="col-md-12">
				
				<div class="sidebar col-md-12 col-xs-12 col-sm-12">
					
					<div class="take">
						
						<form action="{{url('/course/price/update',$course->id)}}" class="price" method="post">
							
							{{csrf_field()}}
							<input type="text" class="form-control hidden" name="price">

						</form>

						<p class="priceText">{{$course->price}} AZN</p>
						<button class="start" onclick="location.href='{{url('/start',$course->id)}}'">KURSA BAŞLA</button>
						
						

						<script>
							
							$('.priceText').click(function(event) {

								$(this).hide()
								$('.start').hide()
								$('.price input').removeClass('hidden')

							});

						</script>

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

						<p
						 class="tag">{{$tag->name}}</p>

						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop