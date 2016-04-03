<?php
require_once("connection.php");
print_r($_REQUEST);
session_start();

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	echo "<script>window.location='personalInformation.php';</script>";
}

if(isset($_REQUEST['txtPermAddress']) && ($_REQUEST['txtPermAddress']<>""))	{
	echo "In submit";

	$query = "Insert into addressDetails(permAdd,permLandmark,permCity,permState,permPincode,permCountry,corrAdd,corrLandmark,corrCity,corrState,corrPincode,corrCountry,recordId) values('".$_REQUEST['txtPermAddress']."','".$_REQUEST['txtPermLandmark']."','".$_REQUEST['txtPermCity']."','".$_REQUEST['selPermState']."','".$_REQUEST['txtPermPostcode']."','India','".$_REQUEST['txtCorrAddress']."','".$_REQUEST['txtCorrLandmark']."','".$_REQUEST['txtCorrCity']."','".$_REQUEST['selCorrState']."','".$_REQUEST['txtCorrPostcode']."','India',".$_SESSION['recordId'].")";
	$insertRes = mysqli_query($con,$query);
	
	if (!$insertRes) {
		printf("Errormessage: %s\n", $con->error);
	}
	else
	{
		echo "<script>window.location='incomeDetails.php';</script>";
	}
}	
?>

<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Online IT Filing : Upload Income Details / Proofs</title>

	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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

      <!-- Extra css & JS File -->
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <script src="js/validation.js"></script>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <script>

	  (function($,W,D)
	  {
		var JQUERY4U = {};

		JQUERY4U.UTIL =
		{
			setupFormValidation: function()
			{
				//form validation rules
				$("#addressDetails").validate({
					rules: {
						txtPermAddress: "required",
						txtCorrAddress: "required",
						txtPermCity: "required",
						txtCorrCity: "required",
						selPermState: "required",
						selCorrState: "required",
						txtPermPostcode: "required",
						txtCorrPostcode: "required"
					},
					messages: {
						txtPermAddress: "Please enter your Permenant Address",
						txtCorrAddress: "Please enter your Correspondance Address",
						txtPermCity: "Please enter your Permenant City",
						txtCorrCity: "Please enter your Correspondance City",
						selPermState: "Please enter your Permenant State",
						selCorrState: "Please enter your Correspondance State",
						txtPermPostcode: "Please enter your Permenant Pincode",
						txtCorrPostcode: "Please enter your Correspondance Pincode"
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
	
	function copyPermAddress()
	{
		if($("#txtPermAddress").val()!="")
		{
			$("#txtCorrAddress").val($("#txtPermAddress").val());
		}
		if($("#txtPermLandmark").val()!="")
		{
			$("#txtCorrLandmark").val($("#txtPermLandmark").val());
		}
		if($("#txtPermCity").val()!="")
		{
			$("#txtCorrCity").val($("#txtPermCity").val());
		}
		if($("#selPermState").val()!="")
		{
			$("#selCorrState").val($("#selPermState").val());
		}
		if($("#txtPermPostcode").val()!="")
		{
			$("#txtCorrPostcode").val($("#txtPermPostcode").val());
		}
	}

	function copyCorrAddress()
	{
		if($("#txtCorrAddress").val()!="")
		{
			$("#txtPermAddress").val($("#txtCorrAddress").val());
		}
		if($("#txtCorrLandmark").val()!="")
		{
			$("#txtPermLandmark").val($("#txtCorrLandmark").val());
		}
		if($("#txtCorrCity").val()!="")
		{
			$("#txtPermCity").val($("#txtCorrCity").val());
		}
		if($("#selCorrState").val()!="")
		{
			$("#selPermState").val($("#selCorrState").val());
		}
		if($("#txtCorrPostcode").val()!="")
		{
			$("#txtPermPostcode").val($("#txtCorrPostcode").val());
		}
	}
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
				  <form name="addressDetails" id="addressDetails" method="POST">

					<p>
						<div class="form-group" style="float:left;">
						<h2 class="title">Permenant Address</h2>
							<div class="custgrp">
								<label class="col-sm-2 control-label input-sm" for="textinput">
									Address:</label>
								<div class="col-sm-3 has-success">
									<input type="text" id="txtPermAddress" placeholder="Enter Address" name="txtPermAddress">
								</div>
							</div>
							<div class="custgrp">
								<label class="col-sm-2 control-label input-sm" for="textinput">
									Landmark:</label>
								<div class="col-sm-2">
									<input type="text" id="txtPermLandmark" placeholder="Enter Landmark" name="txtPermLandmark"/>
								</div>
							</div>
							<div class="custgrp">
								<label class="col-sm-2 control-label input-sm" for="textinput">
									City:</label>
								<div class="col-sm-2">
									<input type="text" id="txtPermCity" placeholder="Enter City" name="txtPermCity"/>
								</div>
							</div>
							<div class="custgrp">
								<label class="col-sm-2 control-label  input-sm" for="textinput">
									State:</label>
								<div class="col-sm-3">
									<p><select name="selPermState" id="selPermState">
                                            <option Selected="true" Value="">Select state</option>
                                            <option Value="ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option>
                                            <option Value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                            <option Value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                                            <option Value="ASSAM">ASSAM</option>
                                            <option Value="BIHAR">BIHAR</option>
                                            <option Value="CHANDIGARH">CHANDIGARH</option>
                                            <option Value="CHHATTISGARH">CHHATTISGARH</option>
                                            <option Value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                                            <option Value="DAMAN AND DIU">DAMAN AND DIU</option>
                                            <option Value="DELHI">DELHI</option>
                                            <option Value="GOA">GOA</option>
                                            <option Value="GUJARAT">GUJARAT</option>
                                            <option Value="HARYANA">HARYANA</option>
                                            <option Value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                            <option Value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                                            <option Value="JHARKHAND">JHARKHAND</option>
                                            <option Value="KARNATAKA">KARNATAKA</option>
                                            <option Value="KERALA">KERALA</option>
                                            <option Value="LAKSHADWEEP">LAKSHADWEEP</option>
                                            <option Value="MADHYA PRADESH">MADHYA PRADESH</option>
                                            <option Value="MAHARASHTRA">MAHARASHTRA</option>
                                            <option Value="MANIPUR">MANIPUR</option>
                                            <option Value="MEGHALAYA">MEGHALAYA</option>
                                            <option Value="MIZORAM">MIZORAM</option>
                                            <option Value="NAGALAND">NAGALAND</option>
                                            <option Value="ORISSA">ORISSA</option>
                                            <option Value="OTHERS">OTHERS</option>
                                            <option Value="PONDICHERRY">PONDICHERRY</option>
                                            <option Value="PUNJAB">PUNJAB</option>
                                            <option Value="RAJASTHAN">RAJASTHAN</option>
                                            <option Value="SIKKIM">SIKKIM</option>
                                            <option Value="TAMIL NADU">TAMIL NADU</option>
                                            <option Value="TELANGANA">TELANGANA</option>
                                            <option Value="TRIPURA">TRIPURA</option>
                                            <option Value="UTTAR PRADESH">UTTAR PRADESH</option>
                                            <option Value="UTTARANCHAL">UTTARANCHAL</option>
                                            <option Value="WEST BENGAL">WEST BENGAL</option>
									</select></p>
								</div>
							</div>
							<div class="custgrp">
								<label class="col-sm-2 control-label input-sm" for="textinput">
									Pincode:</label>
								<div class="col-sm-3">
									<input type="text" id="txtPermPostcode" placeholder="Post Code" class="form-control  input-sm"
										 maxlength="20" name="txtPermPostcode">
								</div>
							</div>
							<div class="custgrp">
								<label class="col-sm-2 control-label input-sm" for="textinput">
									Country:</label>
								<div class="col-sm-3">
									<input type="text" id="txtPermCountry" placeholder="India" class="form-control  input-sm"
										name="txtPermCountry" value="India" readonly>
								</div>
							</div>
						
					</div>
					
					<div style="float:right;">
						<div style="float:left;margin-top:200px;margin-right:60px;margin-left:40px;text-align: center;">
							<img src="img/right-arrow.png" height="35px" onClick="copyPermAddress()">
							<br><br>
							<img src="img/left-arrow.png" height="35px" onClick="copyCorrAddress()">
						</div>
					
						<div style="float:right;">
						
							<h2 class="title">Correspondance Address</h2>

							<div class="form-group" >
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Address:</label>
									<div class="col-sm-3 has-success">
										<input type="text" id="txtCorrAddress" placeholder="Enter Address" name="txtCorrAddress">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Landmark:</label>
									<div class="col-sm-2">
										<input type="text" id="txtCorrLandmark" placeholder="Enter Landmark" name="txtCorrLandmark"/>
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										City:</label>
									<div class="col-sm-2">
										<input type="text" id="txtCorrCity" placeholder="Enter City" name="txtCorrCity"/>
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label  input-sm" for="textinput">
										State:</label>
									<div class="col-sm-2">
										<p><select name="selCorrState" id="selCorrState">
												<option Selected="true" Value="">Select state</option>
												<option Value="ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option>
												<option Value="ANDHRA PRADESH">ANDHRA PRADESH</option>
												<option Value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
												<option Value="ASSAM">ASSAM</option>
												<option Value="BIHAR">BIHAR</option>
												<option Value="CHANDIGARH">CHANDIGARH</option>
												<option Value="CHHATTISGARH">CHHATTISGARH</option>
												<option Value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
												<option Value="DAMAN AND DIU">DAMAN AND DIU</option>
												<option Value="DELHI">DELHI</option>
												<option Value="GOA">GOA</option>
												<option Value="GUJARAT">GUJARAT</option>
												<option Value="HARYANA">HARYANA</option>
												<option Value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
												<option Value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
												<option Value="JHARKHAND">JHARKHAND</option>
												<option Value="KARNATAKA">KARNATAKA</option>
												<option Value="KERALA">KERALA</option>
												<option Value="LAKSHADWEEP">LAKSHADWEEP</option>
												<option Value="MADHYA PRADESH">MADHYA PRADESH</option>
												<option Value="MAHARASHTRA">MAHARASHTRA</option>
												<option Value="MANIPUR">MANIPUR</option>
												<option Value="MEGHALAYA">MEGHALAYA</option>
												<option Value="MIZORAM">MIZORAM</option>
												<option Value="NAGALAND">NAGALAND</option>
												<option Value="ORISSA">ORISSA</option>
												<option Value="OTHERS">OTHERS</option>
												<option Value="PONDICHERRY">PONDICHERRY</option>
												<option Value="PUNJAB">PUNJAB</option>
												<option Value="RAJASTHAN">RAJASTHAN</option>
												<option Value="SIKKIM">SIKKIM</option>
												<option Value="TAMIL NADU">TAMIL NADU</option>
												<option Value="TELANGANA">TELANGANA</option>
												<option Value="TRIPURA">TRIPURA</option>
												<option Value="UTTAR PRADESH">UTTAR PRADESH</option>
												<option Value="UTTARANCHAL">UTTARANCHAL</option>
												<option Value="WEST BENGAL">WEST BENGAL</option>
										</select></p>
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Pincode:</label>
									<div class="col-sm-3">
										<input type="text" id="txtCorrPostcode" placeholder="Post Code" class="form-control  input-sm"
											maxlength="20" name="txtCorrPostcode">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Country:</label>
									<div class="col-sm-3">
									<input type="text" id="txtCorrCountry" placeholder="India" class="form-control  input-sm"
										name="txtCorrCountry" value="India" readonly>
									</div>
								</div>
							</div>
						</div>
					</div>

					</p>

				</div>
			  </div> 	
						<div>
							<button class="left waves-effect btn-flat brand-text submit-btn" type="Submit" name="submitForm">Next</button>
							<button class="left waves-effect btn-flat brand-text submit-btn" type="Reset">Reset</button>
						</div>
				</form>
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
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="js/custom.js"></script>      
    </body>
  </html>