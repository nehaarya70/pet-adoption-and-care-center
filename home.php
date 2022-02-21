﻿<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Pet Shelter an Animals Category Bootstrap Responsive website Template | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pet Shelter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" /> 
<link rel="stylesheet" href="css/lightbox.css">
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Scada:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<?php>
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle">
						<ul class="toggle-menu">
							<li><a href="index.html" class="active"> Home</a></li>
							<li><a href="#about" class="scroll"> About</a></li>
							<li><a href="#gallery" class="scroll"> Gallery</a></li>
							<li><a href="#clients" class="scroll">Clients</a></li>
							<li><a href="#services" class="scroll">Services</a></li>
							<li><a href="#team" class="scroll">Team</a></li>
							<li><a href="#contact" class="scroll"> Contact Us</a></li>
						</ul>
					</div> 
				</div> 
				<div class="logo">
					<h3><a href="home.php">Pet Shelter</a>
    <a href="userlogin.php">Login</a>
    <a href="usersignup.php">Sign Up</a></h3>
    
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">
								<h3>Adopt love</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida.</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>build love</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida.</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>give love</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida.</p>
							</div>
						</li>
					</ul> 
				</div> 	
				<!-- FlexSlider --> 
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- End-slider-script -->
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})(); 
	</script> 
	<!-- //menu-js -->
	<!-- about -->
	<div class="w3ls-about w3ls-section" id="about">
		<div class="container">
			<h3 class="agileits-title">About us</h3>
			<div class="w3-agileits-about-grids">
				<div class="col-md-6 agile-about-left">
					<h2 class="agileits-title">save a pet</h2>
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget faucibus est.</h5>
					<p>Suspendisse auctor urna blandit ultricies maximus. Sed accumsan auctor lacus ac mattis. Mauris at nibh purus. Nullam vulputate, urna id facilisis eleifend, nisl turpis suscipit augue, eget tincidunt velit nunc ut lectus. <span>Phasellus viverra nec augue at iaculis. Nullam scelerisque tincidunt sapien vitae sodales. Sed tristique ut nulla a ultricies. Aliquam sit amet sodales elit, et pellentesque lorem. Praesent quis nibh id arcu porta lobortis.</span> Morbi rutrum ut risus sed hendrerit. Integer laoreet odio nec nisi varius, at scelerisque nisi rhoncus.</p>
				</div>
				<div class="col-md-6 agile-about-right"></div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- adopt -->
	<div class=" w3_agileits-adopt">
		<div class="col-md-3 w3_agileits-adopt-left">
			<img src="images/p1.png" class="img-responsive" alt=""/>
		</div>
		<div class="col-md-9 w3_agileits-adopt-right">
			<h3 class="w3stitle">A shelter pet wants to meet you</h3> 
			<p>save a life. adopt a shelter pet.</p>
			<img src="images/puppy.png" class="img-responsive" alt=""/>
		</div>
		<div class="clearfix"></div>
	</div>	
	<!-- //adopt -->
	<!-- gallery -->
	<div class="w3ls-section gallery" id="gallery">	 
		<div class="container">
			<h3 class="agileits-title">Gallery</h3>
			<div class="gallery-info">	
				<div class="col-sm-6 gallery-grids glry-grid1">
					<div class="gallery-grids-top">
						<a class="b-link-stripe b-animate-go" href="images/g10.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/g10.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left"> 
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
				</div>
			<div class="col-sm-6  glry-grid2">
					<div class="col-sm-6 col-xs-6 gallery-grids gr1">
						<a class="b-link-stripe b-animate-go" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/g7.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-xs-6 gallery-grids gr3">
						<a class="b-link-stripe b-animate-go" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/g4.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>	
					<div class="col-sm-6 col-xs-6 gallery-grids ">
						<a class="b-link-stripe b-animate-go" href="images/2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/2.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-xs-6 gallery-grids gr3">
						<a class="b-link-stripe b-animate-go" href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/g8.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>	
				<div class="clearfix"></div>
				<div class="gallery-grid-3">
					<div class="col-sm-4 col-xs-4 gallery-grids">
						<a class="b-link-stripe b-animate-go" href="images/s6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/s6.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
					<div class="col-sm-4 col-xs-4 gallery-grids">
						<a class="b-link-stripe b-animate-go" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/g7.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
					<div class="col-sm-4 col-xs-4 gallery-grids">
						<a class="b-link-stripe b-animate-go" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/g4.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
					<div class="clearfix"></div>	
				</div>
				<div class="clearfix"></div>
			</div>
				
				
			</div>	
		</div>	
				
	</div>
	<script src="js/lightbox-plus-jquery.min.js"> </script>
	<!-- //gallery -->

<!-- section -->
	<div class="agileits-section w3ls-section text-center">
		<div class="container">
			<h3 class="h3-w3l">Money can buy you a fine dog, but only love can make him wag his tail.</h3>
		</div>
	</div>	
	<!-- //section -->
<!--- breeds -->
	<div class="breeds w3ls-section">
		<div class="container">
			<h3 class="agileits-title">New breeds</h3>   
			<div class="col-md-6 w3lsbreeds-grid">
				<div class="breeds-left"> 
					<div class="wthree-almub">  
					</div>
				</div>
				<div class="breeds-right">
					<h4>Dolor Sit</h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 w3lsbreeds-grid">
				<div class="breeds-left"> 
					<div class="wthree-almub wthree-almub2"> 
					</div> 
				</div>
				<div class="breeds-right">
					<h4>Consequat</h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div>
				<div class="clearfix"></div>
			</div>  
			<div class="col-md-6 w3lsbreeds-grid">
				<div class="breeds1-right"> 
					<div class="wthree-almub wthree-almub3">  
					</div>
				</div>
				<div class="breeds1-left">
					<h4>Dolores Btrs</h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div> 
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 w3lsbreeds-grid">
				<div class="breeds1-right"> 
					<div class="wthree-almub wthree-almub4">  
					</div>
				</div>
				<div class="breeds1-left">
					<h4>Nam aliquam</h4>
					<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
					<a class="w3more" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div> 
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div> 
		</div>
	</div>
	<!--- //breeds --> 
	<!--testimonial-->
	<div id="clients" class="w3ls-section testimonial">
		<h3 class="agileits-title">happy clients gallery</h3>   
		<div class="testi-left">
			<div class="testi-left-info">
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 2
					  $("#slider2").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				</script>
				<!--//End-slider-script-->
				<div  id="top2" class="callbacks_container">
					<ul class="rslides" id="slider2">
						<li>
							<div class="col-md-5 client-img c1">
								
							</div>	
							<div class="col-md-7 client-text">
								<h3>kristian -</h3>
								<h4>"Pets have more love and compassion in them than most humans.</h4>
								<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione ratione voluptate.</p>
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>

							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="col-md-5 client-img c2">
								
							</div>	
							<div class="col-md-7 client-text">
								<h3>Federica -</h3>
								<h4>"Money can buy you a dog, but only love can make him wag his tail.</h4>
								<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione v magni dolores eoqus ratione voluptate.</p>
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>

								</ul>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="col-md-5 client-img c3">
								
							</div>	
							<div class="col-md-7 client-text">
								<h3>bianca -</h3>
								<h4>"Pets have more love and compassion in them than most humans</h4>
								<p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magniauts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione v dolores eoqus ratione voluptate.</p>
								
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>

								</ul>

							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
	<!-- //testimonials -->
	<!-- blog -->
	<div id="services" class="w3ls-section wthree-blog">
		<div class="container">  
				<h3 class="agileits-title">Look after your pet</h3>     
			<div class="blog-agileinfo">
				<div class="col-md-3 blog-w3grid-img">
						<img src="images/s5.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-9 blog-w3grid-text"> 
					<h4>pet care advice</h4>
					<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien. Donec ultricies faucibus ante in mattis earum rerum delectus in auctor sapien. </p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo blog-agileinfo-mdl">
				<div class="col-md-5 blog-w3grid-img blog-img-rght">
						<img src="images/s3.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-7 blog-w3grid-text"> 
					<h4>the groom room</h4>
					<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien. Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo">
				<div class="col-md-5 blog-w3grid-img">
						<img src="images/s4.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-7 blog-w3grid-text"> 
					<h4>Vaccinations</h4>
					<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien. Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien. </p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //blog --> 
		<!-- testimonials -->
	<div class="testimonials w3ls-section" id="team">
		<div class="container">
			<h3 class="agileits-title">Team</h3>
		<div class="w3_testimonials_grids w3_testimonials_grids">
			<div class="sreen-gallery-cursual">
				<div id="owl-demo" class="owl-carousel">
						 <div class="item-owl">
							<div class="col-md-3 col-sm-3 col-xs-3 img-agile">
								<img src="images/t1.jpg" class="img-responsive" alt=""/>
								<h6>Michael</h6>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9 test-review test-tooltip1">
								<p><i class="fa fa-quote-left" aria-hidden="true"></i> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<i class="fa fa-quote-right" aria-hidden="true"></i> </p>
							</div>
						 </div>
						 <div class="item-owl">
							<div class="col-md-3 col-sm-3 col-xs-3 img-agile">
								<img src="images/t2.jpg" class="img-responsive" alt=""/>
								<h6>Riya Allen</h6>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9 test-review test-tooltip1">
								<p> <i class="fa fa-quote-left" aria-hidden="true"></i> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<i class="fa fa-quote-right" aria-hidden="true"></i> </p>
							</div>
						</div>
						 <div class="item-owl">
							<div class="col-md-3 col-sm-3 col-xs-3 img-agile">
								<img src="images/t3.jpg" class="img-responsive" alt=""/>
								<h6>Riya Allen</h6>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9 test-review test-tooltip1">
								 <p><i class="fa fa-quote-left" aria-hidden="true"></i> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<i class="fa fa-quote-right" aria-hidden="true"></i> </p>
							</div>
						</div>
				 </div>
				<!--//screen-gallery-->
			</div>	
		</div>
	</div>
</div>
<!-- //testimonials -->	

	<div id="contact" class="wthree-contact w3ls-section">
		<div class="container">
			<h3 class="agileits-title">contact</h3>  
				<div class="col-md-6 col-sm-6 agileinfo-contact-left">	
					<h6>send us a mail!</h6>
					<form action="#" class="form_w3layouts" method="post">
						<div class="agileits-form-element">
							<span class="col-md-3  col-sm-3 col-xs-3 label1">name</span>
							<input type="text" class="col-md-9 col-sm-9 col-xs-9" name="name" required="">
							<div class="clearfix"></div>
						</div>
						<div class="agileits-form-element">
							<span class="col-md-3 col-sm-3 col-xs-3 label1">Email</span>
							<input type="email" name="name" class="col-md-9 col-sm-9 col-xs-9 email" required="">
							<div class="clearfix"></div>
						</div>
						<div class="agileits-form-element">
							<span class="col-md-3 col-sm-3 col-xs-3  label1">Message</span>
							<textarea class="col-md-9 col-sm-9 col-xs-9" required></textarea>
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="send">
					</form>	
				</div>	
				<div class="col-md-6 col-sm-6 col-xs-12 contact-w3lsright">
					<h6>get in touch</h6>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Visit Us</h5>
							<p>Bmr St, Canada, New York, USA</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row w3-agileits">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Mail Us</h5>
							<p><a href="mailto:info@example.com"> mail@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Call Us</h5>
							<p>+01 222 333 4444</p>
						</div>
						<div class="clearfix"> </div>
					</div>  
					<!-- map -->
					<div class="map agileits">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.948805392833!2d-73.99619098458929!3d40.71914347933105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1479793484055"></iframe>
					</div>
					<!-- //map --> 
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>	
	<!-- copy rights start here -->
	<div class="copyw3-agile">
		<div class="container"> 
			<div class="w3social-icons footer-w3icons"> 
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li> 
					<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				</ul>
			</div>
			<p>© 2017 Pet Shelter. All Rights Reserved.</p>
		</div>
	</div>
	<!-- //copy right end here --> 
	<!-- Tooltip -->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h1 class="modal-title">pet shelter</h1>
					</div>
					<div class="modal-body">
						<img src="images/g4.jpg" alt="" class="img-responsive">
						<h5>Faucibus Id Diam Ac</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim bibendum.</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- //Tooltip -->


<script src="js/responsiveslides.min.js"></script>

	<!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : true,
							        navigationText : true,
							        pagination : true,
							      });
							    });
							    </script>
								 <!--//required-js-files-->
		

			<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>

	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


	<script type="text/javascript" src="js/bootstrap.js"></script>

?>
</body>
</html>