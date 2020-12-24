@extends('layouts.the_master')


@section('styles')

   <link rel="stylesheet" href="{{asset('my_asset/css/dropzone.min.css')}}">

@endsection


@section('content')
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
                        <label for="">Property Description:</label>
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
                            <p><input type="checkbox" name="utilities[]" value="1">&nbsp;Electricity</p>
                            <p><input type="checkbox" name="utilities[]" value="1">&nbsp;Water</p>
                            <p><input type="checkbox" name="utilities[]" value="1">&nbsp;Security</p>
                            <p><input type="checkbox" name="utilities[]" value="1">&nbsp;Furnished</p>
                            <p><input type="checkbox" name="utilities[]" value="1">&nbsp;Parking Lot</p>
                         </div>
                      

                    </div>

                </div>


             

                
                <div class="row">
                    
                    <div class="col-md-12">
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

@endsection        


@section('scripts')

   <script src="{{asset('my_asset/js/dropzone.min.js')}}"></script>

@endsection        
   
