@extends('layouts.the_master')

@section('content')
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
            <h1 class="h3 mb-0 text-gray-800">Create Bill</h1>
           
          </div>

          <!-- Content Row -->
         
          <!-- Content Row -->

          <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
              @include('includes.has_error')
              @include('includes.success_message')
              

             {{--  <form action="" method="post">
                
                @csrf

                 <div class="form-group">
                   <label for=""></label>
                   <input type="hidden" name="user_id" value="{{$user->id}}" class="form-control">
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

              </form> --}}

              <div class="invoice-box">
                  <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                    <td colspan="2">
                  <table>
                  <tr>
                    <td class="title">
                   {{--  <img src="/images/logo.png" style="width:100%; max-width:300px;"> --}}
                    Rentgage
                    </td>
                    <td>
                    Invoice #: 123<br>
                    Created: {{$notebill->created_at->diffForHumans()}}<br>
                    Due: February 1, 2015
                    </td>
                  </tr>
                  </table>
                  </td>
                  </tr>
                  <tr class="information">
                      <td colspan="2">
                      <table>
                      <tr>
                      <td>
                      Rentgage, Com<br>
                      12345 Sunny Road<br>
                      Sunnyville, TX 12345
                      </td>
                      <td>
                     
                      {{$notebill->user->name}}<br>
                      <a href="#">{{$notebill->user->email}}</a>
                      </td>
                  </tr>
                  </table>
                  </td>
                  </tr>
                  <tr class="heading">
                    <td>
                    Payment Method
                    </td>
                    <td>
                    #
                    </td>
                  </tr>
                  <tr class="details">
                    <td>
                    Paid From Wallet
                    </td>
                    <td>
                    1000
                    </td>
                  </tr>
                  <tr class="heading">
                  <td>
                  Item
                  </td>
                  <td>
                  Price(#)
                  </td>
                  </tr>
                  <tr class="item">
                  <td>
                  {{$notebill->property->name}}
                  </td>
                  <td>
                  {{number_format($notebill->property->price,0,'',',')}}
                  
                  </td>
                  </tr>
                  <tr class="item">
                  <td>
                   monthtly payment
                  </td>
                  <td>
                   {{number_format(100000,0,'',',')}}

                  </td>
                  </tr>
                  <tr class="item last">
                  <td>
                 {{--  Domain name (1 year) --}}
                  </td>
                  <td>
                 {{--  $10.00 --}}
                  </td>
                  </tr>
                  <tr class="total">
                  <td></td>
                  <td>
                 {{--  Total: $385.00 --}}
                  </td>
                  </tr>
                  </table>
              </div>



           </div>
          
          </div>

          <!-- Content Row -->
         
           <a href="{{route('reply.show',$notebill->id)}}" class="btn btn-primary">Send bill</a>
        </div>
        <!-- /.container-fluid -->

@endsection


@section('scripts')
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endsection        

     
