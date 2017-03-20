<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="silver,english,silverenlish,silver english,rufatdargahli,muradmikayilzade,english,ingilis dili,kurs">
	<meta name="author" content="Silver English">
	<meta name="description" content="Silver English ingilis dili kursu">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

	<title>silverenglish.com</title>

	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/vendor/awesome/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/user.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

	<script src="assets/vendor/js/jquery-3.1.0.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		
		<div class="row">
			
			<video autoplay loop src="assets/browsing/MP4/Browsing.mp4"></video>

			<div class="bgRegister col-md-4 col-md-offset-4"></div>

			<div class="register col-md-4 col-md-offset-4">
				
					
				<img src="assets/images/menu/logo.png" alt="">

				<form action="{{url('register/save')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="text" placeholder="Adınız" class="form-control" name="name">

					<br>

					<input type="text" placeholder="Soyadınız" class="form-control" name="surname">

					<br>

					<textarea name="desc" class="form-control" maxlength="200" placeholder="Özünüzü 200 simvoldan çox olmayaraq ifadə edin"></textarea>

					<br>

					<input type="file" class="form-control" name="avatar">
					
					<br>
						
					<input type="email" placeholder="E-poçt ünvanınız" class="form-control" name="email">

					<br>

					<input type="password" placeholder="Şifrəniz" class="form-control" name="password">

					<input type="submit" class="button" value="Qeydiyyatdan keç">

				</form>


			</div>

		</div>

	</div>

</body>
</html>