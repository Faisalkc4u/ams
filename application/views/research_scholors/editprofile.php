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
<p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri: 9.30 to 4.00 <span class="mx-2"></span> | <i class="" aria-hidden="true"></i><a href="<?php echo base_url();?>index.php/studentctlr/studhome" class="text-white"> Back</a><span class="mx-2"></span></p>                        </div>
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
echo form_open("studentctlr/edit_researchprofile");
?>
<?php
foreach($details as $user) 
 ?>                                                   


<table>
 <h2><font face="arialblack" >Edit Your Profile...</font></h2>
 <tr><td><br>Admisssion Number</td>
 <td style="width:50%"><br><input type="text"  disabled name="adno" value="<?php echo $user->adno;?>"></td>
 </tr>
 <tr><td><br>Name</td>
 <td><br><input type="text"  disabled name="name" value="<?php echo $user->name; ?>" ></td>
 </tr>
 <tr><td><br>Date of Birth</td>
 <td><br><input type="date" disabled name="dob" value="<?php echo $user->dob; ?>"></td>
 </tr>
<tr><td><br>Gender</td>
<td><br><input type="text" name="gender" value="<?php echo $user->gender; ?>" disabled></td>
</tr>
<tr><td><br>Address</td>
<td><br><input type="textarea"  name="address"  value="<?php echo $user->address; ?> " required></td>
 </tr>
 
 <tr><td><br>District</td>
 <td><br><select name="dist"  required >
 <option value="<?php echo $user->district; ?>"><?php echo $user->district; ?></option>
<option value="Kasargod">Kasargod</option>
<option value="Kannur">Kannur</option>
<option value="Wayanad">Wayanad</option>
<option value="Kozhikkode">Kozhikkode</option>
 <option value="Malappuram">Malappuram</option>
<option value="Palakkad">Palakkad</option>
<option value="Thrissur">Thrissur</option>
 <option value="Ernakulam">Ernakulam</option>
<option value="Idukki">Idukki</option>
<option value="Kottayam">Kottayam</option>
 <option value="Alappuzha">Alappuzha</option>
 <option value="Pathanamthitta">Pathanamthitta</option>
<option value="Kollam">Kollam</option>
<option value="Thiruvananthapuram">Thiruvananthapuram</option>
</select></td></tr>
          
<tr><td><br>Nationality</td>
                          <td><br><select name="nationality" required >
                                  <option value="<?php echo $user->nationality; ?>"><?php echo $user->nationality; ?></option>                                                      
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Georgia">Georgia</option>                                                          
                            <option value="Germany">Germany</option>                                                            
                            <option value="Hong Kong">Hong Kong</option>                
                            <option value="Hungary">Hungary</option>                
                            <option value="Iceland">Iceland</option>            
                            <option value="Indonesia">Indonesia</option>                    
                            <option value="India">India</option>                      
                            <option value="Iran">Iran</option>                      
                            <option value="Iraq">Iraq</option>                
                            <option value="Ireland">Ireland</option>                    
                            <option value="Jamaica">Jamaica</option>                                                                   
                            <option value="Japan">Japan</option>                                                                
                            <option value="Jordan">Jordan</option>
                    </select></td></tr>
                                                    
                  <tr><td><br> Religion </td>
                  <td><br><input type="text" disabled name="religion" value="<?php echo $user->religion; ?>"></td></tr>
                  <tr><td><br>Caste</td>
             <td> <br><input type="text" disabled name="caste" value="<?php echo $user->caste; ?>"></td></tr>
             <tr><td><br>   Category</td>
            <td><br><input type="text" disabled name="category" value="<?php echo $user->category; ?>"></td></tr>
            <tr><td><br>Aadhar Number</td>
 <td style="width:5%"><br><input type="text"  name="aadhar" value="<?php echo $user->aadharno; ?>" required></td>
 </tr>
 <tr><td style="width:50%"><br>Guardian Name </td>
<td><br><input type="text"  name="gname" value="<?php echo $user->guardname; ?> "required></td></tr>
<tr><td style="width:50%"><br>Guardian Phone Number</td>
<td><br><input type="text" name="gphone" value="<?php echo $user->gphone; ?>"required></td></tr>
<tr><td style="width:50%"><br>Annual Income</td>
<td><br><input type="text" name="annual" value="<?php echo $user->annualincome; ?>"required></td></tr>
<tr><td><br>SSLC Mark Percentage</td>
<td> <br><input type="text" name="sslc"  value="<?php echo $user->sslcmark; ?>" required></td></tr>





<tr><td><br>  Plus Two Mark Percentage </td>
<td><br><input type="text"  name="plusmark" value="<?php echo $user->plustwo; ?>" required></td></tr>

</div>
<tr><td><br>Degree Stream</td>
<td><br><select name="dstream" required >
<option value="<?php echo $user->degreesub; ?>"><?php echo $user->degreesub; ?></option>
<option value="BCA">BCA</option>
<option value="BSc">BSc Cs</option>
</select></td></tr>

<tr><td><br> Degree Mark Percentage </td>
<td><br><input type="text"  name="dgree" value="<?php echo $user->degreemark; ?>" required></td></tr>
<tr><td><br>University Name </td>
<td><br><input type="text" name="uguni" value="<?php echo $user->university; ?>"required></td></tr>
<tr><td><br>PG Subject </td>
 <td><br><input type="text"name="pgsub"  value="<?php echo $user->pgsub; ?>" required></td></tr> 
  <tr><td><br>PG Mark </td>
 <td><br><input type="text"name="pgmark" value="<?php echo $user->pgmark; ?>" required></td></tr>                                                  
<tr><td><br>PG University </td>
 <td><br><input type="text"name="pguni" value="<?php echo $user->pguni; ?>" required></td></tr> 

<tr><td><br>Year of Pass </td>
    <td><br><input type="text"name="yop" value="<?php echo $user->yearofpass; ?>" required></td></tr>
<tr><td><br>NET Score </td>
 <td><br><input type="text"name="net" value="<?php echo $user->net; ?>" required></td></tr> 

<tr><td><br>MPhil Specialisation </td>
 <td><br><input type="text"name="mphilareaspec" value="<?php echo $user->mphilareaspec; ?>" required></td></tr> 
<tr><td><br>MPhil Mark </td>
 <td><br><input type="text"name="mphilmark" value="<?php echo $user->mphilmark; ?>" required></td></tr> 
<tr><td><br>Phd Specialisation </td>
 <td><br><input type="text"name="phdareaspec" value="<?php echo $user->phdareaspec; ?>"required></td></tr> 

 <tr><td><br>Selected Course</td>
  <td><br><input type="text" disabled name="course" value="<?php echo $user->course; ?>" ></td></tr>
  </div>
 

<tr><td><br>Date of Join</td>
<td><br><input type="date" disabled name="doj" value="<?php echo $user->dateofjoin; ?>" ></td></tr>
<tr><td><br> Email ID </td>
    <td><br><input type="text"  name="email" value="<?php echo $user->email; ?>" required></td></tr>
<tr><td><br>Phone Number </td>
    <td><br><input type="text" name="phone"   value="<?php echo $user->phone; ?> " required></td></tr>
               

<br><br><tr><br><br><td><input type="submit"></td></tr></table>
<?php  echo form_close();
?>
 <div class="product-tab-list tab-pane fade" id="INFORMATION" >
                                        <div class="row" >
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section" >
                                                    <div class="card-block">
                                                        <div class="text-muted f-w-400">
                                                            <p>No reviews yet.</p>
                                                        </div>
                                                      <div class="input-group mg-b-15 mg-t-15" >
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
<!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0 m-t-10 " >
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
Copyright &copy;<script></script> All rights reserved <i class="" aria-hidden="true"></i> <a href="" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h5>Opening times</h5>

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
                        <h5 class="">Contact Us</h5>

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

