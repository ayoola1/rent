@extends('layouts.the_master')

@section('content')

  <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          {{-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
 --}}
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

             @include('includes.header_part')

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
               {{--  <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> --}}
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">You are Applying for a {{$property->name}}</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="position: relative;left: 250px;">All Fields are Required</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  @include('includes.has_error')
                     @include('includes.success_message')
                  <div class="row">
                     
                      <div class="col-md-3"></div>
                      
                      <div class="col-md-6">
                          <form action="{{route('note.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="property_id" value="{{$property->id}}">
                            <input type="hidden" name="status" value="0">
                            <div class="form-group">
                               <label for="Title">Title:</label>
                               <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                               <label for="Body">Body:</label>
                              <textarea name="body" id="" cols="30" rows="10" class="form-control" style="height: 129px;" spellcheck="false"></textarea>
                            </div>
                            <input type="submit" class="btn btn-success" value="Submit">
                          </form>
                      </div>
                  </div>
                  
                    
                   
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="position: relative;left: 70px;">Property Information</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 
                 <div class="row">
                   
                   <div class="col-md-7">
                       <div class="row">

                         
                          
                          <div class="col-md-12">
                               
                                <label for="name">Price:</label>
                                 #{{number_format($property->price,0,'',',')}}
                             
                          </div>
                         
                       </div>

                       <div class="row">
                          <div class="col-md-12">
                            <label for="name">Address:</label>
                              {{$property->address}}
                          </div>
                          
                       </div>


                        <div class="row">
                          <div class="col-md-12">
                            <label for="name">No of Bedrooms:</label>
                              {{$property->bed}}
                          </div>
                          
                       </div>

                       <div class="row">
                          <div class="col-md-12">
                            <label for="name">Type:</label>
                              {{$property->type->name}}
                          </div>
                          
                       </div>

                       <div class="row">
                          <div class="col-md-12">
                            <label for="name">Tenant: </label>
                            
                              {{$property->tenant ? $property->tenant->user->name : 'No Tenant yet'}}


                              @if($property->tenant)
                                 
                                @else

                              @if(Auth::user()->role->name != 'tenant')
                                  
                              | 
                                 <a href="{{route('theshow',$property->id)}}">Add Tenant</a>

                              @endif   
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
                   </div>
                   <div class="col-md-5">
                     
                  <img  src="/property_images/{{$property->image}}" style="border-radius: 50%; position: relative; left: 20px" class="img-responsive img-circle" width="90" height="90" alt="">
                   </div>

                 </div>




                 {{--  <img  src="/property_images/{{$property->image}}" style="border-radius: 50%; position: relative; left: 20px" class="img-responsive img-circle" width="200" height="200" alt=""> --}}
                  
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

      </div>

@endsection        

     


