@extends('layouts.app')
@section('content')
<!-- banner-block of the page -->
		<div class="banner-block">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 banner-box">
						<header class="banner-heading">
							<h1>{{$blog->title}}</h1>
							<!-- breadcrumbs of the page -->
							<nav class="breadcrumbs">
								<ul class="list-inline">
									<li><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/blogs')}}">Tutorials</a></li>
									<li><a href="#">Tutorial detail</a></li>
								</ul>
							</nav>
						</header>
					</div>
				</div>
			</div>
			<div class="bg-stretch">
				<img src="images/img41.jpg" alt="image description">
			</div>
		</div>
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- news-posts of the page -->
			<div class="container news-posts">
				<div class="row">
					<!-- content of the page -->
					<div class="col-sm-8 col-md-9 col-xs-12" id="content">
						<article class="post-blog">
							<div class="post-img">
								<a href="#">
									<span data-picture data-alt="image description">
										<span data-src="{{url('/storage/app').'/'.$blog->image}}" data-width="868" data-height="380"></span>
										<span data-src="{{url('/storage/app').'/'.$blog->image}}" data-width="1736" data-height="760" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
											<span data-src="images/img42-large.jpg"></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="{{url('/storage/app').'/'.$blog->image}}" width="70" height="70" alt="image description" ></noscript>
									</span>
									<span class="date-box">
								<span class="month">{{ \Carbon\Carbon::parse($blog->created_at)->format('F') }}</span>
								{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}
							</span>
								</a>
							</div>
							<ul class="post-nav list-inline">

								<li><a href="#"><i class="fa fa-comment"></i> Law</a></li>
							</ul>
							<h2>{{$blog->title}}</h2>
							<p>{!! $blog->description !!}</p>
						</article>
					</div>
					<!-- sidebar of the page -->
					<aside class="col-sm-4 col-md-3 col-xs-12" id="sidebar">
						<nav class="widget latest-widget">
							<h2>lATEST Posts</h2>
							<ul class="latest-post-nav list-unstyled">
								@foreach($latest as $val)
								<li>
									<a href="{{url('/blog-detail', $val->id)}}">{{$val->title}}</a>
									<time datetime="{{ $val->created_at}}">{{ \Carbon\Carbon::parse($val->created_at)->format('F') }} {{ \Carbon\Carbon::parse($val->created_at)->format('d') }}</time>
								</li>
								@endforeach
							</ul>
						</nav>
						<section class="widget tags-widget">
							<h2>Tags Widget</h2>
							<!-- tag-clouds of the page -->
							<div class="tag-clouds">
								<a href="#">Law</a>
								<a href="#">New</a>
								<a href="#">Blogs</a>
								<a href="#">Post</a>
								<a href="#">firms</a>
								<a href="#">legal </a>
								<a href="#">fraud</a>
							</div>
						</section>
					</aside>
				</div>
			</div>
		</main>
@endsection
