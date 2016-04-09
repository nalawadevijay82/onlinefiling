<?php
require_once("connection.php");
session_start();
$flag = 0;

//print_r($_REQUEST);

if(!isset($_SESSION['admin']) || $_SESSION['admin']=="")	{
	//print_r($_REQUEST);
	echo "<script>window.location='login.php';</script>";
}
elseif($_SESSION['admin'] == "true" && (isset($_REQUEST['txtOneFilingCharge1']) && ($_REQUEST['txtOneFilingCharge1']<>"")))	{
	//To update active status
	mysqli_query($con,"update filingCharges set active = 0");
	mysqli_query($con,"update coupons set active = 0");
	
	$query = "Insert into filingCharges(startDate,one1,two1,three1,four1,five1,six1,one2,two2,three2,four2,five2,six2,year1,year2,active) values('".$_REQUEST['txtFilingStartDate1']."','".$_REQUEST['txtOneFilingCharge1']."','".$_REQUEST['txtTwoFilingCharge1']."','".$_REQUEST['txtThreeFilingCharge1']."','".$_REQUEST['txtFourFilingCharge1']."','".$_REQUEST['txtFiveFilingCharge1']."','".$_REQUEST['txtSixFilingCharge1']."','".$_REQUEST['txtOneFilingCharge2']."','".$_REQUEST['txtTwoFilingCharge2']."','".$_REQUEST['txtThreeFilingCharge2']."','".$_REQUEST['txtFourFilingCharge2']."','".$_REQUEST['txtFiveFilingCharge2']."','".$_REQUEST['txtSixFilingCharge2']."','2014-15','2015-16','1')";
	$insertRes = mysqli_query($con,$query);
	//echo "<br>Qry: ".$query;

	if(isset($_REQUEST['txtCouponCode1']) && ($_REQUEST['txtCouponCode1'] <>"" ))	{
		if(isset($_REQUEST['check1']) && ($_REQUEST['check1'] == "Yes"))
			$appliedFor = "Two";
		else
			$appliedFor = "One";
		
		$couponQuery = "Insert into coupons(couponCode,appliedFor,rate,startDate,endDate,active) values('".$_REQUEST['txtCouponCode1']."','".$appliedFor."','".$_REQUEST['txtCoupon1Per']."','".$_REQUEST['datePickerC1StartDate']."','".$_REQUEST['datePickerC1EndDate']."','1')";
		$insertRes = mysqli_query($con,$couponQuery);
	}

	if(isset($_REQUEST['txtCouponCode2']) && ($_REQUEST['txtCouponCode2'] <>"" ))	{
		if(isset($_REQUEST['check2']) && ($_REQUEST['check2'] == "Yes"))
			$appliedFor = "Two";
		else
			$appliedFor = "One";
		$couponQuery = "Insert into coupons(couponCode,appliedFor,rate,startDate,endDate,active) values('".$_REQUEST['txtCouponCode2']."','".$appliedFor."','".$_REQUEST['txtCoupon2Per']."','".$_REQUEST['datePickerC2StartDate']."','".$_REQUEST['datePickerC2EndDate']."','1')";
		$insertRes = mysqli_query($con,$couponQuery);
	}

	if(isset($_REQUEST['txtCouponCode3']) && ($_REQUEST['txtCouponCode3'] <>"" ))	{
		if(isset($_REQUEST['check3']) && ($_REQUEST['check3'] == "Yes"))
			$appliedFor = "Two";
		else
			$appliedFor = "One";
		$couponQuery = "Insert into coupons(couponCode,appliedFor,rate,startDate,endDate,active) values('".$_REQUEST['txtCouponCode3']."','".$appliedFor."','".$_REQUEST['txtCoupon3Per']."','".$_REQUEST['datePickerC3StartDate']."','".$_REQUEST['datePickerC3EndDate']."','1')";
		$insertRes = mysqli_query($con,$couponQuery);
	}

	if(isset($_REQUEST['txtCouponCode4']) && ($_REQUEST['txtCouponCode4'] <>"" ))	{
		if(isset($_REQUEST['check4']) && ($_REQUEST['check4'] == "Yes"))
			$appliedFor = "Two";
		else
			$appliedFor = "One";
		$couponQuery = "Insert into coupons(couponCode,appliedFor,rate,startDate,endDate,active) values('".$_REQUEST['txtCouponCode4']."','".$appliedFor."','".$_REQUEST['txtCoupon4Per']."','".$_REQUEST['datePickerC4StartDate']."','".$_REQUEST['datePickerC4EndDate']."','1')";
		$insertRes = mysqli_query($con,$couponQuery);
	}

	if(isset($_REQUEST['txtCouponCode5']) && ($_REQUEST['txtCouponCode5'] <>"" ))	{
		if(isset($_REQUEST['check5']) && ($_REQUEST['check5'] == "Yes"))
			$appliedFor = "Two";
		else
			$appliedFor = "One";
		$couponQuery = "Insert into coupons(couponCode,appliedFor,rate,startDate,endDate,active) values('".$_REQUEST['txtCouponCode5']."','".$appliedFor."','".$_REQUEST['txtCoupon5Per']."','".$_REQUEST['datePickerC5StartDate']."','".$_REQUEST['datePickerC5EndDate']."','1')";
		$insertRes = mysqli_query($con,$couponQuery);
	}

	if(isset($_REQUEST['txtCouponCode6']) && ($_REQUEST['txtCouponCode6'] <>"" ))	{
		if(isset($_REQUEST['check6']) && ($_REQUEST['check6'] == "Yes"))
			$appliedFor = "Two";
		else
			$appliedFor = "One";
		$couponQuery = "Insert into coupons(couponCode,appliedFor,rate,startDate,endDate,active) values('".$_REQUEST['txtCouponCode6']."','".$appliedFor."','".$_REQUEST['txtCoupon6Per']."','".$_REQUEST['datePickerC6StartDate']."','".$_REQUEST['datePickerC6EndDate']."','1')";
		$insertRes = mysqli_query($con,$couponQuery);
	}

	$flag = 1;
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
			$j("#datePickerC1StartDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC1EndDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC2StartDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC2EndDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC3StartDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC3EndDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC4StartDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC4EndDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC5StartDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC5EndDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC6StartDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
				autoSize: true
			});
		});
		$j(function() {
			$j("#datePickerC6EndDate").datepicker({
				changeMonth: false,
				changeYear: true,
				yearRange: "1950:2016",
				dateFormat: "yy-mm-dd",
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
				$("#rates").validate({
					rules: {
						txtFilingStartDate1: "required",
						txtOneFilingCharge1: "required",
						txtTwoFilingCharge1: "required",
						txtThreeFilingCharge1: "required",
						txtFourFilingCharge1: "required",
						txtFiveFilingCharge1: "required",
						txtSixFilingCharge1: "required",
						txtFilingStartDate2: "required",
						txtOneFilingCharge2: "required",
						txtTwoFilingCharge2: "required",
						txtThreeFilingCharge2: "required",
						txtFourFilingCharge2: "required",
						txtFiveFilingCharge2: "required",
						txtSixFilingCharge2: "required"
					},
					messages: {
						txtFilingStartDate1: "Please Enter Filing Start Date",
						txtOneFilingCharge1: "Please Enter Filing Charges",
						txtTwoFilingCharge1: "Please Enter Filing Charges",
						txtThreeFilingCharge1: "Please Enter Filing Charges",
						txtFourFilingCharge1: "Please Enter Filing Charges",
						txtFiveFilingCharge1: "Please Enter Filing Charges",
						txtSixFilingCharge1: "Please Enter Filing Charges",
						txtFilingStartDate2: "Please Enter Filing Start Date",
						txtOneFilingCharge2: "Please Enter Filing Charges",
						txtTwoFilingCharge2: "Please Enter Filing Charges",
						txtThreeFilingCharge2: "Please Enter Filing Charges",
						txtFourFilingCharge2: "Please Enter Filing Charges",
						txtFiveFilingCharge2: "Please Enter Filing Charges",
						txtSixFilingCharge2: "Please Enter Filing Charges"
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
                <a href="index.html" class="brand-logo">Online IT Filing : Filing Charges</a>
                
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
				  <form name="rates" id="rates" method="POST">
				  <h2 class="title">Admin Panel</h2>

				  <p>
				  <?php if($flag == 1)	{
						echo "Records updated successfully";
				  }	?>
				  </p>

				  <?php
				  //Filing charges query
				  $chargesQry = "SELECT * FROM filingcharges where active=1";
				  $chargesRes = mysqli_query($con,$chargesQry);
				  $chargesData=mysqli_fetch_array($chargesRes,MYSQLI_ASSOC);
				  $year1 = $chargesData['year1'];
				  $one1 = $chargesData['one1'];
				  $two1 = $chargesData['two1'];
				  $three1 = $chargesData['three1'];
				  $four1 = $chargesData['four1'];
				  $five1 = $chargesData['five1'];
				  $six1 = $chargesData['six1'];
				  $year2 = $chargesData['year2'];
				  $one2 = $chargesData['one2'];
				  $two2 = $chargesData['two2'];
				  $three2 = $chargesData['three2'];
				  $four2 = $chargesData['four2'];
				  $five2 = $chargesData['five2'];
				  $six2 = $chargesData['six2'];
				  

				  //Coupon query
				  $coupon = array();
				  for($i=1; $i<=6; $i++)
				  {
					  $coupon["code".$i] = "";
					  $coupon["codePer".$i] = "";
					  $coupon["codeStartDate".$i] = "";
					  $coupon["codeEndDate".$i] = "";					  
				  }
				  $couponQry = "SELECT * FROM coupons where active=1";
				  $couponRes = mysqli_query($con,$couponQry);
				  $i=1;
				  while($couponData=mysqli_fetch_array($couponRes,MYSQLI_ASSOC))
				  {
					  $coupon["code".$i] = $couponData['couponCode'];
					  $coupon["codePer".$i] = $couponData['rate'];
					  $coupon["codeStartDate".$i] = $couponData['startDate'];
					  $coupon["codeEndDate".$i] = $couponData['endDate'];
					  $coupon["appliedFor".$i] = $couponData['appliedFor'];
					  $i++;
				  }
				  ?>

					<p>
						<div class="form-group">
							<div style="float:left;">
								<div><label class="col-sm-2 control-label input-sm" for="textinput">Filing Charges for - 2014-15</label></div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Start Date:</label>
									<div class="col-sm-3 has-success">
					 					<input type="text" id="txtFilingStartDate1" name="txtFilingStartDate1" width="100px" value="<?php echo date("Y-m-d");?>" />
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label  input-sm" for="textinput">
										1:</label>
									<div class="col-sm-3">
										<input type="text" id="txtOneFilingCharge1" placeholder="Enter Filing Charges" class="form-control  input-sm" name="txtOneFilingCharge1" value="<?=$one1?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										3:</label>
									<div class="col-sm-3">
										<input type="text" id="txtThreeFilingCharge1" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="10" name="txtThreeFilingCharge1" value="<?=$three1?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										5:</label>
									<div class="col-sm-3">
										<input type="text" id="txtFiveFilingCharge1" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="15" name="txtFiveFilingCharge1" value="<?=$five1?>">
									</div>
								</div>
								<p>&nbsp;</p>
								<div><label class="col-sm-2 control-label input-sm" for="textinput">Filing Charges for - 2015-16</label></div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Start Date:</label>
									<div class="col-sm-3 has-success">
					 					<input type="text" id="txtFilingStartDate2" name="txtFilingStartDate2" width="100px" value="<?php echo date("Y-m-d");?>" />
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label  input-sm" for="textinput">
										1:</label>
									<div class="col-sm-3">
										<input type="text" id="txtOneFilingCharge2" placeholder="Enter Filing Charges" class="form-control  input-sm" name="txtOneFilingCharge2" value="<?=$one2?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										3:</label>
									<div class="col-sm-3">
										<input type="text" id="txtThreeFilingCharge2" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="10" name="txtThreeFilingCharge2" value="<?=$three2?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										5:</label>
									<div class="col-sm-3">
										<input type="text" id="txtFiveFilingCharge2" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="15" name="txtFiveFilingCharge2" value="<?=$five2?>">
									</div>
								</div>

								<p>&nbsp;</p>
								<div><label class="col-sm-2 control-label input-sm" for="textinput">Discount Codes - </label><p>Check the checkbox if you want to apply discount for both the financial years.<br><br></p></div>
								
								<label class="col-sm-2 control-label input-sm" for="textinput">
								<?php	if(isset($coupon["appliedFor1"]) && ($coupon["appliedFor1"] == "Two"))
											$checked = 'Checked="Checked"';
										else
											$checked = "";
								?>
								<div class="custgrp">
									Discount Code 1:</label>&nbsp;&nbsp;<input type="checkbox" name="check1" id="check1" value="Yes" <?=$checked?>>
									<div class="col-sm-3">
										<input type="text" id="txtCouponCode1" placeholder="Enter Discount Code 1" class="form-control input-sm" 
										name="txtCouponCode1" value="<?=$coupon['code1']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 1 - Start Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC1StartDate" placeholder="Enter Discount Code 1 Start Date" class="form-control input-sm" name="datePickerC1StartDate" value="<?=$coupon['codeStartDate1']?>">
									</div>
								</div>
								<?php	if(isset($coupon["appliedFor2"]) && ($coupon["appliedFor2"] == "Two"))
											$checked = 'Checked="Checked"';
										else
											$checked = "";
								?>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
									Discount Code 2:</label>&nbsp;&nbsp;<input type="checkbox" name="check2" id="check2" value="Yes" <?=$checked?>>
									<div class="col-sm-3">
										<input type="text" id="txtCouponCode2" placeholder="Enter Discount Code 2" class="form-control input-sm" 
										name="txtCouponCode2" value="<?=$coupon['code2']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 2 - Start Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC2StartDate" placeholder="Enter Discount Code 2 Start Date" class="form-control input-sm" name="datePickerC2StartDate" value="<?=$coupon['codeStartDate2']?>">
									</div>
								</div>
								<?php	if(isset($coupon["appliedFor3"]) && ($coupon["appliedFor3"] == "Two"))
											$checked = 'Checked="Checked"';
										else
											$checked = "";
								?>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
									Discount Code 3:</label>&nbsp;&nbsp;<input type="checkbox" name="check3" id="check3" value="Yes" <?=$checked?>>
									<div class="col-sm-3">
										<input type="text" id="txtCouponCode3" placeholder="Enter Discount Code 3" class="form-control input-sm" 
										name="txtCouponCode3" value="<?=$coupon['code3']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 3 - Start Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC3StartDate" placeholder="Enter Discount Code 3 Start Date" class="form-control input-sm" name="datePickerC3StartDate" value="<?=$coupon['codeStartDate3']?>">
									</div>
								</div>
								<?php	if(isset($coupon["appliedFor4"]) && ($coupon["appliedFor4"] == "Two"))
											$checked = 'Checked="Checked"';
										else
											$checked = "";
								?>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
									Discount Code 4:</label>&nbsp;&nbsp;<input type="checkbox" name="check4" id="check4" value="Yes" <?=$checked?>>
									<div class="col-sm-3">
										<input type="text" id="txtCouponCode4" placeholder="Enter Discount Code 4" class="form-control input-sm" 
										name="txtCouponCode4" value="<?=$coupon['code4']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 4 - Start Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC4StartDate" placeholder="Enter Discount Code 4 Start Date" class="form-control input-sm" name="datePickerC4StartDate" value="<?=$coupon['codeStartDate4']?>">
									</div>
								</div>
								<?php	if(isset($coupon["appliedFor5"]) && ($coupon["appliedFor5"] == "Two"))
											$checked = 'Checked="Checked"';
										else
											$checked = "";
								?>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
									Discount Code 5:</label>&nbsp;&nbsp;<input type="checkbox" name="check5" id="check5" value="Yes" <?=$checked?>>
									<div class="col-sm-3">
										<input type="text" id="txtCouponCode5" placeholder="Enter Discount Code 5" class="form-control input-sm" 
										name="txtCouponCode5" value="<?=$coupon['code5']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 5 - Start Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC5StartDate" placeholder="Enter Discount Code 5 Start Date" class="form-control input-sm" name="datePickerC5StartDate" value="<?=$coupon['codeStartDate5']?>">
									</div>
								</div>
								<?php	if(isset($coupon["appliedFor6"]) && ($coupon["appliedFor6"] == "Two"))
											$checked = 'Checked="Checked"';
										else
											$checked = "";
								?>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
									Discount Code 6:</label>&nbsp;&nbsp;<input type="checkbox" name="check6" id="check6" value="Yes" <?=$checked?>>
									<div class="col-sm-3">
										<input type="text" id="txtCouponCode6" placeholder="Enter Discount Code 6" class="form-control input-sm" 
										name="txtCouponCode6" value="<?=$coupon['code6']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 6 - Start Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC6StartDate" placeholder="Enter Discount Code 6 Start Date" class="form-control input-sm" name="datePickerC6StartDate" value="<?=$coupon['codeStartDate6']?>">
									</div>
								</div>
							</div>
							<div style="float:right;margin-left:200px;">
								<div><p>&nbsp;</p></div>
								<div class="custgrp">
									<div class="col-sm-3 has-success">
										<p></p>
									</div>
								</div>
								<p><br><br></p>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										2:</label>
									<div class="col-sm-3">
										<input type="text" id="txtTwoFilingCharge1" placeholder="Enter Filing Charges" class="form-control  input-sm" name="txtTwoFilingCharge1" value="<?=$two1?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										4:</label>
									<div class="col-sm-3">
										<input type="text" id="txtFourFilingCharge1" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="15" name="txtFourFilingCharge1" value="<?=$four1?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										6:</label>
									<div class="col-sm-3">
										<input type="text" id="txtSixFilingCharge1" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="15" name="txtSixFilingCharge1" value="<?=$six1?>">
									</div>
								</div>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										2:</label>
									<div class="col-sm-3">
										<input type="text" id="txtTwoFilingCharge2" placeholder="Enter Filing Charges" class="form-control  input-sm" name="txtTwoFilingCharge2" value="<?=$two2?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										4:</label>
									<div class="col-sm-3">
										<input type="text" id="txtFourFilingCharge2" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="15" name="txtFourFilingCharge2" value="<?=$four2?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										6:</label>
									<div class="col-sm-3">
										<input type="text" id="txtSixFilingCharge2" placeholder="Enter Filing Charges" class="form-control input-sm" maxlength="15" name="txtSixFilingCharge2" value="<?=$six2?>">
									</div>
								</div>

								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<div>&nbsp;</div><br>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 1 - Percentage:</label>
									<div class="col-sm-3">
										<input type="text" id="txtCoupon1Per" placeholder="Enter Discount Code 1 Percentage" class="form-control input-sm" maxlength="15" name="txtCoupon1Per" value="<?=$coupon['codePer1']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 1 - End Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC1EndDate" placeholder="Enter Discount Code 1 End Date" class="form-control input-sm" name="datePickerC1EndDate" value="<?=$coupon['codeEndDate1']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 2 - Percentage:</label>
									<div class="col-sm-3">
										<input type="text" id="txtCoupon2Per" placeholder="Enter Discount Code 2 Percentage" class="form-control input-sm" maxlength="15" name="txtCoupon2Per" value="<?=$coupon['codePer2']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 2 - End Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC2EndDate" placeholder="Enter Discount Code 2 End Date" class="form-control input-sm" name="datePickerC2EndDate" value="<?=$coupon['codeEndDate2']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 3 - Percentage:</label>
									<div class="col-sm-3">
										<input type="text" id="txtCoupon3Per" placeholder="Enter Discount Code 3 Percentage" class="form-control input-sm" maxlength="15" name="txtCoupon3Per" value="<?=$coupon['codePer3']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 3 - End Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC3EndDate" placeholder="Enter Discount Code 3 End Date" class="form-control input-sm" name="datePickerC3EndDate" value="<?=$coupon['codeEndDate3']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 4 - Percentage:</label>
									<div class="col-sm-3">
										<input type="text" id="txtCoupon4Per" placeholder="Enter Discount Code 4 Percentage" class="form-control input-sm" maxlength="15" name="txtCoupon4Per" value="<?=$coupon['codePer4']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 4 - End Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC4EndDate" placeholder="Enter Discount Code 4 End Date" class="form-control input-sm" name="datePickerC4EndDate" value="<?=$coupon['codeEndDate4']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 5 - Percentage:</label>
									<div class="col-sm-3">
										<input type="text" id="txtCoupon5Per" placeholder="Enter Discount Code 5 Percentage" class="form-control input-sm" maxlength="15" name="txtCoupon5Per" value="<?=$coupon['codePer5']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 5 - End Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC5EndDate" placeholder="Enter Discount Code 5 End Date" class="form-control input-sm" name="datePickerC5EndDate" value="<?=$coupon['codeEndDate5']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 6 - Percentage:</label>
									<div class="col-sm-3">
										<input type="text" id="txtCoupon6Per" placeholder="Enter Discount Code 6 Percentage" class="form-control input-sm" maxlength="15" name="txtCoupon6Per" value="<?=$coupon['codePer6']?>">
									</div>
								</div>
								<div class="custgrp">
									<label class="col-sm-2 control-label input-sm" for="textinput">
										Discount Code 6 - End Date:</label>
									<div class="col-sm-3">
										<input type="text" id="datePickerC6EndDate" placeholder="Enter Discount Code 6 End Date" class="form-control input-sm" name="datePickerC6EndDate" value="<?=$coupon['codeEndDate6']?>">
									</div>
								</div>

							</div>
						</div>
					</p>
				</div>
				<p>
					<div align="center" style="margin-left:25px">
						<button class="left waves-effect btn-flat brand-text submit-btn" type="Submit" name="Submit" value="Submit">Next</button>
						<button class="left waves-effect btn-flat brand-text submit-btn" type="Reset" style="margin-left:5px">Reset</button>
					</div>
				</p>
				</div>
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