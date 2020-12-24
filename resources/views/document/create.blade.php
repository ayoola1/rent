@extends('layouts.the_master')


@section('styles')

   <link rel="stylesheet" href="{{asset('my_asset/css/dropzone.min.css')}}">

@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
           {{-- @include('includes.success_message') --}}
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            @include('includes.success_message')
            <h1 class="h3 mb-0 text-gray-800">Upload Documents </h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">
              
              <div class="col-md-12">
                    {{--  {!!Form::open(['method'=>'post','action'=>'DocumentController@store','class'=>'dropzone'])!!}

                     {!!Form::close()!!} --}}

                     <form action="{{route('document.store')}}" method="post" class="dropzone" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                     </form>
                </div>
           
          </div>

          <!-- Content Row -->
          <div class="row">

            
            
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection

@section('scripts')

   <script src="{{asset('my_asset/js/dropzone.min.js')}}"></script>

@endsection        

     


