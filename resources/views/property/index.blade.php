@extends('layouts.the_master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
           {{-- @include('includes.success_message') --}}
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Properties</h1>
            
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
                                    <th>Price(#)</th>
                                    <th>Address</th>
                                    <th>Bed</th>
                                    <th>Bath</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Utilities</th>
                                    <th>Registered At </th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                
                    <?php
                                 

                     $sn =0;
                    foreach($properties as $property){

                       

                          $sn +=1;
                      ?>
                        
                              <tr>
                                  <td>{{$sn}}</td>
                                  <td><img src="/property_images/{{$property->image ? $property->image : ''}}" width="70" width="70" alt="image"></td>
                               
                                  <td><a href="{{route('property.show',$property->id)}}">{{$property->name}}</a></td>

                                  <td>
                                   
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

                                    <td>

                                      @if(Auth::user()->role->name != 'tenant')
                                      
                                      @if($property->status)
                                          
                                          <form action="{{route('notactive',$property->id)}}" method="post">

                                            @csrf
                                            <input type="hidden" value="0" name="status">
                                            <input type="hidden" value="PUT" name="_method">
                                            
                                            <input type="submit" class="btn btn-sm btn-warning " value="not active">
                                          </form>
                                         
                                      
                                                  
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

                                       @endif 
                                        


                                        
                                      @if(Auth::user()->role->name == 'tenant')
                                        @if($property->status == 1)
                                             {{'Active'}}

                                           @else
                                           
                                             {{'Not Active'}}  
                                        @endif
                                      @endif  
                                    </td>

                                  @if($property->water == 1)

                                    <td>Water</td>

                                   @endif 

                                     {{-- <?php

                                        var_dump($property->utilities)
                                     ?> --}}

                                 {{--  {{json_decode($property->utilities,true)[1]}} --}}
                                      {{--  $sam = {{json_decode($property->utilities,true)}}
                                      @for($i = 0 ; $i < $sam->count(); $i++)
                                            {{$sam[$i]}}
                                      @endfor --}}

                                     {{--  @php
                                          $arr = json_decode($property->utilities,true);
                                          echo $arr[0].'<br>'.$arr[1].'<br>'.$arr[2];
                                      @endphp --}}
                                    
                                    <td>{{$property->created_at->diffForHumans()}}</td>
                                  {{--  <td>
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

            
            
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection        

     


