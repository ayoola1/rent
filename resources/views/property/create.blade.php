@extends('layouts.the_master')


@section('styles')

   <link rel="stylesheet" href="{{asset('my_asset/css/dropzone.min.css')}}">

@endsection


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
                @include('includes.user_photo')
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
            <h1 class="h3 mb-0 text-gray-800">Create Property</h1>
           
          </div>

          <!-- Content Row -->
         
          <!-- Content Row -->

          <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
              @include('includes.has_error')
              @include('includes.success_message')

             
              <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
                
                @csrf
                  <input type="hidden" value="{{$user->id}}" name="user_id">
                  <input type="hidden" value="1" name="landlord_id">
                  <input type="hidden" value="1" name="status">


                  <div class="row">

                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="">Property Type</label>
                        <select name="type_id" id="" class="form-control">
                          <option value="">Select Options</option>
                           @foreach($types as $type)
                               <option value="{{$type->id}}">{{$type->name}}</option>
                           @endforeach
                             
                        </select>
                     </div>  
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="">Contract Type:</label>
                        <select name="contract_type" id="" class="form-control">
                          <option value="">Select Options</option>
                          <option value="Rent to Own">Rent to Own</option>
                          <option value="Rent to Use(Shared)">Rent to Use(Shared)</option>
                          <option value="Rent to Use(Entire)">Rent to Use(Entire)</option>   
                        </select>
                     </div>
                  </div>
                
                </div>



                <div class="row">
                  
                  <div class="col-md-6">
                      <div class="form-group">
                         <label for="">Property Address:</label>
                         <input type="text" name="address" class="form-control">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="">Property Name:</label>
                        <input type="text" name="name" class="form-control">
                        {{-- <textarea name="description" id="" cols="30" rows="10"></textarea> --}}
                     </div>

                  </div>

                </div>



                <div class="row">
                  
                  
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Contract Price:</label>
                          <input type="text" name="price" class="form-control">
                      </div>
                  </div>

                   <div class="col-md-6">
                     <div class="form-group">
                      <label for="">Photo:</label>
                         <input type="file" name="image" class="form-control">
                     </div>
                  </div>

                </div>

                <div class="row">

                   <div class="col-md-6">
                     <div class="form-group">
                        <label for="">Facilities</label>
                        <p>No of Bedroom:<input type="number" name="bed" class="form-control" style="width: 65px;position:relative;top:-30px;left: 120px;">
                        No of Bathroom:<input type="number" name="bath" class="form-control" style="width: 65px;position:relative;top:-30px;left: 123px;">
                        No of Kitchen:<input type="number" name="kitchen" class="form-control" style="width: 65px;position:relative;top:-30px;left: 123px;"></p>
                    </div>
                  </div>
                  
                  {{-- <div class="col-md-6">
                     <div class="form-group">
                        <label for="">Property Bed:</label>
                        <input type="number" name="bed" class="form-control">
                    </div>
                  </div> --}}
                 {{--  <div class="col-md-6">
                       <div class="form-group">
                         <label for="">Bath:</label>
                         <input type="number" name="bath" class="form-control">
                     </div>
                  </div> --}}

                  <div class="col-md-6">
                       
                         <div class="form-group">
                            <label for="">Utilities:</label>
                            <p><input type="checkbox" name="utilities[]" value="Electricity">&nbsp;Electricity</p>
                            <p><input type="checkbox" name="utilities[]" value="Water">&nbsp;Water</p>
                            <p><input type="checkbox" name="utilities[]" value="Security">&nbsp;Security</p>
                            <p><input type="checkbox" name="utilities[]" value="Furnished">&nbsp;Furnished</p>
                            <p><input type="checkbox" name="utilities[]" value="parking Lot">&nbsp;Parking Lot</p>
                         </div>
                      

                    </div>

                </div>


             

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Property Description:</label>
                            <input type="text" name="propert_desc" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                      <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </div>

                  

              </form>


                    {{-- <div class="form-group">
                       {!!Form::label('type_id','Property Type:')!!}
                       {!!Form::select('type_id',[''=>'Select Options']+ $types,null,['class'=>'form-control'])!!}
                    </div> --}}


                     {{-- <div class="form-group">
                       {!!Form::label('image','Photo:')!!}

                       {!!Form::file('image',null,['class'=>'form-control'])!!}
                    </div> --}}
{{-- 
                    <div class="form-group">
                       {!!Form::submit('Add Property',['class'=>'btn btn-primary'])!!}
                    </div>

                  {!!Form::close()!!} --}}


                

           </div>
          
          </div>

          <!-- Content Row -->
         

        </div>
        <!-- /.container-fluid -->

      </div>

@endsection        


@section('scripts')

   <script src="{{asset('my_asset/js/dropzone.min.js')}}"></script>

@endsection        
   
