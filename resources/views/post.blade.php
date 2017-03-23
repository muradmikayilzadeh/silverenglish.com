@extends('layouts.index')
<link rel="stylesheet" href="{{url('assets/css/post.css')}}">
 <script src='https://cdn.rawgit.com/OpenShare/openshare/master/dist/openshare.js'></script>

@php
use App\User;
use App\Comments;
@endphp
@php
function zaman($vaxt){
$aylar=['Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avqust','Sentyabr','Oktyabr','Dekabr'];
$ay=explode('-',$vaxt);
$saat=explode(' ', $ay[2]);
return $saat[0].' '.$aylar[$ay[1]-1].' '.$ay[0].' '.$saat[1];
}
@endphp
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
					<a href="{{url('/tag',$tag->id)}}">{{$tag->name}}</a>
					
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
							<a href="{{url('/tag',$tag->id)}}">{{$tag->name}}</a>
							
							<a class="fa fa-google-plus pull-right" 
								data-open-share="facebook"
								data-open-share-link="{{url('/blog',$blog->id)}}"

								></a>
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
								<p class="about">{{$user->desc}}</p>
								<br><br>
							</div>
						</div>

					</div>
					
					<div class="leaveComment col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<h4 class="header">ŞƏRH YAZ</h4>
							<div class="line"></div>
							<form action="{{url('newcomment')}}" method="post">
								{{csrf_field()}}
								<input type="text" name="content">
								<input type="hidden" value="{{$blog->id}}" name="blog">
							</form>
						</div>
					</div>
					<div class="comments col-md-12 col-sm-12 col-xs-12">
						
						<div class="row">
							<h4 class="header">

								@if(count($comments)!=0)

								{{count($comments)}} ŞƏRH

								@else

								ŞƏRH YOXDUR

								@endif

							</h4>
							<div class="line" style="margin-bottom: 40px"></div>
							
							@foreach($comments as $comment)
							@if($comment->replied_id==0)
							@php
							$user=User::find($comment->user_id);
							@endphp
							<div class="comment col-md-12 col-sm-12 col-xs-12">
								<div class="row">

									<div class="col-md-2">
										<img src="../{{$user->avatar}}" alt="">
									</div>

									<div class="col-md-10">
										<a style="cursor: pointer" class="cavabla pull-right">| Cavabla</a>
										
										<script>
											$('.cavabla').click(function(event) {
												
												$('.form').removeClass('hidden')
											});
										</script>
										
										@if($user->id=$_SESSION['userTrue'])
										<a href="{{url('/deletecomment',$comment->id)}}" class="pull-right">Sil |</a>
										@endif

										<h4 class="name">{{$user->name.' '.$user->surname}}</h4>

										<i class="fa fa-clock-o"></i>

										<span>
											{{zaman($comment->created_at)}}
										</span>

										<div class="line"></div>

										<p class="about">{{$comment->content}}</p>
										
										<form class="form hidden" action="{{url('newreply')}}" method="post">
											{{csrf_field()}}
											<input type="text" name="content" style="width:100%">
											<input type="hidden" value="{{$blog->id}}" name="blog">
											<input type="hidden" name="replied" value="{{$comment->id}}">
										</form>
									</div>
									@php
									$replieds=Comments::where('replied_id',$comment->id)->get();
									@endphp
									@foreach($replieds as $replied)
									
									@php
									$repliedUser=User::find($comment->user_id);
									@endphp

									<div class="nested comment col-md-12 col-sm-12 col-xs-12">
										<div class="col-md-2">
											<img src="../{{$repliedUser->avatar}}" alt="">
										</div>
										<div class="col-md-10">
											
											@if($repliedUser->id==$_SESSION['userTrue'])

												<a class="pull-right" href="{{url('deletecomment',$replied->id)}}">Sil</a>

											@endif

											<h4 class="name">
											{{$repliedUser->name.' '.$repliedUser->surname}}
											</h4>
											
											<i class="fa fa-clock-o"></i>

											<span>
												{{zaman($replied->created_at)}}
											</span>

											<div class="line"></div>

											<p class="about">
												{{$replied->content}}
											</p>

										</div>

									</div>
									@endforeach
								</div>
							</div>
							@endif
							@endforeach
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-md-4">
			
			<div class="sidebar col-md-12">
				
				<div class="search">
					<h4 class="header">AXTAR</h4>
					<div class="line"></div>
					<form class="search">
						<input type="text" name="search" placeholder="Açar sözlər...">
					</form>

					<ul class="result col-md-12">
						
						<div class="row">
							
						</div>

					</ul>

					<script>
						
						$('.search').keypress(function(event) {


							var keyword=$('.search input').val()

							if(keyword!=' ' || keyword!=''){

								$.ajax({
									url: '{{url('/search/')}}',
									type: 'GET',
									dataType:'text',
									data: {keyword: keyword},
								})
								.done(function(data) {
									
									$('.result .row').html(data)

								})
								.fail(function() {
									console.log("error");
								})
								.always(function() {
									console.log("complete");
								});

							}
							

						});

					</script>

				</div>
				<div class="latestPost">

					<h4 class="header">ƏN SON MƏQALƏLƏR</h4>

					<div class="line"></div>
					
					@php $i=1 @endphp

					@foreach($blogs as $blog)

					@if($i<=3 && $blog->active!='0')
					<div class="post">
						<img src="../{{$blog->img}}" alt="">
						<h4>{{substr($blog->title,0,31)}}</h4>
					</div>
					
					@php $i+=1 @endphp

					@endif
					
					@endforeach

				</div>
				<div class="tags">

					<h4 class="header">MÖVZULAR</h4>
					<div class="line"></div>

					@foreach($tags as $tag)
						
						<a href="{{url('/tag',$tag->id)}}" class="tag">{{$tag->name}}</a>

					@endforeach
					
				</div>
			</div>
		</div>
	</div>
</section>
<script src="{{url('assets/js/fmPost.js')}}"></script>
<script src="{{url('assets/js/mobileMenu.js')}}"></script>
@stop