<?php get_header(); ?>

<div class="grid-news">
	<?php
	if(have_posts()) {
		while(have_posts()) {
			?>
			<div class="grid_cell-news single_grit">
				<div class="grid_content-news">
					
					<?php
					// PRINT META TAG
					$rf = get_post_meta($post->ID, "url", true);

					the_post();

					echo "<h3>";
					the_title(); 
					echo "<br></h3>";

					echo "<p>";
					the_content(); 
					echo "</p>";

					if ($rf == false) {
					} else {
						echo "<p>";
						?>
						<a class="link" target="_blank" href="<?php echo $rf; ?>">Link to article</a>
						<?php
						echo "</p>";
					}
					?>
				</div>
				<div class="grid_content-news">
					<?php
					if( has_post_thumbnail() ) {
						the_post_thumbnail('medium');
					} ?>
				</div>
			</div>
		<?php
		}
	}
	?>
</div>

<?php get_footer(); ?>