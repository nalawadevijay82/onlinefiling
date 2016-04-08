<?php
require_once("connection.php");
print_r($_REQUEST);
session_start();

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	echo "<script>window.location='personalInformation.php';</script>";
}

if(isset($_REQUEST['txtName']) && ($_REQUEST['txtName']<>""))	{
	echo "In submit";
	
	if(!isset($_REQUEST['receiveCredit'])) 
		$receiveCredit = "No";
	else
		$receiveCredit = "Yes";

	$query = "Insert into bankInformation(recordId,receiveCredit,accountHolderName,accountNumber,accountType,bankName,branchName,IFSC,MICR) values(".$_SESSION['recordId'].",'".$receiveCredit."','".$_REQUEST['txtName']."','".$_REQUEST['txtAccountNumber']."','".$_REQUEST['accountType']."','".$_REQUEST['txtBankName']."','".$_REQUEST['txtBranch']."','".$_REQUEST['txtIFSC']."','".$_REQUEST['txtMICR']."')";
	$insertRes = mysqli_query($con,$query);
	
	if (!$insertRes) {
		printf("Errormessage: %s\n", $query." - ".$con->error);
	}
	else
	{
		echo "<script>window.location='terms.php';</script>";
	}
}	
?>
<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Online IT Filing : Bank Information</title>

	  <script src="js/jquery-1.9.1.js"></script>
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
	  <link rel="stylesheet" href="css/jquery-ui.css">
	  <script src="js/jquery-ui.js"></script>

      <!-- Extra css & JS File -->
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <script src="js/validation.js"></script>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script>
	var $j = jQuery.noConflict();

	  $j(function() {
		$j("#datePicker").datepicker();
	  });

	  (function($,W,D)
	{
		var JQUERY4U = {};

		JQUERY4U.UTIL =
		{
			setupFormValidation: function()
			{
				//form validation rules
				$("#bankInformation").validate({
					rules: {
						txtName: "required",
						txtBranch: "required",
						txtMICR: "required",
						txtAccountNumber: "required",
						txtBankName: "required",
						txtIFSC: "required"
					},
					messages: {
						txtName: "Please enter Account Holder Name",
						txtBranch: "Please enter Branch Name",
						txtMICR: "Please enter MICR Code",
						txtAccountNumber: "Please enter Account Number",
						txtBankName: "Please enter Bank Name",
						txtIFSC: "Please enter IFSC Code"
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
                <a href="index.html" class="brand-logo">Online IT Filing : Bank Information</a>
                
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
				  <form name="bankInformation" id="bankInformation" method="POST">
				  <h2 class="title">Bank Information</h2>

					<p>W.E.F. AY 2011-12 it is mandatory to provide bank account details in Income Tax return irrespective of tax refund. Enter bank account details: </p>
					<p><input type="checkbox" name="receiveCredit" id="receiveCredit" value="Yes" checked="checked" onclick="return false">&nbsp; Would you like to receive credit (if any) via ECS (Electronic Clearing System)?<br></p>
						<div class="form-group">
							<div style="float:left;">
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Account Holder Name:</label>
									<div class="col-sm-3 has-success">
										<input type="text" id="txtName" placeholder="Account Holder Name" name="txtName">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-1 control-label input-sm" for="textinput">
										Account Type:</label>
									<div class="col-sm-2">
										<p><input type="radio" id="accountType" name="accountType" value="Saving" checked//> Saving
										<input type="radio" id="accountType" name="accountType" value="Current"/> Current</p><br>
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Branch Name:</label>
									<div class="col-sm-3">
										<input type="text" id="txtBranch" placeholder="Branch Name" class="form-control  input-sm"
											 name="txtBranch">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										MICR Code:</label>
									<div class="col-sm-3">
										<input type="text" id="txtMICR" placeholder="MICR Code" class="form-control input-sm" maxlength="15" name="txtMICR" value="MICR" readOnly>
									</div>
								</div>
							</div>
							<div style="float:right;margin-left:200px;">
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Account Number:</label>
									<div class="col-sm-2">
										<input type="text" id="txtAccountNumber" placeholder="Account Number" name="txtAccountNumber" />
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Bank Name:</label>
									<div class="col-sm-3">
										<input type="text" id="txtBankName" placeholder="Bank Name" class="form-control  input-sm" 
										name="txtBankName">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										IFSC Code:</label>
									<div class="col-sm-3">
										<input type="text" id="txtIFSC" placeholder="IFSC Code" class="form-control input-sm" name="txtIFSC" maxlength="11">
									</div>
								</div>
							</div>
						</div>
					</p>
				</div>
				<p>
					<div align="center">
						<button class="left waves-effect btn-flat brand-text submit-btn" type="Submit">Next</button>
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
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Skill Progress Bar -->
      <script src="js/appear.min.js" type="text/javascript"></script>
      <script src="js/pro-bars.min.js" type="text/javascript"></script>
      <!-- Owl slider -->      
      <script src="js/owl.carousel.min.js"></script>    
      <!-- Mixit slider  -->
      <script src="js/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="js/custom.js"></script>      
    </body>
  </html>