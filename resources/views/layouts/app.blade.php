<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAW FIRM</title>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic%7cRoboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic%7cOpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- main container of all the page elements -->
    <div id="wrapper">
        <!-- header of the page -->
        <header id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-3 tell-holder">
                            <span class="tel"><i class="fa fa-phone"></i>Call Us: <a href="tel:0333999800">0 - 333 - 999 - 800</a></span>
                        </div>
                        <div class="col-sm-8 col-md-6 col-md-push-3 col-lg-5 col-lg-push-4">
                            <!-- social-networks of the page -->
                            <ul class="social-networks list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                            @if(auth()->check())
                            <a href="{{url('/admin/blogs')}}" class="login">Dashboard</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 holder">
                        <!-- logo of the page -->
                        <div class="logo"><a href="{{url('/')}}"><img src="{{ asset('assets/images/logo.png')}}" alt="LAW FIRM THEME FOR Law"></a></div>
                        <a href="{{url('/')}}" class="nav-opener visible-xs"><i class="fa fa-bars"></i></a>
                        <div class="nav-holder">
                            <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                            <form action="#" class="header-searchform">
                                <div class="form-group">
                                    <input type="search" placeholder="Search Here…" class="form-control">
                                </div>
                                <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <!-- nav of the page -->
                            <nav id="nav">
                                <ul class="list-inline">
                                    <li class="{{ request()->url() == url('/') ? 'active' : '' }}">
                                        <a href="{{ url('/') }}" class="smoothanchor">Home</a>
                                    </li>
                                    <li class="{{ request()->url() == url('/blogs') ? 'active' : '' }}">
                                        <a href="{{ url('/blogs') }}" class="smoothanchor">Blog</a>
                                    </li>
                                    <li class="{{ request()->url() == url('/about') ? 'active' : '' }}">
                                        <a href="{{ url('/about') }}" class="smoothanchor">About Us</a>
                                    </li>
                                    <li class="{{ request()->url() == url('/contact') ? 'active' : '' }}">
                                        <a href="{{ url('/contact') }}" class="smoothanchor">Contact</a>
                                    </li>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
   <!-- footer of the Page -->
        <footer id="footer">
            <div class="container holder">
                <div class="row">
                    <div class="col-sm-5 col-xs-12 copyrights">
                        <p>&copy; Copyrights Reserved To <a href="#">GetGo</a>.</p>
                    </div>
                    <div class="col-sm-7 col-xs-12 copyrights">
                        <ul class="footer-nav list-inline">
                            <li class="{{ request()->url() == url('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}" class="smoothanchor">Home</a>
                            </li>
                            <li class="{{ request()->url() == url('/blogs') ? 'active' : '' }}">
                                <a href="{{ url('/blogs') }}" class="smoothanchor">Blog</a>
                            </li>
                            <li class="{{ request()->url() == url('/about') ? 'active' : '' }}">
                                <a href="{{ url('/about') }}" class="smoothanchor">About Us</a>
                            </li>
                            <li class="{{ request()->url() == url('/contact') ? 'active' : '' }}">
                                <a href="{{ url('/contact') }}" class="smoothanchor">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class="popup-holder">
            <div id="video-popup1" class="lightbox video-lightbox videoarea">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/x1Q5vbAV9yo" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="pre-loader"><span class="preloader1"></span></div>
    </div>
    <!-- include jQuery -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.main.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.datepicker.js')}}"></script>
    <script type="text/javascript">
        if (navigator.userAgent.match(/IEMobile\/10\.0/) || navigator.userAgent.match(/MSIE 10.*Touch/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto !important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var lat;
        var lng;
        var map;
        var styles = [{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#333333"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}];

        //type your address after "address="
        jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=london,%20baker%20street,%20221b&amp;sensor=false', function(data) {
            lat = data.results[0].geometry.location.lat;
            lng = data.results[0].geometry.location.lng;
        }).complete(function(){
            dxmapLoadMap();
        });

        function attachSecretMessage(marker, message)
        {
            var infowindow = new google.maps.InfoWindow(
                { content: message
                });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }

        window.dxmapLoadMap = function()
        {
            var center = new google.maps.LatLng(lat, lng);
            var settings = {
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 16,
                draggable: false,
                scrollwheel: false,
                center: center,
                styles: styles
            };
            map = new google.maps.Map(document.getElementById('map'), settings);

            var marker = new google.maps.Marker({
                position: center,
                title: 'Map title',
                map: map
            });
            marker.setTitle('Map title'.toString());
        //type your map title and description here
        attachSecretMessage(marker, '<h3>Map title</h3>Map HTML description');
        }
    </script>
</body>
</html>
