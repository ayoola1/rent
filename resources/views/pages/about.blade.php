@extends('layouts.pages')

@section('content')
    <!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ol>
						<h1 class="breadcrumb_title">About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="mt0">Our Mission Is To FindHouse</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-xl-7">
					<div class="about_content">
						<p class="large">Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate porttitor sed feugiat nunc. Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor, lectus orci elementum augue, eget auctor metus ante sit amet velit.</p>
						<p>Maecenas quis viverra metus, et efficitur ligula. Nam congue augue et ex congue, sed luctus lectus congue. Integer convallis condimentum sem. Duis elementum tortor eget condimentum tempor. Praesent sollicitudin lectus ut pharetra pulvinar. Donec et libero ligula. Vivamus semper at orci at placerat.Placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla quae alias tempora.</p>
						<ul class="ab_counting">
							<li class="list-inline-item">
								<div class="about_counting">
									<div class="icon"><span class="flaticon-user"></span></div>
									<div class="details">
										<h3>80,123</h3>
										<p>Customers to date</p>
									</div>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="about_counting">
									<div class="icon"><span class="flaticon-home"></span></div>
									<div class="details">
										<h3>$74 Billion</h3>
										<p>In home sales</p>
									</div>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="about_counting">
									<div class="icon"><span class="flaticon-transfer"></span></div>
									<div class="details">
										<h3>$468 Million</h3>
										<p>In Savings</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-xl-5">
					<div class="about_thumb">
						<img class="img-fluid w100" src="{{asset('images/about/1.jpg')}}" alt="1.jpg">
						<a class="popup-iframe popup-youtube color-white" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y"><i class="flaticon-play"></i></a>
					</div>
				</div>
			</div>
			<div class="row mt50">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Why Choose Us</h2>
						<p>We provide full service at every step.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Trusted By Thousands</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Renge Of Properties</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Financing Made Easy</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Team -->
	<section class="our-team bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Our Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="team_slider">
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/1.jpg')}}" alt="1.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Jennifer Barton</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/2.jpg')}}" alt="2.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Kathleen Myers</h4>
									<p>Agent</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/3.jpg')}}" alt="3.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Mariusz Ciesla</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/4.jpg')}}" alt="4.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Helene Powers</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/1.jpg')}}" alt="1.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Jennifer Barton</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/2.jpg')}}" alt="2.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Kathleen Myers</h4>
									<p>Agent</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/3.jpg')}}" alt="3.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Mariusz Ciesla</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{asset('images/team/4.jpg')}}" alt="4.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Helene Powers</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <section class="our-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb20">
						<h2>Testimonials</h2>
						<p>Here could be a nice sub title</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonial_grid_slider style2">
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{asset('images/testimonial/1.jpg')}}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{asset('images/testimonial/1.jpg')}}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{asset('images/testimonial/1.jpg')}}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{asset('images/testimonial/1.jpg')}}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{asset('images/testimonial/1.jpg')}}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection