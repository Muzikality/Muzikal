<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="description" content="Muzikal">
    <meta name="keywords" content="music, html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muzikal</title>
     <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- Favicon -->
	<link href="{{ asset('images/site.png') }}" rel="shortcut icon"/>
	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  
	<!-- Stylesheets -->
	<link rel="stylesheet"   href="{{ asset('/css/bootstrap.css') }}"/>
	<link rel="stylesheet"   href="{{ asset('/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet"   href="{{ asset('/css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet"   href="{{ asset('/css/css/slicknav.min.css') }}"/>
	<link rel="stylesheet"   href="{{ asset('/css/style.css') }}"/>
	<link rel="stylesheet"   href="{{ asset('/css/app.css') }}"/>
  </head>
  <body>
		
  <div id="preloder">
		<div class="loader"></div>
	</div>
    <nav class="navbar navbar-default">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <header class="header-section clearfix">
            <a href="{{ url('/') }}" class="site-logo">
              <img src="{{ asset('images/muzikal.png')  }}" width="200px" height="70px" alt="">
            </a>
            

          <ul class="main-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="#">Pages</a>
              <ul class="sub-menu">
                <li><a href="{{ url('/category') }}">Category</a></li>
                <li><a href="{{ url('/playlist') }}">Playlist</a></li>
                <li><a href="{{ url('/artist') }}">Artist</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
              </ul>
            </li>
            <li><a href="{{ url ('/contact') }}">Contact</a></li>
            
				
          
            @if (Auth::guest())
            <li>
              <a href="{{ url('/auth/login') }}">Login</a>
            </li>
            <li>
              <a href="{{ url('/auth/register') }}">Register</a>
            </li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="sub-menu" role="menu">
                @if (Auth::user()->can_post())
                <li><a href="{{ url('/new-post') }}">Add new post</a></li>
                <li><a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a></li>
                @endif
                <li><a href="{{ url('/user/'.Auth::id()) }}">My Profile</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
              </ul>
            </li>
            @endif
          
          </ul>
        </header>
    </nav>
     
    @yield('content')

<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>About us</h2>
								<ul>
									<li><a href="{{ url('/about') }}">Our Story</a></li>
									<li><a href="{{ url('/blog') }}">Muzikal Blog</a></li>
									<li><a href="">History</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Products</h2>
								<ul>
									<li><a href="playlist">Music</a></li>
									<li><a href="">Subscription</a></li>
									<li><a href="">Custom Music</a></li>
									<li><a href="">Footage</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Playlists</h2>
								<ul>

									<li><a href="{{ url('/blog') }}">Newsletter</a></li>
									<li><a href="{{ url('/blog') }}">Careers</a></li>
									<li><a href="{{ url('/blog') }}">Press</a></li>
									<li><a href="{{ url('/contact') }}">Contact</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 order-lg-1">
					<img src="{{ asset('images/muzikal.png')}}" width="200px" height="70px" alt="">
					
					
					<div class="social-links">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
	
	<!--====== Javascripts & Jquery ======-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
 <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/mixitup.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
