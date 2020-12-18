 <!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 14:24:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
    <meta name="description" content="FindHouse - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Title -->
    <title>FindHouse - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_one home7 navbar-scrolltofixed stricky main-menu">
            <div class="container p0">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="{{asset('images/header-logo')}}.png" alt="header-logo.png">
                        <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </div>
                    <a href="#" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="{{asset('images/header-logo.png')}}" alt="header-logo.png">
                        <img class="logo2 img-fluid" src="{{asset('images/header-logo2.png')}}" alt="header-logo2.png">
                        <span>FindHouse</span>
                    </a>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                        <li>
                            <a href="#"><span class="title">Home</span></a>
                        </li>
                        <li>
                            <a href="{{route('property_index')}}"><span class="title">Property</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="title">Pages</span></a>
                            <ul>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('faq')}}">Faq</a></li>
                                <li><a href="{{route('service')}}">Service</a></li>
                                <li><a href="{{route('terms')}}">Terms and Conditions</a></li>
                            </ul>
                        </li>
                        <li class="last">
                            <a href="{{route('contact')}}"><span class="title">Contact</span></a>
                        </li>                   
                        <li class="list-inline-item list_s">
                            <a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-lg">Login/Register</span></a>
                        </li>

                        <li class="list-inline-item add_listing"><a href="page-add-new-property.html"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Modal -->


        <div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body container pb20">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content container" id="myTabContent">
                            <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="login_thumb">
                                        <img class="img-fluid w100" src="{{asset('images/resource/login.jpg')}}" alt="login.jpg">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="login_form">
                                        <form action="{{route('login')}}" method="POST">
                                            @csrf
                                            <div class="heading">
                                                <h4>Login</h4>
                                            </div>
                                            <div class="row mt25">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="inlineFormInputGroupUsername2" placeholder="User Name Or Email">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-user"></i></div>
                                                </div>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                            <div class="input-group form-group">
                                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" id="exampleInputPassword1" placeholder="Password">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-password"></i></div>
                                                </div>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                            <div class="form-group custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                                <a class="btn-fpswd float-right" href="#">Lost your password?</a>
                                            </div>
                                            <button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
                                            <p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="regstr_thumb">
                                        <img class="img-fluid w100" src="{{asset('images/resource/regstr.jpg')}}" alt="regstr.jpg">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-xl-6">
                                    <div class="sign_up_form">
                                        <div class="heading">
                                            <h4>Register</h4>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                           @csrf
                                            <div class="form-group input-group">
                                                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" id="exampleInputName" placeholder="Name" required>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-user"></i></div>
                                                </div>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group input-group">
                                                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="exampleInputEmail2" placeholder="Email" required="">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                                </div>
                                                  @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                  @endif
                                            </div>

                                            <div class="form-group input-group">
                                                
                                                <input type="text" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" id="exampleInputPassword2" placeholder="Phone number" required="">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-password"></i></div>
                                                </div>

                                                 @if ($errors->has('phone_number'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="form-group input-group">
                                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword2" placeholder="Password" name="password" required="">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-password"></i></div>
                                                </div>

                                                  @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group input-group">
                                                <input type="password" class="form-control" id=" exampleInputPassword3" name="password_confirmation" placeholder="Re-enter password">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="flaticon-password"></i></div>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group ui_kit_select_search mb0">
                                                <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="SelectRole">Single User</option>
                                                <option data-tokens="Agent/Agency">Agent</option>
                                                <option data-tokens="SingleUser">Multi User</option>
                                            </select>
                                            </div> --}}
                                            {{-- <div class="form-group custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                                <label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
                                            </div> --}}
                                            <button type="submit"  class="btn btn-log btn-block btn-thm">Sign Up</button>
                                            <p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2 text-center">
                        <img class="nav_logo_img img-fluid mt20" src="{{asset('images/header-logo2.png')}}" alt="header-logo2.png">
                        <span class="mt20">FindHouse</span>
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="#">Home </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('property_index')}}"><span class="title">Property</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="title">Pages</span></a>
                        <ul>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                            <li><a href="{{route('faq')}}">Faq</a></li>
                            <li><a href="{{route('service')}}">Service</a></li>
                            <li><a href="{{route('terms')}}">Terms and Conditions</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
                    <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
                    <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
                </ul>
            </nav>
        </div>      




@yield('content')



        <!-- Our Footer -->
        <section class="footer_one home5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
                        <div class="footer_about_widget home5">
                            <h4>About Site</h4>
                            <p>We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_qlink_widget home5">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">User’s Guide</a></li>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Press Info</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget home5">
                            <h4>Contact Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="__cf_email__" data-cfemail="0b62656d644b6d62656f63647e786e25686466">[email&#160;protected]</span></a></li>
                                <li><a href="#">Collins Street West, Victoria</a></li>
                                <li><a href="#">8007, Australia.</a></li>
                                <li><a href="#">+1 246-345-0699</a></li>
                                <li><a href="#">+1 246-345-0695</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_social_widget home5">
                            <h4>Follow us</h4>
                            <ul class="mb30">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <h4>Subscribe</h4>
                            <form class="footer_mailchimp_form home5">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer Bottom Area -->
        <section class="footer_middle_area home5 pt30 pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="footer_menu_widget home5">
                            <ul>
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">Property</a></li>
                                <li class="list-inline-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item"><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="copyright-widget home5 text-right">
                            <p>© 2020 Find House. Made with love.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome home7" href="#"><i class="flaticon-arrows"></i></a>
    </div>
    <!-- Wrapper End -->
    <script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ace-responsive-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/isotop.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/snackbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/simplebar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scrollto.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/timepicker.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/googlemaps1.js')}}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 14:24:10 GMT -->

</html>