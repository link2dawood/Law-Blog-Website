@extends('layouts.app')
@section('content')
<style type="text/css">
	.truncate-ckeditor {
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
		max-height: 6em; /* Adjust if line height is different */
		line-height: 2em; /* Make sure line-height is set */
	}


</style>
<div class="main-gallery beans-gallery">
	<div class="beans-mask">
		<div class="beans-slideset">
			<div class="beans-slide win-height">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 slide-content  win-min-height">
							<header class="slide-heading2">
								<h1>An unjust law is itself a species of violence. Arrest for its breach is more so.</h1>
							</header>
						</div>
					</div>
				</div>
				<div class="bg-stretch">
					<img src="{{ asset('assets/images/img80.jpg')}}" alt="image description">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contain main informative part of the site -->
<main id="main">
	<!-- container-block of the page -->
	<section class="container container-block" id="services">
		<header class="row main-heading">
			<div class="col-xs-12">
				<h2>We Provide you with!</h2>
			</div>
		</header>
		<!-- services-holder of the page -->
		<div class="row services-holder">
			<div class="col-sm-3 col-xs-12 services-col">
				<div class="img-box"></div>
				<h2><a href="services.html">Litigation</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>
				<a href="services.html" class="btn btn-default">Read More +</a>
			</div>
			<div class="col-sm-3 col-xs-12 services-col approch">
				<div class="img-box"></div>
				<h2><a href="services.html">Approach</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>
				<a href="services.html" class="btn btn-default">Read More +</a>
			</div>
			<div class="col-sm-3 col-xs-12 services-col rules">
				<div class="img-box"></div>
				<h2><a href="services.html">Basic Rules</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>
				<a href="services.html" class="btn btn-default">Read More +</a>
			</div>
			<div class="col-sm-3 col-xs-12 services-col client">
				<div class="img-box"></div>
				<h2><a href="services.html">Private Client</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>
				<a href="services.html" class="btn btn-default">Read More +</a>
			</div>
		</div>
	</section>
	<!-- container block practice of the page -->
	<section class="container container-block practice" id="practise">
		<header class="row main-heading">
			<div class="col-xs-12">
				<h2>Practice Areas</h2>
			</div>
		</header>
		<!-- practice-block of the page -->
		<div class="row practice-block">
			<div class="col-sm-4 col-xs-12 practice-col">
				<a href="practice-area.html">
					<span data-picture data-alt="image description">
						<span data-src="{{ asset('assets/images/img04-large.jpg')}}" data-width="368" data-height="279"></span>
						<span data-src="{{ asset('assets/images/img04-large2x.jpg')}}" data-width="736" data-height="558" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span>
						<noscript><img src="{{ asset('assets/images/img04-large.jpg')}}" width="368" height="279" alt="image description" ></noscript>
					</span>
					<h3>Trade mark Cases</h3>
					<div class="over">
						<div class="box">
							<div class="block">
								<div class="frame">
									<strong class="title">Trade mark Cases</strong>
									<p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
									<span class="btn-read">[+]</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-4 col-xs-12 practice-col">
				<a href="practice-area.html">
					<span data-picture data-alt="image description">
						<span data-src="{{ asset('assets/images/img05-large.jpg')}}" data-width="368" data-height="279"></span>
						<span data-src="{{ asset('assets/images/img05-large2x.jpg')}}" data-width="736" data-height="558" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span>
						<noscript><img src="{{ asset('assets/images/img05-large.jpg')}}" width="368" height="279" alt="image description" ></noscript>
					</span>
					<h3>Crime Cases</h3>
					<div class="over">
						<div class="box">
							<div class="block">
								<div class="frame">
									<strong class="title">Crime Cases</strong>
									<p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
									<span class="btn-read">[+]</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-4 col-xs-12 practice-col">
				<a href="practice-area.html">
					<span data-picture data-alt="image description">
						<span data-src="{{ asset('assets/images/img06-large.jpg')}}" data-width="368" data-height="279"></span>
						<span data-src="{{ asset('assets/images/img06-large2x.jpg')}}" data-width="736" data-height="558" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span>
						<noscript><img src="{{ asset('assets/images/img06-large.jpg')}}" width="368" height="279" alt="image description" ></noscript>
					</span>
					<h3>Accidental Cases</h3>
					<div class="over">
						<div class="box">
							<div class="block">
								<div class="frame">
									<strong class="title">Accidental Cases</strong>
									<p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
									<span class="btn-read">[+]</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- container block team of the page -->
	<section class="container container-block team" id="team">
		<div class="row">
			<div class="col-xs-12">
				<header class="main-heading">
					<h2>Meet our Team</h2>
				</header>
			</div>
		</div>
		<!-- our-team of the Page -->
		<div class="row our-team">
			<article class="col-sm-3 col-xs-12 team-col">
				<div class="img-box">
					<a class="over" href="team-details.html">
						<span data-picture data-alt="image description">
							<span data-src="{{ asset('assets/images/img63-large.jpg')}}" data-width="268" data-height="218"></span>
							<span data-src="{{ asset('assets/images/img63-large2x.jpg')}}" data-width="268" data-height="218" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> 
							<noscript><img src="{{ asset('assets/images/img63-large.jpg')}}" width="268" height="218" alt="image description" ></noscript>
						</span>
						<span class="btn btn-default"><i class="fa fa-search"></i> View profile</span>
					</a>
				</div>
				<ul class="divider-nav list-inline">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<div class="team-info">
					<div class="team-title">
						<h2><a href="team-details.html">Tim Bradley</a></h2>
						<span class="designation">Lawyer</span>
					</div>
					<p>Duis quis odio molestie, eleifend lacus feugiat, convallis lorem. Cum sociis natoque penatibus et.</p>
					<ul class="post-socials list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</article>
			<article class="col-sm-3 col-xs-12 team-col">
				<div class="img-box">
					<a class="over" href="team-details.html">
						<span data-picture data-alt="image description">
							<span data-src="{{ asset('assets/images/img16-large.jpg')}}" data-width="268" data-height="218"></span>
							<span data-src="{{ asset('assets/images/img16-large2x.jpg')}}" data-width="268" data-height="218" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span>
							<noscript><img src="{{ asset('assets/images/img16-large.jpg')}}" width="268" height="218" alt="image description" ></noscript>
						</span>
						<span class="btn btn-default"><i class="fa fa-search"></i> View profile</span>
					</a>
				</div>
				<ul class="divider-nav list-inline">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<div class="team-info">
					<div class="team-title">
						<h2><a href="team-details.html">Samanta Mitchel</a></h2>
						<span class="designation">Lawyer</span>
					</div>
					<p>Duis quis odio molestie, eleifend lacus feugiat, convallis lorem. Cum sociis natoque penatibus et.</p>
					<ul class="post-socials list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</article>
			<article class="col-sm-3 col-xs-12 team-col">
				<div class="img-box">
					<a class="over" href="team-details.html">
						<span data-picture data-alt="image description">
							<span data-src="{{ asset('assets/images/img64-large.jpg')}}" data-width="268" data-height="218"></span>
							<span data-src="{{ asset('assets/images/img64-large2x.jpg')}}" data-width="268" data-height="218" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span>
							<noscript><img src="{{ asset('assets/images/img64-large.jpg')}}" width="268" height="218" alt="image description" ></noscript>
						</span>
						<span class="btn btn-default"><i class="fa fa-search"></i> View profile</span>
					</a>
				</div>
				<ul class="divider-nav list-inline">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<div class="team-info">
					<div class="team-title">
						<h2><a href="team-details.html">Berry Wesley</a></h2>
						<span class="designation">Lawyer</span>
					</div>
					<p>Duis quis odio molestie, eleifend lacus feugiat, convallis lorem. Cum sociis natoque penatibus et.</p>
					<ul class="post-socials list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</article>
			<article class="col-sm-3 col-xs-12 team-col">
				<div class="img-box">
					<a class="over" href="team-details.html">
						<span data-picture data-alt="image description">
							<span data-src="{{ asset('assets/images/img65-large.jpg')}}" data-width="268" data-height="218"></span>
							<span data-src="{{ asset('assets/images/img65-large2x.jpg')}}" data-width="268" data-height="218" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> 
							<noscript><img src="{{ asset('assets/images/img65-large.jpg')}}" width="268" height="218" alt="image description" ></noscript>
						</span>
						<span class="btn btn-default"><i class="fa fa-search"></i> View profile</span>
					</a>
				</div>
				<ul class="divider-nav list-inline">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<div class="team-info">
					<div class="team-title">
						<h2><a href="team-details.html">Hulk Goover</a></h2>
						<span class="designation">Lawyer</span>
					</div>
					<p>Duis quis odio molestie, eleifend lacus feugiat, convallis lorem. Cum sociis natoque penatibus et.</p>
					<ul class="post-socials list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</article>
		</div>
	</section>
	<!-- news-block of the page -->
	<section class="container container-block news-block" id="blog">
		<div class="row">
			<div class="col-sm-9 col-xs-12 latest-news">
				<header class="main-heading news">
					<h2>Latest blog</h2>
				</header>
				@foreach($blogs as $val)
				<div class="news-post">
					<div class="alignleft">
						<a href="{{url('/blog-detail', $val->id)}}">
							<span data-picture data-alt="image description">
								<span data-src="{{url('/storage/app').'/'.$val->image}}" data-width="270" data-height="210"></span>
								<span data-src="{{url('/storage/app').'/'.$val->image}}" data-width="540" data-height="420" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span>
								<noscript><img src="{{url('/storage/app').'/'.$val->image}}" width="270" height="210" alt="image description" ></noscript>
							</span>
							<span class="date-box">
								<span class="month">{{ \Carbon\Carbon::parse($val->created_at)->format('F') }}</span>
								{{ \Carbon\Carbon::parse($val->created_at)->format('d') }}
							</span>
						</a>
					</div>
					<div class="txt-box">
						<h3><a href="{{url('/blog-detail', $val->id)}}">{{$val->title}}</a></h3>
						<ul class="post-nav list-inline">
							<li><a href="#"><i class="fa fa-user"></i> Adam</a></li>
							<li><a href="#"><i class="fa fa-tag"></i> New</a></li>
						</ul>
						<div class="truncate-ckeditor">{!! $val->description !!}</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="main-heading news">
					<h2>Success Journey</h2>
				</div>
				<div class="success-col">
					<div class="video-block">
						<a href="#video-popup1" class="lightbox">
							<img src="{{ asset('assets/images/video-img.png" alt="iamge description">
							<span class="btn-play"><i class="fa fa-play-circle"></i></span>
						</a>
					</div>
					<h3>Justie Prevails</h3>
					<span class="title">Posted by: Danial Bryan</span>
					<p>Quisque ut nunc non mauris gravida dictum. In tellus ipsum, feugiat non nibh eget.</p>
				</div>
			</div>
		</div>
	</section>

	<div id="contact">
		<div class="site-map" id="map">
		</div>
		<section class="container">
			<div class="row">
				<div class="col-xs-12 team-contact add">
					<h2>Contact US</h2>
					<!-- comments-form of the page -->
					<form class="comments-form add" action="#">
						<div class="form-row">
							<div class="form-group">
								<label for="name1"><i class="fa fa-user"></i></label>
								<input type="text" placeholder="Name" id="name1" class="form-control">
							</div>
							<div class="form-group">
								<label for="emailaddress"><i class="fa fa-envelope"></i></label>
								<input type="text" placeholder="Email" id="emailaddress" class="form-control">
							</div>
							<div class="form-group">
								<label for="web"><i class="fa fa-dribbble"></i></label>
								<input type="text" placeholder="Subject" id="web" class="form-control">
							</div>
						</div>
						<div class="form-row textarea">
							<div class="form-group">
								<label for="textarea"><i class="fa fa-paper-plane"></i></label>
								<textarea placeholder="Comment..." id="textarea" rows="10" cols="30" class="form-control"></textarea>
							</div>
						</div>
						<button class="btn btn-default" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</section>
	</div>
</main>
<!-- footer-holder of the Page -->
<div class="container footer-holder">
	<aside class="row aside-block">
		<section class="col-sm-6 col-md-3 col-xs-12 column">
			<h2>Newsletters</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat .</p>
			<a href="#" class="read-more">Read More »</a>
			<h3>Email Newsletters:</h3>
			<form action="#" class="email-form">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Enter Address">
					<button type="submit" class="btn btn-default"><i class="fa fa-envelope"></i></button>
				</div>
			</form>
			<a class="privacy" href="#">Privacy Policy</a>
		</section>

		<section class="col-sm-6 col-md-3 col-xs-12 column new-col">
			<h2>Get In Touch</h2>
			<div class="news-articles address">
				<div class="news-column">
					<span class="txt">Address:</span>
					<address class="address-box">795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</address>
				</div>
				<div class="news-column">
					<span class="txt">Phone:</span>
					<address class="address-box"><a class="tel" href="tel:440875369208">+440 875369208</a> - Office <br><a class="tel" href="tel:440353363114">+440 353363114</a> - Fax <br><a href="mailo:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#115;&#105;&#116;&#101;&#110;&#097;&#109;&#101;&#046;&#099;&#111;&#109;">&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#115;&#105;&#116;&#101;&#110;&#097;&#109;&#101;&#046;&#099;&#111;&#109;</a></address>
				</div>
				<div class="news-column">
					<span class="txt">Follow:</span>
					<ul class="footer-socials list-inline">
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="#"><i class="fa fa-flickr"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
						<li><a href="#"><i class="fa fa-rss-square"></i></a></li>
						<li><a href="#"><i class="fa fa-git-square"></i></a></li>
						<li><a href="#"><i class="fa fa-hacker-news"></i></a></li>
					</ul>
				</div>
			</div>
		</section>
	</aside>
</div>
@endsection