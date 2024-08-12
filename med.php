<?php
session_start();
if($_SESSION['logged_in'] != true){
    $_SESSION['message'] = 'You must login first to visit Medical System!';
    header("location: error.php");
}
require_once 'MSN-admin/login_details.php';
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Medical Management System</title>

    <meta name="description" content="Medical Management System"/>
<meta name="keywords" content="keyword1, keyword2"/>
<meta name="author" content="Jobz"/>


<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- icons & favicons -->
<link rel="shortcut icon" type="image/x-icon"  href="assets/img/favicon/ntu-favicon.ico"/>  <!-- this icon shows in browser toolbar -->
<link rel="icon" href="assets/img/favicon/ntu-favicon.ico"/> <!-- this icon shows in browser toolbar -->


<!-- GOOGLE FONT -->
<link href="assets/css/font.css" rel="stylesheet" />

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/vendor/navbar/bootstrap-4-navbar.css" />

<!--Animate css -->
<link rel="stylesheet" href="assets/vendor/animate/animate.css" media="all" />

<!-- FONT AWESOME CSS -->
<link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css" />

<!--owl carousel css -->
<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" media="all" />

<!--Magnific Popup css -->
<link rel="stylesheet" href="assets/vendor/magnific/magnific-popup.css" media="all" />

<!--Nice Select css -->
<link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css" media="all" />

<!--Offcanvas css -->
<link rel="stylesheet" href="assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

<!-- MODERNIZER  -->
<script src="assets/vendor/modernizr/modernizr-custom.js"></script>

<!-- Main Master Style  CSS  -->
<link id="cbx-style" data-layout="1" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />
</head>
<body>



    <!--== Header Area Start ==-->
<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:info@construc.com"><strong>Email:</strong> info@ntu.edu.pk</a>
                        <a href="mailto:info@construc.com"><strong>Hotline:</strong> 92 (041) 9230081-90</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area" id="fixheader">
        
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img width="50px" height="50px" src="assets/img/logo.jpg" alt="Logo"/>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="MSN-admin/treatment.php">Treatment</a></li>
                                <li class="nav-item"><a class="nav-link" href="MSN-admin/reimbursement.php">Reimbursement</a></li>
                                <li class="nav-item"><a class="nav-link" href="MSN-admin/user_registrations.php">Users</a></li>
                                <li class="nav-item"><a class="nav-link" href="MSN-admin/order.php">Supply Order</a></li>
                                <li class="nav-item"><a class="nav-link" href="MSN-admin/billing_amount.php">Specific Record</a></li>
                                <li class="nav-item"><a class="nav-link" href="MSN-admin/medicine.php">Medicine</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        
    </div>
</header>
<!--== Header Area End ==-->


<div class="card">
                            <div class="card-header">
                            	<div class="row">
                            		<div class="col-md-4">
                            			<h5 class="title">Add Medicine</h5>
                            		</div>
                            		<div class="col-md-4"></div>
                            		<div class="col-md-4 pr-1">
                            			
                            		</div>
                            	</div>
                                
                                
                            </div>

                            <div class="card-body">
                                <form action="medicine_added.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                        	<div class="form-group">
	                                        	<label>Medicine Name</label>
	                                            <input type="text" name="name" class="form-control" placeholder="Medicine Name" required="">
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-6 pr-1">
                                    		<div class="form-group">
                                    			<label>Quantity</label>
                                    			<input class="form-control" type="number" name="quantity" id="quantity" placeholder="Quantity" required="">
                                    		</div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" class="form-control" placeholder="Price per unit" required="" name="price" id="price">
                                            </div>
                                        </div>
                                    </div>
                                   	<div class="row">
                                   		<div class="col-md-5"></div>
                                   		<div class="col-md-2">
                                   			<div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-lg" value="Save"></button>
                                    		</div>
                                    	</div>
                                   		<div class="col-md-5"></div>
                                   	</div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="card">
                        	<div class="card-body">
                        		<div class="row">
                        			<div class="col-md-2"></div>
                        			<div class="col-md-4">
                        				<div style="text-align: center;"  class="form-group">
                                    		<a href="new_stock.php" class="btn btn-primary btn-lg">Add New Stock</a>
                        				</div>
                        			</div>
                        			<div class="col-md-4">
                        				<div style="text-align: center;"  class="form-group">
                                    		<a href="edit_medicine.php" class="btn btn-primary btn-lg">View Records</a>
                        				</div>
                        			</div>
                        			<div class="col-md-2"></div>
                        		</div>
                        		
                        	</div>
                    </div>
   




    <!--== Footer Area Start ==-->
<footer id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <div class="widgei-body">
                            <div class="footer-about">
                                <img src="assets/img/logo.jpg" alt="Logo" class="img-fluid" />
                                <p>National Textile University aspires to have a transformative impact on the socio-economic developoment of the country in general and textile & clothing industry in particular, with outstanding education, research, and eco-friendly innovation.</p>
                                <a href="#">Phone: 92 (041) 9230081-90</a> <a href="#">Fax: 92 (041) 9230098</a> <br> <a href="#">Email: info@ntu.edu.pk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Get In Touch</h4>
                        <div class="widgei-body">
                            
                            <div class="newsletter-form">
                                <form id="cbx-subscribe-form" role="search">
                                    <input type="email" placeholder="Enter Your Email"  id="subscribe" required>
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                            <div class="footer-social-icons">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Usefull Link</h4>
                        <div class="widgei-body">
                            <ul class="double-list footer-list clearfix">
                                <li><a href="#">Medical Staff</a></li>
                                <li><a href="#">Reimbursement</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Doctor Portal</a></li>
                                <li><a href="#">Employee Portal</a></li>
                                <li><a href="#">Admin Portal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-bottom-text">
                        <p>© 2018 NUTS, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
<!--== Footer Area End ==-->

<!--== Scroll Top ==-->
<a href="#" class="scroll-top">
    <i class="fa fa-angle-up"></i>
</a>
<!--== Scroll Top ==-->

<!-- SITE SCRIPT  -->

<!-- Jquery JS  -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>

<!-- POPPER JS -->
<script src="assets/vendor/bootstrap/js/popper.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/navbar/bootstrap-4-navbar.js"></script>

<!--owl-->
<script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>

<!--Waypoint-->
<script src="assets/vendor/waypoint/waypoints.min.js"></script>

<!--CounterUp-->
<script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

<!--isotope-->
<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

<!--magnific-->
<script src="assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

<!--Smooth Scroll-->
<script src="assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

<!--Jquery Easing-->
<script src="assets/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

<!--Nice Select -->
<script src="assets/vendor/nice-select/jquery.nice-select.js"></script>

<!--Jquery Valadation -->
<script src="assets/vendor/validation/jquery.validate.min.js"></script>
<script src="assets/vendor/validation/additional-methods.min.js"></script>

<!--off-canvas js -->
<script src="assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

<!-- Countdown -->
<script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

<!-- custom js: main custom theme js file  -->
<script src="assets/js/theme.min.js"></script>

<!-- custom js: custom js file is added for easy custom js code  -->
<script src="assets/js/custom.js"></script>

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->
<!-- <script id="switcherhandle" src="assets/switcher/switcher.js"></script> -->


</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Aug 2018 09:41:44 GMT -->
</html>

