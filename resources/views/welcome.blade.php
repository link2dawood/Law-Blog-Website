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
				<h2><a href="#">Litigation</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>

			</div>
			<div class="col-sm-3 col-xs-12 services-col approch">
				<div class="img-box"></div>
				<h2><a href="#">Approach</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>

			</div>
			<div class="col-sm-3 col-xs-12 services-col rules">
				<div class="img-box"></div>
				<h2><a href="#">Basic Rules</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>

			</div>
			<div class="col-sm-3 col-xs-12 services-col client">
				<div class="img-box"></div>
				<h2><a href="#">Private Client</a></h2>
				<p>Fusce comodo eros quis molestie blandit. Aliquam sollicitudin maximus metus ac ullamcorper.</p>

			</div>
		</div>
	</section>
	<!-- container block practice of the page -->


	<!-- news-block of the page -->
	<section class="container container-block news-block" id="blog" style="padding-top:0!important;">
		<div class="row">
			<div class="col-sm-9 col-xs-12 latest-news">
				<header class="main-heading news">
					<h2>Latest Tutorials</h2>
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
							<img src="{{ asset('assets/images/video-img.png')}}" alt="iamge description">
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

		<section class="container">
			<div class="row">
				<div class="col-xs-12 team-contact add">
					<h2>Contact US</h2>
					<!-- comments-form of the page -->
                    <form class="comments-form add" action="{{url('/contact/message/store')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name1"><i class="fa fa-user"></i></label>
                                <input type="text" placeholder="Name" name="name" id="name1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="emailaddress"><i class="fa fa-envelope"></i></label>
                                <input type="text" placeholder="Email" name="email" id="emailaddress" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="web"><i class="fa fa-dribbble"></i></label>
                                <input type="text" placeholder="Subject" id="web" name="subject" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row textarea">
                            <div class="form-group">
                                <label for="textarea"><i class="fa fa-paper-plane"></i></label>
                                <textarea placeholder="Comment..." id="textarea" rows="10" cols="30" class="form-control" required name="message"></textarea>
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
		<section class="col-sm-6 col-md-6 col-xs-12 column">
			<h2>Tutorials</h2>
			<p>We’re the independent professional body for solicitors in England and Wales. We’re run by and for our members.</p>
			<a href="{{url('/blogs')}}" class="read-more">Read More »</a>
			<h3>Email Newsletters:</h3>
			<form action="#" class="email-form">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Enter Address">
					<button type="submit" class="btn btn-default"><i class="fa fa-envelope"></i></button>
				</div>
			</form>
			<a class="privacy" href="#">Privacy Policy</a>
		</section>

		<section class="col-sm-6 col-md-6 col-xs-12 column new-col">
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
