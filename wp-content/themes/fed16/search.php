<?php
/**
 * The template for displaying search results pages.
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page not found</title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper-404">
		<header class="page-header">
			<h1 class="page-title"><?php printf( __( 'Search Results for: <br> %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			
			<?php if ( have_posts() ) : ?>
				<p><?= $wp_query->found_posts ?> articles found. Here is the result:</p>
			<?php else : ?>
				<p>Unfortunately nothing was found.</p>
			<?php endif; ?>
		</header>

		<main>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : ?>
					<?php the_post() ?>
					<article>
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ?>
						<div class="featured" style="background-image: url(<?= $thumb[0] ?>);">
							<h2><?= the_title() ?></h2>
						</div>

						<div class="meta">
							<p><?= wp_list_categories( ['style' => '', 'separator' => ', '] ) ?></p>
							<date><?= the_date('Y-F-j') ?></date>
						</div>
					</article> 
				<?php endwhile ?>
			<?php endif ?>

			<section>
				<p>Did not find what you were looking for? Try again.</p>
				<?= get_search_form() ?>
				<!-- <i class="fa fa-search" aria-hidden="true"></i> -->
			</section>
		</main>
	</div>
</body>
</html>