<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Estate sale - Real Estate Category Bootstrap Responsive Website Template - Home : W3layouts</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="/">
                  <span class="fa fa-home"></span>&nbsp; <span style="color:#000">Rent</span><span style="color: #f93;">ga</span><span style="color: #000;">ge</span>
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-lg-5 mr-auto">

                

                  {{-- <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@listing__active">
                      <a class="nav-link" href="listing.html">About</a>
                  </li>
                  <li class="nav-item @@listing__active">
                      <a class="nav-link" href="listing.html">Property on mortgage</a>
                  </li>
                  <li class="nav-item @@listing__active">
                      <a class="nav-link" href="listing.html">Property for rent</a>
                  </li> --}}
              </ul>
              <div class="top-quote mt-lg-0">
                <ul class="navbar-nav ml-lg-5 mr-auto">
                   <li class="nav-item ">
                      <a class="nav-link" href="{{route('listing')}}">Browse Property</a>
                  </li>
                   <li class="nav-item ">
                      <a class="nav-link" href="#">List Property</a>
                  </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="listing.html">Rent loan</a>
                  </li>
                   <li class="nav-item ">
                      <a class="nav-link" href="listing.html">Mortgage Deals</a>
                  </li> --}}

                  @if(Route::has('login'))

                  <li class="nav-item">

                      @auth

                     {{--  <a class="nav-link" href="{{ url('/home') }}">Home <i class="fa fa-sign-in" aria-hidden="true"></i><span class="sr-only">(current)</span></a> --}}
                     
                      <a class="nav-link" href="{{ route('logout') }}">Logout </a>
                
                  </li>

                      @else

                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Login </a>
                  </li>


                   <li class="nav-item @ @listing__active">
                      <a class="nav-link" href="{{ route('register') }}">Sign Up </a>
                  </li>
                     
                      @endauth


                  @endif
               </ul>
              </div>
              <!--/search-right-->
              <!-- <div class="search mx-3">
                  <input class="search_box" type="checkbox" id="search_box">
                  <label class="fa fa-search" for="search_box"></label>
                  <div class="search_form">
                      <form action="error.html" method="GET">
                          <input type="text" placeholder="Search"><input type="submit" value="search">
                      </form>
                  </div>
              </div> -->
              <!--//search-right-->
          </div>

          <!-- toggle switch for light and dark theme -->
         <!--  <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div> -->
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa" style="margin-top: -60px; margin-bottom: 120px">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="heading">
								<h3 class="text-center">Register</h3>
								<!-- <p class="text-center">Don't have an account? <a class="text-thm" href="page-register.html">Sign Up!</a></p> -->
							</div>
							 <div class="form-group input-group">
                                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" id="exampleInputName" placeholder="Name" required>
                                

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

             <div class="form-group input-group">
               <input type="text" class="form-control {{ $errors->has('last') ? ' is-invalid' : '' }}" name="last" value="{{ old('lastname') }}" id="exampleInputName" placeholder="Lastname" required>
               

               @if ($errors->has('last'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('last') }}</strong>
                   </span>
               @endif
            </div>


							<div class="form-group input-group">
                                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="exampleInputEmail2" placeholder="Email" required="">
                               
                                  @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                  @endif
                            </div>

							<div class="form-group input-group">
                                                
                                <input type="text" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" id="exampleInputPassword2" placeholder="Phone number" required="">
                                
                                 @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

							<div class="form-group input-group">
                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword2" placeholder="Password" name="password" required="">
                                

                                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

							

							<button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
							<div class="divide">
								<span class="lf_divider">Or</span>
								<hr>
							</div>
							<div class="row mt40">
								<div class="col-lg">
									<button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
								</div>
								<div class="col-lg">
									<button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partners -->
	
<!-- footers 20 -->
  <section class="w3l-footers-20">
  <div class="footers20">
    <div class="container">
      <div class="footers20-content">
        <div class="d-grid grid-col-4 grids-content">
          <div class="column">
            {{-- <a href="#url" class="link"><span class="fa fa-comments"></span></a> --}}
            <a href="#url" class="title-small">About US</a>
            <h4 style="color: #636769; font-size: 18px; font-family: 'Kumbh Sans', sans-serif;">RentGage helps simplify acquisition of home via Mortgage.
RentGage help you pay your rent conveniently monthly.</h4>

           {{--  <a href="#buytheme" class="btn btn-style btn-primary"> Schedule now
              <span class="fa fa-long-arrow-right ml-2"></span> </a> --}}
          </div>
          <div class="column">
           {{--  <a href="#url" class="link"><span class="fa fa-phone"></span></a> --}}
            <a href="#url" class="title-small">We are Social</a>
         {{--    <h4>Do you have questions or want more infomation? Call Now</h4> --}}
            {{-- <a href="tel:+1-2345-678-11">
              <p class="contact-phone mt-2"><span class="lnr lnr-phone-handset"></span> +1-2345-678-11
              </p>
            </a> --}}
            <ul class="footers-17_social">
              {{-- <h4 class="d-inline mr-4">Follow us</h4> --}}
              <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="column mt-lg-0 mt-md-5">
            <a href="#url" class="title-small">Download Rentgage App Here</a>
           {{--  <h4 class="mb-1">Download RentGage App Here</h4>
            <p>and get latest news and updates</p> --}}
           {{--  <form action="#" class="subscribe-form mt-4" method="post">
              <div class="form-group">
                <input type="email" name="subscribe" placeholder="Enter your email" required="">
                <button class="btn btn-style btn-primary">Subscribe</button>
              </div>
            </form> --}}
           {{--  <ul class="footers-17_social">
              <h4 class="d-inline mr-4">Follow us</h4>
              <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
            </ul> --}}
            <p style="margin-left: -10px;"><a href="#"><img src="assets/images/google.png" width="150" alt=""></a> <a href="#"><img src="assets/images/app.png" width="150" height="40" alt=""></a></p>
          </div>
        </div>
{{-- 
        <section class="w3l-bottom-grids py-5" id="steps">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box no-box-shadow text-left">
                    <span class="fa fa-search-plus"></span>
                    <h5>All in one place</h5>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box no-box-shadow text-left">
                    <span class="fa fa-user-o"></span>
                    <h5>Connect to an agent</h5>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box no-box-shadow text-left">
                    <span class="fa fa-home"></span>
                    <h5>Get a home valuation</h5>
                    
                </div>
            </div>
        </div>
    </div>
</section> --}}

        


        <div class="d-grid grid-col-3 grids-content1 bottom-border1" style="width: 800px; position: relative; left: 300px;">
          <div class="row">
          <div style="margin-right:-60px; " class="col-md-2"><a href="">About Us</a></div>&nbsp; &nbsp;|
          <div style="margin-right:-30px; " class="col-md-2"><a href="">How It Work</a></div>&nbsp; |
          <div style="margin-right:-90px; " class="col-md-2"><a href="">FAQ</a></div>&nbsp;&nbsp; |
          <div style="margin-right:-30px; " class="col-md-2"><a href="">Term of Use</a></div>&nbsp; |
          <div style="margin-right:-30px; " class="col-md-2"><a href="">Private Policy</a></div>&nbsp;&nbsp; |
          <div class="col-md-2"><a href="">Contact Us</a></div>
        </div>
        {{-- <div class="row">
           <div class="columns copyright-grid align-self">
             <p class="copy-footer-29">© 2020 Estate sale. All rights reserved | Designed by <a
                 href="https://w3layouts.com">W3layouts</a></p>
           </div>
        </div> --}}
          
        </div>



        
       
      
      </div>
    </div>
  </div>

  <div class="container-fluid">
     <div class="row" style="margin-top: 30px;background-color: #000; height: 80px">
           <div class="columns copyright-grid align-self">
             <p class="copy-footer-29" style="margin-left: 550px;color: #fff">© 2021 All Right Reserved
           </div>
        </div>
  </div>

  
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for blog post slider -->
<script>
  $(document).ready(function () {
    $('.owl-blog').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        700: {
          items: 1,
          nav: true
        },
        1090: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for blog post slider -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      margin: 50,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
