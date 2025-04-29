<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Dashboard - Blog.</title>
  <!-- CSS files -->
  <link href="{{asset('admin-assets/dist/css/tabler.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('admin-assets/dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('admin-assets/dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('admin-assets/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('admin-assets/dist/css/demo.min.css')}}" rel="stylesheet"/>
</head>
<body >
  <div class="wrapper">
    <header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{url('/home')}}">
            Tutorial
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
              <div class="d-none d-xl-block ps-2">
                <div>{{ Auth::user()->name}}</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
          <div class="container-xl">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('home') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="{{url('admin/blogs')}}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Tutorials
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="{{url('admin/messages')}}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Messages
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="page-wrapper">
      <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
          <div class="row align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">
                Overview
              </div>
              <h2 class="page-title">
                Dashboard
              </h2>
            </div>
            <!-- Page title actions -->
          </div>
        </div>
      </div>
      @yield('content')

      
    </div>
  </div>
  <script src="{{asset('admin-assets/dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <!-- Tabler Core -->
  <script src="{{asset('admin-assets/dist/js/tabler.min.js')}}"></script>
  <script src="{{asset('admin-assets/dist/js/demo.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
     baseJS.init(
     {
       "site_url": "{{url('/')}}",
       "current_url":"{{URL::current()}}",
       "notif": {"type":"toastr", "options":[]},
       "inputMasking": "YES",
     }
     );

   })
 </script>
 <script defer  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script defer  src="{{asset('assets/js/base.js')}}" defer></script>
 <script defer  src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script defer  src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
