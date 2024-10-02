<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dairy Buddy - Administrator Homepage</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/dairy_logo.png" />
    <style type="text/css">
      
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="background: linear-gradient(to right, #59DF0B 0%, #226E8A 100%);">
          <a class="navbar-brand brand-logo" href="#" style="color: white; font-weight: bold;"><img src="assets/images/dairy_logo.png" alt="logo" style="width: 30px;" /> Dairy Buddy</a>
          <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
<!--                   <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div> -->
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link" id="profileDropdown" href="{{ route('profile') }}" aria-expanded="false">
<div class="nav-profile-img">
    <img src="user_images/{{ $userdetails->profile_photo_path }}" alt="image">
</div>
<div class="nav-profile-text">
    <p class="mb-1 text-black">{{ $userdetails->name }}</p>
</div>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
            <li class="nav-item" style="background: none;">
              <a class="nav-link" href="{{url('/home')}}" >
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-speedometer menu-icon" style="color: white;"></i>
              </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="{{url('/statistics')}}"  aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Statistics</span>
                <i class="mdi mdi-chart-bar menu-icon" style="color: white;"></i>
              </a>
            </li>
<li class="nav-item">
              <a class="nav-link" href="#icons" data-bs-toggle="collapse" aria-expanded="true" aria-controls="icons">
                <span class="menu-title">Reports</span>
                <i class="mdi mdi-file-document menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/users')}}">Farmers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/milk')}}">Milk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/exs')}}">Extension Services</a>
                  </li>                  
                </ul>
              </div>
            </li>
<!--             <li class="nav-item">
              <a class="nav-link" href="{{url('/cart')}}"  aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">My Cart</span>
                <i class="mdi mdi-cart menu-icon" style="color: white;"></i>
              </a>
            </li>  -->
            <li class="nav-item">
              <a class="nav-link" href="{{url('/orders')}}"  aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manage Orders</span>
                <i class="mdi mdi-cash menu-icon" style="color: white;"></i>
              </a>
            </li>                        
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile') }}">
                <span class="menu-title">Account</span>
                <i class="mdi mdi-account-circle menu-icon"></i>
              </a>
            </li>
                        <li class="nav-item">
              <a class="nav-link" href="#">
            <form action="{{ url('logout') }}" method="POST">
            @csrf
             <button style="background: transparent; border:0px; text-align: left;" type="submit">

               <span class="menu-title">Logout</span>
          </button>
            </form>                      
                            <i class="mdi mdi-power menu-icon"></i>
                          </a>
            </li>                        
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row" id="dash">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <a href="{{ url('/users') }}" style="color: white;"> 
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total User(s) <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $userCount }}</h2>
                    <!-- <h6 class="card-text">Increased by 60%</h6> -->
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <a href="{{ url('/users') }}" style="color: white;"> 
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Farmer(s) <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $farmCount }}</h2>
                    <!-- <h6 class="card-text">Increased by 60%</h6> -->
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <a href="#" style="color: white;"> 
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Administrator(s) <i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $adminCount }}</h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <a href="{{ url('/orders') }}" style="color: white;"> 
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Sales <i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $ordS }}</h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                 <a href="{{ url('/orders') }}" style="color: white;">                    
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Orders <i class="mdi mdi-diamond mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $ordC }}</h2>
                    <!-- <h6 class="card-text">Increased by 5%</h6> -->
              </a>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">All Rights Reserved by 150098 and 150462. &copy; 2024.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>