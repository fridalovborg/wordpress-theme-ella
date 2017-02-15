<?php
/* Template Name: Startsida */
get_header(); 

?>

<article>
	<h2><?php the_field('banner_text'); ?></h2>
	<img class="banner" alt="banner picture" src=<?php echo get_field('banner_image') ?>>
</article>

<!-- KUND BYTA BILD SJÄLV! -->
<?php
if(have_posts()) {
	while(have_posts()) {
		the_post();

		$bgimg_f1 = get_field('bakgrundsbild_f1');
		$bgimg_f2 = get_field('bakgrundsbild_f2');

		?>
		<!-- FIELD 1 -->
		<a class="black_text" href="<?php the_field('link'); ?>">
			<div class="grid">
				    <div class="grid_cell bg_col mobile_hide"><div class="grid_content"><?php the_field('rubrik_pa_field_1'); ?></div></div>
				    <div class="grid_cell bg_col" style="background-image: url(<?php echo $bgimg_f1; ?>)">
				    	<div class="grid_content mobile_show"><?php the_field('rubrik_pa_field_1'); ?></div>
				    </div>
			</div> <!-- .grid -->
		</a>
		<!-- FIELD 2 -->
		<a class="white_text" href="<?php the_field('link'); ?>">
			<div class="grid">
			    <div class="grid_cell bg_col" style="background-image: url(<?php echo $bgimg_f2; ?>)">
			    	<div class="grid_content mobile_show"><?php the_field('rubrik_pa_field_2'); ?></div>
			    </div>
			    <div class="grid_cell bg_col mobile_hide"><div class="grid_content"><?php the_field('rubrik_pa_field_2'); ?></div></div> 
			</div> <!-- .grid -->
		</a>
	<?php
	}
}
get_footer(); ?>