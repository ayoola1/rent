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
            <h1 class="h3 mb-0 text-gray-800">My Wallet</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-2"></div>
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="position: relative;left: 300px;">Wallet</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  @include('includes.success_message')

                   <p style="font-size: 18px;font-weight: 600;text-align: center;">Your Available Balance</p>
                   <p style="font-size: 24px;font-weight: 600;text-align: center;">&#8358;{{$wallet ? $wallet->deposit - $wallet->withdraw : 0}}.00</p>

                   @if($wallet == false)

                    @else

                      <form method="post" action="{{route('wallet.withdraw',$wallet->id)}}">
                       
                      
                         @csrf
                      <input type="hidden" value="PUT" name="_method">   
                     <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                       
                        <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                 <input type="text" name="withdraw" id="txt_name" class="form-control" placeholder="Enter Amount" required="" style="margin-left: 190px;">
                                    
                               </div>
                           </div> 
                          </div> 

                          <div class="row"> 
                            <div class="col-md-12"> 
                               <div class="form-group ">
                                    
                                 
                                    <button type="submit" style="margin-left: 285px;" class="btn btn-success" > Withdraw </button>
                                   {{--  <a href="#" data-toggle="modal" data-target="#walletModal" class="btn btn-success" style="margin-left: 285px;">Fund Wallet</a> --}}
                               </div>
                           </div>
                           
                        </div>

                      </form>


                   @endif
                 
                     <script src="https://js.paystack.co/v1/inline.js"></script>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

@endsection 


 <script>
    

    var userEmail = "{{ Auth::user()->email }}";
    var Key = 'pk_test_709b0c631ef355d153b778428d37b0f9e88640ae';
    // var amounta = newp;
    var amounta = document.getElementById("txt_name").value;



    function payWithPaystack(){
      var handler = PaystackPop.setup({
        key: Key,
        email: userEmail,
        amount: amounta*100,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        metadata: {
           custom_fields: [
              {
                  display_name: "Mobile Number",
                  variable_name: "mobile_number",
                  value: "+2348012345678"
              }
           ]
        },
        callback: function(response){
            axios.get(`https://api.paystack.co/transaction/verify/${response.reference}`,{
                                headers: {
                                    'Content-Type': 'application/json',
                                    "Authorization": "Bearer sk_test_cf7abdadd3e47f051365ff34d607a6637b3f4389",
                                }
                                })

                               
                                .then(function (response) {
                                    console.log(response.data.data);
                                    alert('it work')
                                    // handle success
                                    //document.location.href = "paid.php?ref="+response.reference+"&ref="+response.reference+"&ref="+response.reference+"&ref="+response.reference+"&ref="+response.reference+";
                                    // console.log(response.data.data.authorization);
                                    // var authArray = response.data.data.authorization;
                                    // var customerArray = response.data.data.customer;

                                    // var email = response.data.data.customer.email;
                                    // var amountaa = response.data.data.amount;
                                    // var chans = response.data.data.channel;
                                    // var status = response.data.data.gateway_response;
                                    // var refer  = response.data.status;
                                    
                                    // var userID = "{{ Auth::user()->id }}";
                                    // var tokenID = "{{ csrf_token() }}";

                                    // var datastring = "amount="+amounta
                                    // +"&status="+response.data.data.gateway_response
                                    // +"&reference="+email
                                    // +"&channel="+response.data.data.channel
                                    // +"&user_id="+userID
                                    // +"&_token="+tokenID;
                                    // $.ajax({
                                    //     url: "/paymentmb",
                                    //     type: "POST",
                                    //     data: datastring,
                                    //     cache: false,
                                    //     success: function(dataResult){
                                    //         console.log(dataResult);
                                    //         var dataResult = JSON.parse(dataResult);
                                    //         if(dataResult.statusCode==200){
                                    //             window.location = "/home";
                                    //         }
                                    //         else if(dataResult.statusCode==201){
                                    //             alert("Error occured !");
                                    //         }

                                    //     }
                                    // });
                                    // document.location.href = "addcardme.php?"+datastring;
                                    })
                                    .catch(function (error) {
                                        // handle error
                                    })
                                    .finally(function () {

                                    });
                        // alert('Successfully Paid');
        },
        onClose: function(){
            alert('window closed');
        }
      });
      handler.openIframe();
    }
  </script>       

     


