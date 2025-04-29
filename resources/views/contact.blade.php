@extends('layouts.app')
@section('content')
<div class="banner-block">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 banner-box">
                <header class="banner-heading">
                    <h1>Contact US</h1>
                    <!-- breadcrumbs of the page -->
                    <nav class="breadcrumbs">
                        <ul class="list-inline">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/contact')}}">Contact US</a></li>
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
			<!-- contact-form  about of the page -->
			<div class="container">

				<div class="row" style="margin-top: 30px;">
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
			</div>
			<!-- clients-gallery of the Page -->

		</main>

		@endsection
