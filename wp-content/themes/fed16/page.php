<?php 
/**
* Standardvisning för alla sidor som inte ser special ut.
**/

get_header(); 
?>

<i>page.php</i><br>
<?php

if(have_posts()) {
	while(have_posts()) {
		the_post();

		if( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
		}

		the_title();
		the_content(); 
	}
}

get_footer(); ?>