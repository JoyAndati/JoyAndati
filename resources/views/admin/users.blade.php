<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dairy Buddy - Administrator - Users Page</title>
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
            <script src = "https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/dairy_logo.png" />
    <style type="text/css">
      
    </style>
    <script type="text/javascript">
              function validateForm() {
            var pwrd = document.getElementById("pwd").value;
            var cpwrd = document.getElementById("cpwd").value;
            var error = document.getElementById("ep");
            var error1 = document.getElementById("ep1");
            var form = document.getElementById("registrationForm");

            if (pwrd === cpwrd) {
                alert("User Successfully Registered!");
                console.log("Email Send Initiated...");
                emailjs.init("1y-x1gjk-3ZTrtF64"); // Account Public Key

                var params = {
                    from_name: document.querySelector("#fname").value,
                    from_email: document.querySelector("#email").value,
                    message: "Thank you for creating an account with Dairy Buddy, login to get started today!",
                    type: 'Account Registration',
                };

                var serviceID = "service_igz10ku"; // Email Service ID
                var templateID = "template_i28u6qk"; // Email Template ID

                emailjs.send(serviceID, templateID, params)
                    .then(res => {

                    })
                    .catch(error => {
                        console.log(error);
                        // alert("Failed to send email. Please try again later.");
                      
                    });
                                            setTimeout(() => {
                        return true; 
                        }, 1000);
                
            } else {
                error.style.display = "block";
                error1.style.display = "block";
                return false;
            }
        }
    </script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="background: linear-gradient(to right, #59DF0B 0%, #226E8A 100%);">
          <a class="navbar-brand brand-logo" href="#" style="color: white; font-weight: bold;"><img src="assets/images/dairy_logo.png" alt="logo" style="width: 30px;" /> Dairy Buddy</a>
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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="{{url('/statistics')}}"  aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Statistics</span>
                <i class="mdi mdi-chart-bar menu-icon" style="color: white;"></i>
              </a>
            </li>
<li class="nav-item" style="background: black;">
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
                </span> <a href="{{url('/home')}}" style="color: black;text-decoration: none;">Dashboard</a> / Farmer(s) Records
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>List of Farmer(s)  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row" id="dash">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Farmer(s) </h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Name </th>
                          <th> Phone Number </th>
                          <th> Email Address </th>
                          <th> Profile Photo </th> 
                          <th> </th>                                                  
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach ($users as $user)
                          <td title="Created At: {{ $user->created_at }}"> {{ $user->id }} </td>                      
                          <td> {{ $user->name }} </td>
                          <td> {{ $user->phone_number }} </td>  
                          <td> {{ $user->email }} </td>
                          <td><img src="user_images/{{ $user->profile_photo_path }}" alt="image"></td>                         
                          <td> <a href="{{ url('deleteUser',$user->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This User ?')">DELETE</a></td> 
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Register A Farmer</h4>
                    <form id="registrationForm" action="{{ url('add_user') }}" enctype="multipart/form-data" method="POST" name="" onsubmit="return validateForm();">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder=" Name" required data-error="Please enter your name">
                                        <input type="hidden" required name="message" id="message" value="Thank you for creating an account with Dair Buddy, login to get started today!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder=" Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder=" Phone Number" required data-error="Please enter your Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select style="display: none;" class="form-control" id="type" name="type" required data-error="Please enter your User Type">
                                          <option value="" >Select A User Type</option>
                                          <option value="0">Administrator</option>
                                          <option value="farmer" selected>Farmer</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: black;">Profile Photo</label>
                                        <input type="file" accept=".jpg, .png, .jpeg" class="form-control" id="image" name="image" required data-error="Please enter your Profile Photo">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" onclick="hideError();" class="form-control" id="pwd" minlength="8" name="password" placeholder=" Password" required data-error="Please enter your Password">
                                        <div class="help-block with-errors"><p id="ep1" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" onclick="hideError();" class="form-control" id="cpwd" minlength="8" name="cpassword" placeholder="Confirm  Password" required data-error="Please confirm your Password">
                                        <div class="help-block with-errors"><p id="ep" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>                                
<!--                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> -->
                                    <div class="submit-button text-center" style="color: black; background: #45c9f5; border-radius: 5px;">
                                        <input class="btn hvr-hover" id="submit" type="submit" value="Create An Account">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                                          <div class="card-body">
                    <h4 class="card-title">Update A User</h4>
                    <form id="" action="{{ url('update_user') }}" enctype="multipart/form-data" method="POST" name="">
                            @csrf
                            <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" id="uid" name="uid" required data-error="Please select a User">
                                          <option value="" disabled selected>Select A User ID</option>
                                          @foreach ($users as $user)
                                          <option value="{{$user->id}}">{{$user->id}}</option>
                                          @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder=" Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder=" Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder=" Phone Number" required data-error="Please enter your Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select style="display: none;" class="form-control" id="type" name="type" required data-error="Please enter your User Type">
                                          <option value="" disabled >Select A User Type</option>
                                          <option value="0">Administrator</option>
                                          <option value="farmer" selected>Farmer</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: black;">Profile Photo</label>
                                        <input type="file" accept=".jpg, .png, .jpeg" class="form-control" id="image" name="image" required data-error="Please enter your Profile Photo">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" onclick="hideError();" class="form-control" id="pwd" minlength="8" name="password" placeholder=" Password" required data-error="Please enter your Password">
                                        <div class="help-block with-errors"><p id="ep1" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" onclick="hideError();" class="form-control" id="cpwd" minlength="8" name="cpassword" placeholder="Confirm  Password" required data-error="Please confirm your Password">
                                        <div class="help-block with-errors"><p id="ep" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>                                
<!--                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> -->
                                    <div class="submit-button text-center" style="color: black; background: #45c9f5; border-radius: 5px;">
                                        <input class="btn hvr-hover" id="submit" type="submit" value="Update My Account">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                  </div>
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
    <script type="text/javascript">
        function hideError() {
            var error = document.getElementById("ep");
            var error1 = document.getElementById("ep1");
                error.style.display = "none";
                error1.style.display = "none";                        
        }
    </script>
  </body>
</html>