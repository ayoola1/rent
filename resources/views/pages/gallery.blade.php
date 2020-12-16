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
						    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
						</ol>
						<h1 class="breadcrumb_title">Gallery</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section pb30">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp1.jpg')}}" alt="fp1.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp1.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp2.jpg')}}" alt="fp2.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp2.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp3.jpg')}}" alt="fp3.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp3.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp4.jpg')}}" alt="fp4.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp4.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp5.jpg')}}" alt="fp5.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp5.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp6.jpg')}}" alt="fp6.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp6.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp7.jpg')}}" alt="fp7.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp7.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp8.jpg')}}" alt="fp8.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp8.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="gallery_item">
						<img class="img-fluid img-circle-rounded w100" src="{{asset('images/property/fp9.jpg')}}" alt="fp9.jpg">
						<div class="gallery_overlay"><a class="icon popup-img" href="{{asset('images/property/fp9.jpg')}}"><span class="flaticon-zoom-in"></span></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection