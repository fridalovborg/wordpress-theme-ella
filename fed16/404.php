<?php
/**
 * The template for displaying 404 pages (not found)
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
			<h1>Page not found...try again</h1>
		</header>
		<div class="content">
			<img src="<?php echo get_template_directory_uri() . '/src/img/big_jacket.png' ?>" alt="Puffy pink jacket">
		</div>
	</div>
</body>
</html>
