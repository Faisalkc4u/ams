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
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri: 9.30 to 4.00 <span class="mx-2"></span> | <i class="" aria-hidden="true"></i><a href="<?php echo base_url();?>index.php" class="text-white"> Back</a><span class="mx-2"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <!--<div class="classy-nav-container breakpoint-off">-->
                <div class="container">
                    <!-- Classy Menu -->
                    <!--<nav class="classy-navbar justify-content-between" id="akameNav">-->

                        <!-- Logo -->
                        <!--<a class="nav-brand" href="<?php echo base_url();?>/index.html"><img src="" alt=""></a>-->

                        <!-- Navbar Toggler -->
                        <!--<div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>-->

 </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

<br>
<?php 
echo form_open("Adminctlr/deptprofile");
?>
<table border=1>
    <tr><th> Course</th>
   <th>Semesters </th> </tr>

</tr>
<tr><td>MPhil</td>
<td>2 Semesters(one year)</td>
</tr>
</table>
<?php echo form_close();
?>
<!-- Footer Area Start -->
<footer class="footer-area section-padding-80-0">
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
                           <br><br><br><br><br><br><br><br><br> <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script></script> All rights reserved <i class="" aria-hidden="true"></i> <a href="" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <br><br><br><br><br><br><br><br><br> <h5>Opening times</h5>

                        <!-- Open Times -->
                        <div class="open-time">
                         <p>Monday: Friday: 9.30 to 4</p>
                            
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
                        <br><br><br><br><br><br><br><br><br><h5 class="">Contact Us</h5>

                        <!-- Contact Address -->
                       <div class="contact-address">
                          <p>Tel: (+12) 345 678 910</p>
                            <p>E-mail: @gmail.com</p>
                            <p>Address:</p>
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