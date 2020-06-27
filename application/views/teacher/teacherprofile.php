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
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri: 9.30 to 4.00 <span class="mx-2"></span> | <i class="" aria-hidden="true"></i><a href="<?php echo base_url();?>index.php/Teacherctlr/home" class="text-white"> Back</a><span class="mx-2"></span></p>
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
<div class="container">
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
<?php 
echo form_open_multipart("teacherctlr/update_trprofile");
?>
<h2><font face="arialblack">Complete Your Profile...</font></h2>
<?php
foreach($details as $user){
    
 ?>

<table>
 <div class="input-group mg-b-pro-edt">
 <tr><td><br>Teacher ID</td>
 <td><br><input type="text"  disabled value="<?php echo $user->tid;?>" ></td>
 </tr>
 <tr><td><br>Name</td>
 <td><br><input type="text"   disabled  value="<?php echo $user->name;?>" ></td>
 </tr>
 <tr><td><br>Date of Birth</td>
 <td><br><input type="date" disabled  value="<?php echo $user->dob;?>"></td>
 </tr>
<tr><td><br>Gender</td>
<td><br><input type="text"  disabled value="<?php echo $user->gender;?>" ></td>
</tr>
<tr><td><br>Address</td>
<td><br><input type="text"  name="address" value="<?php echo $user->address;?>" >

</td>
 </tr>
 </div>
 <tr><td><br>District</td>
 <td><br><select name="dist"  >
 <option value="">Select District</option>
<option value="Kasargod" <?php echo  $user->district=='Kasargod'? 'selected=""':'' ?> >Kasargod</option>
<option value="Kannur" <?php echo  $user->district=='Kannur'? 'selected=""':'' ?> >Kannur</option>
<option value="Wayanad"  <?php echo  $user->district=='Wayanad'? 'selected=""':'' ?> >Wayanad</option>
<option value="Kozhikkode"  <?php echo  $user->district=='Kozhikkode'? 'selected=""':'' ?> >Kozhikkode</option>
 <option value="Malappuram"  <?php echo  $user->district=='Malappuram'? 'selected=""':'' ?> >Malappuram</option>
<option value="Palakkad"  <?php echo  $user->district=='Palakkad'? 'selected=""':'' ?> >Palakkad</option>
<option value="Thrissur"  <?php echo  $user->district=='Thrissur'? 'selected=""':'' ?> >Thrissur</option>
 <option value="Ernakulam"  <?php echo  $user->district=='Ernakulam'? 'selected=""':'' ?> >Ernakulam</option>
<option value="Idukki"   <?php echo  $user->district=='Idukki'? 'selected=""':'' ?> >Idukki</option>
<option value="Kottayam"   <?php echo  $user->district=='Kottayam'? 'selected=""':'' ?> >Kottayam</option>
 <option value="Alappuzha"   <?php echo  $user->district=='Alappuzha'? 'selected=""':'' ?> >Alappuzha</option>
 <option value="Pathanamthitta"   <?php echo  $user->district=='Pathanamthitta'? 'selected=""':'' ?> >Pathanamthitta</option>
<option value="Kollam"   <?php echo  $user->district=='Kollam'? 'selected=""':'' ?> >Kollam</option>
<option value="Thiruvananthapuram"   <?php echo  $user->district=='Thiruvananthapuram'? 'selected=""':'' ?> >Thiruvananthapuram</option>
</select></td></tr>
<tr><td><br>Nationality</td>
                          <td><br><select name="nationality"  >
                          <option value="">Select</option>                                                      
                            <option value="Afganistan"  <?php echo  $user->nationality=='Afganistan'? 'selected=""':'' ?> >Afghanistan</option>
                            <option value="Albania"   <?php echo  $user->nationality=='Albania'? 'selected=""':'' ?> >Albania</option>
                            <option value="Algeria"   <?php echo  $user->nationality=='Algeria'? 'selected=""':'' ?> >Algeria</option>
                            <option value="Bahrain"   <?php echo  $user->nationality=='Bahrain'? 'selected=""':'' ?> >Bahrain</option>
                            <option value="Bangladesh"   <?php echo  $user->nationality=='Bangladesh'? 'selected=""':'' ?> >Bangladesh</option>
                            <option value="Brazil"   <?php echo  $user->nationality=='Brazil'? 'selected=""':'' ?> >Brazil</option>
                            <option value="Canada"   <?php echo  $user->nationality=='Canada'? 'selected=""':'' ?> >Canada</option>
                            <option value="Denmark"   <?php echo  $user->nationality=='Denmark'? 'selected=""':'' ?> >Denmark</option>
                            <option value="Egypt"   <?php echo  $user->nationality=='Egypt'? 'selected=""':'' ?> >Egypt</option>
                            <option value="Finland"   <?php echo  $user->nationality=='Finland'? 'selected=""':'' ?> >Finland</option>
                            <option value="France"   <?php echo  $user->nationality=='France'? 'selected=""':'' ?> >France</option>
                            <option value="Georgia"   <?php echo  $user->nationality=='Georgia'? 'selected=""':'' ?> >Georgia</option>                                                          
                            <option value="Germany"   <?php echo  $user->nationality=='Germany'? 'selected=""':'' ?> >Germany</option>                                                            
                            <option value="Hong Kong"   <?php echo  $user->nationality=='Hong Kong'? 'selected=""':'' ?> >Hong Kong</option>                
                            <option value="Hungary"   <?php echo  $user->nationality=='Hungary'? 'selected=""':'' ?> >Hungary</option>                
                            <option value="Iceland"   <?php echo  $user->nationality=='Iceland'? 'selected=""':'' ?> >Iceland</option>            
                            <option value="Indonesia"    <?php echo  $user->nationality=='Indonesia'? 'selected=""':'' ?> >Indonesia</option>                    
                            <option value="India"   <?php echo  $user->nationality=='India'? 'selected=""':'' ?> >India</option>                      
                            <option value="Iran"   <?php echo  $user->nationality=='Iran'? 'selected=""':'' ?> >Iran</option>                      
                            <option value="Iraq"   <?php echo  $user->nationality=='Iraq'? 'selected=""':'' ?> >Iraq</option>                
                            <option value="Ireland"   <?php echo  $user->nationality=='Ireland'? 'selected=""':'' ?> >Ireland</option>                    
                            <option value="Jamaica"   <?php echo  $user->nationality=='Jamaica'? 'selected=""':'' ?> >Jamaica</option>                                                                   
                            <option value="Japan"   <?php echo  $user->nationality=='Japan'? 'selected=""':'' ?> >Japan</option>                                                                
                            <option value="Jordan"   <?php echo  $user->nationality=='Jordan'? 'selected=""':'' ?> >Jordan</option>
                    </select></td></tr>
                    <div class="input-group mg-b-pro-edt">
                            <tr><td><br>Aadhar Number</td>
                            <td><br><input type="text" name="aadhar" value="<?php echo $user->aadhar;?>" >
                            </td></tr>
                            <tr><td><br>Qualification</td>
                            <td><br><input type="text" disabled value="<?php echo $user->qualificn;?>" >
                            </td></tr>
                            <tr><td><br>SSLC Mark Percentage</td>
                            <td><br><input type="text" name="sslc" value="<?php echo $user->sslcmark;?>">
                            </td></tr>      
</div>  
 <tr><td><br>Plus Two Stream</td>
 <td><br><select name="plustream"  >
<option value="">Select Stream</option>
<option value="Biology Science"  <?php echo  $user->plustwostream=='Biology Science'? 'selected=""':'' ?> >Biology Science</option>
<option value="Computer Science" <?php echo  $user->plustwostream=='Computer Science'? 'selected=""':'' ?>>Computer Science</option>
<option value="Commerce with Finance" <?php echo  $user->plustwostream=='Commerce with Finance'? 'selected=""':'' ?>>Commerce with Finance</option>
<option value="Commerce with Computer" <?php echo  $user->plustwostream=='Commerce with Computer'? 'selected=""':'' ?>>Commerce with Computer</option>
</select></td></tr>
<div class="input-group mg-b-pro-edt">
<tr><td><br>Plus Two Mark Percentage</td>
<td><br><input type="text" name="plusmark" value="<?php echo $user->plustwomark;?>" ></td>
</tr>
</div>                                                          
<tr><td><br>Degree Stream</td>
<td><br><select name="dstream"   >
<option value="">Select Stream</option>
<option value="BCA" <?php echo  $user->degreestream=='BCA'? 'selected=""':'' ?>>BCA</option>
<option value="BSc" <?php echo  $user->degreestream=='BSc'? 'selected=""':'' ?>>BSc</option>                                                        
</select></td></tr>
<div class="input-group mg-b-pro-edt">
<tr><td><br>Degree Mark Percentage</td>
<td><br><input type="text" name="dgree" value="<?php echo $user->degreemark;?>" ></td>
</tr>
<tr><td><br>University Name </td>
<td><br><input type="text" name="uguni" value="<?php echo $user->uguniversity;?>" ></td>
</tr>

<tr><td><br>PG Stream</td>
<td><br><select name="pgstream"  >
<option value="">Select Stream</option>
<option value="MCA" <?php echo  $user->pgstream=='MCA'? 'selected=""':'' ?>>MCA</option>
<option value="MSc" <?php echo  $user->pgstream=='MSc'? 'selected=""':'' ?>>MSc</option>
</select></td></tr>
<tr><td><br>PG Mark Percentage</td> 
<td><br><input type="text"  name="pg" value="<?php echo $user->pgmark;?>"  ></td>
</tr>
<tr><td><br>University Name</td>
<td><br><input type="text" name="pguni" value="<?php echo $user->pguniversity;?>" ></td>
</tr>

<tr><td><br>MPhil Qualification</td>
<td><br><select name="mquali"  >
<option value="">Select</option>
<option value="Yes" <?php echo  $user->mphil=='Yes'? 'selected=""':'' ?>>Yes</option>
<option value="No" <?php echo  $user->mphil=='No'? 'selected=""':'' ?>>No</option>
</select></td></tr>
<tr><td><br>PhD Qualification</td>
<td><br><select name="phdquali"  >
<option value="">Select</option>
<option value="Yes"  <?php echo  $user->phd=='Yes'? 'selected=""':'' ?>>Yes</option>
<option value="No"  <?php echo  $user->phd=='No'? 'selected=""':'' ?>>No</option>
</select></td></tr>
<tr><td><br>Other Qualification</td>
<td><br><input type="text" name="oquali"  value="<?php echo $user->otherquali;?>"></td>
</tr>
<tr><td><br>NET</td>
<td><br><input type="text" disabled name="net"  value="<?php echo $user->net;?>"></td>
</tr>
<div class="input-group mg-b-pro-edt">
<tr><td><br>Experience</td>
<td><br><input type="text" name="exp" value="<?php echo $user->experience;?>"disabled></td>
</tr>
<tr><td><br>Designation</td>
<td><br><input type="text"  disabled value="<?php echo $user->designation;?>"></td>
</td>
<tr><td><br>Status</td>
<td><br><input type="text" name="status" value="<?php echo $user->status;?>" disabled></td></tr>
<tr><td><br>Date of Join</td>
    <td><br><input type="date" name="doj"  value="<?php echo $user->dateofjoin;?>" disabled>
</td></tr>
<tr><td><br>Email</td>
<td><br><input type="text" name="email"disabled value="<?php echo $user->email;?>"></td>
</tr>
<tr><td><br> Phone Number</td>
<td><br> <input type="text"  name="phone" disabled value="<?php echo $user->phone;?>" >
               </td></tr></div><br>

               <br><br><br><br><tr><td><input type="submit"></td></tr></table>
 
<?php  }echo form_close();
?>
</div>

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