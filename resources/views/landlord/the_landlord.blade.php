@extends('layouts.the_master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Landlords</h1>
            
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
                                    <th>Tenant</th> --}}
                                    <th>Registered At </th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                
                               <?php
                                

                     $sn =0;
                    foreach($landlords as $landlord){
                       $sn +=1;
                      ?>
                        
                              <tr>
                                  <td>{{$sn}}</td>
                                  <td><a href="{{route('allland',$landlord->id)}}">{{$landlord->user->name}}</a></td>
                                  <td>{{$landlord->user->email}}</td>
                                  <td>

                                   {{$landlord->user->phone_number}}
                                     
                                   </td>
                                   <td>

                                    {{$landlord->gender}}
                                      
                                    </td>
                                    <td>{{$landlord->address}}</td>
                                    {{-- <td>
                                      @foreach($landlord->properties as $property)
                                         {{$property->name}}
                                      @endforeach
                                      
                                    </td>
                                    <td>
                                      @foreach($landlord->tenants as $the_tenant)
                                         {{$the_tenant->user->name}}
                                      @endforeach
                                      
                                    </td> --}}
                                    <td>{{$landlord->created_at}}</td>
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

     


