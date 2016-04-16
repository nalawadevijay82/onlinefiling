<?php
require_once("connection.php");
print_r($_REQUEST);
exit;

require_once('Zaakpay/checksum.php');

session_start();
//print_r($_SESSION);

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	echo "<script>window.location='personalInformation.php';</script>";
}

// Please insert your own secret key here
$secret = 'af938059a140476abf3c0547b3df377b';

$recd_checksum = $_POST['checksum'];
$all = Checksum::getAllParams();
//echo "<br><br>All: ".$all;
error_log("AllParams:".$all);
error_log("Secret Key : ".$secret);
$checksum_check = Checksum::verifyChecksum($recd_checksum, $all, $secret);

//echo "<br><br>Zaapkey: ".Checksum::verifyChecksum($recd_checksum, $all, $secret);
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
                <a href="index.php" class="brand-logo">Online IT Filing : Payment Information</a>
                
                <!-- Image Based Logo -->                
                 <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                <ul class="right hide-on-med-and-down custom-nav">                 
                  <li><a href="index.php">Home</a></li>
                </ul>
                <!-- For Mobile View -->
                <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="index.php">Home</a></li>
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
					<form name="terms" id="terms" method="POST">
					  <h2 class="title">Payment Information</h2>
						<p>
							<?php 
							//echo "<br><br>checksum: ".$checksum_check;
							//echo "<br><br>message: ".Checksum::outputResponse($checksum_check); 
							//print_r($_REQUEST['responseDescription']); 
							if(isset($_REQUEST['responseCode']) && ($_REQUEST['responseCode']==100))
							{
								echo "<p>The transaction was completed successfully. </p>
								<p>Thank you for choosing us to file return. We strive to do better everyday.</p>";
							}
							else
							{
								print_r($_REQUEST['responseDescription']);
								echo '<p>Thank you for choosing us. It is recommneded to validate the information & try again or contact us at <a href="mailto:support@onlineitfiling.in">support@onlineitfiling.in</a></p>';
							}

							if(isset($_REQUEST['responseCode']))
							{
								$query = "Insert into payment(recordId,orderId,zaakpayOrderId,responseCode,responseDescription,checksum,checksumVerified,paidFees) values('".$_SESSION['recordId']."','IT".$_SESSION['recordId']."','".$_REQUEST['orderId']."','".$_REQUEST['responseCode']."','".$_REQUEST['responseDescription']."','".$_REQUEST['checksum']."','".$checksum_check."',".$_SESSION['fees'].")";
								$insertRes = mysqli_query($con,$query);
								//echo "<br><br>Qry: ".$query;
								if (!$insertRes) {
									printf("Errormessage: %s\n", $con->error);
								}
								else
								{
									//echo "<script>window.location='incomeDetails.php';</script>";
									session_destroy();
								}
							}
							?>
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