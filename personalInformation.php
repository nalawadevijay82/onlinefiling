<?php
require_once("connection.php");
print_r($_REQUEST);
session_start();
if(isset($_REQUEST['txtPanCardNo']) && ($_REQUEST['txtPanCardNo']<>""))	{
	//echo "In submit";
	$_SESSION['pan'] = $_REQUEST['txtPanCardNo'];

	$query = "Insert into personalInformation(PAN,FirstName,MiddleName,FatherName,LastName,Mobile,ContactNumber,BirthDate,Email,Gender) values('".strtoupper($_REQUEST['txtPanCardNo'])."','".strtoupper($_REQUEST['txtFirstName'])."','".strtoupper($_REQUEST['txtMiddleName'])."','".strtoupper($_REQUEST['txtFathersName'])."','".strtoupper($_REQUEST['txtLastName'])."','".$_REQUEST['txtMobileNo']."','".$_REQUEST['txtContactNo']."','".$_REQUEST['txtDOB']."','".$_REQUEST['txtEmail']."','".$_REQUEST['gender']."')";
	$insertRes = mysqli_query($con,$query);
	
	if (!$insertRes) {
		printf("Errormessage: %s\n", $con->error);
	}
	else
	{
		$_SESSION['recordId'] = mysqli_insert_id($con);
		echo "<script>window.location='addressDetails.php';</script>";
	}
}	
?>

<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Online IT Filing : Upload Income Details / Proofs</title>

	  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	  <!-- CSS  -->      
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Font Awesome -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- Skill Progress Bar -->
      <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <!-- Default Theme CSS File-->
      <link id="switcher" href="css/themes/blue-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
      <!-- Main css File -->
      <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <!-- For datePicker	-->
	  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

      <!-- Extra css & JS File -->
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <script src="js/validation.js"></script>
	  <script src="js/additional-methods.js"></script>

      <!-- Font -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script>
	var $j = jQuery.noConflict();

	$j(function() {
		$j("#datePicker").datepicker({
			changeMonth: false,
			changeYear: true,
			yearRange: "1950:2016",
			autoSize: true
		});
	});

	(function($,W,D)
	{
		var JQUERY4U = {};

		JQUERY4U.UTIL =
		{
			setupFormValidation: function()
			{
				//form validation rules
				$("#personalInformation").validate({
					rules: {
						txtPanCardNo: {
							required: true,
							minlength: 10
						},
						txtDOB: "required",
						txtFirstName: "required",
						txtFathersName: "required",
						txtLastName: "required",
						txtMobileNo: {
							required:true, 
							integer: true,
                            minlength:10,
                            maxlength:14
						},
						txtEmail: {
							required: true,
							email: true
						}
					},
					messages: {
						txtPanCardNo: "PAN Card No. should be 10 characters",
						txtDOB: "Please enter your Date of birth",
						txtFirstName: "Please enter your First Name",
						txtFathersName: "Please enter your Father's name",
						txtLastName: "Please enter your Last Name",
						txtEmail: "Please enter a valid Email Address",
						txtMobileNo: "Please enter your Mobile Number of 10 digits"
					},
					submitHandler: function(form) {
						form.submit();
					}
				});
			}
		}

		//when the dom has loaded setup form validation rules
		$(D).ready(function($) {
			JQUERY4U.UTIL.setupFormValidation();
		});

	})(jQuery, window, document);
	</script>
	</head>    
    <body>
      <!-- BEGAIN PRELOADER -->         
      <div id="preloader">        
        <div class="progress">
          <div class="indeterminate"></div>
        </div>        
      </div>
      <!-- END PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
          <nav>
            <div class="container">
              <div class="nav-wrapper">
                <!-- LOGO -->

                <!-- TEXT BASED LOGO -->
                <a href="index.html" class="brand-logo">Online IT Filing : Upload Income Details / Proofs</a>
                
                <!-- Image Based Logo -->                
                 <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                <ul class="right hide-on-med-and-down custom-nav">                 
                  <li><a href="index.html">Home</a></li>
                  <li class="active"><a href="blog-archive.html">Blog</a></li>                  
                </ul>
                <!-- For Mobile View -->
                <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="blog-archive.html">Blog</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>  
      </header>
      <div class="main-wrapper">
        <main role="main">
          <!-- START BLOG BANNER -->
          <section id="banner">
            <div class="parallax-container">
              <div class="parallax">
                <img src="img/blog-header-bg.jpg">
              </div>
              <div class="overlay-header">       
              </div>
            </div>
          </section>
          <section id="blog-details">
            <div class="container">
              <div class="row">
                <div class="col s28 m18 28">
                  <div class="blog-content">
				  <form name="personalInformation" id="personalInformation" method="POST">
				  <h2 class="title">Personal Information</h2>

					<p>
						<div class="form-group">
							<div style="float:left;">
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										PAN Card No:</label>
									<div class="col-sm-3 has-success">
										<input type="text" id="txtPanCardNo" placeholder="Pan Card Number" name="txtPanCardNo" maxlength="10" style="text-transform: uppercase">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label  input-sm" for="textinput">
										First Name:</label>
									<div class="col-sm-3">
										<input type="text" id="txtFirstName" placeholder="First Name" class="form-control  input-sm"
											name="txtFirstName" style="text-transform: uppercase">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Middle Name:</label>
									<div class="col-sm-3">
										<input type="text" id="txtMiddleName" placeholder="MIddle Name (Optional)" class="form-control  input-sm"
											 name="txtMiddleName" style="text-transform: uppercase">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Mobile Number:</label>
									<div class="col-sm-3">
										<input type="text" id="txtMobileNo" placeholder="Mobile Number" class="form-control input-sm" maxlength="10" name="txtMobileNo">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Secondary Contact Number:</label>
									<div class="col-sm-3">
										<input type="text" id="txtContactNo" placeholder="Contact Number" class="form-control input-sm" maxlength="15" name="txtContactNo">
									</div>
								</div>
							</div>
							<div style="float:right;margin-left:200px;">
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Date Of Birth:</label>
									<div class="col-sm-2">
										<input type="text" id="datePicker" placeholder="dd-mm-yyyy" name="txtDOB" width="100px"/>
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Last Name:</label>
									<div class="col-sm-3">
										<input type="text" id="txtLastName" placeholder="Last Name" class="form-control  input-sm"
											name="txtLastName" style="text-transform: uppercase">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Father's Name:</label>
									<div class="col-sm-3">
										<input type="text" id="txtFathersName" placeholder="Father's Name"
											class="form-control input-sm" name="txtFathersName" style="text-transform: uppercase">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Email:</label>
									<div class="col-sm-4">
										<input type="text" ID="txtEmail" placeholder="Email ID" class="form-control input-sm" name="txtEmail">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-1 control-label input-sm" for="textinput">
										Gender:</label>
									<div class="col-sm-2">
										<p><input type="radio" id="gender" name="gender" value="Male" checked//> Male
										<input type="radio" id="gender" name="gender" value="Female"/> Female</p>
									</div>
								</div>
							</div>
						</div>
					</p>
				</div>
				<p>
					<div align="center">
						<button class="left waves-effect btn-flat brand-text submit-btn" type="Submit" name="Submit" value="Submit">Next</button>
						<button class="left waves-effect btn-flat brand-text submit-btn" type="Reset">Reset</button>
					</div>
				</p>
				</form>
				

				</div>
			  </div> 	
            </div>
          </section>     
          <!-- Start Footer -->
          <footer id="footer" role="contentinfo">           
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-inner">
                      <!-- Bottom to Up Btn -->
                      <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                      <p class="design-info"><div align=" <img src="img/ERI Authorized1.png">&nbsp;&nbsp;<img src="img/ERIAuthorized.png"> Privacy Policy&nbsp;&nbsp;&nbsp;&nbsp;Refund Policy &nbsp;&nbsp;&nbsp;&nbsp; General Terms & Conditions</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>               
        </main>
      </div>
      <!-- jQuery Library -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Skill Progress Bar -->
      <script src="js/appear.min.js" type="text/javascript"></script>
      <script src="js/pro-bars.min.js" type="text/javascript"></script>
      <!-- Owl slider -->      
      <script src="js/owl.carousel.min.js"></script>    
      <!-- Mixit slider  -->
      <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="js/custom.js"></script>      
    </body>
  </html>