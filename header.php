<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<meta itemprop="name" content="ARA 2014" />
<meta itemprop="author" content="José Luis Viéitez" />
<meta itemprop="copyright" content="<?php print date('Y') ?>" />
<meta name="distributor" content="Local" />
<meta itemprop="contentRating" content="General" />
<meta name="robots" content="All" />
<meta name="revisit-after" content="7 days" />
<meta name="viewport" content="width=device-width"/>


<!-- ## PAGE STYLES & SCRIPTS FROM WP - FUNC
-->
<?php wp_head() ?>

<!-- 
-->

</head>

<body <?php body_class() ?>>
	<div id="wrap"> <!-- ## Begins wrap -->
		<header id="header">
			<div class="inner-header">
				<div class="logo">
					<div class="inner-logo">
						<img src="<?php print get_template_directory_uri() ?>/static/images/logo.png" alt="ARA">
					</div>
				</div>
				<div class="menu">
					<nav><?php wp_nav_menu(array('theme_location' => 'primary')) ?></nav>
				</div>
			</div>
		</header>
		<div id="content"> <!-- ## Begins content -->
			<div class="inner-content"> <!-- ## Begins inner-content -->