<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Dairy Buddy - Homepage</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/dairy_logo.png" type="image/x-icon">
    <link rel="dairy_logo" href="images/dairy_logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +254 712 345 678</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#" onclick="change(0)"><i class="fa fa-user s_color"></i> Get Started</a></li>
                            <li><a href="#contact"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header" >
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav" style="height: 70px">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="#"><img src="images/dairy_logo.png" class="logo" alt="" style="width: 50px;"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about" onclick="change(1);">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>                        
                        <li class="nav-item"><a class="nav-link" href="{{ url('register') }}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
<!--                 <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                                <p>My Cart</p>
                            </a>
                        </li>
                    </ul>
                </div> -->
                <!-- End Atribute Navigation -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Dairy Buddy</strong></h1>
                            <p class="m-b-40">Efficiently manage your dairy farm with our all-in-one management platform designed to streamline every aspect of your operations.</p>
                            <p><a class="btn hvr-hover" href="#" onclick="change(0);">Get Started</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Dairy Buddy</strong></h1>
                            <p class="m-b-40">Keep your finances in check with integrated accounting tools that help you track expenses, manage budgets, and analyze financial performance.</p>
                            <p><a class="btn hvr-hover" href="{{ route('login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Dairy Buddy</strong></h1>
                            <p class="m-b-40">Utilize data-driven insights and analytics to make informed decisions that boost farm productivity and profitability.</p>
                            <p><a class="btn hvr-hover" href="#" onclick="change(1);">About Us</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <div id="services" style="display: block;">
    <!-- Start Services  -->
    <div class="categories-shop">
        <div class="container">
                        <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/milk.png" alt="" />
                        <a class="btn hvr-hover" href="#">Milk Production Monitoring</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/money.png" alt="" />
                        <a class="btn hvr-hover" href="#">Financial Management</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/pie-chart.png" alt="" />
                        <a class="btn hvr-hover" href="#">Data Analytics and Reporting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
</div>

    <!-- Start Products  -->
    <!-- <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Fruits & Vegetables</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Products  -->

<!-- Start All Title Box -->
<div id="about" style="display: none;">
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="images/about-img.jpg" alt="" style="height: 500px;" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">We are <span>Dairy Buddy</span></h2>
                    <p>"Welcome to Dairy Buddy, your ultimate solution for managing and optimizing dairy farming operations in Kenya. Our web application is designed to streamline the complexities of dairy management, offering comprehensive tools for herd tracking, milk production monitoring, inventory management, and financial accounting. At Dairy Buddy, we understand the unique challenges faced by dairy farmers and are committed to providing innovative, user-friendly solutions that enhance productivity, improve animal health, and increase profitability. Whether you are a small dairy farm or a large operation, Dairy Buddy is here to support your success every step of the way."</p>
                    <a class="btn hvr-hover" href="#">Read More</a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Dairy Buddy has earned the trust of dairy farmers across Kenya by consistently delivering reliable and effective management solutions. Our commitment to transparency and customer satisfaction ensures that we build lasting relationships based on mutual trust and respect.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>At Dairy Buddy, we pride ourselves on our professionalism. Our team is dedicated to providing top-notch service and support, ensuring that our clients can rely on us to deliver high-quality solutions tailored to their specific needs. We maintain the highest standards of integrity and accountability in all our operations.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>With extensive experience in dairy farming and technology, Dairy Buddy offers expert solutions that cater to the intricate needs of dairy operations. Our team of specialists is continually innovating to provide the most advanced tools and insights, helping farmers achieve optimal results and stay ahead in the industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->
</div>

<div id="start" style="display: none;">
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Get Started</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Create An Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Get Started  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET STARTED</h2>
                        <p>Kindly fill in the form below, to create an account with Dairy Buddy <b>TODAY</b>!</p>
                        <form id="" action="{{ url('add_user') }}" enctype="multipart/form-data" onsubmit="return validateForm();" method="POST" name="">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required data-error="Please enter your Phone Number">
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
                                        <input type="password" onclick="hideError();" class="form-control" id="pwd" minlength="8" name="password" placeholder="Your Password" required data-error="Please enter your Password">
                                        <div class="help-block with-errors"><p id="ep1" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" onclick="hideError();" class="form-control" id="cpwd" minlength="8" name="cpassword" placeholder="Confirm Your Password" required data-error="Please confirm your Password">
                                        <div class="help-block with-errors"><p id="ep" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>                                
<!--                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> -->
                                    <div class="submit-button text-center">
                                        <input class="btn hvr-hover" id="submit" type="submit" style="color: white;" value="Create My Account">
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
    <!-- End Get Started -->
</div>

    <!-- Start Footer  -->
    <footer id="contact">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Dairy Buddy</h4>
                            <p>Welcome to Dairy Buddy, your reliable partner in managing and optimizing dairy farming operations in Kenya. Our user-friendly web application offers comprehensive tools for herd tracking, milk production monitoring, inventory management, and financial accounting. Designed to meet the unique challenges of dairy farmers, Dairy Buddy enhances productivity, improves animal health, and boosts profitability.</p>                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#" onclick="change(1);"> About Us</a></li>
                                <li><a href="{{ route('login') }}"> Login</a></li>
                                <li><a href="{{ url('register') }}"> Register</a></li>
                                <li><a href="#contact"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Nairobi, Kenya. </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+254-712 345 678">+254-712 345 678</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@dairybuddy.org">contactinfo@dairybuddy.org</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved by 150098 and 150462. &copy; 2024.</p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

  <script type="text/javascript">
            function change(x) {
            var aboutDiv = document.getElementById("about");
            var getstartedDiv = document.getElementById("start"); 
            var servicesDiv = document.getElementById("services");              
            if (x == 0) {
                aboutDiv.style.display = "none";
                getstartedDiv.style.display = "block";
                servicesDiv.style.display = "none";                
                console.log(x);   
            } else if (x == 1){
                aboutDiv.style.display = "block";
                getstartedDiv.style.display = "none";
                servicesDiv.style.display = "none";
                console.log(x);   
            } 
        }
  </script>

  <script type="text/javascript">
        function validateForm() {
            var pwrd = document.getElementById("pwd").value;
            var cpwrd = document.getElementById("cpwd").value;
            var error = document.getElementById("ep");
            var error1 = document.getElementById("ep1");
            if (pwrd === cpwrd) {
                return true;
            } else {
                error.style.display = "block";
                error1.style.display = "block";
                return false;
            }      
        }

        function hideError() {
            var error = document.getElementById("ep");
            var error1 = document.getElementById("ep1");
                error.style.display = "none";
                error1.style.display = "none";                        
        }

  </script>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>