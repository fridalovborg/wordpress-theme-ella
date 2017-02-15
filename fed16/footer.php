</main> <!-- /wrapper, header.php -->

<?php
$fburl = get_option( 'fburl' );

$instaurl = get_option( 'instaurl' );
?>

<footer>
	<a href="<?php echo $fburl; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

	<a href="<?php echo $instaurl; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>

	<?php dynamic_sidebar( 'footer1' ); ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>