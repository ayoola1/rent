@extends('layouts.the_master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$property->name}}</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="position: relative;left: 250px;">Property Information</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 
                <form action="">
                  
                  <div class="row">
                     <div class="col-md-12">
                         
                           <label for="name">Price:</label>

                           #<input type="text" class="form-control" value="{{number_format($property->price,0,'',',')}}" readonly="">
                            
                        
                     </div>
                    
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                       <label for="name">Address:</label>
                       <input type="text" class="form-control" value="{{$property->address}}" readonly="">
                        
                     </div>
                     
                  </div>


                   <div class="row">
                     <div class="col-md-12">
                       <label for="name">No of Bedrooms:</label>
                       <input type="text" class="form-control" value="{{$property->bed}}" readonly="">
                         
                     </div>
                     
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                       <label for="name">Type:</label>
                        <input type="text" class="form-control" value="{{$property->type->name}}" readonly="">
                         
                     </div>
                     
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                       <label for="name">Tenant: </label>

                        <select name="" id="" class="form-control">
                        <option value="">Select options</option>

                            
                                 <option value="{{$property->tenant->id}}">{{$property->tenant->user->name}}</option>
                            
                            
                        </select>

                        @if($property->tenant->id = false)
                          
                          {{'No Tenant yet'}}
                         | <a href="{{route('property.edit',$property->id)}}">Add Tenant</a>

                           @else

                           {{$property->tenant->user->name}}
                         | <a href="{{route('property.edit',$property->id)}}">Add Tenant</a>

                        @endif
                        
                         
                     </div>
                     
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                       <label for="name">Lordlord: </label>
                         {{$property->landlord->user->name}}
                     </div>
                     
                  </div>

                   <div class="row">
                     <div class="col-md-12">
                       <label for="name">Status: </label>
                         {{-- {{$property->status}} --}}
                         @if($property->status == 1)
                            {{'Active'}}
                            @else
                             {{'Not Active'}}
                         @endif
                     </div>
                     
                  </div>

                </form> 
                     


                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="position: relative;left: 120px;">Photo</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 
                  <img  src="/property_images/{{$property->image}}" style="border-radius: 50%; position: relative; left: 50px" class="img-responsive img-circle" width="200" height="200" alt="">
                  
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            

            
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection        

     


