@extends('layouts.app')
@section('content')
<div class="banner-block">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 banner-box">
						<header class="banner-heading">
							<h1>news</h1>
							<nav class="breadcrumbs">
								<ul class="list-inline">
									<li><a href="#">Home</a></li>
									<li><a href="#">News</a></li>
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
			<!-- news posts of the site -->
			<div class="container news-posts">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12" id="content">
						<article class="post-blog">
							<div class="post-img">
								<a href="news-details.html">
									<span data-picture data-alt="image description">
										<span data-src="images/img42-large.jpg" data-width="868" data-height="380"></span>
										<span data-src="images/img42-large2x.jpg" data-width="1736" data-height="760" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
											<span data-src="images/img42-large.jpg"></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="images/img42-large.jpg" width="70" height="70" alt="image description" ></noscript>
									</span>
									<span class="date-box post"><span class="month">April</span>18</span>
								</a>
							</div>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Written by Adam</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>
								<li><a href="#"><i class="fa fa-comment"></i> Law</a></li>
							</ul>
							<h2>This is a News post</h2>
							<p>Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Li Et harums ser quidem sit rerums facilis est dolores uni nemis . Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Lid est laborum.</p>
							<a href="news-details.html" class="btn btn-default">Read More</a>
						</article>
						<article class="post-blog">
							<div class="post-img">
								<iframe src="https://player.vimeo.com/video/41522429" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								<span class="date-box post"><span class="month">April</span>18</span>
							</div>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Written by Adam</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>
								<li><a href="#"><i class="fa fa-comment"></i> Law</a></li>
							</ul>
							<h2>This is a Video News post</h2>
							<p>Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Li Et harums ser quidem sit rerums facilis est dolores uni nemis . Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Lid est laborum.</p>
							<a href="https://player.vimeo.com/video/41522429" class="btn btn-default">Read More</a>
						</article>
						<article class="post-blog">
							<div class="post-img">
								<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139646856&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
							</div>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Written by Adam</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>
								<li><a href="#"><i class="fa fa-comment"></i> Law</a></li>
							</ul>
							<h2>This is a Audio News post</h2>
							<p>Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Li Et harums ser quidem sit rerums facilis est dolores uni nemis . Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Lid est laborum.</p>
						</article>
						<article class="post-blog">
							<div class="post-gallery">
								<div class="post-mask">
									<div class="post-slideset">
										<div class="post-slide">
											<div class="post-img">
												<a href="news-details.html">
													<span data-picture data-alt="image description">
														<span data-src="images/img42-large.jpg" data-width="868" data-height="380"></span>
														<span data-src="images/img42-large2x.jpg" data-width="1736" data-height="760" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
														<!--[if (lt IE 9) & (!IEMobile)]>
															<span data-src="images/img42-large.jpg"></span>
														<![endif]-->
														<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
														<noscript><img src="images/img42-large.jpg" width="70" height="70" alt="image description" ></noscript>
													</span>
													<span class="date-box post"><span class="month">April</span>18</span>
												</a>
											</div>
											<ul class="post-nav list-inline">
												<li><a href="#"><i class="fa fa-user"></i> Written by Adam</a></li>
												<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>
												<li><a href="#"><i class="fa fa-comment"></i> Law</a></li>
											</ul>
											<h2>This is a Slider News post</h2>
											<p>Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Li Et harums ser quidem sit rerums facilis est dolores uni nemis . Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Lid est laborum.</p>
											<a href="news-details.html" class="btn btn-default">Read More</a>
										</div>
										<div class="post-slide">
											<div class="post-img">
												<a href="news-details.html">
													<span data-picture data-alt="image description">
														<span data-src="images/img42-large.jpg" data-width="868" data-height="380"></span>
														<span data-src="images/img42-large2x.jpg" data-width="1736" data-height="760" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
														<!--[if (lt IE 9) & (!IEMobile)]>
															<span data-src="images/img42-large.jpg"></span>
														<![endif]-->
														<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
														<noscript><img src="images/img42-large.jpg" width="70" height="70" alt="image description" ></noscript>
													</span>
													<span class="date-box post"><span class="month">April</span>18</span>
												</a>
											</div>
											<ul class="post-nav list-inline">
												<li><a href="#"><i class="fa fa-user"></i> Written by Adam</a></li>
												<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>
												<li><a href="#"><i class="fa fa-comment"></i> Law</a></li>
											</ul>
											<h2>This is a Slider News post</h2>
											<p>Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Li Et harums ser quidem sit rerums facilis est dolores uni nemis . Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Lid est laborum.</p>
											<a href="news-details.html" class="btn btn-default">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</article>
						<article class="post-blog">
							<div class="post-img">
								<a href="news-details.html">
									<span data-picture data-alt="image description">
										<span data-src="images/img43-large.jpg" data-width="868" data-height="380"></span>
										<span data-src="images/img43-large2x.jpg" data-width="1736" data-height="760" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
											<span data-src="images/img43-large.jpg"></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="images/img43-large.jpg" width="70" height="70" alt="image description" ></noscript>
									</span>
									<span class="date-box post"><span class="month">April</span>18</span>
								</a>
							</div>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Written by Adam</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>
								<li><a href="#"><i class="fa fa-comment"></i> Law</a></li>
							</ul>
							<h2>This is a News post</h2>
							<p>Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Li Et harums ser quidem sit rerums facilis est dolores uni nemis . Lid est laborum dolos rumes fustsirs sit untras. Et harums ser quidem sit rerums facilis est dolores uni nemis Lid est laborum.</p>
							<a href="news-details.html" class="btn btn-default">Read More</a>
						</article>
						<nav class="post-pagination">
							<ul class="list-inline">
								<li class="prev"><a href="#"><span class="btn-prev"><i class="fa fa-angle-left"></i></span><span class="txt">Prev</span></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li class="next"><a href="#"><span class="txt">Next</span><span class="btn-next"><i class="fa fa-angle-right"></i></span></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</main>
		@endsection