@extends('layouts.app')
@section('content')
<style type="text/css">

.content-left a:hover{
    text-decoration: none;
}

	.truncate-ckeditor {
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
		max-height: 6em; /* Adjust if line height is different */
		line-height: 2em; /* Make sure line-height is set */
	}

	a {
   background-color: transparent;
}
a:active,
a:hover {
   outline: 0;
}
img {
   border: 0;
}
input {
   color: inherit;
   font: inherit;
   margin: 0;
}
input::-moz-focus-inner {
   border: 0;
   padding: 0;
}
input {
   line-height: normal;
}
input[type="search"] {
   -webkit-appearance: none;
}

img {
   max-width: 100%;
   vertical-align: middle;
   display: inline-block;
}
.w-inline-block {
   max-width: 100%;
   display: inline-block;
}
.w-button {
   display: inline-block;
   padding: 9px 15px;
   background-color: #3898ec;
   color: white;
   border: 0;
   line-height: inherit;
   text-decoration: none;
   cursor: pointer;
   border-radius: 0;
}
input.w-button {
   -webkit-appearance: button;
}
h3 {
   font-weight: bold;
   margin-bottom: 10px;
}
h3 {
   font-size: 24px;
   line-height: 30px;
   margin-top: 20px;
}
p {
   margin-top: 0;
   margin-bottom: 10px;
}
.w-form {
   margin: 0 0 15px;
}
.w-form-done {
   display: none;
   padding: 20px;
   text-align: center;
   background-color: #dddddd;
}
.w-form-fail {
   display: none;
   margin-top: 10px;
   padding: 10px;
   background-color: #ffdede;
}
.w-input {
   display: block;
   width: 100%;
   height: 38px;
   padding: 8px 12px;
   margin-bottom: 10px;
   font-size: 14px;
   line-height: 1.42857143;
   color: #333333;
   vertical-align: middle;
   background-color: #ffffff;
   border: 1px solid #cccccc;
}
.w-input:-moz-placeholder {
   color: #999;
}
.w-input::-moz-placeholder {
   color: #999;
   opacity: 1;
}
.w-input:-ms-input-placeholder {
   color: #999;
}
.w-input::-webkit-input-placeholder {
   color: #999;
}
.w-input:focus {
   border-color: #3898ec;
   outline: 0;
}
.w-layout-grid {
   display: -ms-grid;
   display: grid;
   grid-auto-columns: 1fr;
   -ms-grid-columns: 1fr 1fr;
   grid-template-columns: 1fr 1fr;
   -ms-grid-rows: auto auto;
   grid-template-rows: auto auto;
   grid-row-gap: 16px;
   grid-column-gap: 16px;
}
.blog-grid {
   grid-column-gap: 40px;
   -ms-grid-columns: 1fr 0.4fr;
   grid-template-columns: 1fr 0.4fr;
   -ms-grid-rows: auto;
   grid-template-rows: auto;
}
.content-left {
   display: -webkit-box;
   display: -webkit-flex;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   -webkit-flex-direction: column;
   -ms-flex-direction: column;
   flex-direction: column;
   -webkit-box-pack: start;
   -webkit-justify-content: flex-start;
   -ms-flex-pack: start;
   justify-content: flex-start;
   -webkit-box-align: center;
   -webkit-align-items: center;
   -ms-flex-align: center;
   align-items: center;
   grid-auto-columns: 1fr;
   grid-column-gap: 16px;
   grid-row-gap: 40px;
   -ms-grid-columns: 1fr;
   grid-template-columns: 1fr;
   -ms-grid-rows: auto auto auto auto;
   grid-template-rows: auto auto auto auto;
}
.content-right {
   position: -webkit-sticky;
   position: sticky;
}
.blog-item {
   display: -ms-grid;
   display: grid;
   margin-bottom: 40px;
   padding: 20px;
   grid-auto-columns: 1fr;
   grid-column-gap:20px;
   grid-row-gap: 16px;
   -ms-grid-columns: 1fr 0.8fr;
   grid-template-columns: 1fr 0.8fr;
   -ms-grid-rows: auto;
   grid-template-rows: auto;
   border-radius: 15px;
   background-color: #fff;
   box-shadow: 0 22px 34px 0 rgba(0, 0, 0, 0.06);
   text-decoration: none;
}
.blog-image {
   width: 100%;
}
.blog-content {
   display: -webkit-box;
   display: -webkit-flex;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   -webkit-flex-direction: column;
   -ms-flex-direction: column;
   flex-direction: column;
   -webkit-box-pack: center;
   -webkit-justify-content: center;
   -ms-flex-pack: center;
   justify-content: center;
   -webkit-box-align: start;
   -webkit-align-items: flex-start;
   -ms-flex-align: start;
   align-items: flex-start;
}
.heading-h2 {
   margin-top: 0px;
   color: #202146;
    font-size: 1.85rem;
}
.paragraph-detials-medium {
   margin-bottom: 24px;
   color: #9899ad;
   font-size: 19px;
   line-height: 24px;
}
.profile-block {
   display: -webkit-box;
   display: -webkit-flex;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-align: center;
   -webkit-align-items: center;
   -ms-flex-align: center;
   align-items: center;
}
.profile-picture {
   margin-right: 10px;
   border-radius: 100px;
}
.title-small {
   margin-bottom: 4px;
   color: #202146;
   font-weight: 700;
}
.title-small.pink {
   margin-bottom: 0px;
   color: #fb9acf;
}
.paragraph-detials-small {
   margin-bottom: 0px;
   color: #9899ad;
   font-size: 14px;
   line-height: 120%;
}
.seach-bar {
   height: 60px;
   margin-bottom: 40px;
   padding-left: 20px;
   border: 1px none #000;
   border-radius: 15px;
   box-shadow: 0 12px 14px 0 rgba(0, 0, 0, 0.06);
   color: #9899ad;
   font-size: 15px;
}
.search-button {
   position: static;
   left: auto;
   top: 0%;
   right: 0%;
   bottom: auto;
   width: 60px;
   height: 100%;
   border-radius: 15px;
   background-color: #5c4ebd;
}
.search {
   position: relative;
}
.search-icon {
   position: absolute;
   left: 22px;
   top: 22px;
   right: 0%;
   bottom: 0%;
}
.search-button-wrapper {
   position: absolute;
   left: auto;
   top: 0%;
   right: 0%;
   bottom: auto;
   height: 100%;
}
.subscription {
   margin-bottom: 40px;
   padding: 100px 20px 20px;
   border-radius: 15px;
   background-color: #fff;
   background-image: url("https://assets.website-files.com/5ee1bccec7a1f843875ce9ea/5ee2076a9dc5318e60f2d65d_Paper%20Plane.png");
   background-position: -20px -30px;
   background-size: 125px;
   background-repeat: no-repeat;
   box-shadow: 0 12px 14px 0 rgba(0, 0, 0, 0.06);
}
.title-large {
   margin-bottom: 20px;
   color: #202146;
   font-size: 20px;
   line-height: 130%;
   font-weight: 700;
}
.text-field {
   height: 60px;
   margin-bottom: 0px;
   padding-top: 20px;
   padding-bottom: 20px;
   padding-left: 20px;
   border: 1px none #000;
   background-color: transparent;
   font-size: 15px;
}
.featured-block {
   margin-top: 10px;
}
.featured-item {
   display: -webkit-box;
   display: -webkit-flex;
   display: -ms-flexbox;
   display: flex;
   margin-bottom: 20px;
   -webkit-box-align: center;
   -webkit-align-items: center;
   -ms-flex-align: center;
   align-items: center;
   -webkit-transition: color 200ms ease;
   transition: color 200ms ease;
   color: #202146;
   text-decoration: none;
}
.featured-item:hover {
   color: #5c4ebd;
}
.feature-image {
   margin-right: 20px;
   border-radius: 15px;
   box-shadow: 0 22px 34px 0 rgba(0, 0, 0, 0.16);
}
.categories-block {
   margin-top: 40px;
}
.categories-pill {
   margin-right: 20px;
   margin-bottom: 20px;
   padding: 6px 16px;
   border-radius: 100px;
   background-color: #fff;
   text-decoration: none;
}
.title-medium {
   margin-bottom: 0px;
   color: #5c4ebd;
   font-size: 17px;
   line-height: 130%;
   font-weight: 700;
   text-decoration: none;
}
.next-button {
   margin-top: 20px;
   padding: 20px 36px;
   border-radius: 15px;
   background-color: #fb9acf;
   text-decoration: none;
}
.form {
   display: -webkit-box;
   display: -webkit-flex;
   display: -ms-flexbox;
   display: flex;
   border-radius: 15px;
   background-color: #f2f5f8;
}
.submit-button {
   width: 60px;
   height: 60px;
   background-color: transparent;
}
.submit-button-wrap {
   position: relative;
   display: -webkit-box;
   display: -webkit-flex;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: center;
   -webkit-justify-content: center;
   -ms-flex-pack: center;
   justify-content: center;
   -webkit-box-align: center;
   -webkit-align-items: center;
   -ms-flex-align: center;
   align-items: center;
}
.image-2 {
   position: absolute;
}
.blog-image-wrap {
   overflow: hidden;
   border-radius: 10px;
}
.stick-wrapper {
   position: -webkit-sticky;
   position: sticky;
   top: 60px;
}
@media screen and (max-width: 991px) {
   .blog-grid {
      grid-column-gap: 22px;
      -ms-grid-columns: 1fr 0.6fr;
      grid-template-columns: 1fr 0.6fr;
   }
   .blog-item {
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
   }
   .featured-item {
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
   }
   .feature-image {
      margin-bottom: 10px;
   }
}
@media screen and (max-width: 767px) {
   .blog-grid {
      grid-row-gap: 62px;
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
   }
}

/* New */
.card-container {
  width: 100%;
  height: auto;
  background-color: #fff;
  border-radius: 8px;
  margin: auto;
  box-shadow: 0 2px 20px rgba(0,0,0, 0.1);
  overflow: hidden;
}

.card-image img {
  height: 220px;
  width: 100%;
  border-radius: 8px 8px 0 0;
  background-size: cover;
}

.card-body {
  display: flex;
  flex-direction: column;
  align-items: start;
  padding: 16px;
  min-height: 200px;
}

.card-badge {
  text-transform: uppercase;
  background-color: #fff;
  color: #fff;
  padding: 2px 8px;
  border-radius: 70px;
  margin: 0;
  font-size: 12px;
}

.card-badge-blue {
  background-color: #92d4e4;
}

.card-badge-purple {
  background-color: #3d1d94;
}

.card-badge-pink {
  background-color: #c62bcb;
}

.card-body h1 {
  font-size: 16px;
  margin: 8px 0;
}

.card-body p {
  font-size: 14px;
  margin: 8px 0 16px 0;
}

.card-author {
  display: flex;
  align-items: center;
}

.card-author p {
  margin: 0 16px;
  font-size: 12px;
}

.card-author p:last-child {
  color: #888;
}

.card-author img {
  border-radius: 50%;
  height: 48px;
  width: 48px;
  margin-top: auto;
}

@media screen and (max-width: 1000px) {
  .container {
    grid-template-columns: 1fr;
  }
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

        <header class="row main-heading">
			<div class="col-xs-12">
				<h2> Viral Tutorials</h2>
			</div>
		</header>
        <div class="row">
            @foreach ($virals as $val)
            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="margin: 10px 0px;">
               <div class="card-container">
                   <div class="card-image">
                     <img src="{{ url('/storage/app/' . $val->image) }}" alt="a brand new sports car" />
                   </div>
                   <div class="card-body">
                     <span class="card-badge card-badge-blue">Viral</span>
                     <h1>
                        {{ \Illuminate\Support\Str::limit(strip_tags($val->title),20, '...') }}
                     </h1>
                     <p class="card-subtitle">
                        {{ \Illuminate\Support\Str::limit(strip_tags($val->description),60, '...') }}
                     </p>
                     <div class="card-author">
                       {{-- <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="author avatar" /> --}}
                       <div class="author-info">
                         <p class="author-name" style="margin-left: 0px;text-align:left;">{{ $val->author ?? 'Admin' }}</p>
                         <p class="post-timestamp" style="margin-left: 0px;text-align:left;">{{ \Carbon\Carbon::parse($val->created_at)->format('F d, Y') }}</p>
                       </div>
                     </div>
                   </div>
                 </div>
            </div>
            @endforeach
        </div>



        <header class="row main-heading" style="margin-top: 70px;">
			<div class="col-xs-12">
				<h2> Top Trading Tutorials</h2>
			</div>
		</header>
		<div class="row">

            @foreach($latests as $val)
			<div class="col-sm-6 col-12 col-md-6 col-lg-6 col-xs-12 latest-news">
			   <div class="content-left">
			      <a href="{{ url('/blog-detail', $val->id) }}" class="blog-item w-inline-block">
			         <div class="blog-image-wrap">
			            <img src="{{ url('/storage/app/' . $val->image) }}" width="380" alt="{{ $val->title }}" class="blog-image" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
			         </div>
			         <div class="blog-content">
			            <h3 class="heading-h2">{{ \Illuminate\Support\Str::limit(strip_tags($val->title),20, '...') }}</h3>
			            <p class="paragraph-detials-medium">{{ \Illuminate\Support\Str::limit(strip_tags($val->description),60, '...') }}</p>
			            <div class="profile-block">

			               <div class="normal-wrapper">
			                  <div class="title-small">{{ $val->author ?? 'Admin' }}</div>
			                  <p class="paragraph-detials-small">{{ \Carbon\Carbon::parse($val->created_at)->format('F d, Y') }}</p>
			               </div>
			            </div>
			         </div>
			      </a>
                </div>
			</div>
            @endforeach

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
