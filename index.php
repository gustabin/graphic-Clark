<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Denisse Clark - Graphic Designer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Denisse Clark Graphic Designer" />
	<meta name="keywords" content="graphic designer, senior graphic designer, art director, art direction, experienced graphic designer, specialist" />
	<meta name="author" content="GraphiClark.com" />


  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
       
  <!--link href="css2/style-t1.css" rel="stylesheet"!-->
 
 


  
  
  <link href="css2/style-t1.css" rel="stylesheet">
  <link href="css2/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css2/jquery.ui.datepicker.css" rel="stylesheet" media="screen" />
  <link href="css2/jquery.ui.core.css" rel="stylesheet" media="screen" />
  <link href="css2/jquery.ui.theme.css" rel="stylesheet" media="screen" />
  

  <!-- .................................... $scripts .................................... -->
  <script type="text/javascript" language="javascript" src="js2/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="js2/jquery-ui.js"></script>
 
  <script src="js2/jquery.min.js"></script>
  <script src="js2/modernizr.min.js"></script>


  <script src="js2/bootstrap.min.js"></script>
  <script src="js2/jquery.fancybox.min.js"></script>
  <script src="js2/jquery.hoverdir.min.js"></script>
  <script src="js2/jquery.isotope.min.js"></script>
  <script src="js2/jquery.masonry.min.js"></script>
  <script src="js2/jquery.fitvids.min.js"></script>
  <script src="js2/jquery.flexslider.min.js"></script>
  <!--script src="<?php// echo INCLUDES ?>js/script.js"></script!--> 

  <script type="text/javascript" language="javascript" src="js2/jquery.validate.js"></script>
  <script type="text/javascript" language="javascript" src="js2/jquery.ui.datepicker.js"></script>
  <script type="text/JavaScript" language="javascript" src="js2/jquery.ui.core.js"></script>
  <script type="text/JavaScript" language="javascript" src="js2/jquery.ui.widget.js"></script>
  <script type="text/JavaScript" language="javascript" src="js2/datepiker_lenguaje.js"></script>
  <script type="text/JavaScript" language="javascript" src="js2/jquery.maskedinput.js"></script>	

  <!-- .................................... $scripts .................................... -->
  <script src="js2/jquery.validate.js" type="text/javascript" language="javascript"></script>
  <script src="js2/jquery.maskedinput.js" type="text/JavaScript" language="javascript"></script>
  
  <script type="text/javascript" src="js2/jqombo.js"></script> 
</head>
<body class="home"> 
		<header role="banner" id="fh5co-header" style="background-image: url(images/hero-4.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro-wrap">
					<div class="fh5co-intro">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h1 class="fh5co-intro-lead animate-1 to-animate"><img src="images/logo-white.gif"></h1><br>
								<h2 class="fh5co-intro-sub animate-2 to-animate">Hi! I&acute;m an experienced Graphic Designer who just relocated to Illinois. Currently evaluating all opportunities in the Graphic Design, Advertising industry.</h2>
								<h2 class="fh5co-intro-sub animate-2 to-animate"><a href="#contactme"><font size="+2" color="white" weight="800"><a href="mailto:info@graphiclark.com?Subject=Let&#39;%20Talk%20Business" target="_top">Contact Me.</a></font></a></h2>
								<h4><a href="https://www.linkedin.com/in/denisse-clark-8408b170" target="_blank">Linked In</a> &nbsp; &nbsp; &#124; &nbsp; &nbsp; Portfolio </h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
 
<script Language="JavaScript">  
	$(document).ready(function() { 
		 $(".tlf").mask("(999) 999-99-99");		 	 
	});
	
    $("body").on('submit', '#formContacto', function(event) {
		event.preventDefault()
		if ($('#formContacto').valid()) {
			$.ajax({
				type: "POST",
				url: "emailContacto.php",
				dataType: "json",
				data: $(this).serialize(),
				success: function(respuesta) {
					if (respuesta.error == 1) {
						$('#error1').show();
						setTimeout(function() {
						$('#error1').hide();
						}, 2000);
					}	
					
				if (respuesta.exito == 1) {			 	
				  $('#formulario').hide();
				  $('#formularioEnviado').show(); document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
				}	
					
				}
			});
		}
	});		
</script> 
	
		<main role="main" id="fh5co-main">
			<div class="container" id="bio-animate">
				<div class="row row-padded">
					<div class="col-md-3">
						<h2 class="fh5co-section-heading to-animate">Biography<span class="fh5co-border"></span></h2>
					</div>
					<div class="col-md-8 col-md-push-1">
						<div class="row">
							<div class="col-md-6 to-animate">
								<p><b>Summary.</b> I’m a skilled graphic designer with a Masters Degree in Graphic Design and a Graduate Certificate in Advertising with experience in Art Direction and Instruction. My strong written and verbal communication skills with the ability to juggle multiple projects has helped me prioritize and deliver exceptional design at high volumes under tight deadlines, which has given me the opportunity to excel in fast paced environments with little to no supervision.</p>

								<p><b>Objective.</b> To move forward by leading and implementing graphic design solutions for print and online marketing media by creating, modifying and maintaining a brand awareness that will guide smaller efforts into the bigger message. </p>
							</div>
							<div class="col-md-6 to-animate">
								<p><b>Keeping Busy.</b> I have a passion for knowledge, meaning that when I’m not producing, I’m exploring new trends and researching subjects related to my field that will move me forward to exceed expectations when achieving my goals. </p>
								<p><b>What I'm looking for.</b> As a new resident of the state of Illinois, I’m searching for a full time job that will help me establish myself and my career in the local industry of Advertising while offering high quality design and mind blowing ideas. My ideal job will be leading or being part of an interactive team of highly creative individuals working together to achieve alternative and out of the box solutions.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- END .row -->
			</div>
			<!-- END .container -->
			
			<div class="fh5co-section-seperator" style="background-image: url(images/hero-2.jpg);" data-stellar-background-ratio="0.5">
				<div class="fh5co-overlay"></div>
				<div class="container" id="counter-animate">
					<div class="fh5co-section-content-wrap">
						<div class="fh5co-section-content">
							<div class="row">
								<span class="fh5co-counter-label"><h3><font color="#FFFFFF">“There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for.”</font></h3><p> -Milton Glaser</p></span>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END .container -->

			<div class="container" id="projects-animate">
				<div class="row row-padded">
					<div class="col-md-3">
						<h2 class="fh5co-section-heading to-animate">Projects<span class="fh5co-border"></span></h2>
						<p class="to-animate">This is just and exempt of the projects I’ve worked on. Inquire for more details. <a href="mailto:info@graphiclark.com?Subject=Let&#39;%20Talk%20Business" target="_top">Send mail.</a></p>
					</div>
					<div class="col-md-8 col-md-push-1">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-project to-animate">
								<a href="images/work-lri.jpg" class="image-popup">
									<div class="fh5co-overlay-text">Web Design and Development<br><font size="-1">Luxury Rentals International</font></div>
									<div class="fh5co-overlay"></div>
									<img src="images/work-lri.jpg" alt="Web Design" class="img-responsive">
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-project to-animate">
								<a href="images/work-bacardi.jpg" class="image-popup">
									<div class="fh5co-overlay-text">Graphic Design<br><font size="-1">Web and Print Media</font></div>
									<div class="fh5co-overlay"></div>
									<img src="images/work-bacardi.jpg" alt="Graphic Design" class="img-responsive">
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-project to-animate">
								<a href="images/work-clark.jpg" class="image-popup">
									<div class="fh5co-overlay-text">Brand Management<br><font size="-1">Plan, Design &amp; Advising</font></div>
									<div class="fh5co-overlay"></div>
									<img src="images/work-clark.jpg" alt="Logo Design" class="img-responsive">
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-project to-animate">
								<a href="images/work-typo.jpg" class="image-popup">
									<div class="fh5co-overlay-text">Typography and Layout<br><font size="-1">Plan, Design &amp; Advising</font> </div>
									<div class="fh5co-overlay"></div>
									<img src="images/work-typo.jpg" alt="Project no. 4" class="img-responsive">
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-project to-animate">
								<a href="images/work-screenshot.jpg" class="image-popup">
									<div class="fh5co-overlay-text">HTML 5 &amp; CSS 3<br><font size="-1">Develop responsive sites from scratch</font></div>
									<div class="fh5co-overlay"></div>
									<img src="images/work-screenshot.jpg" alt="HTML 5 and CSS 3" class="img-responsive">
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-project to-animate">
								<a href="images/work-photo.jpg" class="image-popup">
									<div class="fh5co-overlay-text">Photography<br><font size="-1">With Enhancement and Manipulation</div>
									<div class="fh5co-overlay"></div>
									<img src="images/work-photo.jpg" alt="Photography" class="img-responsive">
								</a>
							</div>
							
						</div>
					</div>
				</div>
				<!-- END .row -->
			</div>
			<!-- END .container -->

			<div class="fh5co-section-seperator" id="testimony-animate" style="background-image: url(images/hero-3.jpg);" data-stellar-background-ratio="0.5">
				<div class="fh5co-overlay"></div>
				<div class="container">
					<div class="fh5co-section-content-wrap">
						<div class="fh5co-section-content">
							<div class="row">
								<div class="col-md-9 col-md-offset-1 fh5co-testimony to-animate">
									<blockquote>
										<p class="text-center quote">&ldquo;Design is not just what it looks like and feels like. Design is how it <em>works</em>. &rdquo; <cite class="author">&mdash; Steve Jobs</cite></p>
									</blockquote>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END .container -->
				
				
				

				<hr><center><h3>Questions? Call me. </h3><h4>787-903-4626</h4></center><hr>

			<div class="fh5co-section-seperator fh5co-section-seperator-white" id="contact-animate" style="background-image: url(images/hero-4.jpg);" data-stellar-background-ratio="0.5">
				<div class="fh5co-overlay" id="contactme"></div>
				<div class="container">
					<div class="fh5co-section-content-wrap">
						<div class="fh5co-section-content">
							<div class="row">
								
								<div class="col-md-3">
									<h2 class="fh5co-section-heading to-animate">Get In Touch<span class="fh5co-border"></span></h2>
									
									<ul class="fh5co-contact">
										<li class="fh5co-contact-address to-animate">
											<i class="icon-home"></i>
											Rochelle, IL 61068
										</li>
										<li class="to-animate"><i class="icon-phone"></i> (787) 903-4626</li>
										<li class="to-animate"><i class="icon-email"></i><a href="mailto:info@graphiclark.com?Subject=Let&#39;%20Talk%20Business" target="_top">info@graphiclark.com</a></li>
										<li class="to-animate"><i class="icon-globe"></i> <a href="htt://www.graphiclark.com/" target="_blank">graphiclark.com</a></li>
									</ul>
								</div>

								<div class="col-md-8 col-md-push-1">
								<!--form class="form-vertical" id="formContacto">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group to-animate">
												<label for="name" class="sr-only">Name</label>
												<input type="text" id="name" class="form-control" placeholder="Name">
											</div>
											<div class="form-group to-animate">
												<label for="email" class="sr-only">Email</label>
												<input type="email" id="email" class="form-control" placeholder="Email">
											</div>
											<div class="form-group to-animate">
												<label for="phone" class="sr-only">Phone</label>
												<input type="text" id="phone" class="form-control" placeholder="Phone">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group to-animate">
												<label for="message" class="sr-only">Message</label>
												<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
											</div>
											<div class="form-group to-animate">
												<input type="submit" class="btn btn-primary btn-block" value="Send Message">
											</div>
										</div>

									</div>
									</form!-->
			<section id="formulario">
									<form class="form-vertical" id="formContacto">
			  <div class="row">
				<div class="col-md-6">
					<div class="form-group to-animate"> 
					  <label for="Nombre" class="sr-only">Name</label>
					  <input class="form-control required" id="Nombre" name="Nombre" placeholder="Name" type="text">              
					</div>
					<div class="form-group to-animate"> 
					  <label for="email" class="sr-only">Email</label>              
					  <input class="form-control required email" id="email" name="email" placeholder="Email" type="text">   
					</div>
					 <div class="form-group to-animate"> 
					  <label for="Telefono" class="sr-only">Phone</label>
					  <input class="form-control required tlf" id="Telefono" name="Telefono" placeholder="Phone" type="text">   
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group to-animate"> 
					  <label for="Mensaje" class="sr-only">Message</label>              
					  <textarea cols="20" rows="7" class="form-control" id="Mensaje" name="Mensaje" placeholder="Message" type="text"></textarea>
					</div>
					<div class="form-group">         
					<button class="btn btn-primary btn-block" type="submit" value="Send Message">Submit</button>			
					</div>
				</div>
			  </div>
          </form>
		</section>
   
<section id="formularioEnviado" style="display: none;">	
<a name="sending"></a>		
	<div class="row">
		<div class="col-md-6">
			<div id="Confirm">
				<br><br>                       
				<h3 style="color: white">Thank you for submitting.</h3><br>
					<h5><font color="#FFFFFF">I will be in touch soon!<br> If you would like to talk to me now, give me a call! </font></h5>					
				<br><br>
				<br><br>
				<br><br>
			</div>
		</div>
	</div>
</section>     
<div class="modal" id="light" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#99CA3D; color:black;">	
                <h4 class="modal-title" id="myModalLabel">
                    ¡Form data!
                </h4>
            </div>
            <div class="modal-body">
                The information has been sent successfully. <br>                
            </div>
            <div class="modal-footer">			
                    <a href = "#sending" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"> 
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                   Ok
                </button> 
                    </a>					
            </div>
        </div>						
    </div>					
 </div>
									
		
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END .container -->
			
			

		</main>

		<footer role="contentinfo" id="fh5co-footer">
			<div class="container" id="footer-animate">
				<div class="row row-padded">
					<div class="col-md-8 col-md-push-4">
						<p class="to-animate">&copy; 2017 Denisse Clark &#47; GraphiClark. All Rights Reserved. Hire me. </p>
						
					</div>
				</div>
			</div>
			<!-- END .container -->
		</footer>

		<!-- jQuery -->
		<!--script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<!--script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<!--script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<!--script src="js/jquery.waypoints.min.js"></script>
		<!-- Stellar -->
		<!--script src="js/jquery.stellar.min.js"></script>
		<!-- countTo -->
		<!--script src="js/jquery.countTo.js"></script>
		<!-- Magnific Popup -->
		<!--script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Main JS -->
		<!--script src="js/main.js"></script!-->
 	
	</body>
</html>
