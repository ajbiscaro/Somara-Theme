<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead">
		<div class="container">
			<div class="logo">
				<a href="<?php echo home_url( '/' ); ?>">
					<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" />
				</a>
			</div>
			<form class="form" action="#" method="post">
				<p class="title"><strong>CLIENT LOGIN</strong></p>
				<fieldset>
					<label>Username</label>
					<input type="text" name="username" />
					<input type="submit" value="Login"/><br/>
					<div class="space-divide"></div>
					<label>Password</label>
					<input type="password" name="password" />
					<input type="submit" value="Register"/>
				</fieldset>
			</form>
			<nav class="clearfix top-nav">
				<?php 
					wp_nav_menu( array( 
						'container' => 'false', 
						'theme_location' => 'primary' 
					) ); 
				?>
			</nav>
		</div>
	</header><!-- end #masthead -->
		
