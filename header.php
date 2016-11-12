<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class();?>>

	<!-- header section -->
	<section id="header">
		<article id="header-top">
			<div class="container">
				<div class="row">
					<div id="logo" class="col-md-3">
						<!-- <a href="index.html" title="Home"><img src="images/logo.png"></a> -->
						<h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
						<h5><?php bloginfo('description');?></h5>
					</div>

					<div id="main-menu" class="col-md-7">
						<nav>
							<?php wp_nav_menu(); ?>
						</nav>
					</div>

					<div id="login" class="col-md-2">
						<a href="">login</a>
						<a href="">signup</a>
					</div>
				</div>

			</div>
		</article><!-- #header-top -->

		<article id="header-slider">

