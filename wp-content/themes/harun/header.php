<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Harun
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--IE Compatibility Meta-->
	<meta name="author" content="Döner By Harun" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?= get_template_directory_uri() ?>/assets/images/logo/Logo.png" rel="icon">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="preloader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">

		<header id="navbar-spy" class="header header-4 header-2 header-topbar header-light bg-dark header-fixed">
			<div id="top-bar" class="top-bar topbar-light">
				<div class="container">
					<div class="bottom-bar-border">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 top--contact hidden-xs">
								<ul class="list-inline mb-0 ">
									<li>
										<i class="fa fa-cutlery"></i><span>Döner By Harun</span>
									</li>
									<li>
										<i class="fa fa-map-marker"></i><span>Banhofstraße 192, 61184 Karben</span>
									</li>
									<li>
										<i class="fa fa-phone"></i> <span>+ 012346567</span>
									</li>
								</ul>
							</div>
							<!-- .col-md-6 end -->
							<div class="col-xs-12 col-sm-6 col-md-6 top--social text-right text-center-xs">
								<span>Folge uns</span>
								<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
								<a class="tripadvisor" href="#"><i class="fa fa-pinterest"></i></a>
							</div>
							<!-- .col-md-6 end -->
						</div>
					</div>
				</div>
			</div>
			<nav id="primary-menu" class="navbar navbar--dark navbar-fixed-top ">
				<div class="container">
					<div class="">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle navbar-toggle-dark collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img style="height: 75px ;" class="logo-light" src="<?= get_template_directory_uri() ?>/assets/images/logo/logo.png" alt="Döner By Harun Logo logo">
								<img style="height: 75px ;" class="logo-dark" src="<?= get_template_directory_uri() ?>/assets/images/logo/logo.png" alt="Döner By Harun Logo Logo">
							</a>
						</div>

						<div class="module-container pull-right">
							<!-- .module-cart end -->
							<!-- Module Search -->
							<div class="module module-search">
								<div class="module-icon search-icon">
									<i class="fa fa-search"></i>
								</div>
								<div class="module-content module-fullscreen module--search-box">
									<div class="pos-vertical-center">
										<div class="container">
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
													<form class="form-search">
														<input type="text" class="form-control" placeholder="Geben Sie Suchbegriffe ein !">
														<button class="btn" type="button"><i class="fa fa-search"></i></button>
													</form>
													<!-- .form-search end -->
												</div>
												<!-- .col-md-8 end -->
											</div>
											<!-- .row end -->
										</div>
										<!-- .container end -->
									</div>
									<a class="module-cancel">Schließen</a>
								</div>
							</div>
							<!-- .module-search end -->
							<!-- Module Side NAV -->
							<div class="module module-side-nav">
								<div class="module-icon side-nav-icon">
									<i class="fa fa-bars"></i>
									<span class="title">Side Navigation</span>
								</div>
								<div class="module-content module-hamburger">
									<div class="hamburger-panel module-widgets bg-white">

										<!-- Recent Posts
    ============================================= -->
										<div class="widget widget-recent-posts">
											<div class="widget--title">
												<h5>recent posts</h5>
											</div>
											<div class="widget--content">
												<div class="entry">
													<img src="assets/images/blog/thumb/1.jpg" alt="title" />
													<div class="entry-desc">
														<div class="entry-meta">
															<a href="#">Oct 15, 2017</a>
														</div>
														<div class="entry-title">
															<a href="#">The Best Side Dishes for Next Dinner</a>
														</div>
													</div>
												</div>
												<!-- .recent-entry end -->

												<div class="entry">
													<img src="assets/images/blog/thumb/2.jpg" alt="title" />
													<div class="entry-desc">
														<div class="entry-meta">
															<a href="#">sep 15, 2017</a>
														</div>
														<div class="entry-title">
															<a href="#">Cornbread Stuffing Apples and Sausage</a>
														</div>
													</div>
												</div>
												<!-- .recent-entry end -->

											</div>
										</div>
										<!-- .widget-recent end -->

										<!-- Instagram Feed
    ============================================= -->
										<div class="widget widget-instagram">
											<div class="widget--title">
												<h5>Instagram</h5>
											</div>
											<div class="widget--content">
												<div id="instafeedModule" class="instafeed" data-insta-number="8"></div>
												<div class="clearfix"></div>
											</div>
										</div>
										<!-- .widget-instagram end -->

										<!-- Tag Clouds
    ============================================= -->
										<div class="widget widget-tags">
											<div class="widget--title">
												<h5>tag clouds</h5>
											</div>
											<div class="widget--content">
												<a href="#">responsive</a>
												<a href="#">modern</a>
												<a href="#">corporate</a>
												<a href="#">business</a>
												<a href="#">awesome</a>
												<a href="#">fresh</a>

											</div>
										</div>
										<!-- .widget-tags end -->
										<a class="module-cancel">Schließen</a>
									</div>
								</div>
							</div>
						</div>
						<!-- .module-container end -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
							<ul class="nav navbar-nav nav-pos-right navbar-left">
								<!-- Home Menu -->
								<li>
									<a class="menu-item" href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a>
								</li>
								<!-- li end -->

								<!-- Menü Menu -->
								<li>
									<a class="menu-item" href="/menu">Menü</a>
								</li>
								<!-- li end -->

								<!-- Impressum Menu -->
								<li>
									<a class="menu-item" href="/impressum">Impressum</a>
								</li>
								<!-- li end -->
								<!-- Datenschütz Menu -->
								<li>
									<a class="menu-item" href="/datenschutz">Datenschütz</a>
								</li>
								<!-- li end -->
								<!-- Datenschütz Menu -->
								<li>
									<a class="menu-item" href="/kontakt">Kontakt</a>

								</li>
								<!-- li end -->

							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>