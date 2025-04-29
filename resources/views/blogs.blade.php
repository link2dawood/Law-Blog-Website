@extends('layouts.app')
@section('content')
<div class="banner-block">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 banner-box">
						<header class="banner-heading">
							<h1>Blogs</h1>
							<nav class="breadcrumbs">
								<ul class="list-inline">
									<li><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/blogs')}}">Blogs</a></li>
								</ul>
							</nav>
						</header>
					</div>
				</div>
			</div>
			<div class="bg-stretch">
				<img src="{{ asset('assets/images/img41.jpg')}}" alt="image description">
			</div>
		</div>




		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- news posts of the site -->
			<div class="container news-posts">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12" id="content">
                        @if(count($blogs) > 0)
                        @foreach($blogs as $val)
						<article class="post-blog">
							<div class="post-img">
								<a href="{{url('/blog-detail', $val->id)}}">
									<span data-picture data-alt="image description">
										<span data-src="{{url('/storage/app').'/'.$val->image}}" data-width="868" data-height="380"></span>
										<span data-src="{{url('/storage/app').'/'.$val->image}}" data-width="1736" data-height="760" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
											<span data-src="images/img42-large.jpg"></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="{{url('/storage/app').'/'.$val->image}}" width="70" height="70" alt="image description" ></noscript>
									</span>
                                    <span class="date-box">
                                        <span class="month">{{ \Carbon\Carbon::parse($val->created_at)->format('F') }}</span>
                                        {{ \Carbon\Carbon::parse($val->created_at)->format('d') }}
                                    </span>
								</a>
							</div>
							<ul class="post-nav list-inline">

								<li><a href="{{url('/blog-detail', $val->id)}}"><i class="fa fa-tag"></i> Law</a></li>

							</ul>
							<h2>{{$val->title}}</h2>
							<p>{{ \Illuminate\Support\Str::limit(strip_tags($val->description), 250) }}</p>

							<a href="{{url('/blog-detail', $val->id)}}" class="btn btn-default">Read More</a>
						</article>
                        @endforeach
                        @endif

					</div>
				</div>
			</div>
		</main>
		@endsection
