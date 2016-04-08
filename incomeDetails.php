<?php
require_once("connection.php");
//print_r($_REQUEST);
//print_r($_FILES);
session_start();

if(!isset($_SESSION['recordId']) || $_SESSION['recordId']=="")	{
	echo "<script>window.location='personalInformation.php';</script>";
}

if(isset($_FILES['file1']['name']) && ($_FILES['file1']['name']<>""))	{
	//echo "In submit";

	$file1 = "";
	$file2 = "";
	$file3 = "";
	$file4 = "";
	$file5 = "";
	$file6 = "";

	$txtFile1 = "";
	$txtFile2 = "";
	$txtFile3 = "";
	$txtFile4 = "";
	$txtFile5 = "";
	$txtFile6 = "";
	
	if(isset($_REQUEST['txtFile1']) && $_REQUEST['txtFile1']<>"")	$txtFile1 = "_".$_REQUEST['txtFile1'];
	if(isset($_REQUEST['txtFile2']) && $_REQUEST['txtFile2']<>"")	$txtFile2 = "_".$_REQUEST['txtFile2'];
	if(isset($_REQUEST['txtFile3']) && $_REQUEST['txtFile3']<>"")	$txtFile3 = "_".$_REQUEST['txtFile3'];
	if(isset($_REQUEST['txtFile4']) && $_REQUEST['txtFile4']<>"")	$txtFile4 = "_".$_REQUEST['txtFile4'];
	if(isset($_REQUEST['txtFile5']) && $_REQUEST['txtFile5']<>"")	$txtFile5 = "_".$_REQUEST['txtFile5'];
	if(isset($_REQUEST['txtFile6']) && $_REQUEST['txtFile6']<>"")	$txtFile6 = "_".$_REQUEST['txtFile6'];
	
	if(isset($_FILES['file1']['name']) && $_FILES['file1']['name']<>"")
	{
		$flag = true;
		$file1 = "uploaded_forms/".$_SESSION['pan']."_".$_REQUEST['selIncomeYear'].$txtFile1."_".$_FILES['file1']['name'];
		if (move_uploaded_file($_FILES["file1"]["tmp_name"], $file1)) {
			//echo "<br>The file ". basename( $_FILES["file1"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file1.";
			$flag = false;
		}
	}
	
	if(isset($_FILES['file2']['name']) && $_FILES['file2']['name']<>"")
	{
		$file2 = "uploaded_forms/".$_SESSION['pan']."_".$_REQUEST['selIncomeYear'].$txtFile2."_".$_FILES['file2']['name'];
		if (move_uploaded_file($_FILES["file2"]["tmp_name"], $file2)) {
			//echo "<br>The file ". basename( $_FILES["file2"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file2.";
			$flag = false;
		}
	}

	if(isset($_FILES['file3']['name']) && $_FILES['file3']['name']<>"")
	{
		$file3 = "uploaded_forms/".$_SESSION['pan']."_".$_REQUEST['selIncomeYear'].$txtFile3."_".$_FILES['file3']['name'];
		if (move_uploaded_file($_FILES["file3"]["tmp_name"], $file3)) {
			//echo "<br>The file ". basename( $_FILES["file3"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file3.";
			$flag = false;
		}
	}
	
	if(isset($_FILES['file4']['name']) && $_FILES['file4']['name']<>"")
	{
		$file4 = "uploaded_forms/".$_SESSION['pan']."_".$_REQUEST['selIncomeYear'].$txtFile4."_".$_FILES['file4']['name'];
		if (move_uploaded_file($_FILES["file4"]["tmp_name"], $file4)) {
			//echo "<br>The file ". basename( $_FILES["file4"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file4.";
			$flag = false;
		}
	}
	
	if(isset($_FILES['file5']['name']) && $_FILES['file5']['name']<>"")
	{
		$file5 = "uploaded_forms/".$_SESSION['pan']."_".$_REQUEST['selIncomeYear'].$txtFile5."_".$_FILES['file5']['name'];
		if (move_uploaded_file($_FILES["file5"]["tmp_name"], $file5)) {
			//echo "<br>The file ". basename( $_FILES["file5"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file5.";
			$flag = false;
		}
	}
	
	if(isset($_FILES['file6']['name']) && $_FILES['file6']['name']<>"")
	{
		$file6 = "uploaded_forms/".$_SESSION['pan']."_".$_REQUEST['selIncomeYear'].$txtFile6."_".$_FILES['file6']['name'];
		if (move_uploaded_file($_FILES["file6"]["tmp_name"], $file6)) {
			//echo "<br>The file ". basename( $_FILES["file6"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file6.";
			$flag = false;
		}
	}

	if($flag)	{
		$query = "Insert into formdetails(financialYear,formCount,form1,form1Password,form2,form2Password,form3,form3Password,form4,form4Password,form5,form5Password,form6,form6Password,recordId) values('".$_REQUEST['selIncomeYear']."','".$_REQUEST['selForm16']."','".$file1."','".$_REQUEST['txtFile1']."','".$file2."','".$_REQUEST['txtFile2']."','".$file3."','".$_REQUEST['txtFile3']."','".$file4."','".$_REQUEST['txtFile4']."','".$file5."','".$_REQUEST['txtFile5']."','".$file6."','".$_REQUEST['txtFile6']."',".$_SESSION['recordId'].")";
		$insertRes = mysqli_query($con,$query);
		
		if (!$insertRes) {
			printf("Errormessage: %s\n", $con->error);
		}
		else
		{
			echo "<script>window.location='bankInformation.php';</script>";
		}
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

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <script>
	  function validateFiles()
	  {
		if($("#selForm16").val()==1)
		{
			if($('#file1').val()=="")
			{
				alert('Please select '+$("#selForm16").val()+' file(s)');
				return false;
			}
	    }
		else if($("#selForm16").val()==2)
		{
			if($('#file1').val()=="" || $('#file2').val()=="") 
			{
				alert('Please select '+$("#selForm16").val()+' file(s)');
				return false;
			}
	    }
		else if($("#selForm16").val()==3)
		{
			if($('#file1').val()=="" || $('#file2').val()=="" || $('#file3').val()=="") 
			{
				alert('Please select '+$("#selForm16").val()+' file(s)');
				return false;
			}
	    }
		else if($("#selForm16").val()==4)
		{
			if($('#file1').val()=="" || $('#file2').val()=="" || $('#file3').val()=="" || $('#file4').val()=="") 
			{
				alert('Please select '+$("#selForm16").val()+' file(s)');
				return false;
			}
	    }
		else if($("#selForm16").val()==5)
		{
			if($('#file1').val()=="" || $('#file2').val()=="" || $('#file3').val()=="" || $('#file4').val()=="" || $('#file5').val()=="") 
			{
				alert('Please select '+$("#selForm16").val()+' file(s)');
				return false;
			}
	    }
		else if($("#selForm16").val()==6)
		{
			if($('#file1').val()=="" || $('#file2').val()=="" || $('#file3').val()=="" || $('#file4').val()=="" || $('#file5').val()=="" || $('#file6').val()=="") 
			{
				alert('Please select '+$("#selForm16").val()+' file(s)');
				return false;
			}
	    }
		return true;
	  }

	  function showFiles()
	  {
		if($("#selForm16").val()==1)
		{
			$("#divFile1").show();
			$("#divFile2").hide();
			$("#divFile3").hide();
			$("#divFile4").hide();
			$("#divFile5").hide();
			$("#divFile6").hide();
		}
		else if($("#selForm16").val()==2)
		{
			$("#divFile1").show();
			$("#divFile2").show();
			$("#divFile3").hide();
			$("#divFile4").hide();
			$("#divFile5").hide();
			$("#divFile6").hide();
		}
		else if($("#selForm16").val()==3)
		{
			$("#divFile1").show();
			$("#divFile2").show();
			$("#divFile3").show();
			$("#divFile4").hide();
			$("#divFile5").hide();
			$("#divFile6").hide();
		}
		else if($("#selForm16").val()==4)
		{
			$("#divFile1").show();
			$("#divFile2").show();
			$("#divFile3").show();
			$("#divFile4").show();
			$("#divFile5").hide();
			$("#divFile6").hide();
		}
		else if($("#selForm16").val()==5)
		{
			$("#divFile1").show();
			$("#divFile2").show();
			$("#divFile3").show();
			$("#divFile4").show();
			$("#divFile5").show();
			$("#divFile6").hide();
		}
		else if($("#selForm16").val()==6)
		{
			$("#divFile1").show();
			$("#divFile2").show();
			$("#divFile3").show();
			$("#divFile4").show();
			$("#divFile5").show();
			$("#divFile6").show();
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
              <div class="overlay-content">
                <div class="container">
                  <h1 class="header-title"></h1>
                  <div class="meta-media">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="blog-details">
            <div class="container">
              <div class="row">
                <div class="col s28 m18 28">
                  <div class="blog-content">
				  <form name="personalInformation" method="POST" enctype="multipart/form-data" onSubmit="return validateFiles()">
				  <h2 class="title">Income Details</h2>

					<p>
						<div class="form-group">
							<div class="custgrp">
								<label class="col-sm-2 control-label input-sm" for="textinput" style="font-size: 14px;font-weight:bold;">
									Financial year to file return:</label>
								<div class="col-sm-3 has-success">
									<select name="selIncomeYear">
									<option value="2015-16">2015-2016</option>
									<option value="2014-15">2014-2015</option>
									</select>
								</div>
							</div>
							<div class="custgrp">
								<label class="col-sm-2 control-label input-sm" for="textinput" style="font-size: 14px;font-weight:bold;">
									Number of Form 16:</label>
								<div class="col-sm-2">
									<select name="selForm16" id="selForm16" onChange="showFiles()">
									<option value="1" selected>One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
									<option value="4">Four</option>
									<option value="5">Five</option>
									<option value="6">Six</option>
									</select>
								</div>
							</div>
							<div class="custgrp">
								<label class="col-sm-1 control-label input-sm" for="textinput" style="font-size: 14px;font-weight:bold;">
									Upload Forms:</label>
							</div>
						</div>
						
					   <p>
							<div id="divFile1">
								<input type="file" ID="file1" name="file1" placeholder="File 1" class="form-control input-sm">
								<input type="text" ID="txtFile1" name="txtFile1" placeholder="Password if any" class="form-control input-sm" MaxLength="50" style="width:150px">
							</div>
							<div id="divFile2" style="display:none">
								<input type="file" ID="file2" name="file2" placeholder="File 2" class="form-control input-sm">
								<input type="text" ID="txtFile2" name="txtFile2" placeholder="Password if any" class="form-control input-sm" MaxLength="50" style="width:150px">
							</div>
							<div id="divFile3" style="display:none">
								<input type="file" ID="file3" name="file3" placeholder="File 1" class="form-control input-sm">
								<input type="text" ID="txtFile3" name="txtFile3" placeholder="Password if any" class="form-control input-sm" MaxLength="50" style="width:150px">
							</div>
							<div id="divFile4" style="display:none">
								<input type="file" ID="file4" name="file4" placeholder="File 1" class="form-control input-sm">
								<input type="text" ID="txtFile4" name="txtFile4" placeholder="Password if any" class="form-control input-sm" MaxLength="50" style="width:150px">
							</div>
							<div id="divFile5" style="display:none">
								<input type="file" ID="file5" name="file5" placeholder="File 1" class="form-control input-sm">
								<input type="text" ID="txtFile5" name="txtFile5" placeholder="Password if any" class="form-control input-sm" MaxLength="50" style="width:150px">
							</div>
							<div id="divFile6" style="display:none">
								<input type="file" ID="file6" name="file6" placeholder="File 1" class="form-control input-sm">
								<input type="text" ID="txtFile6" name="txtFile6" placeholder="Password if any" class="form-control input-sm" MaxLength="50" style="width:150px">
							</div>
					   </p>
						<div>
							<button class="left waves-effect btn-flat brand-text submit-btn" type="Submit">Next</button>
							<button class="left waves-effect btn-flat brand-text submit-btn" type="Reset">Reset</button>
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