<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('my_asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  @yield('styles')
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('my_asset/css/sb-admin-2.css')}}" rel="stylesheet">
   @include('includes.invoice')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
       @if(Auth::user()->role->name=='admin')
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
       @endif
       
        @if(Auth::user()->role->name=='landlord')
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('landlord.index')}}">
       @endif

        @if(Auth::user()->role->name=='tenant')
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('tenant.index')}}">
       @endif

        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ucfirst(Auth::user()->role->name)}} {{-- <sup>2</sup> --}}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        @if(Auth::user()->role->name=='admin')
        <a class="nav-link" href="{{route('admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        @endif 
        
         @if(Auth::user()->role->name=='landlord')
        <a class="nav-link" href="{{route('landlord.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        @endif  

         @if(Auth::user()->role->name=='tenant')
        <a class="nav-link" href="{{route('tenant.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        @endif 
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
    {{--   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{route('profile.show',Auth::user()->id)}}">view profile</a>
           
          </div>
        </div>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link" href="{{route('profile.show',Auth::user()->id)}}" >
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Profile</span>

        </a>
       
      </li>


     
     @if(Auth::user()->role->name =='admin')

      <li class="nav-item">
        <a class="nav-link" href="{{route('land')}}" >
          <i class="fas fa-user "></i>
          <span>Landlords</span>

        </a>
       
      </li>

      @endif


      @if(Auth::user()->role->name != 'tenant')
       
        <li class="nav-item">
          <a class="nav-link" href="{{route('tent')}}" >
            <i class="fas fa-user "></i>
            <span>Tenants</span>

          </a>
         
        </li>

      @endif



       {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('land')}}" >
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Landlords</span>

        </a>
       
      </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      


      

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages11" aria-expanded="true" aria-controls="collapsePages11">
          <i class="fas fa-fw fa-building"></i>
          <span>Properties</span>
        </a>
        <div id="collapsePages11" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
           @if(Auth::user()->role->name === 'landlord')
            <a class="collapse-item" href="{{route('property.create')}}">Add Properties</a>

           @endif
            <a class="collapse-item" href="{{route('property.index')}}">View Properties</a>
            {{--  <a class="collapse-item" href="{{route('mortgage')}}">View Mortgage Properties</a> --}}
          
          </div>
        </div>
      </li>


      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
          <i class="fas fa-fw fa-receipt"></i>
          <span>Bill</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('bills.create')}}">Create Bills</a>
            <a class="collapse-item" href="login.html">view Bills</a>
            <a class="collapse-item" href="register.html">Bill payment records</a>
          
          </div>
        </div>
      </li> --}}

       @if(Auth::user()->role->name !='tenant')
         
         <li class="nav-item">
           <a class="nav-link" href="{{route('bills.index')}}" >
             <i class="fas fa-receipt "></i>
             <span>Generate Bill</span>

           </a>
          
         </li>

       @endif

     


      <!-- Nav Item - Tables -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages3">
          <i class="fas fa-fw fa-receipt"></i>
          <span>Wallet Account</span>
        </a>
        <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{route('wallet.show',Auth::user()->id)}}">Fund Wallet</a>
            <a class="collapse-item" href="{{route('withdraw',Auth::user()->id)}}">Make withdraws</a>
            {{-- <a class="collapse-item" href="register.html">Make Payment</a> --}}
            <a class="collapse-item" href="register.html">View Wallet</a>
            <a class="collapse-item" href="register.html">Wallet Transaction</a>
          </div>
        </div>
      </li>
      
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true" aria-controls="collapsePages4">
          <i class="fas fa-fw fa-book"></i>
          <span>Contract Document</span>
        </a>
        <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="login.html">View Contract </a>
            <a class="collapse-item" href="register.html">Contract Type</a>
            
          </div>
        </div>
      </li>
 --}}

      <li class="nav-item">
        <a class="nav-link" href="{{route('document.create')}}" >
          <i class="fas fa-receipt "></i>
          <span>Upload Contract Document</span>

        </a>
       
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5" aria-expanded="true" aria-controls="collapsePages5">
          <i class="fas fa-fw fa-user"></i>
          <span>Report</span>
        </a>
        <div id="collapsePages5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="login.html">Bill Payment  Report</a>
            <a class="collapse-item" href="register.html">Wallet Cash Flow</a>
            <a class="collapse-item" href="register.html">Property Report</a>
            
            
          </div>
        </div>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages6" aria-expanded="true" aria-controls="collapsePages6">
          <i class="fas fa-fw fa-book"></i>
          <span>Loan</span>
        </a>
        <div id="collapsePages6" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="login.html">Loan Offers</a>
            <a class="collapse-item" href="register.html">Applied Loans</a>
            <a class="collapse-item" href="register.html">Loan Payment Report</a>
            
            
          </div>
        </div>
      </li>

      {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages7" aria-expanded="true" aria-controls="collapsePages7">
          <i class="fas fa-bell fa-fw"></i>
          <span>Notification</span>
        </a>
        <div id="collapsePages7" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{route('note.index')}}">All Notifications</a>
           
            
            
          </div>
        </div>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link" href="{{route('note.index')}}" >
          <i class="fas fa-bell fa-fw"></i>
          <span>Notifications</span>

        </a>
       
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" >
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Logout</span>

        </a>
       
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('content')

        <!-- /.container-fluid -->

     

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>


    <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
           
          <h5 class="modal-title" id="exampleModalLabel1">Fund Wallet</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
  
        </div>
        <div class="modal-body">
            <form id="paymentForm">
  
            <div class="form-group">
              <label for="">Amount</label>
              <input type="text" class="form-control" id="txt_name" value="1000" required />
            </div>
            
           
          </form>
           <div class="form-submit">
               <button type="submit" class="btn btn-success" onclick="payWithPaystack()"> Pay </button>
            </div>
          <script src="https://js.paystack.co/v1/inline.js"></script>




        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
         {{--  <a class="btn btn-primary" href="{{route('logout')}}">Logout</a> --}}
        </div>
      </div>


    </div>
  </div>
 
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

  <!--script>
  const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);
  function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_xxxxxxxxxx', 
    email: Auth::user()->email,
    // amount: document.getElementById("amount").value * 100,

    amount: '100' * 100
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), 
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  handler.openIframe();
}
    
  </script-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('my_asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('my_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  @yield('scripts')
  <!-- Core plugin JavaScript-->
  <script src="{{asset('my_asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('my_asset/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('my_asset/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('my_asset/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('my_asset/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>

