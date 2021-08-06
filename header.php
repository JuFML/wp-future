<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>		
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a></h1>
						<nav class="links">
							<?php wp_nav_menu(array('theme_location'=> 'main')); ?>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="<?php echo home_url('/'); ?>">
										<input type="text" name="s" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="<?php echo home_url('/'); ?>">
									<input type="text" name="s" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<?php dynamic_sidebar('hidden_menu'); ?>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="<?php home_url('/'); ?>wp-admin" class="button large fit">Log In</a></li>
								</ul>
							</section>

					</section>