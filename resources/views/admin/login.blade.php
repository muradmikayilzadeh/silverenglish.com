<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel Giriş</title>

	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/adminlogin.css')}}">

</head>
<body>
	
	<div class="container-fluid">
		
		<div class="row">
			
			<a href="{{url('/')}}" id="home" class="panel col-md-12 col-sm-12 col-xs-12">Ana səhifəyə qayıt...</a>

			<div id="loginForm" class="col-md-4 col-sm-12 col-xs-12 col-md-offset-4 col-xs-offset-0 col-sm-offset-0 panel panel-default">
				
				<div class="row">
					
					<div class="panel-heading text-center">
					
						<img src="{{url('assets/images/menu/logo.png')}}" class="img img-responsive">

					</div>


					<div class="panel-body">
						
						<form action="{{url('admin/checklogin')}}" method="post">	

							{{csrf_field()}}
							
							<div class="input-group">
								
								<div class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</div>

								<input type="text" class="form-control" name="email">

							</div>
							
							<br>

							<div class="input-group">
								
								<div class="input-group-addon">
									<i class="fa fa-key"></i>
								</div>

								<input type="password" class="form-control" name="password">

							</div>

							<br>

							<input type="submit" value="Daxil ol" class="btn btn-success btn-block">

						</form>

					</div>

				</div>

			</div>		

		</div>

	</div>

</body>
</html>