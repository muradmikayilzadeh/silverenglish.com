<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>İstifadəçilər</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
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

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

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
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{url('admin/logout')}}">
                                <p>Çıxış et</p>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Bütün istifadəçilər</h4>
                                <p class="category">Köhnədən yeniyə</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Ad</td>
                                            <td>Soyad</td>
                                            <td>Açıqlama</td>
                                            <td>E-poçt</td>
                                            <td>Foto</td>
                                            <td>Aktivlik</td>
                                            <td>Əməllər</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                

                                        @foreach($users as $user)
                                            <tr>
                                                   
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->surname}}</td>
                                                <td>{{substr($user->desc,0,100)}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                       
                                                    <img src="../{{$user->avatar}}" class="img img-responsive img-thumbnail" style="max-height: 50px">

                                                </td>
                                                <td class="text-center">
                                                    @if($user->active!='0')
                                                        
                                                        +

                                                         @else
                                                        -

                                                    @endif
                                                </td>
                                                <td>

                                                    <a href="{{url('admin/usershow',$user->id)}}" style="display: inline-block;" class="btn btn-default btn-xs">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                        
                                                    @if($user->active=='1')

                                                    <form action="{{url('admin/status')}}" method="post" style="display: inline-block;">
                                                            
                                                        {{csrf_field()}}
                                                            
                                                        <input type="hidden" value="{{$user->id}}" name="id">
                                                        <label for="deactive" class="btn btn-danger btn-xs">
                                                            <i class="fa fa-trash"></i>
                                                            </label>

                                                        <input type="submit" class="hidden" id="deactive">

                                                    </form>

                                                    @endif

                                                    @if($user->active=='0')
                                                            
                                                    <form action="{{url('admin/status')}}" method="post" style="display: inline-block;">
                                                            
                                                        {{csrf_field()}}

                                                        <input type="hidden" value="{{$user->id}}" name="id">

                                                        <label for="active" class="btn btn-success btn-xs">
                                                            <i class="fa fa-check"></i>
                                                        </label>

                                                        <input type="submit" class="hidden" id="active">

                                                    </form>
                                                            
                                                    @endif
                                                       
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

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