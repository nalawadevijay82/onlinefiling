<?php
require_once("connection.php");
print_r($_REQUEST);
session_start();
print_r($_SESSION);

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	echo "<script>window.location='personalInformation.php';</script>";
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
	  //To check coupon code
	  function couponCode(value,fees)
	  {
		if (value == "") {
			alert('Please enter Coupon code');
			return;
		} else {
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var obj = JSON.parse(xmlhttp.responseText);
					document.getElementById("couponMsg").innerHTML = obj.msg;
					if(obj.result == "Success")
					{
						document.getElementById("fees").innerHTML = obj.fees;
					}
				}
			};
			xmlhttp.open("GET","coupon.php?q="+value+"&fees="+fees,true);
			xmlhttp.send();
		}
	  }

	  function finishButton()
	  {
		  if($('#receiveCredit:checkbox:checked').length > 0)
		  {
			  $('#submitDiv').show();
		  }
		  else
		  {
			  $('#submitDiv').hide();
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
                <a href="index.html" class="brand-logo">Online IT Filing : Terms &amp; COndition</a>
                
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
					<form name="terms" id="terms" method="POST" action="Zaakpay/postData.php">
					  <h2 class="title">Terms &amp; Conditions</h2>

						<?php
						$query = "SELECT * FROM `personalinformation` where id = ".$_SESSION['recordId'];
						$res = mysqli_query($con,$query);
						$data=mysqli_fetch_array($res,MYSQLI_ASSOC);
						$firstName = $data['FirstName'];
						$lastName = $data['LastName'];
						$fatherName = $data['FatherName'];
						$PAN = $data['PAN'];

						$query = "SELECT financialYear FROM `formdetails` where recordId = ".$_SESSION['recordId'];
						$res = mysqli_query($con,$query);
						$data=mysqli_fetch_array($res,MYSQLI_ASSOC);
						$financialYear = $data['financialYear'];
						
						$currentDate = date("d-m-Y");
						$currentFinYear = "01-04-".date("Y");
						
						if(strtotime($currentDate) > strtotime($currentFinYear))
						{
							$currentYear = true;
						}
						else
						{
							$currentYear = false;
						}

						$countQry = "SELECT * FROM `formdetails` where recordId = ".$_SESSION['recordId']." order by id DESC LIMIT 0,1";
						$countRes = mysqli_query($con,$countQry);
						$countData=mysqli_fetch_array($countRes,MYSQLI_ASSOC);
						$formCount = $countData['formCount'];
						
						$count = 0;
						switch ($formCount)	{
							case 1: 
								//If current year is true, it means it falls in current financial year. So we'll refer second columns for current year.
								if($currentYear)
									$count = "one2";
								else
									$count = "one1";
								break;
							case 2: 
								if($currentYear)
									$count = "two2";
								else
									$count = "two1";
								break;
							case 3: 
								if($currentYear)
									$count = "three2";
								else
									$count = "three1";
								break;
							case 4: 
								if($currentYear)
									$count = "four2";
								else
									$count = "four1";
								break;
							case 5: 
								if($currentYear)
									$count = "five2";
								else
									$count = "five1";
								break;
							case 6: 
								if($currentYear)
									$count = "six2";
								else
									$count = "six1";
								break;
						}

						$chargesQry = "SELECT ".$count." FROM `filingcharges` where active=1";
						$chargesRes = mysqli_query($con,$chargesQry);
						$chargesData=mysqli_fetch_array($chargesRes,MYSQLI_ASSOC);
						$charges = $chargesData[$count];
						?>

						<p>I, <strong><?=$firstName." ".$lastName?></strong>, son/ daughter of <strong><?=$fatherName?></strong>, bearing PAN  <strong><?=$PAN?></strong> solemnly declare that to the best of my knowledge and belief, the information given to you is correct and complete and that the amount of income and other particulars shown therein are truly stated and are in accordance with the provisions of the Income- tax Act, 1961, in respect of income chargeable to Income-tax of financial year <strong><?=$financialYear?></strong>. I hereby authorize www.onlineitfiniling.in and their personnel to scrutinize the information furnished by me, to make income and tax computations, pay tax amount furnished by me, if any, and to file the Income Tax Return on my behalf, with the Income tax Department, in the capacity of an Electronic Return Intermediary (ERI) <strong>registered with </strong> the Income Tax Department, Govt. of India. I hereby take the complete responsibility for the information furnished by me in this behalf, not withstanding anything of the provisions of the Income Tax Act, 1961 and rules thereof. I understand that the time taken by www.onlineitfiniling.in to file my tax return and furnish me the acknowledgment is 5 working days, and the fee charged is as mentioned below. I have read Privacy Policy.</p>
						<p>Have discount code? &nbsp; <Input type="text" id="coupon" name="coupon">&nbsp;
						<input type="button" name="apply" id="apply" value="Apply" onClick="couponCode(document.getElementById('coupon').value,<?=$charges?>);">
						&nbsp;<span id="couponMsg" name="couponMsg"></span>
						</p>

						<?php $_SESSION['fees'] = $charges;
						echo "<p><strong>Fees: <span id='fees' name='fees'>".$charges."</span></strong>";
						?>
						<br>
						Place: Pune<br>
						Date: <?=date("d-m-Y")?><br>
						<p><input type="checkbox" name="receiveCredit" id="receiveCredit" value="Yes" onClick="finishButton();">&nbsp; <strong>Accept Terms and Conditions</strong><br></p>
						<p>
							<div align="center" id="submitDiv" style="display:none;">
								<p>Note - Clicking on Finish button will proceed you to the payment gateway. Please keep your debit/credit card avaliable to make payment. Thank you. </p>

								<button class="left waves-effect btn-flat brand-text submit-btn" name="submit" type="Submit">Finish</button>
							</div>
						</p>
					</form>
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