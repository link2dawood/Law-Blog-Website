@extends('layouts.app')
@section('content')
<div class="banner-block">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 banner-box">
                <header class="banner-heading">
                    <h1>About US</h1>
                    <!-- breadcrumbs of the page -->
                    <nav class="breadcrumbs">
                        <ul class="list-inline">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
        </div>
    </div>
    <div class="bg-stretch">
        <img src="{{asset('assets/images/img41.jpg')}}" alt="image description">
    </div>
</div>
		<!-- contain main informative part of the site -->

        <main id="main">
			<!-- container-block about of the page -->
			<div class="container container-block about">
				<!-- about-block of the page -->
				<div class="row about-block">
					<div class="col-sm-6 col-xs-12">
						<div class="alignleft">
							<a href="#">
								<span data-picture data-alt="image description">
									<span data-src="{{asset('assets/images/img66-large.jpg')}}" data-width="568" data-height="356"></span>
									<span data-src="{{asset('assets/images/img66-large2x.jpg')}}" data-width="1136" data-height="712" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
									<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src="images/img10-large.jpg"></span>
									<![endif]-->
									<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
									<noscript><img src="{{asset('assets/images/img10-large.jpg')}}" width="568" height="356" alt="image description" ></noscript>
								</span>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 txt-box">
						<header class="about-heading">
							<p>How we work</p>
						</header>
                         <p>
                            Solicitors pay their annual practising certificate fee to the Solicitors Regulation Authority (SRA). We receive around 30% of the fee to help fund our work. The rest of our funding comes from commercial activities.

The Law Society Council governs our work. Council members are elected to represent members across England and Wales, including different demographic groups and areas of law.

We use the expertise of our Council members and around 300 volunteer board and committee members to deliver the advice, support and services our members want.
</p>

					</div>
				</div>
				<div class="row">
					<article class="col-sm-4 col-xs-12 about-info">
						<h2>Why Choose Us</h2>
						<p>We’re the independent professional body for solicitors in England and Wales. We’re run by and for our members.</p>
						<ul class="about-nav list-unstyled">
							<li><a href="#"><i class="fa fa-check"></i>we are the voice of solicitors.</a></li>
							<li><a href="#"><i class="fa fa-check"></i>we drive excellence in the profession.</a></li>
							<li><a href="#"><i class="fa fa-check"></i>we safeguard the rule of law</a></li>
							<li><a href="#"><i class="fa fa-check"></i>we work to make sure no-one is above the law</a></li>
							<li><a href="#"><i class="fa fa-check"></i>we protect everyone's right to have access to justice</a></li>
						</ul>
					</article>
					<article class="col-sm-4 col-xs-12 about-info">
						<h2>Our Services</h2>
						<!-- accordian of the page -->
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h3 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											How we work
										</a>
									</h3>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<p>Solicitors pay their annual practising certificate fee to the Solicitors Regulation Authority (SRA). We receive around 30% of the fee to help fund our work. The rest of our funding comes from commercial activities.

                                            The Law Society Council governs our work. Council members are elected to represent members across England and Wales, including different demographic groups and areas of law.

                                            We use the expertise of our Council members and around 300 volunteer board and committee members to deliver the advice, support and services our members want.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h3 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											What we do for you
										</a>
									</h3>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<p>We’re here to help current and future members, supporting you at every stage of your career.

                                            We offer you career support through a host of events and e-learning through Law Society Learning
                                            Our career development service helps you to make better career decisions
                                            Our demographic or practice-based communities can help you expand your network and improve your knowledge in specific areas
                                            Our Gazette jobs board helps you shape your career with expert guidance and new vacancies in print and online</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h3 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Where we work
										</a>
									</h3>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p>We represent solicitors across England and Wales, with offices in London and Cardiff.

                                            Our membership engagement and services team makes sure members can get news, products and services wherever they are based.</p>
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="col-sm-4 col-xs-12 about-info">
						<h2>Our Capabilities</h2>
						<!-- progress-area of the page -->
						<div class="progress-area">
							<div class="progress-box">
								<h3>Crime Cases</h3>
								<div class="progress-frame">
									<span class="progress-bar" style="width:95%">
										<span class="num">95%</span>
									</span>
								</div>
							</div>
							<div class="progress-box">
								<h3>Private Clients</h3>
								<div class="progress-frame">
									<span class="progress-bar" style="width:60%">
										<span class="num">60%</span>
									</span>
								</div>
							</div>
							<div class="progress-box">
								<h3>Property Cases</h3>
								<div class="progress-frame">
									<span class="progress-bar" style="width:79%">
										<span class="num">79%</span>
									</span>
								</div>
							</div>
							<div class="progress-box">
								<h3>Accidental Cases</h3>
								<div class="progress-frame">
									<span class="progress-bar" style="width:50%">
										<span class="num">50%</span>
									</span>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>

		</main>

		@endsection
