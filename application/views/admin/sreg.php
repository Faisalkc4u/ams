<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
        <!-- Google Fonts
                    ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <!-- owl.carousel CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css">
        <!-- animate CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
        <!-- meanmenu icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.min.css">
        <!-- main CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <!-- morrisjs CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
        <!-- responsive CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
        <!-- modernizr JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">

                <?php
                $this->load->view('admin/menu');
                ?>



            </nav>
        </div>
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="<?php echo base_url(); ?>assets/index.html"><img class="main-logo" src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single pro tab start-->
            <div class="single-product-tab-area mg-tb-15">

                <div class="single-pro-review-area">
                    <div class="container-fluid">
                        <div class="">
<div class="row">
                         <div class="row ">
              <ul>
                  <li>       <?php
    
                  if($responce = $this->session->flashdata('Success')){ ?>
      <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-info"><?php echo $responce;?></div>
        </div>
      </div>
                  <?php }
                  elseif($responce = $this->session->flashdata('Failed')){?>
                <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-danger"><?php  echo $responce;?></div>
        </div>
      </div>   
<?php }?></li>
              </ul></div>
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="Add Student.html"><i class="" aria-hidden=""></i> Add New Student</a></li>

                                <div id="" class="">

                                    <div class="">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                            <?php
                                            echo form_open_multipart("Adminctlr/studadd");
                                            ?>

                                            <div class="input-group mg-b-pro-edt">
                                                <table><tr><td><br>Admisssion Number</td>
                                                        <td style="width:5%"><br><input type="number"  name="adno" required></td>
                                                    </tr>

                                                    <tr><td><br>Name</td>
                                                        <td style="width:30%"><br><input type="text" name="name" required>
                                                        <br/>
                                                       <small> Enter First Name and Last Name 
                                                        </small>
                                                        </td>
                                                    </tr>

                                                    <tr><td><br>Date of Birth</td>
                                                        <td style="width:50%"><br><input type="date" name="DOB" required></td>
                                                    </tr></div>
                                            <tr><td><br>Gender</td>
                                                <td><br><input type="radio" class="" name="gender"  value="Male">Male
                                                    <input type="radio" class="" name="gender" value="Female" checked="checked" >Female</td></tr>
                                            <tr><td><br>Course</td>
                                                <td><br><select name="Course" required >
                                                        <option value="">Select Course</option>
                                                        <option value="MCA(LE)">MCA</option>
                                                        <option value="MCA(R)">MCA(LE)</option>
                                                        <option value="MSc">MSc</option>
                                                        <option value="MPhil">MPhil</option>
                                                        <option value="PhD">PhD</option></select></td></tr>
                                                        <tr> <td>&nbsp;</td>
                                                        <tr><td><br>Duration</td>
                                                            <td><br><select name="duration"  required>
                                                                    <option value="">Select Duration</option>
                                                                    <option value="2 year">2 years</option>
                                                                    <option value="3 year">3 years</option>

                                                                </select></td>
                                                        </tr>
                                                        <tr> <td>&nbsp;</td>
                                                        <tr><td>Semester</td>
                                                            <td><select name="sem"  required>
                                                                    <option value="">Select Semster</option>
                                                                    <option value="Semster 1"> Semester 1</option>
                                                                    <option value="Semster 2"> Semester 2</option>
                                                                    <option value="Semster 3"> Semester 3</option>
                                                                    <option value="Semster 4"> Semester 4</option>
                                                                    <option value="Semster 5"> Semester 5</option>
                                                                    <option value="Semster 6"> Semester 6 </option>
                                                                   

                                                                </select></td>
                                                        </tr>
                                                        <tr> <td>&nbsp;</td> </tr>
                                                        <tr><td>Date of Join</td>
                                                            <td><input type='date' name='doj' required></td>
                                                        </tr>							

                                            <tr><td><br>Religion</td>  
                                                <td><br><select name="religion" required >
                                                        <option value="">Select Religion</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Muslim">Muslim</option>
                                                        <option value="Christian">Christian</option>
                                                        <option value="Buddha">Buddha</option>
                                                        <option value="Jaina">Jaina</option>
                                                        <option value="Sikh">Sikh</option>
                                                    </select></td></tr>
                                            <tr>
                                            <td><br>Caste</td>  
                                                <td> <br><select name="caste" required >
                                                        <option value="">Select Caste</option>
                                                        <option value="Bilava">Bilava</option>
                                                        <option value="Ezhava">Ezhava</option>
                                                        <option value="Saliya">Saliya</option>
                                                        <option value="Thiyya">Thiyya</option>
                                                        <option value="Vaniya">Vaniya</option>
                                                        <option value="Thattan">Thattaan</option>
                                                        <option value="Nair">Nair</option>
                                                        <option value="Nambiar">Nambiar</option>
                                                        <option value="Brahmins">Brahmins</option>
                                                        <option value="RC">RC</option>
                                                        <option value="SC">SC</option>
                                                        <option value="Latin">Latin</option>
                                                        <option value="Orthodox">Orthodox</option>
                                                        <option value="Anglo Indian">"Anglo Indian</option>
                                                        <option value=""></option>
                                                    </select></td></tr>

                                                    <tr>
                                            

                                            <tr><td><br>Category</td>
                                                <td><br><select name="category" required >
                                                        <option value="">Category</option>
                                                        <option value="General">General</option>
                                                        <option value="OBC">OBC</option>
                                                        <option value="OEC">OEC</option>
                                                        <option value="SC/ST">SC/ST</option>
                                                        <option value="Other">Other</option>
                                                    </select></td></tr>


                                            <div class="input-group mg-b-pro-edt">
                                                <tr><td><br>Email</td>
                                                    <td><br><input type="email" name="email" required>
                                                    </td></tr>
                                                <tr><td><br>Phone </td>
                                                    <td><br><input type="number" name="phone" required>
                                                    </td></tr></div></table>



                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Register
                                                                                                         </button>
                                             <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                 </button>--><br>
                                            <input type="submit" value="Register" name="f">


                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close();
                                ?>

                                <div class="footer-copyright-area">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="footer-copy-right">
                                                    <p>SIST KANNUR UNIVERSITY CAMPUS 2020 <a href=""></a> All rights reserved.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!-- jquery
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.3.min.js"></script>
                        <!-- bootstrap JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
                        <!-- wow JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
                        <!-- price-slider JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/jquery-price-slider.js"></script>
                        <!-- meanmenu JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.js"></script>
                        <!-- owl.carousel JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
                        <!-- sticky JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
                        <!-- scrollUp JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
                        <!-- mCustomScrollbar JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
                        <!-- metisMenu JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/metisMenu/metisMenu.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/js/metisMenu/metisMenu-active.js"></script>
                        <!-- tab JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/tab.js"></script>
                        <!-- icheck JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/icheck/icheck.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/js/icheck/icheck-active.js"></script>
                        <!-- plugins JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
                        <!-- main JS
                                    ============================================ -->
                        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
                        </body>

                        </html>















