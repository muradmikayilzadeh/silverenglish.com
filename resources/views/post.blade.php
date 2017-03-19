@extends('layouts.index')
					<link rel="stylesheet" href="{{url('assets/css/post.css')}}">
@section('content')
					<section id="path" class="col-md-12 col-sm-12 col-xs-12">
						

							<div class="container">
								<a href="index.html">Ana Səhifə</a>
								<span>></span>
								<a href="index.html/#posts">Məqalələr</a>
								<span>></span>
								<a href="">{{$blog->title}}</a>
							</div>


					</section>

					<section id="content" class="col-md-12 col-xs-12 col-sm-12">
						
						<div class="container">
							
							<div class="col-md-8">
								
								<div class="row">
									
									<h2 class="header">{{$blog->title}}</h2>

									<div class="userLine">

										<i class="fa fa-user"></i>
										<span>{{$user->name.' '.$user->surname}}</span>
										
										<div class="distance hidden-md hidden-xs"></div>

										<i class="fa fa-folder-open"></i>
										<a href="">{{$tag->name}}</a>
											
										<div class="distance hidden-md hidden-xs"></div>

										<i class="fa fa-comments-o"></i>
										<span>{{count($comments)}} şərh</span>
										
									</div>

									<div class="post">
										
										<img src="../{{$blog->img}}" class="img img-responsive">
										
										<div class="content">

											<p class="text">{{$blog->content}}</p>

										</div>

										<div class="tags col-md-12 col-xs-12 col-sm-12">

											<div class="row">
												<h4>MÖVZU:</h4>

												<a href="">{{$tag->name}}</a>
												
												<i class="fa fa-google-plus pull-right"></i>
												<i class="fa fa-twitter pull-right"></i>
												<i class="fa fa-facebook pull-right"></i>
											</div>

										</div>

										<div class="author center-md">
											
											<div class="row">

												<div class="col-md-2">
													<img src="../{{$user->avatar}}" alt="">
												</div>

												<div class="col-md-10">

													<h4 class="name">{{$user->name.' '.$user->surname}}</h4>

													<div class="line"></div>

													<p class="about">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labo riosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure rep</p>

													<div class="social">
														<i class="fa fa-facebook"></i>
														<i class="fa fa-twitter"></i>
														<i class="fa fa-instagram"></i>
														<i class="fa fa-youtube"></i>
													</div>

												</div>

											</div>

										</div>


										<div class="also col-md-12 col-sm-12 col-xs-12">

											<div class="row">
												<h4 class="header">YOU MIGHT ALSO LIKE</h4>

												<div class="line"></div>

												<div class="col-md-4 col-sm-12 col-xs-12 center-md">
													<img src="assets/images/news/1.jpg" class="img img-resonsive">

													<h3>
														<a href="">How to get better at Learning</a>
													</h3>

													<div class="downBox">
														<div class="time">

															<i class="fa fa-clock-o"></i>
															<span>November 16,2016</span>

														</div>
													</div>
												</div>

												<div class="col-md-4 col-sm-12 col-xs-12 center-md">
													<img src="assets/images/news/1.jpg" class="img img-resonsive">

													<h3>
														<a href="">How to get better at Learning</a>
													</h3>

													<div class="downBox">
														<div class="time">

															<i class="fa fa-clock-o"></i>
															<span>November 16,2016</span>

														</div>
													</div>
												</div>

												<div class="col-md-4 col-sm-12 col-xs-12 center-md">
													<img src="assets/images/news/1.jpg" class="img img-resonsive">

													<h3>
														<a href="">How to get better at Learning</a>
													</h3>

													<div class="downBox">
														<div class="time">

															<i class="fa fa-clock-o"></i>
															<span>November 16,2016</span>

														</div>
													</div>
												</div>
											</div>

										</div>
										

										<div class="comments col-md-12 col-sm-12 col-xs-12">
											
											<div class="row">

												<h4 class="header"> 4 COMMENTS</h4>
												<div class="line"></div>

												<div class="comment col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="col-md-2">
															<img src="assets/images/avatars/1.png" alt="">
														</div>

														<div class="col-md-10">
															<a href="" class="pull-right">Reply</a>

															<h4 class="name">HENRY H. GARRICK</h4>

															<i class="fa fa-clock-o"></i>
															<span>  November 11, 2016 at 9:10 AM</span>
															<div class="line"></div>

															<p class="about">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labo riosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure rep</p>
														</div>
													</div>
												</div>

												<div class="comment col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="col-md-2">
															<img src="assets/images/avatars/1.png" alt="">
														</div>

														<div class="col-md-10">
															<a href="" class="pull-right">Reply</a>

															<h4 class="name">HENRY H. GARRICK</h4>
															<i class="fa fa-clock-o"></i>
															<span>  November 11, 2016 at 9:10 AM</span>
															<div class="line"></div>

															<p class="about">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labo riosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure rep</p>
														</div>
													</div>

													<div class="nested comment col-md-12 col-sm-12 col-xs-12">
															<div class="col-md-2">
																<img src="assets/images/avatars/1.png" alt="">
															</div>

															<div class="col-md-10">
																<h4 class="name">HENRY H. GARRICK</h4>
																<i class="fa fa-clock-o"></i>
																<span>  November 11, 2016 at 9:10 AM</span>
																<div class="line"></div>

																<p class="about">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labo riosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure rep</p>
															</div>
													</div>
												</div>

												<div class="comment col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="col-md-2">
															<img src="assets/images/avatars/1.png" alt="">
														</div>

														<div class="col-md-10">
															<a href="" class="pull-right">Reply</a>

															<h4 class="name">HENRY H. GARRICK</h4>
															<i class="fa fa-clock-o"></i>
															<span>  November 11, 2016 at 9:10 AM</span>
															<div class="line"></div>

															<p class="about">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labo riosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure rep</p>
														</div>
													</div>
												</div>

											</div>

										</div>


										<div class="leaveComment col-md-12 col-sm-12 col-xs-12">
											<div class="row">
												<h4 class="header">ŞƏRH YAZ</h4>
												<div class="line"></div>

												<form action="">
													<input type="text">
												</form>
											</div>
										</div>

									</div>
									
								</div>

							</div>

							<div class="col-md-4">
								
								<div class="sidebar col-md-12">
									
									<div class="search">

										<h4 class="header">SEARCH</h4>
										<div class="line"></div>
										<form action="">
											<input type="text" placeholder="Enter keyword...">
										</form>

									</div>

									<div class="category">

										<h4 class="header">CATEGORY</h4>
										<div class="line"></div>

										<ul>
											<li>BUSINESS</li>
											<li>DESIGN</li>
											<li>FILM</li>
											<li>MUSIC</li>
											<li>TRENDING</li>
										</ul>

									</div>

									<div class="latestPost">

										<h4 class="header">LATEST POST</h4>
										<div class="line"></div>

										<div class="post">
											<img src="assets/images/news/1.jpg" alt="">
											<h4>How to get better at Learning</h4>
										</div>

										<div class="post">
											<img src="assets/images/news/2.jpg" alt="">
											<h4>The future of Web Design</h4>
										</div>

										<div class="post">
											<img src="assets/images/news/3.jpg" alt="">
											<h4>Tips for being better Musician</h4>
										</div>

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

					</section>

<script src="{{url('assets/js/fmPost.js')}}"></script>
<script src="{{url('assets/js/mobileMenu.js')}}"></script>


@stop

