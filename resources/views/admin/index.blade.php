<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

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
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
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
                    
                    <div class="panel col-md-12 col-sm-12 col-xs-12">
                        
                        <h2>Ən son istifadəçilər</h2>

                        <table class="table table-responsive">
                            
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
                                
                                @php $i=1 @endphp

                                    @foreach($users as $user)

                                    @if($i<=5 && $user->active!='0')

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

                                                <a href="" style="display: inline-block;" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <form action="" style="display: inline-block;">
                                                    
                                                    {{csrf_field()}}
                                                    
                                                    <label for="delete" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"></i>
                                                    </label>

                                                    <input type="submit" class="hidden" id="delete">

                                                </form>
                                               
                                           </td>

                                       </tr>
                                    
                                    @php $i+=1 @endphp

                                    @endif
                                
                                @endforeach

                            </tbody>

                        </table>

                    </div>


                    <div class="panel panel-defult col-md-12 col-sm-12 col-xs-12">
                        
                        <h2>Ən son əlavə edilmiş məqalələr</h2>

                        <ul class="list-group">
                            
                            @php $a=1 @endphp

                            @foreach($blogs as $blog)
                                
                                @if($a<=5 && $user->active!='0')

                                <a href="">

                                     <li class="list-group-item">
                                         
                                        {{$blog->title}}
                                        <small class="pull-right">{{$blog->created_at}}</small>

                                     </li>

                                </a>

                                @php $a+=1 @endphp

                                @endif

                            @endforeach

                        </ul>

                    </div>

                 </div>

            </div>

        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
