@extends('layouts.the_master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="position: relative;left: 250px;">Profile Information</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  @include('includes.success_message')
                   <form action="{{route('profile.update',$user->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">FirstName</label>
                               <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                          <label for="name">Last Name</label>
                            <div class="form-group">
                               <input type="text" name="last" class="form-control" value="{{$user->last}}">
                            </div>
                        </div>
                     </div>

                     <div class="row">
                       <div class="col-md-6">
                          <label for="name">Email</label>
                            <div class="form-group">
                               <input type="text" name="email" class="form-control" value="{{$user->email}}" >
                            </div>
                        </div>
                        <div class="col-md-6">
                          <label for="name">Phone Number</label>
                            <div class="form-group">
                               <input type="text" name="phone_number" class="form-control" value="{{$user->phone_number}}" >
                            </div>
                        </div>
                       
                     </div>


                      <div class="row">
                        <div class="col-md-6">
                          <label for="name">Photo</label>
                            <div class="form-group">
                               <input type="file" name="photo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                           
                           <label for="name">Password</label>
                            <div class="form-group">
                               <input type="password" name="password" class="form-control" value="{{$user->password}}">
                            </div>
                            
                        </div>
                     </div>


                     <div class="form-group">
                               <button type="submit" class="btn btn-success" style="margin-top: 30px; ">Update</button>
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
                 
                  <img  src="/photos/{{$user->photo}}" style="border-radius: 50%; position: relative; left: 50px" class="img-responsive img-circle" width="200" height="200" alt="">
                  
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

     


