<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 14:24:57 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/dashbord_navitaion.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<!-- Title -->
<title>FindHouse - Real Estate HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

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
	<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="images/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png">
		            <span>FindHouse</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		           {{--  <li>
		                <a href="#"><span class="title">Home</span></a>
		                <!-- Level Two-->
		                <ul>
		                    <li><a href="index-2.html">Home 1</a></li>
		                    <li><a href="index2.html">Home 2</a></li>
		                    <li><a href="index3.html">Home 3</a></li>
		                    <li><a href="index4.html">Home 4</a></li>
		                    <li><a href="index5.html">Home 5</a></li>
		                    <li><a href="index6.html">Home 6</a></li>
		                    <li><a href="index7.html">Home 7</a></li>
		                    <li><a href="index8.html">Home 8</a></li>
		                    <li><a href="index9.html">Home 9</a></li>
		                    <li><a href="index10.html">Home 10</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Listing</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    <li>
		                        <a href="#">Listing Grid</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
		                            <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
		                            <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
		                            <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
		                            <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
		                            <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing List</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-list.html">List V1</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing Style</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-parallax.html">Parallax Style</a></li>
		                            <li><a href="page-listing-slider.html">Slider Style</a></li>
		                            <li><a href="page-listing-map.html">Map Header</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing Half</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
		                            <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
		                            <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
		                            <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Agent View</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
		                            <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
		                            <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Agencies View</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-agencies-v1.html">Agencies V1</a></li>
		                            <li><a href="page-listing-agencies-v2.html">Agencies V2</a></li>
		                            <li><a href="page-listing-agencies-v3.html">Agencies Details</a></li>
		                        </ul>
		                    </li>
                            <li><a href="page-add-new-property.html">Create Listing</a></li>
	                	</ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Property</span></a>
		                <ul>
		                    <li>
		                        <a href="#">User Admin</a>
		                        <ul>
				                    <li><a href="page-dashboard.html">Dashboard</a></li>
				                    <li><a href="page-my-properties.html">My Properties</a></li>
				                    <li><a href="page-message.html">My Message</a></li>
				                    <li><a href="page-my-review.html">My Review</a></li>
				                    <li><a href="page-my-favorites.html">My Favorites</a></li>
				                    <li><a href="page-add-new-property.html">Add Property</a></li>
				                    <li><a href="page-my-profile.html">My Profile</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing Single</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-single-v1.html">Single V1</a></li>
		                            <li><a href="page-listing-single-v2.html">Single V2</a></li>
		                            <li><a href="page-listing-single-v3.html">Single V3</a></li>
		                            <li><a href="page-listing-single-v4.html">Single V4</a></li>
		                            <li><a href="page-listing-single-v5.html">Single V5</a></li>
		                        </ul>
		                    </li>
                            <li><a href="page-add-new-property.html">Create Listing</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Pages</span></a>
		                <ul>
				            <li>
				                <a href="#"><span class="title">Pages</span></a>
				                <ul>
				                    <li><a href="page-shop.html">Shop</a></li>
				                    <li><a href="page-shop-single.html">Shop Single</a></li>
				                    <li><a href="page-shop-cart.html">Cart</a></li>
				                    <li><a href="page-shop-checkout.html">Checkout</a></li>
				                    <li><a href="page-shop-order.html">Order</a></li>
				                </ul>
				            </li>
		                    <li><a href="page-about.html">About Us</a></li>
		                    <li><a href="page-gallery.html">Gallery</a></li>
		                    <li><a href="page-faq.html">Faq</a></li>
		                    <li><a href="page-login.html">LogIn</a></li>
			                <li><a href="page-compare.html">Membership</a></li>
			                <li><a href="page-compare2.html">Membership 2</a></li>
		                    <li><a href="page-register.html">Register</a></li>
		                    <li><a href="page-service.html">Service</a></li>
		                    <li><a href="page-error.html">404 Page</a></li>
		                    <li><a href="page-terms.html">Terms and Conditions</a></li>
		                    <li><a href="page-ui-element.html">UI Elements</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Blog</span></a>
		                <ul>
		                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
		                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
		                    <li><a href="page-blog-single.html">Single Post</a></li>
		                </ul>
		            </li> --}}
		            {{-- <li class="last">
		                <a href="page-contact.html"><span class="title">Contact</span></a>
		            </li> --}}
	                <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"> <span class="dn-1199">{{Auth::user()->name}}</span></a>
						    <div class="dropdown-menu">
						    	<div class="user_set_header">
						    		<img class="float-left" src="images/team/e1.png" alt="e1.png">
							    	<p>Ali Tufan <br><span class="address"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="22434e4b565744434c62454f434b4e0c414d4f">[email&#160;protected]</a></span></p>
						    	</div>
						    	<div class="user_setting_content">
									<a class="dropdown-item active" href="#">My Profile</a>
									<a class="dropdown-item" href="#">Messages</a>
									<a class="dropdown-item" href="#">Purchase history</a>
									<a class="dropdown-item" href="#">Help</a>
									<a class="dropdown-item" href="#">Log out</a>
						    	</div>
						    </div>
						</div>
			        </li>
	                <li class="list-inline-item add_listing"><a href="page-add-new-property.html"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	                <ul>
	                    <li><a href="index-2.html">Home 1</a></li>
	                    <li><a href="index2.html">Home 2</a></li>
	                    <li><a href="index3.html">Home 3</a></li>
	                    <li><a href="index4.html">Home 4</a></li>
	                    <li><a href="index5.html">Home 5</a></li>
	                    <li><a href="index6.html">Home 6</a></li>
	                    <li><a href="index7.html">Home 7</a></li>
	                    <li><a href="index8.html">Home 8</a></li>
	                    <li><a href="index9.html">Home 9</a></li>
	                    <li><a href="index10.html">Home 10</a></li>
	                </ul>
				</li>
				<li><span>Listing</span>
					<ul>
						<li><span>Listing Grid</span>
							<ul>
	                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
	                            <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
	                            <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
	                            <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
	                            <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
	                            <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
							</ul>
						</li>
						<li><span>Listing Style</span>
							<ul>
	                            <li><a href="page-listing-parallax.html">Parallax Style</a></li>
	                            <li><a href="page-listing-slider.html">Slider Style</a></li>
	                            <li><a href="page-listing-map.html">Map Header</a></li>
							</ul>
						</li>
						<li><span>Listing Half</span>
							<ul>
	                            <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
	                            <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
	                            <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
	                            <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
							</ul>
						</li>
						<li><span>Agent View</span>
							<ul>
	                            <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
	                            <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
	                            <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
							</ul>
						</li>
						<li><span>Agencies View</span>
							<ul>
	                            <li><a href="page-agencies-list-v1.html">Agencies V1</a></li>
	                            <li><a href="page-agencies-list-v2.html">Agencies V2</a></li>
	                            <li><a href="page-agencies-list-v3.html">Agencies Details</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Property</span>
					<ul>
						<li><span>Property</span>
							<ul>
					            <li><a href="page-dashboard.html">Dashboard</a></li>
			                    <li><a href="page-my-properties.html">My Properties</a></li>
			                    <li><a href="page-add-new-property.html">Add New Property</a></li>
							</ul>
						</li>
						<li><span>Listing Single</span>
							<ul>
	                            <li><a href="page-listing-single-v1.html">Single V1</a></li>
	                            <li><a href="page-listing-single-v2.html">Single V2</a></li>
	                            <li><a href="page-listing-single-v3.html">Single V3</a></li>
	                            <li><a href="page-listing-single-v4.html">Single V4</a></li>
	                            <li><a href="page-listing-single-v5.html">Single V5</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Blog</span>
					<ul>
	                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
	                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
	                    <li><a href="page-blog-single.html">Single Post</a></li>
					</ul>
				</li>
				<li><span>Pages</span>
					<ul>
						<li><span>Shop</span>
							<ul>
			                    <li><a href="page-shop.html">Shop</a></li>
			                    <li><a href="page-shop-single.html">Shop Single</a></li>
			                    <li><a href="page-shop-cart.html">Cart</a></li>
			                    <li><a href="page-shop-checkout.html">Checkout</a></li>
			                    <li><a href="page-shop-order.html">Order</a></li>
							</ul>
						</li>
		                <li><a href="page-about.html">About Us</a></li>
		                <li><a href="page-gallery.html">Gallery</a></li>
		                <li><a href="page-faq.html">Faq</a></li>
		                <li><a href="page-login.html">LogIn</a></li>
		                <li><a href="page-compare.html">Membership</a></li>
		                <li><a href="page-compare2.html">Membership 2</a></li>
	                    <li><a href="page-register.html">Register</a></li>
	                    <li><a href="page-service.html">Service</a></li>
		                <li><a href="page-error.html">404 Page</a></li>
		                <li><a href="page-terms.html">Terms and Conditions</a></li>
		                <li><a href="page-ui-element.html">UI Elements</a></li>
					</ul>
				</li>
				<li><a href="page-contact.html">Contact</a></li>
				<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>

    <div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header"><img src="images/header-logo2.png" alt="header-logo2.png"> FindHouse</li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview"><a href="{{route('admin')}}"><i class="flaticon-layers"></i><span> Dashboard
	    	</span></a></li>

	    	<li class="treeview">
		        {{-- <a href="{{route('admin-profile')}}"><i class="flaticon-user"></i> <span>Profile</span><i class="fa fa-angle-down pull-right"></i></a> --}}
		        <ul class="treeview-menu">
		        	<li><a href="{{route('profile.index')}}"><i class="fa fa-circle"></i>View Profile</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Change Password</a></li>
		        	
		        </ul>
	      	</li>

	    	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Landlord</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>View Landlords</a></li>
		        	{{-- <li><a href="#"><i class="fa fa-circle"></i> Advanced Elements</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i> Editors</a></li> --}}
		        </ul>
	      	</li>

	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Tenant</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>View Tenants</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Tenant Oustanding</a></li>
		        	{{-- <li><a href="#"><i class="fa fa-circle"></i> Editors</a></li> --}}
		        </ul>
	      	</li>


	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Properties</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>Properties Mortgages</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Properties Rent</a></li>
		        	{{-- <li><a href="#"><i class="fa fa-circle"></i> Editors</a></li> --}}
		        </ul>
	      	</li>


	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Bill</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>View Bills</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Bill Payment Records</a></li>
		        	{{-- <li><a href="#"><i class="fa fa-circle"></i> Editors</a></li> --}}
		        </ul>
	      	</li>

	   		{{-- <li class="title"><span>Manage Listings</span></li> --}}
	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Wallet Account</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>Deposit Funds</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Make Withdrawal</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Make Payment</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Wallet Transaction</a></li>
		        </ul>
	      	</li>
	      	
             
             <li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Contract Document</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>View Contract</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Contract Type</a></li>
		        	
		        </ul>
	      	</li>

	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Reports</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>Bill Payment  Report</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Wallet Cash Flow</a></li>
		            <li><a href="#"><i class="fa fa-circle"></i>Property Report</a></li>
		        	
		        </ul>
	      	</li>

	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Loan</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>Loan Offers</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>Applied Loans</a></li>
		            <li><a href="#"><i class="fa fa-circle"></i>Loan Payment Report</a></li>
		        	
		        </ul>
	      	</li>


		    
		    <li><a href="{{route('logout')}}"><i class="flaticon-logout"></i> <span>Logout</span></a></li>
	    </ul>
    </div>


	<!-- Our Dashbord -->
@yield('content')


<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/chart-custome.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/progressbar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dashboard-script.js')}}"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 14:24:58 GMT -->
</html>