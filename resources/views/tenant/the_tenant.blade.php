@extends('layouts.the_master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All tenants</h1>
            
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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    {{-- <th>Property</th>
                                    <th>Landlord</th> --}}
                                    <th>Registered At </th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                
                               <?php
                                

                     $sn =0;
                    foreach($tenants as $tenant){
                       $sn +=1;
                      ?>
                        
                              <tr>
                                  <td>{{$sn}}</td>
                                  <td><a href="{{route('alltent',$tenant->id)}}">{{$tenant->user->name}}</a></td>
                                  <td>{{$tenant->user->email}}</td>
                                  <td>

                                   {{$tenant->user->phone_number}}
                                     
                                   </td>
                                   <td>

                                    {{$tenant->gender}}
                                      
                                    </td>
                                    <td>{{$tenant->address}}</td>
                                   {{--  <td>
                                       {{$tenant->property ? $tenant->property->name : ''}}
                                    </td>
                                    <td>
                                      {{$tenant->landlord->user->name}}
                                    </td> --}}
                                    <td>{{$tenant->created_at}}</td>
                                   {{-- <td>
                                     <a href="#"><i class="text-success fa fa-edit"></i></a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;
                                     <a onclick="javascript: return confirm('Do you want to delete?')" href="#"><i class="text-danger fa fa-trash"></i></a>
                                   </td> --}}

                                </tr>

                            <?php
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

@endsection        

     


