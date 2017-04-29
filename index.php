<?php

$testEnvoi="none";
$email="";
$name="";
$subject="";
$mesage="";

       // HZ contact debut  
       if (isset($_POST['name']))
       {
              $Sujet="Message from kidsmith.uk website";    
              $Message2="";
              $Message2.="<html xmlns='http://www.w3.org/1999/xhtml'> ";
              $Message2.="<head>";
              $Message2.="<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /> ";
              $Message2.="<title>$Sujet </title>";
              $Message2.="</head><body> ";
              
              $name=$_POST['name'];
              $email=$_POST['mail'];
              $subject=$_POST['subject'];
              $message=$_POST['message'];
              
              $Message2.="<p>NAME: ".$name."</p>";
              $Message2.="<p>EMAIL: ".$email."</p>";
              $Message2.="<p>SUBJECT: ".$subject."</p>";
              $Message2.="<p>MESSAGE: <pre>".$message."</pre> </p>";
              $Message2.="</body></html>";
              
              // ============================= vers le site
              $emailFrom="info@kidsmith.uk" ;
              $emailTo="info@kidsmith.uk" ;

              // Use the PHP mail function and set the ‘mail from’ value using the following code - replacing email@yourdomain.com with the appropriate email address.
        			$entetedate  = date("D, j M Y H:i:s ");
              $headers  = "MIME-Version: 1.0" . "\n"; 
        			$headers .= "X-Mailer: PHP/5.6" . "\n"; 
        			$headers .= "Date: ".$entetedate. "\n"; 
        			$headers .= "Content-type: text/html; charset=UTF-8" ."\n";				
              $headers .= "From: info@kidsmith.uk" ."\r\n";		  
              // You need to add a fifth “-f” parameter to the sendmail function. This will set the name of the from address.     
              ini_set("sendmail_from","$emailFrom");          
              $btest=mail($emailTo, $Sujet, $Message2, $headers, "-f".$emailFrom);
  
              // ============================= vers l'internaute  
              // Use the PHP mail function and set the ‘mail from’ value using the following code - replacing email@yourdomain.com with the appropriate email address.
        			$entetedate  = date("D, j M Y H:i:s ");
              $headers  = "MIME-Version: 1.0" . "\n"; 
        			$headers .= "X-Mailer: PHP/5.6" . "\n"; 
        			$headers .= "Date: ".$entetedate. "\n"; 
        			$headers .= "Content-type: text/html; charset=UTF-8" ."\n";				
              $headers .= "From: info@kidsmith.uk" ."\r\n";		  
              // You need to add a fifth “-f” parameter to the sendmail function. This will set the name of the from address.     
              $emailTo=$email;
              ini_set("sendmail_from","$emailfrom");
              $Message3="<p>Hello </p>";
              $Message3.="<p>Thank you for contacting Kidsmith. </p>";
              $Message3.="<p>Your email has been received and we will respond as soon as possible. </p>";
              $Message3.="<p>Kidsmith </p>";
              $Sujet="Enquiry to Kidsmith";
              $btest=mail($emailTo, $Sujet, $Message3, $headers, "-f".$emailFrom);

              if ($btest) $testEnvoi="ok";
              if (!$btest) $testEnvoi="bad";
            }
        // HZ contact fin  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Precious solid silver necklaces with star designs produced by Kidsmith</title>
<meta name="Description" content="Kidsmith creates solid silver necklaces, pendants, charms, medals with unique star designs">
<meta name="Keywords" content="star silver necklace, charm, medal, sterling silver, jewellery, kidsmith, star design, star jewellery">
    <meta name="author">

    <title>Mini Medals by Kidsmith</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
 
 <!-- UtilCarousel base css and default theme for control. -->
<link rel="stylesheet" href="utilcarousel-files/utilcarousel/util.carousel.css">
 
<!-- Include the skin styleseet -->
<link rel="stylesheet" href="utilcarousel-files/utilcarousel/util.carousel.skins.css">

 
<link rel="stylesheet" href="utilcarousel-files/magnific-popup/magnific-popup.css" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
 
</head>

<body>
<div id="backtop" data-v-w="300, 1200">&#9650;</div>
<a  name="backtop"></a>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav"><img class="img-responsive" src="img/logo.png" alt="">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#description">DESCRIPTION</a>
                    </li>
                    <li>
                        <a href="#gallery">PHOTO GALLERY</a>
                    </li>
                     <li>
                        <a href="#buy">BUY</a>
                    </li>
                    <li>
                        <a href="#about">ABOUT</a>
                    </li>
                                       <li>
                        <a id="contactLink" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>MINI MEDALS</h1>
                        <h3>Kids need medals.</h3> 
                        <h3>Mini medals are a range of hallmarked sterling silver charms</h3><h3> designed by kids for kids
                        (or anyone really).</h3>
                        <hr class="intro-divider">
                        <h3>One design is now available to buy on <a href="https://www.etsy.com/uk/shop/KidsmithUK" title="Link to Kidsmith shop on Etsy" target="_blank">Etsy</a>. More to follow.</h3>
                        <hr class="intro-divider">
                         <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://www.facebook.com/kidsmith.uk/" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">FACEBOOK</span></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="description"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Beautiful &amp; precious</h2>
                    <p class="lead">Mini medals are beautiful and precious and we know kids will cherish them forever. Whilst we think you should give them to children, they make great charms... and can even be added to pet collars! <br><br> Hallmarked silver sterling. 20mm in diameter.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">9 Designs</h2>
                  <p class="lead">One, two, five or ten stars, raised or embossed</p>
                  <h2 class="section-heading">2 Finishes</h2>
                    <p class="lead">There are two choices: polished or partially oxidised. The oxidising process blackens the metal and is semi-permanent. It adds contrast. The partially oxidised finish has the raised surfaces polished. Over time the polished surface will break through. That's part of the appeal. </p>
                  <h2 class="section-heading">7 Ribbon colours</h2>
                    <p class="lead">Orange, purple, yellow, turquoise, light blue, pink</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
<a  name="gallery"></a>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Select your Mini Medal</h2>
                    <h3>Polished finish</h3></div></div></div></div>
<div id="fullwidth" class="util-carousel fullwidth">
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t1.jpg" alt="" />
				</div>

				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="assets/images/t1.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Large Regular - Polished</h4>
						
					</div>
				</div>
			</div>
			
			          
            <div class="item">
				<div class="meida-holder">
					<img src="assets/images/t3.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="assets/images/t3.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Large Irregular - Polished</h4>
						
					</div>
				</div>
			</div>
          			
           
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t5.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						</a><a href="assets/images/t5.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>10-Star Embossed - Polished</h4>
						
					</div>
				</div>
			</div>
			
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t7.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="assets/images/t7.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>5-Star Embossed - Polished</h4>
						
					</div>
				</div>
			</div>
			
			
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t10.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t8.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>5-Star Raised - Polished</h4>
                        		</div>
				</div>
			</div>
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t11.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t11.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Smiley - Polished</h4>
                        		</div>
				</div>
			</div>
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t18.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t18.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>10-Star Raised - Polished</h4>
                        		</div>
				</div>
			</div>
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t16.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t16.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Shooting Stars - Polished</h4>
                        		</div>
				</div>
			</div>
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t17.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t17.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Circling Stars - Polished</h4>                   	
					</div>
				</div>
			</div>
		
		</div>
        
        <!-- /.container -->
 <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                  <div class="clearfix"></div>
   
   <h3>Partially oxidised</h3></div></div></div></div><br><br>
<div id="fullwidth" class="util-carousel fullwidth">
			
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t2.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="assets/images/t2.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Large Regular - Partillay Oxidised</h4>
						
					</div>
				</div>
			</div>
			            
           
          			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t4.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="assets/images/t4.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Large Irregular - Partially Oxidised</h4>
						
					</div>
				</div>
			</div>
            
			
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t6.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="assets/images/t6.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>10-Star Embossed - Oxidised Finish</h4>
						
					</div>
				</div>
			</div>
			
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t8.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t8.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>5-Star Embossed - Partially Oxidised</h4>
					
 		</div>
				</div>
			</div>
            
            
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t9.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t8.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>5-Star Raised - Partially Oxidised</h4>
                        		</div>
				</div>
			</div>
            
            <div class="item">
				<div class="meida-holder">
					<img src="assets/images/t20.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t20.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Shooting Stars - Partially Oxidised</h4>
                        		</div>
				</div>
			</div>
			<div class="item">
				<div class="meida-holder">
					<img src="assets/images/t19.jpg" alt="" />
				</div>
				<div class="hover-content">
					<div class="overlay"></div>
					<div class="link-container">
						<a href="#"><i class="icon-link"></i></a><a href="assets/images/t19.jpg" class="img-link"><i class="icon-search"></i></a>
					</div>
					<div class="detail-container">
						<h4>Circling Stars - Partially Oxidised</h4>
                        		</div>
				</div>
			</div>
		
		</div>
        
             
        
        <!-- /.container -->
    </div>
   <!-- /.content-section-b -->
<a  name="buy"></a>
  <div class="content-section-a">

        <div class="container">

            <div class="row">
              <div class="col-lg-5 col-sm-6">
                  <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Buy Mini Medals</h2>
                    <p class="lead">One design (regular star) is now  available to buy from <a href="https://www.etsy.com/uk/shop/KidsmithUK" title="Kidsmith shop at Etsy" target="_blank">Etsy</a>. If you are looking for other designs or wish to order directly, please contact us via the contact form below.</p>
                    </div>
			</div>
	
		</div>
    
             
        
        <!-- /.container -->
    </div>   
    
    <!-- /.content-section-b -->
<a  name="about"></a>
   
    <div class="content-section-b">

        <div class="container">

            <div class="row">
              <div class="col-lg-5 col-sm-6">
                  <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About Kidsmith</h2>
                    <p class="lead">Kidsmith is a pair of mini silversmiths, 9 year-old twins - Manon and Raphaël (supported by their dad). At the heart of the concept is the idea that kids should have precious rewards for their exceptional good deeds and behaviours, and that these should be a lasting childhood memory. The kids design and then we all work on the CAD files, prototypes, casting and polishing.</p>

<p class="lead">Their dad, David, was a kiddy smith too and has been making jewellery ever since. He also has diplomas in gemmology and is a fellow of the Gemmological Association.</p>

<p class="lead">In late 2016 the kids launched their Kickstarter campaign, successfully raising seed funding (please check out their campaign video). They are now working on new artistic techniques including plating, enamelling and stone setting.
</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <p></p>   
                    <div class="embed-responsive embed-responsive-16by9">               
                    <iframe src="https://player.vimeo.com/video/184903432?title=0&byline=0&portrait=0" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->


  <a  name="contact"></a>
    <!-- form>
    <div class="inner contact">
                <!-- Form Area -->
                <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Contact us</h2>
                    <p class="lead">on 07985 469031 or by email</p> </div></div>
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required class="form" placeholder="Name" value="<?php echo $name; ?>" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required class="form" placeholder="Email" value="<?php echo $email; ?>" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required class="form" placeholder="Subject" value="<?php echo $subject; ?>" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"> <?php echo $message; ?> </textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- HZ contact debut -->
              <?php
             //  message suite à l'envoi
              if ($testEnvoi=="ok") { echo '                      
                     <div class="mail-message-area">
                        <div class="alert gray-bg mail-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div> 
                     <script> var evt=document.createEvent("MouseEvents");
                              evt.initMouseEvent("click", true, true, window,0, 0, 0, 0, 0, false, false, false, false, 0, null);                              
                              var cl=document.getElementById("contactLink");   
                              cl.dispatchEvent(evt);                                                          
                              </script> '; }
            
              if ($testEnvoi=="bad") { echo '                      
                    <div class="mail-message-area">
                            <div class="alert gray-bg mail-message">
                            <strong>An error occured.</strong> 
                        </div>
                    </div>
                     <script> var evt=document.createEvent("MouseEvents");
                              evt.initMouseEvent("click", true, true, window,0, 0, 0, 0, 0, false, false, false, false, 0, null); 
                              var cl=document.getElementById("contactLink"); cl.dispatchEvent(evt); </script> '; }
             ?>                                      
                                 
            <!-- HZ contact fin -->
               
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
    </div>
        
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect with Kidsmith</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://www.facebook.com/kidsmith.uk/" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">FACEBOOK</span></a>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#description">Description</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#gallery">Photo Gallery</a>
                        </li>
                          <li class="footer-menu-divider">&sdot;</li>
                         <li>
                            <a href="#buy">Buy</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Kidsmith. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

<script src="js/float-panel.js"></script>


 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<script src="float-panel.js"></script>

<!-- Include utilcarousel js file -->
<script src="utilcarousel-files/utilcarousel/jquery.utilcarousel.min.js"></script>

<link rel="stylesheet" href="utilcarousel-files/magnific-popup/magnific-popup.css" />

<script src="utilcarousel-files/magnific-popup/jquery.magnific-popup.js"></script>

<script>
$('.fullwidth').utilCarousel({
    breakPoints : [[600, 1], [900, 2], [1200, 3], [1500, 4], [1800, 5]],
    mouseWheel : true,
    rewind:false
});
</script>
		  
       
</body>

</html>
   