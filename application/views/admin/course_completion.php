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
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
             <!-- Mobile Menu start -->
             
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
                <div class="container-fluid">
               
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                       <div class="row ">
              <ul>
                  <li>       <?php if($responce = $this->session->flashdata('Success')){ ?>
      <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-info"><?php echo $responce;?></div>
        </div>
      </div>
                  <?php }
                  elseif($responce = $this->session->flashdata('Failed')){?>
                <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-danger"><?php echo $responce;?></div>
        </div>
      </div>   
<?php }?></li>
              </ul></div>
                                <ul id="myTab3" class="tab-review-design">
                                   <br> <br><br><li class="active"><a href="#description"><i class="" aria-hidden="true"></i>Course Completion</a></li>
                                   <!--<li><a href="#reviews"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>
                                </ul>-->
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    
                                                    <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Course</td>
    <td>
        <select name="course" id="course" reqired>
        <option value="">Select Course</option>
          <?php
            foreach($details as $user){
          ?> 
         <option value="<?php echo $user->course;?>"><?php echo $user->course;?></option>
          <?php
               }
          ?>
        </select> 
    </td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
<tr>
    <td align='center'>Semister</td>
    <td>
        <select name="sem" id="sem" required>
        <option value="">Select Semester</option>
        <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
        </select> 
    </td>
</tr>
<tr> <td>&nbsp;</td> </tr> 

 <tr> <td>&nbsp;</td><td><span class="input-group-btn">
     <button  class="btn btn-primary"type="button" id="myBtn">Submit</button>
         </span></td></tr>

                                                    </table><br>
                                                    <?php echo form_open_multipart("Adminctlr/store_result"); ?>
                                                    
                                                        <div style= "margin-top:1px" id="result"></div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                                <select name="action" required >
                                                                    <option value="">Actions</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Drop/Fail</option>
                                                                </select>
                                                                <button type="button" id="selectAll" class="btn btn-primary waves-effect waves-light">Select All
																</button>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                                                </button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                            </div>
                                               </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                  <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2020 <a href="https://colorlib.com/wp/templates/"></a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo base_url()?>assets/js/morrisjs/morris.js"></script>
    <script src="<?php echo base_url()?>assets/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
<script>


        $(document).ready(function(){
         
         $("#myBtn").click(function(){
        
         var course = $("#course").val();
         var sem=$("#sem").val();
         
         if(course!="" ){
         load_data(course,sem);
     }
         
     });
     $("#selectAll").click(function(){
         console.log('checkd');
         if (! $('input:checkbox').is('checked')) {
      $('input:checkbox').prop('checked',true);
  } else {
      $('input:checkbox').prop('checked', false);
  }  

});
         function load_data(course,sem){
          var   course = $("#course").val();
         var sem=$("#sem").val();
        $.ajax({
           url:"<?php echo base_url();?>index.php/Adminctlr/student_result?data="+course+"|"+sem,
           method:"get",
           
           success:function(data){
                       $('#result').html(data);
                   },
          error: function(xhr, textStatus, error){
          console.log(xhr.statusText);
           console.log(textStatus);
           console.log(error);
          }
        });
    }
    
    });

 </script>
</body>

</html>