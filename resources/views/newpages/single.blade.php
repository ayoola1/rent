@extends('layouts.the_pages')

@section('content')



<!--/blog-post-->
<section class="w3l-blog post-content py-5">
    <div class="container py-lg-4 py-md-3 py-2">
        {{-- <div class="inner mb-4">
            <ul class="blog-single-author-date align-items-center">
                <li>
                    <div class="listing-category"><span>Buy</span><span>Rent</span></div>
                </li>
                <li><span class="fa fa-clock-o"></span> 5 months ago</li>
                <li><span class="fa fa-eye"></span> 250 views</li>
            </ul>
        </div> --}}
        <div class="post-content">
            <h2 class="title-single">{{$property->name}} <span style="font-size: 15px;margin-left: 12px;">{{$property->contract_type}}</span></h2>
        </div>
        <div class="blo-singl mb-4">
            <ul class="blog-single-author-date align-items-center">
                <li>
                    <p>{{$property->address}}</p>
                </li>
                <li><span class="fa fa-bed"></span> {{$property->bed}} Beds</li>
                <li><span class="fa fa-bath"></span> {{$property->bath}} Baths</li>
                {{-- <li><span class="fa fa-share-square-o"></span> 1258 sqrft</li> --}}
            </ul>
           {{--  <ul class="share-post">
                <a href="#url" class="cost-estate m-o">#{{number_format($property->price,0,'',',')}}</a>
            </ul> --}}
        </div>
        <div class="row">
            <div class="col-lg-8 w3l-news">
                <div class="blog-single-post">
                    <div class="single-post-image mb-5">
                        {{-- <div class="owl-blog owl-carousel owl-theme">
                            <div class="item">
                                <div class="card">
                                    <img src="assets/images/p1.jpg" class="img-fluid radius-image" alt="image">
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img src="assets/images/p2.jpg" class="img-fluid radius-image" alt="image">
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img src="assets/images/p3.jpg" class="img-fluid radius-image" alt="image">
                                </div>
                            </div>
                        </div> --}}
                         <img class="img-fluid" height="500" width="800" src="../property_images/{{$property->image}}" alt="">
                    </div>

                    <div class="single-post-content">
                        <h3 class="post-content-title mb-3">Description</h3>
                        <p class="mb-4">

                             {{$property->propert_desc}}

                            </p>
                       
                        <div class="single-bg-white">
                            <h3 class="post-content-title mb-4">Property detail</h3>
                            <ul class="details-list">
                               
                                <li><strong>Bedrooms :</strong> {{$property->bed}} </li>
                                <li><strong>Bathrooms :</strong> {{$property->bath}} </li>
                                <li><strong>Kitchen :</strong>{{$property->kitchen}} </li>
                                <li><strong>Utilities :</strong>

                                    <?php
                                       $sam = explode(',',$property->utilities);

                                       foreach ($sam as $value) {
                                         
                                           echo "<br>".$value.".";
                                       }

                                    ?>
                                     
                                </li>
                               
                            </ul>
                        </div>
                        
                    </div>

                    <div class="single-bg-white">
                        <h3 class="post-content-title mb-4">Location</h3>
                        <div class="agent-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                                frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>

                   
                </div>
            </div>
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5" style="position:relative;top: -120px;">
                <aside class="sidebar">

                    <!-- Popular Post Widget-->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <a href="#url" class="cost-estate m-o">#{{number_format($property->price,0,'',',')}}</a> per year
                        </div>
                     <hr>
                        <article class="post">
                            {{-- <figure class="post-thumb"><img src="assets/images/l5.jpg" class="radius-image" alt="">
                            </figure> --}}
                            <div class="text mb-0"><a href="#blog-single">Total cost Breakdown {{-- {{$user->id}} --}}
                                </a>
                                <div class="post-info">Price per year:   <span style="margin-left: 107px;">#{{number_format($property->price,0,'',',')}}</span></div>
                                <div class="post-info">Agency and Agreement fee: &nbsp; &nbsp; # 0</div>
                            </div>
                        </article>
                          @auth
                           {{-- <button type="submit" class="btn btn-primary btn-style w-100">Rent now</button> --}}
                           <a href="{{route('account',$property->id)}}" class="btn btn-primary btn-style w-100">Rent Now</a>
                          @else
                         {{--  <button type="submit" class="btn btn-primary btn-style w-100">Rent now</button> --}}
                          <a href="{{route('login')}}" class="btn btn-primary btn-style w-100">Rent Now</a>
                        @endauth
                        
                    </div>


                    <!-- Popular Post Widget-->
                    {{-- <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Popular Post</h4>
                        </div>

                        <article class="post">
                            <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt="">
                            </figure>
                            <div class="text"><a href="#blog-single">Why we are the best in the business
                                </a>
                                <div class="post-info">Sep 09, 2020 - 2 comments</div>
                            </div>
                        </article>

                        <article class="post">
                            <figure class="post-thumb"><img src="assets/images/l2.jpg" class="radius-image" alt="">
                            </figure>
                            <div class="text"><a href="#blog-single">Build your next landing page.
                                </a>
                                <div class="post-info">Sep 09, 2020 - 2 comments</div>
                            </div>
                        </article>

                        <article class="post">
                            <figure class="post-thumb"><img src="assets/images/l3.jpg" class="radius-image" alt="">
                            </figure>
                            <div class="text"><a href="#blog-single">
                                    Simply the best. Better than the rest.</a>
                                <div class="post-info">Sep 10, 2020 - 2 comments</div>
                            </div>
                        </article>

                    </div> --}}

                </aside>
            </div>
        </div>
    </div>
</section>
<!--//blog-posts-->


@endsection