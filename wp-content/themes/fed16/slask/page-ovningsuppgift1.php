<?php
/**
* Template Name: Test
* Visar alla inlägg av test Jenni.  	
**/
?>

<?php get_header(); ?>
<i>page-ovningsuppgift1.php</i><br>
<?php

/* Först visar innehållet från ordinarie sida. Titeln på sidan ska komma upp (Övningsuppgift 1 nedan) 
och sedan texten från editorn (Lorrizzle-textblocket nedan). */

if(have_posts()) {
	while(have_posts()) {
		the_post();

		the_title();
		the_content(); 
	}
} 

/* Därefter ska det komma upp en rubrik som markerar att ett nytt ”block” med bloopers
kommer. Denna är en rubrik och centrerad. (Blogginlägg av Jenni) */

?>
<h2 class="centered">Blogginlägg av Jenni</h2>
<?php

/* Därefter ska alla inlägg komma upp. Dessa ska ha en bakgrundsbild om de har en
”Featured Image” inlagd. OBS! Du måste ladda upp bilder eftersom att dessa inte
följer med i importen. */


// The Query
$test = new WP_Query( array(

	'post_type' => 'post',
	'post_status' => 'publish',

	));
		?>
		<div class="bloopers">
		<?php
		// The Loop
		if ( $test->have_posts() ) {

		while ( $test->have_posts() ) {

		$test->the_post();

		<article class="blooper">
		<img class="bgimg" src="<?php echo get_the_post_thumbnail(); ?>">
		<h3><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?> </a></h3> 
		</article>
		<?php
		$terms = wp_get_post_terms( get_the_ID(), 'fed16_projekttyp' );

		foreach( $terms as $term ):
		echo $term->name . "<br>";
		endforeach;
		endwhile;
		else: 
		echo "<p>Det finns inga inlägg</p>";
		endif; ?>
</div>
<?php
get_footer(); ?>