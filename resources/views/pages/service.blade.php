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
						    <li class="breadcrumb-item active" aria-current="page">Service</li>
						</ol>
						<h1 class="breadcrumb_title">Service</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Service Section Area -->
	<section class="our-service pb30">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/1.jpg')}}" alt="1.jpg">
						</div>
						<div class="details">
							<h4>Redfin Ranks the Most Competitive Neighborhoods of 2020</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/2.jpg')}}" alt="2.jpg">
						</div>
						<div class="details">
							<h4>Why We Should All Support Clear Cooperation</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/3.jpg')}}" alt="3.jpg">
						</div>
						<div class="details">
							<h4>12 Walkable Cities Where You Can Live Affordably</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/4.jpg')}}" alt="4.jpg">
						</div>
						<div class="details">
							<h4>Redfin Unveils the Best Canadian Cities for Biking</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/5.jpg')}}" alt="5.jpg">
						</div>
						<div class="details">
							<h4>You Can Buy The Piano Teacher’s Home from Groundhog Day</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/6.jpg')}}" alt="6.jpg">
						</div>
						<div class="details">
							<h4>Redfin Ranks the Most Competitive Neighborhoods of 2020</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/7.jpg')}}" alt="7.jpg">
						</div>
						<div class="details">
							<h4>Housing Markets That Changed the Most This Decade</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/8.jpg')}}" alt="8.jpg">
						</div>
						<div class="details">
							<h4>Redfin Unveils the Best Canadian Cities for Biking</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('images/service/9.jpg')}}" alt="9.jpg">
						</div>
						<div class="details">
							<h4>12 Walkable Cities Where You Can Live Affordably</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partners -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Become a Real Estate Agent</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection     