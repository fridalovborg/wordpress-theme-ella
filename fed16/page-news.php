<?php
/**
* Template Name: News
**/

get_header(); 

$portfolio = new WP_Query( array(

	'post_type' => 'fed16_cpt_portfolio',
	'post_status' => 'publish',
	'orderby' => 'title',
	'order' => ASC

	) );
?>

<h2>News</h2>

<!-- <article> -->
<div class="grid-news">
    	
	<?php
	if( $portfolio->have_posts() ) {
		
		while( $portfolio->have_posts() ) {

			$portfolio->the_post();
			?>

			<div class="grid_cell-news">
				<div class="grid_content-news">
					
					<?php
					echo "<h3>";
					the_title(); 
					echo "<br></h3>";

					echo "<p>";
					the_excerpt();
					echo "</p>";
					?>

					<a href="<?php the_permalink(); ?>">Read more</a>
				</div> <!-- .grid_content-news -->
				<?php

				//the_post_thumbnail( 'blooper' );
				$bildurl = get_the_post_thumbnail_url();
				
				if (!get_the_post_thumbnail_url() == null) {
				?>
					<div class="grid_content-news">
						<div class="blooper" style="background-image:url(<?php echo $bildurl; ?>);"></div>
					</div> <!-- .grid_content-news -->
				<?php
				}
				$terms = wp_get_post_terms( get_the_ID(), 'fed16_projekttyp' );

				foreach($terms as $term) {
					echo "<p class='tags'>";
					echo "Tags: ";
					echo $term->name;
					echo "</p>";
				}
				?>
			</div> <!-- .grid_cell-news -->
		<?php
		//var_dump($terms);
		}
	} else {
		?>
		<div class="grid_cell-news">
			<div class="grid_content-news">
				<?php
				echo "<p>Det finns inga inlägg!</p>";
				?>
			</div>
		</div>
		<?php
	} ?>
</div> <!-- .grid-news -->

<?php get_footer(); ?>