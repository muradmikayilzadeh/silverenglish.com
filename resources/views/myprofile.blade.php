@extends('layouts.index')
		
		<link rel="stylesheet" href="{{url('assets/css/myprofile.css')}}">
@section('content')
		

		<section id="myprofile" class="col-md-12 col-sm-12 col-xs-12">
			
			<div class="container">
				
				<div>
					
					<div class="avatar text-center">
						
						<img src="{{$userData->avatar}}">
						<h2>{{$userData->name.' '.$userData->surname}}</h2>

					</div>

					<div class="settings panel panel-default col-md-4 col-sm-6 col-xs-12">
						
						<h2>Tənzimləmələr</h2>
						
						@if ($message = Session::get('success'))
		                 	<b style="color:red">{{ $message }}</b>
		           		@endif

		           		@if ($message = Session::get('newPassword'))
		                 	<b style="color:red">{{ $message }}</b>
		           		@endif

						<form action="{{url('myprofile/save')}}" method="post" enctype="multipart/form-data">
							
							{{csrf_field()}}
							<div class="input-group">
								
								<div class="input-group-addon">Ad</div>
								<input type="text" class="form-control" name="name" value="{{$userData->name}}">

							</div>

							<br>	

							<div class="input-group">
								
								<div class="input-group-addon">Soyad</div>
								<input type="text" class="form-control" name="surname" value="{{$userData->surname}}">

							</div>

							<br>	

							<div class="input-group">
								
								<div class="input-group-addon">Şəkil</div>
								<input type="file" class="form-control" name="avatar" value="{{$userData->avatar}}">

							</div>

							<br>

							<input type="submit" value="Yenilə" class="btn btn-success">
							<div class="btn btn-danger">Şifrəni yenilə</div>
							
							
						</form>
						
						<script>
							$('.btn-danger').click(function(event) {
								$('.newPassword').removeClass('hidden')
							});
						</script>
						
						<form action="{{url('myprofile/changepassword')}}" method="post" class="hidden newPassword">
							
							{{csrf_field()}}
							<div class="input-group">
								
								<div class="input-group-addon">Yeni Şifrəniz</div>
								<input type="password" class="form-control" name="password">

							</div>

							<br>

							<div class="input-group">
								
								<div class="input-group-addon">Şifrəni Təsdiqlə</div>
								<input type="password" class="form-control" name="confirm">

							</div>

							<br>
							<input type="submit" class="btn btn-default" value="Yenilə">

						</form>

					</div>
					

					<div class="blogs panel panel-default col-md-7 col-sm-6 col-xs-12 col-md-offset-1">
						
						<h2>Ən Son Məqalələriniz</h2>
						
						<ul class="nav nav-pills nav-stacked">
						
						@php $i=1 @endphp

						@foreach($blogs as $blog)

							@if($i<=5 && $blog->active!='0')

							<li class="active">
								<a href="{{url('blog',$blog->id)}}">
									{{substr($blog->title,0,100)}}
								</a>
							</li>
							
							@php $i+=1 @endphp

							@endif

							

						@endforeach

						</ul>

					</div>	

					<div class="writeBlog panel panel-default col-md-12 col-sm-12 col-xs-12">
						
						<h2>Məqalə Dərc Edin</h2>
						
						@if ($message = Session::get('newBlog'))
		                 	<b style="color:red">{{ $message }}</b>
		           		@endif

						<form action="{{url('blog/save')}}" method="post" enctype="multipart/form-data">
							
							{{csrf_field()}}

							<div class="input-group">
								
								<div class="input-group-addon">
									Başlıq
								</div>
								<input type="text" name="title" class="form-control">

							</div>
							
							<br>

							<div class="input-group">
								
								<div class="input-group-addon">
									Məzmun
								</div>
								<textarea name="content" rows="10" class="form-control"></textarea>

							</div>
							
							<br>

							<div class="input-group">
								
								<div class="input-group-addon">
									Mövzu
								</div>

								<select name="tag" class="form-control">

								@foreach($tags as $tag)
									<option value="{{$tag->id}}">{{$tag->name}}</option>
								@endforeach
								
								</select>

							</div>
									
							<div class="extra">
								
								<label for="photo">
									<i class="fa fa-photo"></i>
								</label>
								<input type="file" id="photo" name="photo" class="hidden">


							</div>
					
							<input type="submit" class="btn btn-success" value="Dərc et">
 
						</form>

					</div>


					<div id="blogs" class="panel panel-default col-md-12 col-sm-12 col-xs-12">
						
						<h2><div class="container">Bütün məqalələriniz</div></h2>

						<br>

						@php
							function zaman($vaxt){

								$aylar=['Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avqust','Sentyabr','Oktyabr','Dekabr'];

								$ay=explode('-',$vaxt);
								$saat=explode(' ', $ay[2]);

								return $saat[0].' '.$aylar[$ay[1]-1].' '.$ay[0].' '.$saat[1];

							}
						@endphp
						
						@foreach($blogs as $blog)
							@if($blog->active!='0')
							<div class="col-md-4 col-sm-6 col-xs-12">
							
								<div class="thumbnail">

									<img src="../{{$blog->img}}" class="img img-responsive">	

									<div class="caption">
										
										<h3><b>{{$blog->title}}</b> <small>{{zaman($tblog->created_at)}}</small></h3>

										<p>{{substr($blog->content,0,300)}}</p>
										
										<a href="{{url('blog',$blog->id)}}" class="btn btn-default">
											<i class="fa fa-eye"></i>	
										</a>

										<script src='assets/js/1.js'></script>

										<a href="{{url('blog/delete',$blog->id)}}" class="btn btn-danger">
											<i class="fa fa-trash"></i>	
										</a>

									</div>

								</div>

							</div>
							@endif

						@endforeach

					</div>

				</div>

			</div>

		</section>

@stop