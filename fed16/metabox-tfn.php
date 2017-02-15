<?php // metabox-tfn.php

add_action( 'admin_init', 'fed16_add_metabox' );

function fed16_add_metabox() {

	$id = 			'fed16_post_metabox';
	$title = 		__( 'Link to article', 'fed16' );
	$function = 	'fed16_render_metabox';
	$screen =		'fed16_cpt_portfolio';	// en inläggstyp eller sida
	$placement = 	'side';	// normal, side, advanced
	$prio =			'high';	// hight, low, default

	add_meta_box( $id, $title, $function, $screen, $placement, $prio );
}

function fed16_render_metabox() {
	global $post; 

	$rf = get_post_meta($post->ID, "url", true);
	?>
	<label for="url"><?php _e( 'url', 'fed16' ); ?></label>
	<input type="text" name="url" id="url" value="<?php echo $rf; ?>"></input>
<?php
}

add_action( 'save_post', 'fed16_save_metabox' );

function fed16_save_metabox() {
	global $post;

	update_post_meta( $post->ID, 'url', $_POST['url'] );
}