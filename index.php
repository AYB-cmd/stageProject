<?php include "lang/fr.php" ?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Model</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Responsive HTML5 Template">
	<meta name="author" content="okler.net">


	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">


	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.min.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<!-- <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css"> -->


	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">



	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">





	<link rel="stylesheet" href="css/skins/skin-corporate-3.css">


	<link rel="stylesheet" href="css/custom.css">


	<script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
			<div class="header-body border-color-primary border-top-0 box-shadow-none">

				<div class="header-top header-top-default border-bottom-0 border-top-0">
					<div class="container">
						<div class="header-row py-2">
							<div class="header-column justify-content-start">
								<div class="header-row">
									<nav class="header-nav-top">
										<ul class="nav nav-pills text-uppercase text-2">
											<li class="nav-item nav-item-anim-icon">
												<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> Apropos</a>
											</li>
											<li class="nav-item nav-item-anim-icon">
												<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contactez-Nous</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
										<li class="social-icons-facebook"><a href=<?php echo $facebook ?> target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="social-icons-twitter"><a href=<?php echo $twitter ?> target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href=<?php echo $linkedin ?> target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container container z-index-2">
					<div class="header-row py-2">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo header-logo-sticky-change">
									<a href="#">
										<img class="header-logo-sticky opacity-0" alt="Porto" width="100" height="48" data-sticky-width="89" data-sticky-height="43" data-sticky-top="88" src="img/logo-dark.png">
										<img class="header-logo-non-sticky opacity-0" alt="Porto" width="100" height="48" src="img/logo-default.png">
									</a>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<ul class="header-extra-info d-flex align-items-center">
									<li class="d-none d-sm-inline-flex">
										<div class="header-extra-info-text">
											<label><?php echo $email ?></label>
											<strong><a href="mailto:<?php $email ?>"><?php echo $email ?></a></strong>
										</div>
									</li>
									<li>
										<div class="header-extra-info-text">
											<label>APPELEZ-NOUS</label>
											<strong><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></strong>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
					<div class="container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row justify-content-end">
									<div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '135px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle active" href="#">
															Accueil
														</a>

													</li>
													<li class="dropdown dropdown-full-color dropdown-light dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="pages/apropos.php">
															Apropos
														</a>

													</li>
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle" href="pages/services.php">
															Services
														</a>
													</li>

													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle" href="pages/clients.php">
															Clients
														</a>
													</li>



													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle" href="pages/contact.php">
															Contact
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav my-2" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>




		<div role="main" class="main">
			<div class="slider-container light rev_slider_wrapper" style="height: 650px;">
				<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-big arrows-dark' }, 'bullets': {'enable': false, 'style': 'bullets-style-1 bullets-color-primary', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
					<ul>
						<li data-transition="fade">
							<img src="img/slides/slide-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

							<div class="tp-caption" data-x="['left','left','center','center']" data-hoffset="['145','145','-150','-240']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.5;s:500;"><img src="img/slides/slide-title-border-light.png" alt=""></div>

							<div class="tp-caption text-color-dark font-weight-normal" data-x="['left','left','center','center']" data-hoffset="['200','200','0','0']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['22','22','22','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;"><?php echo $slidePara ?></div>

							<div class="tp-caption d-none d-md-block" data-frames='[{"delay":3800,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="['left','left','center','center']" data-hoffset="['365','365','80','135']" data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/slides/slide-blue-line.png" alt=""></div>

							<div class="tp-caption" data-x="['left','left','center','center']" data-hoffset="['440','440','150','240']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.5;s:500;"><img src="img/slides/slide-title-border-light.png" alt=""></div>

							<h1 class="tp-caption font-weight-extra-bold text-color-dark negative-ls-2" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="['left','left','center','center']" data-hoffset="['152','152','0','0']" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']" data-letterspacing="-1"><?php echo $slideTitle1 ?></h1>

							<div class="tp-caption font-weight-light text-color-dark" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['left','left','center','center']" data-hoffset="['166','166','0','0']" data-y="center" data-voffset="['40','40','40','80']" data-fontsize="['18','18','18','50']" data-lineheight="['20','20','20','55']"><?php echo $slidePara1 ?></div>

						</li>
						<li data-transition="fade">

							<img src="img/slides/slide-2.jpg" alt="" data-bgposition="right center" data-bgpositionend="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="0" class="rev-slidebg">

							<div class="tp-caption font-weight-extra-bold text-color-dark negative-ls-2" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['-50','-50','-50','-75']" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"><?php echo $slideTitle2 ?></div>

							<div class="tp-caption font-weight-light text-color-dark" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['18','18','18','50']" data-lineheight="['20','20','20','55']" style="color: #b5b5b5;"><?php echo $slidePara2 ?></div>

							<a class="tp-caption btn btn-primary font-weight-bold" href="#" data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="0" data-y="center" data-voffset="70" data-paddingtop="['15','15','15','30']" data-paddingbottom="['15','15','15','30']" data-paddingleft="['40','40','40','57']" data-paddingright="['40','40','40','57']" data-fontsize="['13','13','13','25']" data-lineheight="['20','20','20','25']"><?php echo $button ?> <i class="fas fa-arrow-right ml-1"></i></a>

						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- ..................................................................................................................................../ -->


		<section class="container section-height-3 border-0 mt-4 mb-0">

			<div class="row pt-5">
				<div class="col">

					<div class="row text-center pb-3">
						<div class="col-md-9 mx-md-auto">
							<div class="overflow-hidden mb-3">
								<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
									<span>Apropos-Nous </span>

								</h1>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
									<?php echo $aproposPara ?>
								</p>
							</div>
						</div>
					</div>

					<div class="row mt-3 mb-5">
						<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
							<h3 class="font-weight-bold text-4 mb-2">NOTRE MISSION</h3>
							<p><?php echo $notreMessionPara ?></p>
						</div>
						<div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
							<h3 class="font-weight-bold text-4 mb-2">NOTRE VISION</h3>
							<p><?php echo $notreVisionPara ?></p>
						</div>
						<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
							<h3 class="font-weight-bold text-4 mb-2">POURQUOI NOUS</h3>
							<p> <?php echo $pourquoiNousPara ?></p>
						</div>
					</div>

				</div>
			</div>

		</section>

		<!-- ..................................................................................................................................../ -->

		<section class="section bg-color-primary section-height-2 border-0 mt-4 mb-0">
			<div class="container">

				<div class="row">
					<div class="col-md-10 py-3 mx-md-auto mt-4 mb-4">
						<h1 class="word-rotator slide font-weight-bold text-8 mb-0 text-center">
							<span class="text-white"> Nos Services </span></h1>
					</div>
					<div class="overflow-hidden mb-3">
						<div class="row pt-2 clearfix">
							<div class="col-lg-6">
								<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
									<div class="feature-box-icon">
										<i class="icon-user-following icons text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 text-5 text-color-light"><?php echo $serviceTitle1 ?></h4>
										<p class="mb-4 text-color-light opacity-6"><?php echo $servicePara1 ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
									<div class="feature-box-icon">
										<i class="icon-layers icons text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 text-5 text-color-light"><?php echo $serviceTitle2 ?></h4>
										<p class="mb-4 text-color-light opacity-6"><?php echo $servicePara2 ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									<div class="feature-box-icon">
										<i class="icon-calculator icons text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 text-5 text-color-light"><?php echo $serviceTitle3 ?></h4>
										<p class="mb-4 text-color-light opacity-6"><?php echo $servicePara3 ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
									<div class="feature-box-icon">
										<i class="icon-star icons text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 text-5 text-color-light"><?php echo $serviceTitle4 ?></h4>
										<p class="mb-4 text-color-light opacity-6"><?php echo $servicePara4 ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									<div class="feature-box-icon">
										<i class="icon-drop icons text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 text-5 text-color-light"><?php echo $serviceTitle5 ?></h4>
										<p class="mb-0 text-color-light opacity-6"><?php echo $servicePara5 ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
									<div class="feature-box-icon">
										<i class="icon-mouse icons text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2 text-5 text-color-light"><?php echo $serviceTitle6 ?></h4>
										<p class="mb-0 text-color-light opacity-6"><?php echo $servicePara6 ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section>

		<!-- ..................................................................................................................................../ -->




		<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
			<div class="container pb-2">
				<div class="row">
					<div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
						<h2 class="text-color-dark font-weight-normal text-6 mb-3">Nos <strong class="font-weight-extra-bold">Clients</strong></h2>
						<p class="lead"><?php echo $ClientPara ?></p>
						<div class="row justify-content-center my-5">
							<div class="col-8 text-center col-md-4">
								<img src="img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="" />
							</div>
							<div class="col-8 text-center col-md-4 my-3 my-md-0">
								<img src="img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="" />
							</div>
							<div class="col-8 text-center col-md-4">
								<img src="img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="" />
							</div>
						</div>
						<a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">ENCORE PLUS</a>
					</div>
					<div class="col-lg-6">
						<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
							<div>
								<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
									<div class="testimonial-author">
										<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
									</div>
									<blockquote>
										<p class="text-color-dark text-4 line-height-5 mb-0"> <?php echo $testimony1 ?></p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong class="font-weight-extra-bold text-2"><?php echo $testimonyName1 ?></strong></p>
									</div>
								</div>
							</div>
							<div>
								<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
									<div class="testimonial-author">
										<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
									</div>
									<blockquote>
										<p class="text-color-dark text-4 line-height-5 mb-0"><?php echo $testimony2 ?></p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong class="font-weight-extra-bold text-2"><?php echo $testimonyName2 ?></strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="home-intro bg-primary text-center" id="home-intro">
			<div class="container">

				<div class="row align-items-center">
					<div class="col-lg-8">
						<p>
							Si vous avez besoin d'informations, n'hésitez pas à nos <span class="highlighted-word">CONTACTEZ</span>

						</p>
					</div>
					<div class="col-lg-4">
						<div class="get-started text-left text-lg-right ">
							<a href="pages/contact.php" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Contactez-Nous</a>
							<div class="learn-more"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<footer id="footer" class="container-fluid border-top-0">
			<div class="row">

				<div class="col-lg-6 p-0">
					<section class="section border-top-0 bg-color-dark h-100 m-0" id="banner-btn">
						<div class="row justify-content-end m-0">
							<div class="col-half-section col-half-section-right d-flex  py-4">
								<div class="col-6 mb-5 mb-lg-0">
									<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="apropos.html" class="link-hover-style-1 ml-1"> Apropos-Nous</a></li>
										<li><i class="fas fa-angle-right"></i><a href="services.html" class="link-hover-style-1 ml-1"> Services</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact.html" class="link-hover-style-1 ml-1"> Contactez-Nous</a></li>
									</ul>
								</div>
								<div class="col-6  mb-5 mb-lg-0">

									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="apropos.html" class="link-hover-style-1 ml-1"> Apropos-Nous</a></li>
										<li><i class="fas fa-angle-right"></i><a href="services.html" class="link-hover-style-1 ml-1"> Services</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact.html" class="link-hover-style-1 ml-1"> Contactez-Nous</a></li>
										<li><i class="fas fa-angle-right"></i><a href="services.html" class="link-hover-style-1 ml-1"> Services</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact.html" class="link-hover-style-1 ml-1"> Contactez-Nous</a></li>
									</ul>
								</div>
							</div>
						
						</div>

					</section>
				</div>

				<div class="col-lg-6 p-0 right">
					<section class="section border-top-0 bg-dark h-100 m-0">
						<div class="row m-0">
							<div class="col-half-section py-4 pr-5">
								<p class="text-2 font-weight-semibold mb-0 pb-0 text-color-light opacity-6">PARLEZ À UN SPÉCIALISTE</p>
								<h2 class="text-6 line-height-4 text-lg-8 line-height-lg-1 font-weight-semibold text-color-light mb-3">Parlons affaires</h2>
								<p class="text-color-light opacity-6">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.</p>

								<p class="text-2 font-weight-semibold mb-0 pb-0 text-color-light opacity-6 text-uppercase">APPELEZ-NOUS MAINTENANT</p>
								<a href="tel:<?php echo $phone ?>" class="text-5 line-height-4 line-height-lg-1 font-weight-semibold text-color-light mb-3"><?php echo $phone ?></a>

								<p class="text-2 font-weight-semibold mb-0 pb-0 mt-4 text-color-light opacity-6 text-uppercase">Envoyez-nous un e-mail</p>
								<a href="mailto:<?php $email?>" class="text-5 line-height-4 line-height-lg-1 font-weight-semibold text-color-light mb-3"><?php echo $email ?></a>

							</div>
							<div class=" col-half-section col-half-section-right mx-auto  py-4" id="social-media">
								<h5 class="text-3 mb-3">FOLLOW US</h5>
								<ul class="social-icons">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
						
					</section>
						
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container py-2">
					<div class="row py-4">

						<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
							<p>© 2014 – 2020 , AMA Détergent, tous droits réservés.</p>

							<a href="https://www.adk-media.com" target="_blank" title="Développement web - Hébergement web Maroc">--Site web réalisé par ADK Media--</a>
						</div>

					</div>
				</div>
		</footer>




		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>


</body>

</html>