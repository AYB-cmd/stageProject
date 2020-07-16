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
									<a href="../index.php">
										<img class="header-logo-sticky opacity-0" alt="Porto" width="100" height="48" data-sticky-width="89" data-sticky-height="43" data-sticky-top="88" src="../img/logo-dark.png">
										<img class="header-logo-non-sticky opacity-0" alt="Porto" width="100" height="48" src="../img/logo-default.png">
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
											<strong><a href= "tel:<?php echo $phone ?>"><?php echo $phone ?></a></strong>
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
														<a class="dropdown-item dropdown-toggle " href="../index.php">
															Accueil
														</a>

													</li>
													<li class="dropdown dropdown-full-color dropdown-light dropdown-mega">
														<a class="dropdown-item dropdown-toggle <?php if ($section == "apropos") {echo 'active';} ?>" href="apropos.php">
															Apropos
														</a>

													</li>
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle <?php if ($section == "services") {echo 'active';} ?>" href="services.php">
															Services
														</a>
													</li>

													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle <?php if ($section == "clients") {echo 'active';} ?>" href="clients.php">
															Clients
														</a>
													</li>



													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle <?php if ($section == "contact") {echo 'active';} ?>" href="contact.php">
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