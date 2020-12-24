@extends('layouts.the_master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Bill</h1>
           
          </div>

          <!-- Content Row -->
         
          <!-- Content Row -->

          <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
              @include('includes.has_error')
              @include('includes.success_message')
              

              <form action="" method="post">
                
                @csrf

                 <div class="form-group">
                   <label for=""></label>
                   <input type="hidden" name="landlord_id" value="{{$user->id}}" class="form-control">
                </div>



                <div class="form-group">
                   <label for="">Property Name</label>
                   <select name="" id="" class="form-control">
                    <?php
                      
                       foreach ($properties as $property) {
                          
                          ?>
                              <option value="">{{$property->name}}</option>
                          <?php
                       }
                    ?>
                     
                   </select>
                </div>

                 <div class="form-group">
                   <label for="">Property Name</label>
                   <select name="" id="" class="form-control">
                    <?php
                      
                       foreach ($properties as $property) {
                          
                          ?>
                              <option value="">{{$property->price}}</option>
                          <?php
                       }
                    ?>
                     
                   </select>
                </div>


                <div class="form-group">
                   <label for="">Property Name</label>
                   <select name="" id="" class="form-control">
                    <?php
                      
                       foreach ($properties as $property) {
                          
                          ?>
                              <option value="{{$property->tenant->user->id}}">{{$property->tenant->user->name}}</option>
                          <?php
                       }
                    ?>
                     
                   </select>
                </div>

                <div class="form-group">
                   <label for="">Property Type</label>
                   <select name="" id="" class="form-control">
                    <?php
                      
                       foreach ($properties as $property) {
                          
                          ?>
                              <option value="{{$property->type->id}}">{{$property->type->name}}</option>
                          <?php
                       }
                    ?>
                     
                   </select>
                </div>

                <div class="form-group">
                   <label for="">Upload Document</label>
                   <input type="file" name="image">
                </div>

              </form>
           </div>
          
          </div>

          <!-- Content Row -->
         

        </div>
        <!-- /.container-fluid -->

@endsection        

     
