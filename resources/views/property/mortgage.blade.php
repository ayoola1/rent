@extends('layouts.the_master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Properties for Mortgage</h1>
            
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Address</th>
                                    <th>Bed</th>
                                    <th>Bath</th>
                                    <th>Type</th>
                                    <th>Registered At </th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                    <?php
                                 

                     $sn =0;
                    foreach($properties as $property){

                       if($property->type->name === 'For Sale'){

                          $sn +=1;
                      ?>
                        
                              <tr>
                                  <td>{{$sn}}</td>
                                  <td><img src="/property_images/{{$property->image ? $property->image : ''}}" width="70" width="70" alt="image"></td>
                                  <td>{{$property->name}}</td>
                                  <td>
                                   #
                                   {{number_format($property->price,0,'',',')}}
                                     
                                   </td>
                                   <td>

                                    {{$property->address}}
                                      
                                    </td>
                                    <td>{{$property->bed}}</td>
                                    <td>
                                       {{$property->bath}}
                                      
                                    </td>
                                    <td>
                                       
                                        {{$property->type->name}}
                                      
                                    </td>
                                    <td>{{$property->created_at}}</td>
                                   <td>
                                     <a href="#"><i class="text-success fa fa-edit"></i></a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;
                                     <a onclick="javascript: return confirm('Do you want to delete?')" href="#"><i class="text-danger fa fa-trash"></i></a>
                                   </td>

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

@endsection        

     


