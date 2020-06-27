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
                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">-->
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="" aria-hidden="true"></i>View Timetable</a></li>
                                   <!--<li><a href="#reviews"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="fa fa-commenting" aria-hidden="true"></i> Review</a></li>
                                </ul>-->
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="table_type">
                                                        <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

                                                            <tr> <td>&nbsp;</td> </tr>
                                                            <tr>
                                                                <td align='center'>TimeTable</td>
                                                                <td>
                                                                    <select name="type" id="type" reqired>
                                                                        <option value="">Select Type</option>
                                                                       <option value="student">Student</option>
                                                                       <option value="teacher">Teacher</option>
                                                                    </select> 
                                                                </td>
                                                            </tr>
                                                            <tr> <td>&nbsp;</td> </tr>
                                                            <tr> <td>&nbsp;</td><td><span class="input-group-btn">
     <button  class="btn btn-primary"type="button" id="myBt">Submit</button>
         </span></td></tr>
                                                        </table>
                                                    </div>
                                                    <div  id="stud" style="display: none">
                                                    <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Course</td>
    <td>
        <select name="course" id="course" required>
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

                                                    </table></div>
                                                    <div  id="teacher" style="display: none">
                                                    <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Teacher Id</td>
    <td>
       <input name="teacher_id" id="teacher_id" type="text" required>
       
    </td>
</tr>

<tr> <td>&nbsp;</td> </tr> 

 <tr> <td>&nbsp;</td><td><span class="input-group-btn">
     <button  class="btn btn-primary"type="button" id="btn_t">Submit</button>
         </span></td></tr>

                                                    </table></div>
                                                    <br> </div> 
                                                    <div style= "margin-top:1px" id="result">
</div>
                                               
                                            </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <!--<button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save
														</button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                        </button>--><br>
                                                       
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/5-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Largest Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Medium Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Small Image
																								</label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
																							<i class="fa fa-times" aria-hidden="true"></i>
																						</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/6-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Largest Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Medium Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Small Image
																								</label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
																							<i class="fa fa-times" aria-hidden="true"></i>
																						</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/7-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Largest Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Medium Image
																								</label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
																									<input type="radio" name="radio"><i class="helper"></i>Small Image
																								</label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
																							<i class="fa fa-times" aria-hidden="true"></i>
																						</button>
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
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="card-block">
                                                        <div class="text-muted f-w-400">
                                                            <p>No reviews yet.</p>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <div class="txt-primary f-18 f-w-600">
                                                                <p>Your Rating</p>
                                                            </div>
                                                            <div class="stars stars-example-css detail-stars">
                                                                <div class="review-rating">
                                                                    <fieldset class="rating">
                                                                        <input type="radio" id="star5" name="rating" value="5">
                                                                        <label class="full" for="star5"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                                        <label class="half" for="star4half"></label>
                                                                        <input type="radio" id="star4" name="rating" value="4">
                                                                        <label class="full" for="star4"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                                        <label class="half" for="star3half"></label>
                                                                        <input type="radio" id="star3" name="rating" value="3">
                                                                        <label class="full" for="star3"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                                        <label class="half" for="star2half"></label>
                                                                        <input type="radio" id="star2" name="rating" value="2">
                                                                        <label class="full" for="star2"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                                        <label class="half" for="star1half"></label>
                                                                        <input type="radio" id="star1" name="rating" value="1">
                                                                        <label class="full" for="star1"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half">
                                                                        <label class="half" for="starhalf"></label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mg-b-15 mg-t-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="User Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group review-pro-edt">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
																</button>
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
                </div>
            </div>
        </div>
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
         
         $("#myBt").click(function(){
             
            var type= $('#type').val();
            console.log(type);
            if(type==""){
                alert("enter timetable type")
            }
            
            else{
                if (type=="teacher"){
                   
                    $('#table_type').attr('style','display:none ');
     $('#teacher').css('display', 'block'); 
            }
           else{
     $('#table_type').attr('style','display:none ');
     $('#stud').css('display', 'block');
           }
 }
    });
         
         $("#myBtn").click(function(){
        
         var course = $("#course").val();
         var sem=$("#sem").val();
         
         if(course!="" && sem!=""){
         load_data(course,sem);
     }
         
     });
         function load_data(course,sem){
      
        $.ajax({
           url:"<?php echo base_url();?>index.php/Adminctlr/view_student_timetable?data="+course+"|"+sem,
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
    $("#btn_t").click(function(){
        
         var t_id= $("#teacher_id").val();
        
         
         if(t_id!==""){
         load_datas(t_id);
     }
     else{
         alert("Enter id of teacher");
     }
         
     });
         function load_datas(t_id){
      
        $.ajax({
           url:"<?php echo base_url();?>index.php/Adminctlr/view_teacher_timetable?data="+t_id,
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