<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <link href="{{url('adminassets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{url('adminassets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{url('adminassets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('adminassets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{url('/adminpanel')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Ana səhifə</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/users')}}">
                        <i class="pe-7s-note2"></i>
                        <p>İstifadəçilər</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/blogs')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Məqalalər</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/courses')}}">
                        <i class="pe-7s-science"></i>
                        <p>Kurslar</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/payments')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Ödənişlər</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">İstifadəçi</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">E-poçt ünvanı</label>
                                                <input type="email" class="form-control" value="{{$user->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ad</label>
                                                <input type="text" class="form-control" placeholder="Company" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Soyad</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="{{$user->surname}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Haqqında</label>
                                                <textarea rows="5" class="form-control">{{$user->desc}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{url('/adminpanel')}}" class="btn btn-success">Ana Səhifə</a>

                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="../../{{$user->avatar}}" alt="..."/>

                                      <h4 class="title">{{$user->name.' '.$user->surname}}<br />
                                         <small>{{$user->email}}</small>
                                      </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="{{url('/')}}">Silverenglish.com</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

</html>