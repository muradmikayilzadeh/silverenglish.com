@extends('layouts.index')
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
@section('content')
<section id="slider" class="col-md-12 col-xs-12 col-sm-12">
	
	<div class="row">
		
		<div class="col-md-8 col-sm-8 col-xs-8">
			<div class="col-md-6 col-md-offset-3">
				<h2>GƏLƏCƏYİNİ QURMAĞA, İNDİCƏ BAŞLA!</h2>
				<p>Gecikmə, bizə qoşul və qloballaşan dünyada öz yerini tut.</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-4">
			<div class="circleSet pull-right">
				<div class="circle" id="0"></div>
				<div class="circle" id="1"></div>
				<div class="circle" id="2"></div>
			</div>
		</div>
	</div>
</section>

<section id="community" class="col-md-12 col-xs-12 col-sm-12">
	
	<div class="container">
		
		<div class="col-md-9">
			
			<div class="row">
				
				<h2 class="header">Xüsusiyyətlərimiz</h2>
				<div class="line"></div>
				<p class="text">
					Biz online dərslər verən bir dil kursuyuq. Məqsədimiz ...
				</p>
				<div class="col-md-4 col-sm-4 col-xs-4">
					
					<div class="row">
						<img src="assets/images/community/il.png" alt="">
						<p>ONLINE DƏRSLƏR</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					
					<div class="row">
						<img src="assets/images/community/sr.png" alt="">
						<p>MƏQALƏLƏR</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					
					<div class="row">
						<img src="assets/images/community/qf.png" alt="">
						<p>SERTİFİKAT</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			
			<div class="row">
				
				<img src="assets/images/community/image.png" class="hidden-sm hidden-xs">
				
			</div>
		</div>
	</div>
</section>
<section id="price" class="col-md-12 col-xs-12 col-sm-12">
	
	
	<div class="container">
		<h2 class="header">DƏRSLƏR</h2>
		<div class="line"></div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			
			<div class="box">
				
				<h2 class="header">CONVERSATION</h2>
				
				<p>8 dərs</p>
				<p>60 dəqiqə</p>
				<p>ONLINE dərslər</p>
				<p>80 AZN</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			
			<div class="box">
				
				<h2 class="header">IELTS</h2>
				
				<p>8 dərs</p>
				<p>60 dəqiqə</p>
				<p>ONLINE dərslər</p>
				<p>120 AZN</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			
			<div class="box">
				
				<h2 class="header">IELTS PREMIUM</h2>
				
				<p>8 dərs</p>
				<p>60 dəqiqə</p>
				<p>ONLINE dərslər</p>
				<p>160 AZN</p>
			</div>
			
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			
			<div class="box">
				
				<h2 class="header">HAZIRLIQ</h2>
				
				<p>8 dərs</p>
				<p>60 dəqiqə</p>
				<p>ONLINE dərslər</p>
				<p>100 AZN</p>
			</div>
			
		</div>
		
	</div>
</section>
<section id="team" class="col-md-12 col-xs-12 col-sm-12">
	
	<div class="container">
		
		<h2 class="header">KOMANDAMIZ</h2>
		<div class="line"></div>
		<h2 class="caption">GƏNC KOMANDAMIZLA TANIŞ OLUN</h2>
		
		<div class="col-md-3 text-center">
			
			<div class="img">
				
				<img src="assets/images/team/rufat.jpg" alt="">
			</div>
			<h3 class="header">RÜFƏT DƏRGAHLI</h3>
			<span>QURUCU</span>
			<p>
				Silver English-in qurucusu və ideya müəllifidir. Estoniyanın Tartu Universitetində təhsil alır. Hal-hazırda komandamızda müəllim və sosial media meneceri olaraq faliyyət göstərir.
			</p>
			<a href="https://www.facebook.com/rufat.dargahli" class="fa fa-facebook" target="_blank"></a>
			<a href="https://twitter.com/d_rufat" class="fa fa-twitter" target="_blank"></a>
			<a href="https://www.youtube.com/channel/UCa4vli8e8IocRMhU6c5YM1w" class="fa fa-youtube" target="_blank"></a>
			
		</div>
		<div class="col-md-3">
			
			<div class="img">
				
				<img src="assets/images/team/kamran.jpg" alt="">
			</div>
			<h3 class="header">KAMRAN MƏHƏRRƏMLİ</h3>
			<span>MÜƏLLİM</span>
			<p>
				Kanadanın Toronto Universitetində təhsil almaqdadır. Komandamızda müəllim olaraq çalışmaqdadır. Kamranın IELTS qiymətləndirməsi 7.5-dir.
			</p>
			<a href="https://www.facebook.com/kamranmaharramli" class="fa fa-facebook" target="_blank"></a>
		</div>
		<div class="col-md-3">
			
			<div class="img">
				
				<img src="assets/images/team/arif.png" alt="">
			</div>
			<h3 class="header">ARİF FEYZİYEV</h3>
			<span>MENECER</span>
			<p>
				Beynəlxalq İtisadiyyat Məktəbində tələbədir.Bir çox tədbirlərdə fəal iştirak edir. Komandamızda maliyyə meneceri vəzifəsindədir.
			</p>
			<a href="https://www.facebook.com/arif.feyziyev.39" class="fa fa-facebook" target="_blank"></a>
		</div>
		<div class="col-md-3">
			
			<div class="img">
				
				<img src="assets/images/team/murad.jpg" alt="">
			</div>
			<h3 class="header">MURAD MİKAYILZADƏ</h3>
			<span>DEVELOPER</span>
			<p>
				Bizim komandamızda web developer vəzifəsində çalışır. 252 saylı məktəb, liseyin 9-cu sinfində təhsil alır.
			</p>
			<a href="https://www.facebook.com/murad.mikayilzada" class="fa fa-facebook" target="_blank"></a>
			<a href="https://github.com/muradmikayilzadeh" class="fa fa-github" target="_blank"></a>
			<a href="https://www.youtube.com/channel/UCNYhL9s_Uo7JTMue-oXQlYw" class="fa fa-youtube" target="_blank"></a>

		</div>
		
		<div class="socialAccount col-md-12">
			
			<div class="row">
				
				<div class="col-md-3">
					<a href="https://www.facebook.com/rufat.dargahli" class="fa fa-facebook" target="_blank"></a>
					<a href="https://twitter.com/d_rufat" class="fa fa-twitter" target="_blank"></a>
					<a href="https://www.youtube.com/channel/UCa4vli8e8IocRMhU6c5YM1w" class="fa fa-youtube" target="_blank"></a>
				</div>
				<div class="col-md-3">
					
					<a href="https://www.facebook.com/kamranmaharramli" class="fa fa-facebook" target="_blank"></a>
				</div>
				<div class="col-md-3">
					
					<a href="https://www.facebook.com/arif.feyziyev.39" class="fa fa-facebook" target="_blank"></a>
				</div>
				<div class="col-md-3">
					
					<a href="https://www.facebook.com/murad.mikayilzada" class="fa fa-facebook" target="_blank"></a>
					<a href="https://github.com/muradmikayilzadeh" class="fa fa-github" target="_blank"></a>
					<a href="https://www.youtube.com/channel/UCNYhL9s_Uo7JTMue-oXQlYw" class="fa fa-youtube" target="_blank"></a>

				</div>
			</div>
		</div>
		
	</div>
</section>
<section id="news" class="col-md-12 col-xs-12 col-sm-12">
	
	
	<div class="container">
		<h2 class="header">SON MƏQALƏLƏR</h2>
		<div class="line"></div>
		
		@php
		function zaman($vaxt){
		$aylar=['Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avqust','Sentyabr','Oktyabr','Dekabr'];
		$ay=explode('-',$vaxt);
		$saat=explode(' ', $ay[2]);
		return $saat[0].' '.$aylar[$ay[1]-1].' '.$ay[0].' '.$saat[1];
		}
		@endphp
		@php $i=1 @endphp
		@foreach($blogs as $blog)
		@if($i<=3 && $blog->active!='0')
		
		<div class="col-md-4 col-sm-12 col-xs-12">
			
			<img src="{{$blog->img}}" class="img img-responsive img-thumbnail">
			<h3>
			<a href="{{url('blog',$blog->id)}}">{{$blog->title}}</a>
			</h3>
			<div class="downBox">
				<div class="time">
					<i class="fa fa-clock-o"></i>
					<span>{{zaman($blog->created_at)}}<span>
					</div>
				</div>
			</div>
			
			
			@php $i+=1 @endphp
			@endif
			@endforeach
		</div>
		
		<br><br><br>
		<div class="col-md-12 text-center">
			<button onclick="location.href='{{url('/bloghome')}}'" class="viewAll">Bütün məqalələr</button>
		</div>
	</section>
	<section id="whatsayaboutus" class="col-md-12 col-sm-12 col-xs-12 text-center">
		
		<div class="container">
			<h2 class="header">BİZİM HAQQIMIZDA NƏ DEYİRLƏR?</h2>
			<div class="line"></div>
			
			<br><br>
			<img src="assets/images/aboutUs/quote.png" alt="">
			<p class="text">
				"I know, how well educated and talented these guys are. Best of luck to both of you on your efforts! :)"
			</p>
			
			<img src="assets/images/aboutUs/arshad.jpg" class="profile">
			
			<div class="circleSet">
				<div class="circle" id="0"></div>
				<div class="circle" id="1"></div>
				<div class="circle" id="2"></div>
				<div class="circle" id="3"></div>
			</div>
		</div>
	</section>
<section id="extra" class="col-md-12 col-xs-12 col-sm-12"></section>
<script src="{{url('assets/js/fixedMenu.js')}}"></script>
<script src="{{url('assets/js/mobileMenu.js')}}"></script>
<script src="{{url('assets/js/scrollSlow.js')}}"></script>
<script src="{{url('assets/js/whatSay.js')}}"></script>
<script src="{{url('assets/js/slider.js')}}"></script>
@stop