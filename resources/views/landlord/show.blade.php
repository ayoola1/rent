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
            <h1 class="h3 mb-0 text-gray-800">Properties own by {{$land->user->name}}</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">
              
              <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                           
                            {{-- <p class="category">List of all registered users</p> --}}
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sn</th>
                                    <th>Name</th>
                                    <th>photo</th>
                                    <th>Price(#)</th>
                                    <th>Address</th>
                                    <th>Bedroom</th>
                                    <th>Bathroom</th>
                                    <th>Tenant</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Utilities</th>
                                    <th>Registered At </th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                  <?php
                                

                             $sn =0;
                            foreach($properties as $property){

                              if($property->landlord_id == $land->id){
                                

                                     $sn +=1;
                              ?>
                                
                                    <tr>
                                      <td>{{$sn}}</td>
                                      <td><a href="{{route('property.show',$property->id)}}">{{$property->name}}</a></td>
                                      <td><img src="/property_images/{{$property->image}}" width="70"height="70" alt=""></td>
                                      <td>

                                   
                                   {{number_format($property->price,0,'',',')}}
                                     
                                   </td>
                                   <td>

                                    {{$property->address}}
                                      
                                    </td>
                                    <td>{{$property->bed}}</td>

                                    <td>{{$property->bath}}</td>

                                    <td>{{$property->tenant ? $property->tenant->user->name : 'No Tenant'}}</td>

                                    <td>{{$property->type->name}}</td>
                                      <td>
                                      
                                      @if($property->status)
                                          
                                          <form action="{{route('notactive',$property->id)}}" method="post">

                                            @csrf
                                            <input type="hidden" value="0" name="status">
                                            <input type="hidden" value="PUT" name="_method">
                                            
                                            <input type="submit" class="btn btn-sm btn-warning " value="not active">
                                          </form>
                                         
                                       {{--  <form action="{{route('active',$property->id)}}" method="POST">
                                           @csrf
                                           <input type="hidden" name="_method" value="PUT">
                                           <input type="hidden" value="0" name="active">
                                           <button type="submit" class="">Not Active</button>
                                        </form>
                                           --}}
                                                  
                                      @else  
                                           
                                            <form action="{{route('active',$property->id)}}" method="post">

                                            @csrf

                                            <input type="hidden" value="PUT" name="_method">
                                             <input type="hidden" value="1" name="status">
                                            <input type="submit" value="active" class="btn btn-sm btn-success">
                                          </form>

                                          {{-- <form action="{{route('notactive',$property->id)}}" method="POST">
                                           @csrf
                                           <input type="hidden" name="_method" value="PUT">
                                           <button type="submit" class="btn btn-sm btn-success "> Active</button>
                                        </form>
 --}}
                                       @endif 

                                    </td>

                                    <td>
                                      
                                   
                                    
                                    <?php
                                       $sam = explode(',',$property->utilities);

                                       foreach ($sam as $value) {
                                         
                                           echo $value."<br>";
                                       }
                                    ?>
                                          
                                      

                                    </td>
                                    
                                    <td>{{$property->created_at->diffForHumans()}}</td>
                                   {{-- <td>
                                     <a href="#"><i class="text-success fa fa-edit"></i></a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;
                                     <a onclick="javascript: return confirm('Do you want to delete?')" href="#"><i class="text-danger fa fa-trash"></i></a>
                                   </td> --}}

                                </tr>

                            <?php

                              }


                              
                          }


                        ?>
                              
                                   

                                </tbody>
                            </table>

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

     


