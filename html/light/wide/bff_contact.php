<?php
    session_start();
    include("php/captcha.php");
    $_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Бългериън Фиш Фармс</title>
		<meta name="description" content="EXCEPTION – Responsive Business HTML Template">
		<meta name="author" content="EXCEPTION">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put Портфолио and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="images/bff.ico">
		    	
		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/prettyPhoto.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="rs-plugin/css/settings.css">
		<link rel="stylesheet" id="MainStyle" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="css/ie.css">
	    	<script type="text/javascript" src="js/html5.js"></script>
	    <![endif]-->

		
		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" id="skinCSS" href="css/skins/default.css">
	
	</head>
	<body>

	<!-- site preloader start -->
	<div class="page-loader">
		<div class="loader-in"></div>
	</div>
	<!-- site preloader end -->

	<!-- tova e logIn formata za sega niama da ni triabva
        <div class="pageWrapper">
                <!-- login box start -->
	<!--<div class="login-box">
        <a class="close-login" href="#"><i class="fa fa-times"></i></a>
        <form>
            <div class="container">
                <p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>
                <div class="login-controls">
                    <div class="skew-25 input-box left">
                        <input type="text" class="txt-box skew25" placeholder="User name Or Email" />
                    </div>
                    <div class="skew-25 input-box left">
                        <input type="password" class="txt-box skew25" placeholder="Password" />
                    </div>
                    <div class="left skew-25 main-bg">
                        <input type="submit" class="btn skew25" value="Login" />
                    </div>
                    <div class="check-box-box">
                        <input type="checkbox" class="check-box" /><label>Remember me !</label>
                        <a href="#">Forgot your password ?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
-->
	<!-- login box End -->


	<!-- Header Start -->
	<div id="headWrapper" class="clearfix">

		<!-- top bar start -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="cell-5">
						<ul>
							<li><a href="#"><i class="fa fa-envelope"></i>office@cmd-international.com</a></li>
							<li><span><i class="fa fa-phone"></i> Обадете се: 359 (0) 894 682 347</span></li>
						</ul>
					</div>
					<!-- Desnia panel v header ne ni e neobhodim v momenta
                    <div class="cell-7 right-bar">
                        <ul class="right">
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>0 item(s) - $0.00</a></li>
                            <li><a href="siteMap.html"><i class="fa fa-sitemap"></i>Site Map</a></li>
                            <li><a href="register.html"><i class="fa fa-user"></i>Register</a></li>
                            <li><a href="#" class="login-btn"><i class="fa fa-unlock-alt"></i> Login</a></li>
                        </ul>
                    </div>
                    -->
				</div>
			</div>
		</div>
		<!-- top bar end -->

		<!-- Logo, global navigation menu and search start -->
		<header class="top-head" data-sticky="true">
			<div class="container">
				<div class="row">
					<div class="logo1 cell-3" style="margin:0px; height:80px;!important;">
						<a href="BFF_home.html" style="height:100%; !important;">&nbsp;</a>
					</div>
					<div class="cell-9 top-menu">

						<!-- top navigation menu start -->
						<nav class="top-nav mega-menu">
							<ul>
								<li><a href="BFF_home.html"><i class="fa fa-home"></i><span>Начало</span></a>

								</li>
								<li><a href="bff_about.html"><i class="fa fa-key"></i><span>За нас</span></a>
									<!--<ul>-->
									<!--<li><a href="#"><i class="fa fa-send"></i>Headers</a>-->
									<!--<ul>-->
									<!--<li><a href="header2.html">Skewed Elements</a></li>-->
									<!--<li><a href="header3.html">Header Top Center Logo</a></li>-->
									<!--<li><a href="header-left-side.html">Left Side Header</a></li>-->
									<!--<li><a href="header-right-side.html">Right Side Header</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#"><i class="fa fa-bars"></i>Menu Styles</a>-->
									<!--<ul>-->
									<!--<li><a href="home.html">Default Menu</a></li>-->
									<!--<li><a href="nav-2.html">Menu Style 2</a></li>-->
									<!--<li><a href="nav-3.html">Menu Style 3</a></li>-->
									<!--<li><a href="nav-4.html">Menu Style 4</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#"><i class="fa fa-bars"></i>Sub Menu Styles</a>-->
									<!--<ul>-->
									<!--<li><a href="home.html">Default Sub Menu</a></li>-->
									<!--<li><a href="sub-menu-white.html">White Sub Menu</a></li>-->
									<!--<li><a href="sub-menu-dark.html">Dark Sub Menu</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#"><i class="fa fa-bars"></i>Sub Menu Effects</a>-->
									<!--<ul>-->
									<!--<li><a href="menu-effect-fade.html">Fade Effect</a></li>-->
									<!--<li><a href="menu-effect-slide.html">Slide Up / Down Effect</a></li>-->
									<!--<li><a href="menu-effect-fadeInUp.html">Fade In Up Effect</a></li>-->
									<!--<li><a href="menu-effect-fadeInDown.html">Fade In Down Effect</a></li>-->
									<!--<li><a href="menu-effect-fadeInRight.html">Fade In Right Effect</a></li>-->
									<!--<li><a href="menu-effect-fadeInLeft.html">Fade In Left Effect</a></li>-->
									<!--<li><a href="menu-effect-flash.html">flash Effect</a></li>-->
									<!--<li><a href="menu-effect-pulse.html">pulse Effect</a></li>-->
									<!--<li><a href="menu-effect-swing.html">swing Effect</a></li>-->
									<!--<li><a href="menu-effect-tada.html">tada Effect</a></li>-->
									<!--<li><a href="menu-effect-wobble.html">wobble Effect</a></li>-->
									<!--<li><a href="menu-effect-none.html">No Effect</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#"><i class="fa fa-bookmark"></i>Page Titles</a>-->
									<!--<ul>-->
									<!--<li><a href="page-title.html">Normal Page Title</a></li>-->
									<!--<li><a href="page-title-center.html">Centered Page Title</a></li>-->
									<!--<li><a href="page-title2.html">Page Title with Icon</a></li>-->
									<!--<li><a href="page-title2-center.html">Centered Page Title with Icon</a></li>-->
									<!--<li><a href="page-title3.html">Dark Page Title</a></li>-->
									<!--<li><a href="page-title3-center.html">Dark Centered Page Title</a></li>-->
									<!--<li><a href="page-title4.html">Skewed Page Title</a></li>-->
									<!--<li><a href="page-title4-center.html">Skewed Centered Page Title </a></li>-->
									<!--<li><a href="page-title-video-bg.html">Page Title with Video Background</a></li>-->
									<!--<li><a href="page-title-minimal.html">Minimal Page Title</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#"><i class="fa fa-phone"></i>Contact Pages</a>-->
									<!--<ul>-->
									<!--<li><a href="contact.html">Contact 1 HTML</a></li>-->
									<!--<li><a href="contact.php">Contact 1 PHP</a></li>-->
									<!--<li><a href="contact2.html">Contact 2 HTML</a></li>-->
									<!--<li><a href="contact2.php">Contact 2 PHP </a></li>-->
									<!--<li><a href="contact3.html">Contact 3 HTML</a></li>-->
									<!--<li><a href="contact3.php">Contact 3 PHP</a></li>-->
									<!--<li><a href="contact4.html">Contact 4 HTML</a></li>-->
									<!--<li><a href="contact4.php">Contact 4 PHP</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#"><i class="fa fa-server"></i>Footers</a>-->
									<!--<ul>-->
									<!--<li><a href="footer2.html#footWrapper">Footer Version 2</a></li>-->
									<!--<li><a href="footer3.html#footWrapper">Footer Version 3</a></li>-->
									<!--<li><a href="footer4.html#footWrapper">Footer Version 4</a></li>-->
									<!--<li><a href="footer-light.html#footWrapper">Light Colored Footer</a></li>-->
									<!--<li><a href="footer-minimal.html#footWrapper">Minimal Footer</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--</ul>-->
								</li>
                                <li><a href="bff_services.html"><i class="fa fa-copy"></i><span>Услуги</span></a>
									<!--<li><a href="portfolio-2-cols.html">Portfolio 2 columns</a></li>-->
									<!--<li><a href="portfolio-3-cols.html">Portfolio 3 columns</a></li>-->
									<!--<li><a href="portfolio-4-cols.html">Portfolio 4 columns</a></li>-->
									<!--<li><a href="portfolio-full.html">Portfolio full</a></li>-->
									<!--<li><a href="portfolio-single.html">Portfolio single</a></li>-->
									<!--<li><a href="portfolio-single2.html">Portfolio single 2</a></li>-->
									<!--</ul>-->
								</li>
                                <li><a href="bff_portfolio_all.html"><i class="fa fa-folder-open"></i><span>Портфолио</span></a>
									<!--<ul>-->
									<!--<li><a href="about-us.html">About us</a></li>-->
									<!--<li><a href="about-me.html">About me</a></li>-->
									<!--<li><a href="FAQ.html">FAQ</a></li>-->
									<!--<li><a href="find-job.html">Find a job</a></li>-->
									<!--<li><a href="pricing.html">Pricing</a></li>-->
									<!--<li><a href="services.html">Services</a></li>-->
									<!--<li><a href="#">Meet the team</a>-->
									<!--<ul>-->
									<!--<li><a href="team.html">Meet the team Style 1</a></li>-->
									<!--<li><a href="team2.html">Meet the team Style 2</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="gallery.html">Our Gallery<b class="menu-hint success">New</b></a></li>-->
									<!--<li><a href="page-full.html">Page Full width</a></li>-->
									<!--<li><a href="page-sidebar.html">Page with Sidebar</a></li>-->
									<!--<li><a href="page-left-bar.html">Page with Left Sidebar</a></li>-->
									<!--<li><a href="404.html">404 Page not found</a></li>-->
									<!--<li><a href="coming-soon.html">Coming Soon</a></li>-->

									<!--</ul>-->
								</li>
								<li><a href="#"><i class="fa fa-link"></i><span>Партньори</span></a>
									<ul>
										<li><a href="kroma_page.html">Kroma</a>
<!--											<!--<ul>-->
<!--											<!--<li><a href="shop-right-bar.html">Right Side Bar</a></li>-->
<!--											<!--<li><a href="shop.html">Left Side Bar</a></li>-->
<!--											<!--<li><a href="shop-no-bar.html">No side bar</a></li>-->
<!--											<!--</ul>-->
										</li>
										<li><a href="inter_aqua_advance_page.html">Inter Aqua Advance</a>
<!--											<!--<ul>-->
<!--											<!--<li><a href="product-right-bar.html">Right Side Bar</a></li>-->
<!--											<!--<li><a href="product.html">Left Side Bar</a></li>-->
<!--											<!--<li><a href="product-no-bar.html">No side bar</a></li>-->
<!--											<!--</ul>-->
										</li>
<!--										<!--<li><a href="cart.html">Shoping cart</a></li>-->
<!--										<!--<li><a href="check-out.html">Check out</a></li>-->
									</ul>
								</li>
								<li><a href="bff_current_news.html"><i class="fa fa-book"></i><span>Актуално</span></a>
									<!--<ul>-->
									<!--<li><a href="#">Blog Large Image</a>-->
									<!--<ul>-->
									<!--<li><a href="blog.html">Right Side Bar</a></li>-->
									<!--<li><a href="blog-left-bar.html">Left Side Bar</a></li>-->
									<!--<li><a href="blog-no-bar.html">No side bar</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#">Blog Small Image</a>-->
									<!--<ul>-->
									<!--<li><a href="blog-thumbnails.html">Right Side Bar</a></li>-->
									<!--<li><a href="blog-thumbnails-left-bar.html">Left Side Bar</a></li>-->
									<!--<li><a href="blog-thumbnails-no-bar.html">No side bar</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#">Blog Timeline</a>-->
									<!--<ul>-->
									<!--<li><a href="blog-timeline.html">Right Side Bar</a></li>-->
									<!--<li><a href="blog-timeline-left-bar.html">Left Side Bar</a></li>-->
									<!--<li><a href="blog-timeline-no-bar.html">No side bar</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#">Blog masonry</a>-->
									<!--<ul>-->
									<!--<li><a href="blog-masonry.html">Right Side Bar</a></li>-->
									<!--<li><a href="blog-masonry-left-bar.html">Left Side Bar</a></li>-->
									<!--<li><a href="blog-masonry-no-bar.html">No side bar</a></li>-->
									<!--</ul>-->
									<!--</li>-->
									<!--<li><a href="#">Blog Single</a>-->
									<!--<ul>-->
									<!--<li><a href="blog-single.html">Right Side Bar</a></li>-->
									<!--<li><a href="blog-single-left-bar.html">Left Side Bar</a></li>-->
									<!--<li><a href="blog-single-no-bar.html">No side bar</a></li>-->
									<!--</ul>-->
									<!--</li>-->

									<!--</ul>-->
								</li>
								<li class="selected"><a href="bff_contact.php"><i class="fa fa-users"></i><span>Контакти
																												<!--<b class="menu-hint success"></b>--></span></a>
									<!--<div class="div-mega main-bg">-->
									<!--<div class="div-mega-section">-->
									<!--<h4>Shortcodes Set 1</h4>-->
									<!--<ul>-->
									<!--<li><a href="accordions.html">Accordions</a></li>-->
									<!--<li><a href="animations.html">Animations</a></li>-->
									<!--<li><a href="buttons.html">Buttons</a></li>-->
									<!--<li><a href="columns.html">Columns</a></li>-->
									<!--<li><a href="dividers.html">Dividers</a></li>-->
									<!--</ul>-->
									<!--</div>-->

									<!--<div class="div-mega-section">-->
									<!--<h4>Shortcodes Set 2</h4>-->
									<!--<ul>-->
									<!--<li><a href="fun-staff.html">Fun Staff</a></li>-->
									<!--<li><a href="headings.html">Headings</a></li>-->
									<!--<li><a href="icon-boxes.html">Icon Boxes</a></li>-->
									<!--<li><a href="font-icons.html">Icons</a></li>-->
									<!--<li><a href="message-boxes.html">Message Boxes</a></li>-->
									<!--</ul>-->
									<!--</div>-->

									<!--<div class="div-mega-section">-->
									<!--<h4>Shortcodes Set 3</h4>-->
									<!--<ul>-->
									<!--<li><a href="progress-bars.html">Progress Bars</a></li>-->
									<!--<li><a href="tabs.html">Tabs</a></li>-->
									<!--<li><a href="testimonials.html">Testimonials</a></li>-->
									<!--<li><a href="typography.html">Typography</a></li>-->
									<!--</ul>-->
									<!--</div>-->

									<!--</div>-->
								</li>
<!--								<li>-->
<!--									<a href="bff_privacy.html"><i class="fa fa-align-center"></i><span>Импресум</span></a>-->
<!--								</li>-->
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- Logo, Global navigation menu and search end -->

	</div>
	<!-- Header End -->
			
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-bff">
					<div class="container">
						<div class="row">
							<div class="cell-12">

								<h1 class="fx"  data-animate="fadeInLeft" style="color:white; text-transform:uppercase;text-align:center">Контакти <span></span></h1>
								<div style="visibility:hidden" class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="#">Home</a><span class="line-separate">/</span><a href="#">Pages </a><span class="line-separate">/</span><span id="getInTouch">Contact us</span>
								</div>
							</div>
						</div>
					</div>ss
				</div>
				
				<div class="padd-top-50">
					<div class="container">
						<div class="row">
			    			<div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
			    				<h3 sclass="block-head">За връзка с нас</h3>
			    				<mark id="message"></mark>

                                <form class="form-signin cform" method="post" action="php/contact.php" id="cform" autocomplete="on">
			    					<div class="form-input">
				    					<label>Име<span class="red">*</span></label>
				    					<input type="text" name="name" id="name" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Майл<span class="red">*</span></label>
			    						<input name="email" type="email" id="email" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Телефон</label>
			    						<input name="phone" type="text" id="phone">			    						
			    					</div>
			    					<div class="form-input">
			    						<label>Съобщение<span class="red">*</span></label>
			    						<textarea name="message" cols="40" rows="7" id="messageTxt" spellcheck="true" required="required"></textarea>
			    					</div>
			    					<div  class="form-input">
                                        <div class="row">
                                            <div class="cell-12 margin-bottom-20">
												<img alt="" src="<?php echo $_SESSION['captcha']['image_src']; ?>" id='captchaimg' >
											</div>
											<input type="hidden" id="hidCap" value="<?php echo $_SESSION['captcha']['code']; ?>" data-error="The captcha code does not match!" />
                                            <div class="cell-3">
												<input id="captcha_input" name="captcha_input" type="text" required="required">
											</div>
                                            <div id="enterCode" class="cell-6">
												<label for='message'>Въведете кода за сигурност</label>
											</div>
                                        </div>
			    					</div>
			    					<div class="form-input">
			    						<input id="submit" name="submit" type="submit" class="btn btn-large main-bg" value="Изпрати">&nbsp;&nbsp;
										<input type="reset" class="btn btn-large" value="Изчисти" id="reset">
			    					</div>
			    				</form>

			    			</div>
			    			<div class="cell-5 contact-detalis">
			    				<h3 class="block-head"> Бългериън Фиш Фармс </h3>
<!--			    				<p class="fx" data-animate="fadeInRight">-->
<!--									<h4>Бългериън Фиш Фармс ЕООД</h4>-->
<!--								</p>-->
			    				<hr class="hr-style4">
			    				<div class="clearfix"></div>
			    				<div class="padding-vertical">
			    					<div class="cell-5 fx" data-animate="fadeInRight">
				    					<h4 class="main-color bold">Офис: София</h4>
				    					<h5 >Адрес:</h5>
				    					<p>
											1505 София, ул. Алеко Константинов 42, етаж 3, офис 6
										</p>
				    					<h5 >Мейл:</h5>
				    					<p>
											office@cmd-international.com
										</p>
				    					<h5 >Телефон:</h5>
				    					<p>
											359 (0)2 843 04 27
										</p>
				    					<h5 >Факс:</h5>
				    					<p>
											359 (0)2 843 04 32
										</p>
				    				</div>
				    				<div class="cell-2"><br></div>
				    				<div class="cell-5 fx" data-animate="fadeInRight">
				    					<h4 class="main-color bold">Office: Sofia</h4>
				    					<h5 >Address:</h5>
				    					<p>
											1505 Sofia, ul. Aleko Konstantinov 42, floor 3, office 6
										</p>
				    					<h5 >Email:</h5>
				    					<p>
											office@cmd-international.com
										</p>
				    					<h5 >Phone:</h5>
				    					<p>
											359 (0)2 843 04 27
										</p>
				    					<h5 >FAX:</h5>
				    					<p>
											359 (0)2 843 04 32
										</p>
				    				</div>
			    				</div>
			    			</div>
						</div>
					</div>
				</div>
				
				<div class="padd-vertical-45">
			    	<div class="container">
			    			<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAOg2JT3f84wW301rsizycf61k4ypzxbzw"></script>
							<div id="map_canvas" style="height: 450px; width: 100%;">
								<script type="text/javascript">
									function init_map(){
										var br = '<br>'
										var textOfInfoWindow = "Бългериън Фиш Фармс ЕООД" +'<br>'+ "1505 София, ул. Алеко Константинов 42," +'<br>'+ "етаж 3, офис 6"  ;
										var myOptions = {zoom:     18,
											center:    new google.maps.LatLng(42.6976021,23.3492556),
											mapTypeId: google.maps.MapTypeId.ROADMAP};
										map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
										marker = new google.maps.Marker({
											map: map,
											position: new google.maps.LatLng(42.6976021, 23.3492556)});
										infowindow = new google.maps.InfoWindow({
											content:textOfInfoWindow,
										});
										google.maps.event.addListener(marker, "click", function(){
											infowindow.open(map,marker);});
										infowindow.open(map,marker);
									}
									google.maps.event.addDomListener(window, 'load', init_map);
								</script>
			    		</div>
		    	</div>
				
			</div>
			<!-- Content End -->

			<!-- Footer start -->
				<footer id="footWrapper">
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<!-- main menu footer cell start -->
                                <div class = "cell-4">
                                    <h3 class = "block-head">Навигация</h3>
                                    <ul class = "footer-menu">
                                        <li><a href = "BFF_home.html">Начало</a></li>
                                        <li><a href = "bff_about.html">За нас</a></li>
                                        <li><a href = "bff_services.html">Услуги</a></li>
                                        <!--<li><a href = "blog.html">Our Blog</a></li>-->
                                        <li><a href = "bff_portfolio_all.html">Портфолио</a></li>
                                        <li><a href="bff_privacy.html">Импресум</a></li>
                                        <!--<li><a href = "bff_FAQ.html">FAQ</a></li>-->
                                    </ul>
                                </div>
                                <!-- main menu footer cell end -->

                                <!-- Our Friends footer cell start -->
                                <div class = "cell-4">
                                    <h3 class = "block-head">Партньори</h3>
                                    <ul class = "footer-menu">
										<li><a href = "CMD_home.html">CMD-INTERNATIONAL GROUP</a></li>
										<li><a href = "http://www.kroma.dk/">Kroma A/S</a></li>
                                        <li><a href = "http://www.interaqua.dk/">Inter Aqua Advans A/S</a></li>
                                        <!--<li><a href = "#">purus molestie</a></li>-->
                                        <!--<li><a href = "#">adipiscing elit Integer</a></li>-->
                                        <!--<li><a href = "#">purus molestie</a></li>-->
                                    </ul>
                                </div>
                                <!-- Our Friends footer cell end -->

                                <!-- Useful Links footer cell start, ako se razkomentira da se opravi class cell-4 na cell-3 -->
                                <!--<div class="cell-3">-->
                                <!--<h3 class="block-head">Useful Links</h3>-->
                                <!--<ul class="footer-menu">-->
                                <!--<li><a href="cmd_privacy.html">Privacy policy</a></li>-->
                                <!--<li><a href="terms.html">Terms of use</a></li>-->
                                <!--<li><a href="#">purus molestie</a></li>-->
                                <!--<li><a href="#">adipiscing elit Integer</a></li>-->
                                <!--<li><a href="#">magna euismod</a></li>-->
                                <!--</ul>-->
                                <!--</div>-->
                                <!-- Useful Links footer cell end -->

                                <div class = "cell-4">
                                    <h3 class = "block-head">Контакти</h3>
                                    <ul>
                                        <li class = "footer-contact">
                                            <i class = "fa fa-home"></i><span>Бългериън Фиш Фармс ЕООД</span>
                                        </li>
                                        <li class = "footer-contact"><i class = "fa fa-map-marker">
                                            </i><span>София, ул. Алеко Константинов 42, ет.3</span>
                                        </li>
                                        <li class = "footer-contact">
											<i class = "fa fa-globe"></i><span><a href = "#">office@bff.com</a></span>
                                        </li>
                                        <li class = "footer-contact">
                                            <i class = "fa fa-phone"></i><span>359 (0) 2 843 04 27</span>
                                        </li>
                                        <li class = "footer-contact">
                                            <i class = "fa fa-phone"></i><span>359 (0) 894 682 347</span>
                                        </li>
                                        <li class = "footer-contact">
                                            <i class = "fa fa-map-marker"></i><span><a href = "bff_contact.php#enterCode">Покажи на картата</a></span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Useful Links footer cell start -->

                                <!-- Tags Cloud footer cell start -->
                                <!--<div class="cell-3">-->
                                <!--<h3 class="block-head">Tags Cloud</h3>-->
                                <!--<div class="tags">-->
                                <!--<a href="#">Design</a>-->
                                <!--<a href="#">User interface</a>-->
                                <!--<a href="#">Performance</a>-->
                                <!--<a href="#">Development</a>-->
                                <!--<a href="#">WordPress</a>-->
                                <!--<a href="#">SEO</a>-->
                                <!--<a href="#">Joomla</a>-->
                                <!--<a href="#">ASP.Net</a>-->
                                <!--<a href="#">SharePoint</a>-->
                                <!--<a href="#">Bootstrap</a>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!-- Tags Cloud footer cell start -->

                                <!--<div class="clearfix"></div>-->
                                <!--<hr class="hr-style5">-->
                                <!--<div class="clearfix"></div>-->

                                <!-- contact us footer cell start -->
                                <!--<div class="cell-3">-->
                                <!--<h3 class="block-head">Contact us</h3>-->
                                <!--<ul>-->
                                <!--<li class="footer-contact"><i class="fa fa-home"></i><span>СИ ЕМ ДИ ИНТЕРНЕШЪНЪЛ ЕООД</span></li>-->
                                <!--<li class="footer-contact"><i class="fa fa-globe"></i><span><a href="#">office@cmd-international.com</a></span></li>-->
                                <!--<li class="footer-contact"><i class="fa fa-phone"></i><span>359 (0) 2 843 04 27</span></li>-->
                                <!--<li class="footer-contact"><i class="fa fa-phone"></i><span>359 (0) 894 682 347</span></li>-->
                                <!--<li class="footer-contact"><i class="fa fa-map-marker"></i><span><a href="contact.html#map_canvas">View our map</a></span></li>-->
                                <!--</ul>-->
                                <!--</div>-->
                                <!-- contact us footer cell end -->

                                <!-- Newsletters footer cell start -->
                                <!--<div class="cell-3">-->
                                <!--<div class="foot-logo"></div>-->
                                <!--<p class="no-margin">Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>-->
                                <!--<form action="link-to-your-site" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate class="NL">-->
                                <!--<div class="skew-25 input-box left">-->
                                <!--<input type="email" value="" name="EMAIL" class="txt-box skew25" id="mce-EMAIL" placeholder="Enter Yor Email" required>-->
                                <!--</div>-->
                                <!--<div class="left skew-25 NL-btn">-->
                                <!--<input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="btn skew25">-->
                                <!--</div>-->
                                <!--<div class="hidden"><input type="text" name="name-of-the-hidden-field" value=""></div>-->

                                <!--<div class="Notfication fx animated fadeInRight">-->
                                <!--<a class="close-box" href="#"><i class="fa fa-times"></i></a>-->
                                <!--<p></p>-->
                                <!--</div>-->
                                <!--</form>-->
                                <!--</div>-->
                                <!--&lt;!&ndash; Newsletters footer cell start &ndash;&gt;-->
                                <!---->
                                <!--&lt;!&ndash; latest tweets footer cell start &ndash;&gt;-->
                                <!--<div class="cell-3">-->
                                <!--<h3 class="block-head">Latest Tweets</h3>-->
                                <!--<div id="twitter-feed" class="tweet"></div>-->
                                <!--</div>-->
                                <!--&lt;!&ndash; latest tweets footer cell start &ndash;&gt;-->
                                <!---->
                                <!--&lt;!&ndash; flickr stream footer cell start &ndash;&gt;-->
                                <!--<div class="cell-3 flickr-stream-w">-->
                                <!--<h3 class="block-head">Flickr Stream</h3>-->
                                <!--<ul id="flickrFeed"></ul>-->
                                <!--</div>-->
                                <!--&lt;!&ndash; flickr stream footer cell start &ndash;&gt;-->

                            </div>
                        </div>
                    </div>

                    <!-- footer bottom bar start -->
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row">
                                <!-- footer copyrights left cell -->
                                <div class="copyrights cell-5">&copy; Авторски права <b>
                                        Бългериън Фиш Фармс ЕООД</b> 2017. Всички права запазени. <span>
								<a href="bff_privacy.html">Правна отговорност</a></span>
                                </div>

								<!-- footer social links right cell start -->
								<!--<div class="cell-7">-->
								<!--<ul class="social-list right">-->
								<!--<li class="skew-25"><a href="#" data-title="dribbble" data-tooltip="true"><span class="fa fa-dribbble skew25"></span></a></li>-->
								<!--<li class="skew-25"><a href="#" data-title="facebook" data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>-->
								<!--<li class="skew-25"><a href="#" data-title="linkedin" data-tooltip="true"><span class="fa fa-linkedin skew25"></span></a></li>-->
								<!--<li class="skew-25"><a href="#" data-title="skype" data-tooltip="true"><span class="fa fa-skype skew25"></span></a></li>-->
								<!--<li class="skew-25"><a href="#" data-title="tumbler" data-tooltip="true"><span class="fa fa-tumblr skew25"></span></a></li>-->
								<!--<li class="skew-25"><a href="#" data-title="twitter" data-tooltip="true"><span class="fa fa-twitter skew25"></span></a></li>-->
								<!--<li class="skew-25"><a href="#" data-title="YouTube" data-tooltip="true"><span class="fa fa-youtube skew25"></span></a></li>-->
								<!--</ul>-->
								<!--</div>-->
								<!-- footer social links right cell end -->

							</div>
						</div>
					</div>
					<!-- footer bottom bar end -->

				</footer>
			<!-- Footer end -->
		    
		    <!-- Back to top Link -->
	    	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
	    
	    </div>
	    
	    <div class="ModalPopUp">
	    	<div class="ModalContainer">
	    		<div class="Modalheader">
	    			<h3></h3>
	    			<a href="#" class="closePopup"><span class="fa fa-times"></span></a>
	    		</div>
	    		<div class="ModalContent">
	    		</div>
	    	</div>
	    </div>
	    <!-- Load JS siles -->	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    
	    <!-- Waypoints script -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		
		<!-- SLIDER REVOLUTION SCRIPTS  -->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.animateNumber.min.js"></script>
		
		<!-- slick slider carousel -->
		<script type="text/javascript" src="js/slick.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
		
		<!-- PrettyPhoto script -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		
		<!-- Share post plugin script -->
		<script type="text/javascript" src="js/jquery.sharrre.min.js"></script>
		
		<!-- Product images zoom plugin -->
		<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		
		<!-- Input placeholder plugin -->
		<script type="text/javascript" src="js/jquery.placeholder.js"></script>
		
		<!-- Contact us js file -->
		<script type="text/javascript" src="js/contact.js"></script>
		
		<!-- Tweeter API plugin -->
		<script type="text/javascript" src="js/twitterfeed.js"></script>
		
		<!-- Tweeter API plugin -->
		<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
		
		<!-- NiceScroll plugin -->
		<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
		
		<!-- MailChimp plugin -->
		<script type="text/javascript" src="js/mailChimp.js"></script>
		
		<!-- general script file -->
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>