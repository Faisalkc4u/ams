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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/editor/select2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/data-table/bootstrap-editable.css">
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
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Facilities</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Gallery</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <!--<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-envelope-o adminpro-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>-->
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud adminpro-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser adminpro-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart adminpro-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                     1                   <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                
                                                    </div>
                                                </li>
                                            </ul>
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
                       
                                <ul id="myTab3" class="tab-review-design">
                                    <!--<li class="active"><a href="Add Student.html"><i class="" aria-hidden=""></i>Pass Out Students List</a></li>-->
                                   
                                <div id="" class="">
                              
                                        <div class="">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                      
                                                    <?php 
echo form_open_multipart("");
?>
                                                
                                          
                                          <table><tr><td><br>Course</td>
                                                        <td style="width:50%"><br><select name="course" required >
															<option value="">Select Course</option>
															<option value="MCA(LE)">MCA</option>
															<option value="MCA(R)">MCA(LE)</option>
															<option value="MSc">MSc</option>
															<option value="MPhil">MPhil</option>
															<option value="PhD">PhD</option>
														</select></td></tr>
                                                        <tr><td><br>Semester</td>
                                                        <td><br><select name="semester" required >
															<option value="">Select Semester</option>
															<option value="Semester 1">Semester 1</option>
															<option value="Semester 2">Semester 2</option>
															<option value="Semester 3">Semester 3</option>
															<option value="Semester 4">Semester 4</option>
															<option value="Semester 5">Semester 5</option>
                                                            <option value="Semester 6">Semester 6</option>
														</select></td></tr>
                                                      
                                                        <tr><td><br><input type="submit" value="View" name="f"></td></tr></table>
                                                        <br>         
                                          <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            
                                    <h1>Students List</h1>
                                </div>
                            </div>
                            
                                   <br><br><br><br><br> 
                                   <table data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="" >
                                        <thead>
                                            <tr>
                                                <!--<th data-field="state" data-checkbox="true"></th>-->
                                                <th data-field="id">Register Number</th>
                                                <th data-field="name" data-editable="true">Name</th>
                                                <th data-field="course" data-editable="true">Course</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="width:50%"><input type="submit" value="Drop or Failed"></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                                    
                                                    
                                                    
                                                    

                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <!--<div class="text-center mg-b-pro-edt custom-pro-edt-ds">-->
                                                   <!-- <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Register
														</button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                        </button>--><br>
                                               

                                                </div>
                                            </div>
                                        </div>
                                        <?php echo form_close();
?>
      
     <br><br><br><br><br><br> <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>SIST KANNUR UNIVERSITY CAMPUS 2020<a href=""></a> All rights reserved.</p>
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
    <!-- data table JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/editable/jquery.mockjax.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/editable/mock-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/editable/select2.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/chart/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>