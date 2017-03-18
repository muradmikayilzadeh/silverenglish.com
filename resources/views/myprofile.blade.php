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

					<div class="settings panel panel-info col-md-4 col-sm-6 col-xs-12">
						
						<h2>Tənzimləmələr</h2>

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
	

							{{-- <div class="input-group">
								
								<div class="input-group-addon">Şifrəniz</div>
								<input type="password" class="form-control" name="password">

							</div> --}}

							<br>	

							<div class="input-group">
								
								<div class="input-group-addon">Şəkil</div>
								<input type="file" class="form-control" name="avatar" value="{{$userData->avatar}}">

							</div>

							<br>

							<input type="submit" value="Yenilə" class="btn btn-success">

						</form>

					</div>
					

					<div class="blogs panel panel-danger col-md-7 col-sm-6 col-xs-12 col-md-offset-1">
						
						<h2>Ən Son Məqalələriniz</h2>
						
						<ul class="nav nav-pills nav-stacked">

							<li class="active">
								<a href="">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit...
								</a>
							</li>

							<li>
								<a href="">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit...
								</a>
							</li>

							<li>
								<a href="">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit...
								</a>
							</li>

							<li>
								<a href="">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit...
								</a>
							</li>

							<li>
								<a href="">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit...
								</a>
							</li>

							<li>
								<a href="">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit...
								</a>
							</li>

						</ul>

					</div>	

					<div class="writeBlog panel panel-success col-md-12 col-sm-12 col-xs-12">
						
						<h2>Məqalə Dərc Edin</h2>

						<form action="">
							
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
								<select name="" class="form-control">
								
									<option name="" id="">Bir</option>
									<option name="" id="">iki</option>
									<option name="" id="">uc</option>

								</select>

							</div>
								
							<div class="extra">
								
								<label for="photo">
									<i class="fa fa-photo"></i>
								</label>
								<input type="file" id="photo" class="hidden">


							</div>

							<div class="imgs col-md-12 col-sm-12 col-md-12">
								
								<div class="row">
									
									{{-- <div class="img">
									
										<img src="assets/images/avatars/1.png" class="img img-thumbnail img img-responsive">

									</div>

									<div class="img">
										
										<img src="assets/images/avatars/1.png" class="img img-thumbnail img img-responsive">

									</div>

									<div class="img">
										
										<img src="assets/images/avatars/1.png" class="img img-thumbnail img img-responsive">

									</div>

									<div class="img">
										
										<img src="assets/images/avatars/1.png" class="img img-thumbnail img img-responsive">

									</div> --}}
									
								</div>

							</div>
					
							<input type="submit" class="btn btn-success" value="Dərc et">
 
						</form>

					</div>

				</div>

			</div>

		</section>

@stop