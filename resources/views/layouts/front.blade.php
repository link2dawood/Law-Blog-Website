<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reptiles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Reptiles - Contact">
    <meta itemprop="name" content="Neumorphism UI by Reptiles">

    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/reptile.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/reptile.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/reptile.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Fontawesome -->
    <link type="text/css" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/neumorphism.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header class="header-global">
        <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light">
            <div class="container position-relative">
                <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="{{url('/')}}">
                    <img class="navbar-brand-dark" src="{{asset('assets/img/reptile.png')}}" alt="Logo light">
                    <img class="navbar-brand-light" src="{{asset('assets/img/reptile.png')}}" alt="Logo dark">
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{url('/')}}" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                    <img src="{{asset('assets/img/reptile.png')}}" alt="Reptiles logo">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                        <li class="nav-item dropdown">
                            <a href="{{url('/')}}" class="nav-link" >
                                <span class="nav-link-inner-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown mega-dropdown">
                            <a href="{{url('/tools')}}" class="nav-link" >
                                <span class="nav-link-inner-text">Tools</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown mega-dropdown">
                            <a href="{{url('/blogs')}}" class="nav-link" >
                                <span class="nav-link-inner-text">Blogs</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{url('/about')}}" class="nav-link" >
                                <span class="nav-link-inner-text">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{url('/contact')}}" class="nav-link" >
                                <span class="nav-link-inner-text">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <!-- <a href="{{url('signin')}}"  class="btn btn-primary text-secondary d-none d-md-inline-block mr-3"> Sign in</a>
                        <a href="{{url('signup')}}"  class="btn btn-primary"> Sign up</a> -->
                        <!-- <ul class="d-flex list-unstyled mb-5 mb-lg-0 d-md-block d-sm-none">
                            <li class="mr-2">
                                <a href="https://twitter.com/Reptiles" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="twitter social link"
                                data-toggle="tooltip" data-placement="top" title="Follow @Reptiles on Twitter">
                                    <span aria-hidden="true" class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mr-2">
                                <a href="https://www.facebook.com/Reptiles/" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="facebook social link" data-toggle="tooltip" data-placement="top" title="Like @Reptiles on Facebook">
                                 <span aria-hidden="true" class="fab fa-facebook"></span>
                                </a>
                            </li>

                        </ul> -->
                        <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')





<footer class="d-flex pb-5 pt-6 pt-md-7 bg-primary" style="border-top: 3px solid white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <p><strong>Reptiles</strong> is an independent branding & experience design company working at the intersection of culture, design, and technology.</p>
                <ul class="d-flex list-unstyled mb-5 mb-lg-0">
                    <li class="mr-2">
                        <a href="https://twitter.com/Reptiles" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="X social link"
                        data-toggle="tooltip" data-placement="top" title="Follow us on X">
                        <span aria-hidden="true" class="fab fa-twitter"></span>
                    </a>
                </li>
                <li class="mr-2">
                    <a href="https://www.facebook.com/Reptiles/" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="facebook social link"
                    data-toggle="tooltip" data-placement="top" title="Follow us on Facebook">
                    <span aria-hidden="true" class="fab fa-facebook"></span>
                </a>
            </li>
            <li class="mr-2">
                <a href="https://pinterest.com/Reptiles" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="github social link"
                data-toggle="tooltip" data-placement="top" title="Follow us on Pinterest">
                <span aria-hidden="true" class="fab fa-pinterest"></span>
            </a>
        </li>
        <li>
            <a href="https://linkedin.com/Reptiles" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="dribbble social link"
            data-toggle="tooltip" data-placement="top" title="Follow us on Linkedin">
            <span aria-hidden="true" class="fab fa-linkedin"></span>
        </a>
    </li>
</ul>
</div>
<div class="col-6 col-lg-2 mb-5 mb-lg-0">
    <h5>Reptiles</h5>
    <ul class="footer-links list-unstyled mt-2">
        <li class="mb-1"><a class="p-2" href="{{url('/blogs')}}">Blogs</a></li>
        <li class="mb-1"><a class="p-2" href="{{url('/tools')}}">Tools</a></li>
        <li class="mb-1"><a class="p-2" href="{{url('/about')}}">About Us</a></li>
        <li><a class="p-2" href="{{url('/contact')}}">Contact Us</a></li>
    </ul>
</div>
<div class="col-6 col-lg-2 mb-5 mb-lg-0">
    <h5>Other</h5>
    <ul class="footer-links list-unstyled mt-2">
        <li class="mb-1">
            <a class="p-2" href="{{url('/privacy-policy')}}">Privacy Policy</a>
        </li>
        <li class="mb-1">
            <a class="p-2" href="{{url('/terms-and-conditions')}}">Terms and Conditions</a>
        </li>
        <li>
            <!-- <a class="p-2" href="{{url('/careers')}}">Careers</a> -->
        </li>
        <li>
            <!-- <a class="p-2" href="{{url('/faqs')}}">FAQ</a> -->
        </li>
    </ul>
</div>
<div class="col-12 col-lg-4 mb-5 mb-lg-0">
    <h5>Subscribe</h5>
    <p class="text-gray font-small mt-2">Join our mailing list. We write rarely, but only the best content.</p>
    <form action="#">
        <div class="form-row mb-2">
            <div class="col-12">
                <label class="h6 font-weight-normal d-none" for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" aria-label="Subscribe form" id="exampleInputEmail3" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block" data-loading-text="Sending">
                    <span>Subscribe</span>
                </button>
            </div>
        </div>
    </form>
    <p class="text-gray font-small m-0">We’ll never share your details. See our <a class="text-black" href="#">Privacy Policy</a></p>
</div>
</div>
<hr class="my-5">
<div class="row">
    <div class="col">
        <a href="" target="_blank" class="d-flex justify-content-center">
            <img src="{{asset('assets/img/reptile.png')}}" height="25" class="mb-3" alt="Reptiles Logo">
        </a>
        <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
            <p class="font-weight-normal font-small mb-0">Copyright © Reptiles
                <span class="current-year">2024</span>. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
</footer>

<!-- Core -->
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/headroom.js/dist/headroom.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
<script src="{{asset('vendor/nouislider/distribute/nouislider.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('vendor/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
<script src="{{asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('vendor/prismjs/prism.js')}}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Neumorphism JS -->
<script src="{{asset('assets/js/neumorphism.js')}}"></script>
</body>
