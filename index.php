<?php
require_once("connection.php");
?>
<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Online IT Filing : Home</title>

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

	  <style type="text/css">	  
	  table, th, td {
		border: medium;	!important;
	  }
	  </style>
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
                <a href="index.php" class="brand-logo"><img src="img/logo.gif"></a>

                <!-- Image Based Logo -->                
                 <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                  <li><a href="personalInformation.php">Upload Income Details / Proofs</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#filing-procedure">Filing Procedure</a></li>
                  <li><a href="#fee-structure">Fee Structure</a></li>
                  <!--<li><a href="#testimonial">Testimonial</a></li>
                  <li><a href="#blog">Blog</a></li>-->
                  <li><a href="#footer">Contact</a></li>
                </ul>
                <!-- For Mobile View -->
                <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="personalInformation.php">Upload Income Details / Proofs</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#filing-procedure">Filing Procedure</a></li>
                  <li><a href="#fee-structure">Fee Structure</a></li>
                  <!--<li><a href="#testimonial">Testimonial</a></li>
                  <li><a href="#blog">Blog</a></li>-->
                  <li><a href="#footer">Contact</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>  
      </header>
      <div class="main-wrapper">
        <main role="main">
          <!-- START HOME SECTION -->
          <section id="home">
            <div class="overlay-section">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="home-inner">
                      <h1 class="home-title">Welcome</h1>
                      <p><font color="#78adc9"><strong>We help to file Income Tax returns</strong></font></p>
                      <a class="btn waves-effect waves-light btn-large" href="personalInformation.php"><strong>Upload Income Details / Proofs</strong></a>
                      <!-- Call to About Button -->
                      <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>                  
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </section>

          <!-- START ABOUT SECTION -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="about-inner">
                    <div class="row">
                      <!--<div class="col s12 m4 l3">
                        <div class="about-inner-left">
                          <img class="profile-img" src="img/profile-img1.jpg" alt="Profile Image">
                        </div>
                      </div>-->
					  <h2 class="title">About Us</h2>
                      <div class="col s12 m8 l9">
                        <div class="about-inner-right">
                          <p>Online Income Tax Filing - www.OnlineITFiling.in - is formed by group of people having vast experience in accounting, auditing, financial consultation, income tax, sales tax, and service tax. We come from the background of 16 years industry experience. We are registered under Sushil Chandwani & Co. (A Chartered Accountant firm) with Income Tax Department, Government of India.</p>

						<p>OnlineITFiling.in has made your IT return filing on just ONE CLICK. It is very easy and user friendly process. All you need to do is to provide your details, upload your income details/proofs and our expert team will file your return. You will receive filing acknolwedgement on your email ID provided.</p>

						<h3>The Mission:</h3>
						<p>We strive to do better everyday. We aim to bring highest level of client satisfaction. The company believes in ensuring the highest standard of ethics in all its work to maintain Independence, Integrity and Objectivity.</p>

						<h3>The Important:</h3>
						<p>* Income Tax Department has made mandatory to provide address and bank details. Provide all relevant information asked.</p>

						<h3>The Commitment:</h3>
						<p>*** Return will be filed in 5 working days (excluding Sat, Sun and Public holidays). </p></p>
                          <!--<div class="resume-download col s12 m12 l6">
                            <a href="#" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> Download Resume</a>
                          </div>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Resume -->
          <section id="filing-procedure">
              <div class="container">
                <div class="skill-inner">
                  <h2 class="title">Filing Procedure</h2>
				  <h5>Step by step procedure to file return</h5>
                  <p> 
					<ol><li>Click on the button or tab "Upload Income Details / Proofs"</li>
					<li>Enter your PAN card details.</li>
					<li>Provide permanent and present address for communications (if any) from IT department.</li>
					<li>Upload income details/proofs like Form-16 (upload all forms; one or more), other income from property, rent etc. Also investments and claims not mentioned in From 16.</li>
					<li>Provide bank account details with bank branch IFSC code.</li>
					<li>Read Terms & Conditions and Accept.</li>
					<li>Make the processing fee payment for www.OnlineITFiling.in.</li>
					<li>Once ITR acknowledgement email received from Income Tax department, you need to sign the document and send to (via post or speed post) the address mentioned on the document.</li>
					</ol>
				  </p>

				  <p>
					<h5>Please note:</h5>
					<ol><li>At any moment of time for clarification or query please contact us on support email ID or contact numbers.</li>
					<li>Once the payment has been made our reference ID will be sent on an email ID provided.</li>
					<li>We require 5 working days to file the return.</li>
					<li>Once the return is filed with Income Tax Department (ITD); the Income Tax acknowledgement will be sent by ITD on the email ID.</li>
					<li>For amendment of return please contact support <a href="mailto:support@onlineitfiling.in">support@onlineitfiling.in</a>.</li> 
				  </p>

                  <!-- Start skills progress bar -->

                  <!--<div class="skill-progress-bar">
                    <span>Html5</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-100 color-amethyst" data-pro-bar-percent="100"></div>
                    </div>
                    <span>css</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-90 color-amethyst" data-pro-bar-percent="90" data-pro-bar-delay="100"></div>
                    </div>
                    <span>Photoshop</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-80 color-amethyst" data-pro-bar-percent="80" data-pro-bar-delay="200"></div>
                    </div>
                    <span>Illustrator</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-70 color-amethyst" data-pro-bar-percent="70" data-pro-bar-delay="300"></div>
                    </div>
                    <span>Wordpress</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="400"></div>
                    </div>
                    <span>jQuery</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-50 color-amethyst" data-pro-bar-percent="50" data-pro-bar-delay="500"></div>
                    </div>
                  </div>-->
                </div>
              </div>
            </section>
			
          <section id="fee-structure">
              <div class="container">
                <div class="skill-inner">
                  <h2 class="title">Fee Structure</h2>
				  <?php	
					$query = "SELECT * FROM filingcharges where active=1";
					$res = mysqli_query($con,$query);
					$data=mysqli_fetch_array($res,MYSQLI_ASSOC);
					$year1 = $data['year1'];
					$year2 = $data['year2'];
					$one1 = $data['one1'];
					$one2 = $data['one2'];
					$two1 = $data['two1'];
					$two2 = $data['two2'];
					$three1 = $data['three1'];
					$three2 = $data['three2'];
					$four1 = $data['four1'];
					$four2 = $data['four2'];
					$five1 = $data['five1'];
					$five2 = $data['five2'];
					$six1 = $data['six1'];
					$six2 = $data['six2'];
				?>
				  <table border='1' align="center" style="border-style: solid;">
				  <tr><th>No. of forms</th><th align="center"><?=$year2?></th><th><?=$year1?></th></tr>
				  <?php
				  echo "<tr><td>One</td><td>".$one2."</td><td>".$one1."</td></tr>
				  <tr><td>Two</td><td>".$two2."</td><td>".$two1."</td></tr>
				  <tr><td>Three</td><td>".$three2."</td><td>".$three1."</td></tr>
				  <tr><td>Four</td><td>".$four2."</td><td>".$four1."</td></tr>
				  <tr><td>Five</td><td>".$five2."</td><td>".$five1."</td></tr>
				  <tr><td>Six</td><td>".$six2."</td><td>".$six1."</td></tr>";	?>
				  </table>
				  <p>&nbsp;</p>
				  <p>
				  <ul>
				  <li>&bull;&nbsp;&nbsp;The above fee structure is for online upload of documents</li>
				  <li>&bull;&nbsp;&nbsp;To apply online discount use discount code - ONLINEUP</li>
				  <li>&bull;&nbsp;&nbsp;For documents shared via email would cost Rs.20 extra.</li>
				  <li>&bull;&nbsp;&nbsp;For documents shared via Whatsapp would cost Rs.50 extra.</li>
				  </ul>
                </div>
              </div>
            </section>

			<!-- Testimonial -->
			<!--<section id="testimonial">
            <div class="container">
              <div class="row">
               <div class="col s12">
                 <div class="testimonial-inner">
                   <h2 class="title">Testimonial</h2>
                   <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <!-- Start Testimonial Slider -- >
                    <div class="testimonial-slider-area">
                      <div id="owl-carousel2" class="testimonial-slider row">
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="img/profile-img.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div>
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="img/profile-img1.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div> 
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="img/profile-img.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div>
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="img/profile-img1.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div>                                       
                      </div>
                      <div class="customNavigation">
                        <a class="btn prev2 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                        <a class="btn next2 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                      </div>                  
                    </div>
                 </div>
               </div>
               </div> 
            </div>
          </section>	-->
          <!-- Start Blog -->
          <!-- <section id="blog">
            <div class="container">
              <div class="row">
               <div class="col s12">
                 <div class="blog-inner">
                   <h2 class="title">Blog</h2>
                   <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                  <!-- Start Blog area -- >
                  <div class="blog-area">
                    <div class="row">
                      <!-- Start single blog post -- >
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="img/blog1.jpg">     
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.html">Awesome Post Title</a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Admin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                              <a class="readmore-btn" href="blog-single.html">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Start single blog post -- >
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="img/blog2.jpg">     
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.html">Awesome Post Title</a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Admin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>10</span></a>
                              <a class="readmore-btn" href="blog-single.html">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Start single blog post -- >
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="img/blog3.jpg">     
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.html">Awesome Post Title</a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Admin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                              <a class="readmore-btn" href="blog-single.html">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- All Post Button -- >
                    <a class="waves-effect waves-light btn-large allpost-btn" href="blog-archive.html">All Post</a>
                  </div>                    
                 </div>
                </div>
              </div> 
            </div>
          </section>	-->
          <!-- Start Footer -->
          <footer id="footer" role="contentinfo">
            <!-- Start Footer Top -->
            <div class="footer-top">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-top-inner">
                      <h2 class="title">Contact</h2>
                      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                      <div class="contact">
                        <div class="row">
                          <div class="col s12 m6 l6">
                            <div class="contact-form">
                              <form>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactName" id="contact-name">
                                  <label class="input-label" for="contact-name">Name</label>
                                </div>
                                <div class="input-field">
                                  <input type="email" class="input-box" name="contactEmail" id="email">
                                  <label class="input-label" for="email">Email</label>
                                </div>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactSubject" id="subject">
                                  <label class="input-label" for="subject">Subject</label>
                                </div>
                                <div class="input-field textarea-input">
                                  <textarea class="materialize-textarea" name="contactMessage" id="textarea1"></textarea>
                                  <label class="input-label" for="textarea1">Message</label>
                                </div>
                                <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">send message</button>
                              </form>
                            </div>
                          </div>
                          <div class="col s12 m6 l6">
                            <div class="contact-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.297314036103!2d-86.74954699999999!3d34.672444999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626565a94cdb25%3A0x74c206053b6a97c9!2s305+Intergraph+Way%2C+Madison%2C+AL+35758%2C+USA!5e0!3m2!1sen!2sbd!4v1431591462160" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-inner">
                      <!-- Bottom to Up Btn -->
                      <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                      <p align="center">
					  <img src="img/ERI Authorized1.png">&nbsp;&nbsp;<img src="img/ERIAuthorized.png"> &nbsp;&nbsp;&nbsp;
					  <a href="privacyPolicy.html" target="_blank">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="refundPolicy.html" target="_blank">Refund Policy</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="termsandconditions.html" target="_blank">General Terms & Conditions</a></p>
					  <p><font size="1">Designed By <a href="http://www.markups.io/">MarkUps.io</a></font></p>
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