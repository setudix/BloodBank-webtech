<!DOCTYPE html>


<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/homePage/images/favicon.png') }}" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('frontend/homePage/plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('frontend/homePage/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{ asset('frontend/homePage/plugins/lightbox2/css/lightbox.min.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('frontend/homePage/plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('frontend/homePage/plugins/slick/slick.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('frontend/homePage/css/style.css') }}">

</head>
<body id="body">

  <!--
  Start Preloader
  ==================================== -->
  {{-- <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> --}}
  <!--
  End Preloader
  ==================================== -->

<!--
Fixed Navigation
==================================== -->

<header class="navigation fixed-top">
    <div class="nav-item" style="position: relative;">
        {{-- <button class ="btn btn-primary" style="position: absolute; right: 0"> Login </button> --}}
        <a class="nav-link" style="position: absolute; right: 5%; font-weight:bold; font-size:large; text-decoration:underline" href="">Login</a>
        <a class="nav-link" style="position: absolute; right: 0%; font-weight:bold; font-size:large; text-decoration:underline" href="">Register</a>
    </div>
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.html">
        <img loading="lazy" class="logo-default" style="height: 80px; width: 40px" src="{{ asset('frontend/homePage/images/blood_bank_logo.png') }}" alt="logo" />
        <img loading="lazy" class="logo-white" style="height: 90px; width: 60px" src="{{ asset('frontend/homePage/images/blood_bank_logo.png') }}" alt="logo" />
        <p style="color: white">Blood Bank </p>
    </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Homepage <i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.html">Homepage</a></li>
              <li><a class="dropdown-item" href="onepage-slider.html">Onepage</a></li>
              <li><a class="dropdown-item" href="onepage-text.html">Onepage 2</a></li>

              <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                  <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                  <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="service.html">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="portfolio.html">Portfolio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="team.html">Team</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pricing.html">Pricing</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown02" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages <i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
              <li><a class="dropdown-item" href="404.html">404 Page</a></li>
              <li><a class="dropdown-item" href="blog.html">Blog Page</a></li>
              <li><a class="dropdown-item" href="single-post.html">Blog Single Page</a></li>

              <li class="dropdown dropdown-submenu dropleft">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0201">
                  <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                  <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->

 <!--
Welcome Slider
==================================== -->
 <section class="hero-area">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="block mt-4">
 					<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">LIFELINE <br> Find Blood Donors Near You</h1>
 					<p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">A platform that connects individuals in need of blood transfusions with potential blood donors in their local area.
 					</p>
 					<ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
 						<li class="list-inline-item">
 							<a data-scroll href="#services" class="btn btn-main">Explore Us</a>
 						</li>
 						<li class="list-inline-item">
 							<a data-scroll href="#team" class="btn btn-transparent">Learn More</a>
 						</li>
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

<!--
Start About Section
==================================== -->

<footer id="footer" class="bg-one">
  {{-- <div class="top-footer">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <ul>
            <li>
              <h3>Our Services</h3>
            </li>
            <li><a href="service.html">Ui/Ux Design</a></li>
            <li><a href="service.html">Graphic Design</a></li>
            <li><a href="service.html">Web Design</a></li>
            <li><a href="service.html">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <ul>
            <li>
              <h3>Quick Links</h3>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="blog.html">Blogs</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-lg-3 col-md-6">
          <ul>
            <li>
              <h3>Connect with us Socially</h3>
            </li>
            <li><a href="https://www.facebook.com/themefisher/">Facebook</a></li>
            <li><a href="https://www.twitter.com/themefisher/">Twitter</a></li>
            <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA">Youtube</a></li>
            <li><a href="https://www.github.com/themefisher/">Github</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div> --}}
  <div class="footer-bottom">
    <h5>&copy; Copyright 2023. All rights reserved.</h5>
    {{-- <h6>Design and Developed by <a href="https://themefisher.com/">Themefisher</a></h6> --}}
  </div>
</footer> <!-- end footer -->


<!-- end Footer Area
========================================== -->

<!--
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
<script src="{{ asset('frontend/homePage/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap4 -->
<script src="{{ asset('frontend/homePage/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Parallax -->
<script src="{{ asset('frontend/homePage/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
<!-- lightbox -->
<script src="{{ asset('frontend/homePage/plugins/lightbox2/js/lightbox.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('frontend/homePage/plugins/slick/slick.min.js') }}"></script>
<!-- filter -->
<script src="{{ asset('frontend/homePage/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- Smooth Scroll js -->
<script src="{{ asset('frontend/homePage/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
        <script src="{{ asset('frontend/homePage/plugins/google-map/gmap.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('frontend/homePage/js/script.js') }}"></script>

</body>

</html>
