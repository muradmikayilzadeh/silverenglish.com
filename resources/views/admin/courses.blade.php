<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Kurslar</title>

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
                                <h4 class="title">Təsdiqlənməmiş kurslar</h4>
                                <p class="category">Yenidən köhnəyə</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                           <td>ID</td>
                                           <td>Ad</td>
                                           <td>Açıqlama</td>
                                           <td>Təlimçi</td>
                                           <td>Bacarıq</td>
                                           <td>Dil</td>
                                           <td>Foto</td>
                                           <td>Qiymət</td>
                                           <td>Sertifikat</td>
                                           <td>Əməllər</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                        @php
                                            use App\User;
                                        @endphp
                                        @foreach($courses as $course)
                                            @if($course->active!='1')
                                            <tr>
                                                <td>{{$course->id}}</td>       
                                                <td>{{$course->name}}</td>
                                                <td>{{substr($course->description,0,100)}}</td>
                                                <td>
                                                    @php
                                                    $user=User::find($course->instructor);
                                                    @endphp
                                                    {{$user->name.' '.$user->surname}}
                                                </td>
                                                <td>{{$course->skill}}</td>
                                                <td>{{$course->language}}</td>
                                                <td>
                                                    <img src="../../{{$course->img}}" class="img img-thumbnail" style="max-height: 50px">
                                                </td>
                                                <td>{{$course->price}} AZN</td>
                                                <td>
                                                    @if($course->certificate=='0')
                                                        -
                                                        @else
                                                        +
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-xs btn-default">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Təsdiqlənmiş kurslar</h4>
                                <p class="category">Yenidən köhnəyə</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                           <td>ID</td>
                                           <td>Ad</td>
                                           <td>Açıqlama</td>
                                           <td>Təlimçi</td>
                                           <td>Bacarıq</td>
                                           <td>Dil</td>
                                           <td>Foto</td>
                                           <td>Qiymət</td>
                                           <td>Sertifikat</td>
                                           <td>Əməllər</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                            @if($course->active!='0')
                                            <tr>
                                                <td>{{$course->id}}</td>       
                                                <td>{{$course->name}}</td>
                                                <td>{{substr($course->description,0,100)}}</td>
                                                <td>
                                                    @php
                                                    $user=User::find($course->instructor);
                                                    @endphp
                                                    {{$user->name.' '.$user->surname}}
                                                </td>
                                                <td>{{$course->skill}}</td>
                                                <td>{{$course->language}}</td>
                                                <td>
                                                    <img src="../../{{$course->img}}" class="img img-thumbnail" style="max-height: 50px">
                                                </td>
                                                <td>{{$course->price}} AZN</td>
                                                <td>
                                                    @if($course->certificate=='0')
                                                        -
                                                        @else
                                                        +
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-xs btn-default">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endif
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