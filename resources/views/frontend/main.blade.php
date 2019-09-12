<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NLRS</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css') }}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/themify-icons/themify-icons.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/animate/animate.css') }}">
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/aos/aos.css') }}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/venobox/venobox.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Stylesheet -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
  
   <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  @yield('custom-css')
</head>

<body>
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/nlrs2015/" target="_blank"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://twitter.com/nlrs2015" target="_blank"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
       
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('frontend/images/logo.webp') }}" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @if(url()->current() == route('index')) active @endif">
              <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item @@about @if(url()->current() == route('about-us')) active @endif">
              <a class="nav-link" href="{{ route('about-us') }}">About</a>
            </li>
            <li class="nav-item @@courses @if(url()->current() == route('portfolios')) active @endif">
              <a class="nav-link" href="{{ route('portfolios') }}">Portfolio</a>
            </li>
            <li class="nav-item @@events @if(url()->current() == route('events')) active @endif">
              <a class="nav-link" href="{{ route('events') }}">EVENTS</a>
            </li>
            <li class="nav-item @@blog @if(url()->current() == route('blogs')) active @endif">
              <a class="nav-link" href="{{ route('blogs') }}">BLOG</a>
            </li>
            <li class="nav-item dropdown view @if(url()->current() == route('upload')) active @endif">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('upload') }}">File Upload</a>
               
              </div>
            </li>
            <li class="nav-item @@contact @if(url()->current() == route('contact')) active @endif">
              <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
@yield('content')

<footer>
 
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="{{ route('index') }}"><img class="img-fluid mb-4" src="{{ asset('frontend/images/logo.webp') }}" alt="logo"></a>
          <p> Nepal Language & Research Solutions is a Nepali company specializing in translation, writing, content development and research related services. </p>
         
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="{{ route('about-us') }}">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="{{ route('contact') }}">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="{{ route('blogs') }}">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="{{ route('portfolios') }}">Portfolio</a></li>
            <li class="mb-3"><a class="text-color" href="{{ route('events') }}">Events</a></li>
            <li class="mb-3"><a class="text-color" href="gallary.html">Gallary</a></li>
            <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <h4 class="text-white mb-5">MORE INFO</h4>
          <ul class="list-unstyled">
            <li class="mb-2">Rudramati Marga, Buddhanagar-10 (2.41 mi) Kathmandu, Nepal 44600</li>
            <li class="mb-2">+977 (1) 9851077430</li>
            <li class="mb-2">+977 (2) 9851136915</li>
            <li class="mb-2">contact@yourdomain.com</li>
          </ul>
        </div>
       
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
             <a href="#">© Vedanasoft</a></p> . All Rights Reserved.
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/nlrs2015/" target="_blank"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/nlrs2015" target="_blank"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-dribbble text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{ asset('frontend/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
<!-- aos -->
<script src="{{ asset('frontend/plugins/aos/aos.js') }}"></script>
<!-- venobox popup -->
<script src="{{ asset('frontend/plugins/venobox/venobox.min.js') }}"></script>
<!-- mixitup filter -->
<script src="{{ asset('frontend/plugins/mixitup/mixitup.min.js') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset('frontend/js/script.js') }}"></script>
@yield('custom-js')

</body>
</html>