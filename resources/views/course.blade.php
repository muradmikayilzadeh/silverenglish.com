@extends('layouts.index')
<link rel="stylesheet" href="{{url('assets/css/course.css')}}">
@section('content')

<section id="path" class="col-md-12 col-sm-12 col-xs-12">
	
	<div class="container">
		<a href="index.html">Ana Səhifə</a>
		<span>></span>
		<a href="courses.html">Kurslar</a>
		<span>></span>
		<a href="">Kurs adi</a>
	</div>
</section>
<section id="courseContent" class="col-md-12 col-xs-12 col-sm-12">
	
	<div class="container">
		
		<h2 class="heading">Become a PHP Master and Make Money Fast</h2>
		<div class="line"></div>
		
		<div class="userLine col-md-4 col-md-offset-4">
			
			<div class="col-md-4">
				<i class="fa fa-user"></i>
				<span>4</span>
				<p>STUDENTS</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-star"></i>
				<span>2.7</span>
				<p>REVIEWS(3)</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-clock-o"></i>
				<span>4.0</span>
				<p>LEARNING HOURS</p>
			</div>
		</div>
		
		<div class="about col-md-8">
			
			<img src="assets/images/courses/1.jpg" alt="">
			<div class="courseLine">
				<ul>
					<li>
						<a href="">About</a>
					</li>
					<li>
						<a href="">Curriculum</a>
					</li>
					<li>
						<a href="">Instructor</a>
					</li>
					<li>
						<a href="">Reviews</a>
					</li>
				</ul>
			</div>
			<div class="textSection">
				
				<h2>ABOUT THIS COURSE</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean loem massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donectui li quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus utjusto. Nullam dictum.</p>
			</div>
			<div class="textSection">
				
				<h2>COURSE’S OBJECTIVES</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean loem massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donectui li quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus utjusto. Nullam dictum.Sed ut perspiciatis unde omnis iste natus error sit voluptatemNemo enim ipsam voluptatem quia voluptas sit.Neque porro quisquam est, qui dolorem ipsum dolor.At vero eos et accusamus et iusto odio dignissimos.Et harum quidem rerum facilis est et expedita distinctio.Lorem ipsum dolor sit amet, consectetuer .Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean loem massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donectui li quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus utjusto. Nullam dictum.</p>
			</div>
		</div>
		<div class="col-md-4">
			
			<div class="col-md-12">
				
				<div class="sidebar col-md-12 col-xs-12 col-sm-12">
					
					<div class="take">
						<p>Free</p>
						<button>TAKE THIS COURSE</button>
					</div>
					<div class="share">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-instagram"></i>
					</div>
					<div class="author">
						<img src="assets/images/avatars/1.png" alt="">
						<p class="name">Henry H. Garrick</p>
						<span>COURSE INSTRUCTOR</span>
					</div>
					<div class="features">
						<h4 class="header">XÜSUSİYYƏTLƏR</h4>
						<div class="line"></div>
						<ul>
							<li>
								<i class="fa fa-file-text"></i>
								Lectures
							</li>
							<li>
								<i class="fa fa-clock-o"></i>
								Duration
							</li>
							<li>
								<i class="fa fa-level-up"></i>
								Skill Level
							</li>
							<li>
								<i class="fa fa-globe"></i>
								Language
							</li>
							<li>
								<i class="fa fa-shield"></i>
								Certificate
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
								Beginner
							</li>
							<li>
								English
							</li>
							<li>
								No
							</li>
						</ul>
					</div>
					<div class="tags">
						
						<h4 class="header">ETIKETLƏR</h4>
						<div class="line"></div>
						<a href="" class="tag">BRAINSTORM</a>
						<a href="" class="tag">DORO</a>
						<a href="" class="tag">EDUCATION</a>
						<a href="" class="tag">IOS</a>
						<a href="" class="tag">IPSUM</a>
						<a href="" class="tag">LOCAL</a>
						<a href="" class="tag">LOREM</a>
						<a href="" class="tag">SDK</a>
						<a href="" class="tag">WORDPRESS</a>
						<a href="" class="tag">WORKING</a>
						<a href="" class="tag">XCODE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="{{url('assets/js/fmPost.js')}}"></script>
<script src="{{url('assets/js/mobileMenu.js')}}"></script>
@stop