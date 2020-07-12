<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url();?>/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to KUSIST</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri: 9.30 to 4.00 <span class="mx-2"></span> | <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo base_url();?>index.php/Adminctlr/home" class="text-white"> Login</a><span class="mx-2"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="<?php echo base_url();?>/index.html"><img src="" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class=""><a href="<?php echo base_url();?>index.php">Home</a></li>
                                    <li><a href="">Profile</a>
                                        <ul class="dropdown">
                                            <!--<li><a href="./index.html"> </a></li>-->
                                            <li><a href="<?php echo base_url();?>index.php/Adminctlr/deptadmin">About Us</a></li>
                                            <li><a href="<?php echo base_url();?>index.php/Adminctlr/adminfacilities"> Facilities</a></li>
                                            <!--<li><a href="./portfolio.html">- Gallery</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Blog Details</a></li>
                                            <li><a href="./contact.html">- Contact</a></li>-->
                                            <!--<li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>-->
                                        </ul>
                                    </li>
                                     
                                    
                                    <!--<li><a href="#">Faculties</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>index.php/teacherctlr/thome">Login </a></li>-->
                                            <!--<li><a href="./about.html">Profile View</a></li>
                                            <li><a href="#">Management</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Internal Mark</a></li>
                                                    <li><a href="#">Attendance</a></li></ul></li>
                                                    <li><a href="#">View</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Internal Mark</a></li>
                                                    <li><a href="#">Attendance</a></li></ul></li></li>
                                                   
                                            <li><a href="./about.html">Change Password</a></li>
                                             <li><a href="./about.html">Logout</a></li>-->
                                      <!--  </ul>
                                    </li>
                                    <li><a href="#">Students</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.html">Login </a></li>-->
                                            <!--<li><a href="./about.html">Profile View</a></li>
                                            <li><a href="#">View</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Syllabus</a></li>
                                                    <li><a href="#">Timetable</a></li>
                                                    <li><a href="#">Internal Mark</a></li>
                                                    <li><a href="#">Attendance</a></li>
                                                     
                                                </ul></li>
                                                <li><a href="./about.html">Leave Apply</a></li>
                                            <li><a href="./about.html">Change Password</a></li>
                                             <li><a href="./about.html">Logout</a></li>-->
                                        <!--</ul>
                                    </li>-->
                                     <li><a href="#">Courses</a>
                                        <ul class="dropdown">
                                     <li><a href="<?php echo base_url();?>index.php/Adminctlr/mca"> MCA</a></li>
                                 <li><a href="<?php echo base_url();?>index.php/Adminctlr/mcale">MCA- LE</a></li>
                                             
<li><a href="<?php echo base_url();?>index.php/Adminctlr/msc">MSc</a></li>
                     <li><a href="<?php echo base_url();?>index.php/Adminctlr/mphil">MPhil</a></li>
                              <li><a href="<?php echo base_url();?>index.php/Adminctlr/phd">PhD</a></li>
                                            </ul></li>
                                    <!--<li><a href="./portfolio.html">Portfolio</a></li>
                                    <li><a href="./service.html">Services</a></li>
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>-->
                                </ul>

                                <!-- Cart Icon -->
                                <!--<div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>-->

                                <!-- Book Icon -->
                                <!--<div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="#" class="btn akame-btn"></a>
                                </div>
                            </div>-->
                           <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-color:url" >
            
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">SIST <br> </h2>
                                    <p data-animation="fadeInUp" data-delay="400ms">“School of Information Science & Technology, Department of 
                                    Information Technology, Mangattuparamba, Kannur University Campus. Department of Information Technology 
                                    imparts students the knowledge to understands and engage 
                                    with the technological society in which they live and the skills that will lead to successful careers.”</p>
                                    <!--<a href="#" class="btn akame-btn" data-animation="fadeInUp" data-delay="700ms">About Us</a>-->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-50-0" style="background-color: #bf1d2c">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <!--<a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                        <p class="mb-30">We would love to serve you and let you enjoy your culinary experience. Excepteur sint occaecat cupidatat non proident.</p>-->

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<font color="white">Copyright &copy;<script></script></font><font size="4" color="white"> All rights reserved</font> <i class="" aria-hidden="true"></i> <a href="" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                       <h5><font color="white"> Opening times</h5></font>

                        <!-- Open Times -->
                        <div class="open-time">
                           <p> <font color="white">Monday: Friday: 9.30 to 4</p></font>
                            
                        </div>

                        <!-- Social Info -->
                        <!--<div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>-->
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h5 class=""><font color="white">Contact Us</h5></font>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p><font color="white">Tel: (+12) 345 678 910</p></font>
                            <p><font color="white">E-mail: kusist@gmail.com</p></font>
                            <p><font color="white">Address:
                                <br>SIST 
                                <br>Mangattuparamba Campus
                                <br>Mangattuparamba 
                            </p></font>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="<?php echo base_url();?>/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="<?php echo base_url();?>/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="<?php echo base_url();?>/js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="<?php echo base_url();?>/js/default-assets/active.js"></script>

</body>

</html>































<!--<a href="<?php echo base_url();?>index.php/Adminctlr/home">Admin</a>
<a href="<?php echo base_url();?>index.php/teacherctlr/index">Teacher</a>-->


