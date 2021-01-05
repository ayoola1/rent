@extends('layouts.the_pages')

@section('content')

<section class="locations-1" id="locations" >
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row" style="margin-top: -170px;">
               
               @foreach($properties as $property)
                <div class="col-lg-4 col-md-6 listing-img mt-5 pt-md-2">
                    <a href="{{route('single',$property->id)}}">
                        <div class="box16">
                            <div class="rentext-listing-category"><span>{{$property->contract_type}}</span></div>
                            <img class="img-fluid" height="200" width="200" src="property_images/{{$property->image}}" alt="">
                            <div class="box-content">
                                <h3 class="title">#{{number_format($property->price,0,'',',')}}</h3>

                            </div>


                        </div>
                    </a>
                    <div class="listing-details blog-details align-self">
                        <h4 class="user_title agent">
                            <a href="#url">{{$property->name}}</a>
                        </h4>
                        <p class="user_position">{{$property->address}}</p>
                        <ul class="mt-3 estate-info">
                            <li><span class="fa fa-bed"></span> {{$property->bed}} Bed</li>
                            <li><span class="fa fa-shower"></span> {{$property->bath}} Baths</li>
                            {{-- <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li> --}}
                        </ul>
                       {{--  <div class="author align-items-center mt-4">
                            <a href="#img" class="comment-img">
                                <img src="assets/images/team4.jpg" alt="" class="img-fluid">
                            </a>
                            <ul class="blog-meta">
                                <li>
                                    <a href="#url">Laura Antiochus </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Selling agent</span>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                
               @endforeach
              
               
            </div>

            <!-- pagination -->
            <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                <ul class="page-pagination">
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="#url">2</a></li>
                    <li><a class="page-numbers" href="#url">3</a></li>
                    <li><a class="page-numbers" href="#url">...</a></li>
                    <li><a class="page-numbers" href="#url">15</a></li>
                    <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
            <!-- //pagination -->
        </div>
    </div>
</section>

@endsection