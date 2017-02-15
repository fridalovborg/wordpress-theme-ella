<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ELLA BOUCHT</title>
	<?php wp_head(); ?>
	<script>
		var $ = jQuery;
		$(document).ready(function(){

			$("#click").click(function() {
				$('.mobile_menu').slideToggle();
				$("#click").toggleClass('flip');
			});
		});

		// GOOGLE ANALYTICS 
		<?php if ( ! empty ( get_option( 'gaid' ) ) ) : ?>

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', '<?php echo get_option('gaid', true); ?>', 'auto');
                ga('send', 'pageview');

        <?php endif; ?>
	</script>
</head>
<body <?php body_class(); ?> >
	<div id="cookie-notification" class="cookie-notification">
		<p>Cookies används på denna sida. Genom att fortsätta på sidan accepterar du användandet av cookies</p>
		<i id="hide-notification" class="fa fa-times" aria-hidden="true"></i> 
	</div>
	<div class="relative">
		<div class="bg_color bg_desc_color">
			<header class="header">
				<h1><a href="<?php echo get_home_url(); ?>">ELLA BOUCHT</a></h1>
			</header>
			<nav class="mobile_menu"> 
				<div class="fixed"><?php wp_nav_menu(array( 'theme_location' => 'mainmenu' )); ?>
				</div>
			</nav>
		</div>
		<div class="arrow">
			<div id="click" class="arrow_down"></div>
		</div>
	</div> <!-- .relative -->

	<main class="wrapper">