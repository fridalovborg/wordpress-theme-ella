<?php
// hook
add_action( 'admin_menu', 'setup_theme_admin_menus' );

function setup_theme_admin_menus() {

	$menu_name = _x( 'Settings', 'fed16' );

	$page_title = _x( 'Theme settings', 'fed16' );

	add_menu_page( $page_title, $menu_name, 'manage_options', 'fed16_settings', 'fed16_settings_page' );
}

function fed16_settings_page() {

	?>
	<div class="wrap">

		<h1><?php _e( 'Theme settings', 'fed16' ); ?></h1>

		<?php

		$gaid = "";
		$fburl = "";
		$instaurl = "";

		if(isset($_POST['submit'])) {
			$new_gaid = esc_attr( $_POST['gaid'] );

			update_option( 'gaid', $new_gaid );

			$new_fburl = esc_attr( $_POST['fburl'] );

			update_option( 'fburl', $new_fburl );

			$new_instaurl = esc_attr( $_POST['instaurl'] );

			update_option( 'instaurl', $new_instaurl );
			?>

			<div id="settings-error-settings_updated" class="updated settings-error notice is-dismissable">
				<p><strong><?php _e( 'Settings saved', 'fed16' ); ?></strong></p>
				<button type="button" class="notice-dismiss"></button>
			</div>
		<?php
		}

		$gaid = get_option( 'gaid' );
		$fburl = get_option( 'fburl' );
		$instaurl = get_option( 'instaurl' );
		?>

		<form method="post">
			<h2><?php _e( 'Google Analytics Tracking Code', 'fed16'); ?></h2>
			
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<lable for="gaid"><?php _e( 'GA Tracking ID', 'fed16' ); ?></lable>
						</th>
						
						<td>
							<input type="text" name="gaid" value="<?php echo $gaid; ?>">
						</td>
					</tr>

					<tr>
						<th scope="row">
							<lable for="fburl"><?php _e( 'Facebook URL', 'fed16' ); ?></lable>
						</th>
						
						<td>
							<input type="text" name="fburl" placeholder="http://www.facebook.com/..." value="<?php echo $fburl; ?>">
						</td>
					</tr>

					<tr>
						<th scope="row">
							<lable for="instaurl"><?php _e( 'Instagram URL', 'fed16' ); ?></lable>
						</th>
						
						<td>
							<input type="text" name="instaurl" placeholder="https://www.instagram.com/..." value="<?php echo $instaurl; ?>">
						</td>
					</tr>
				</tbody>
			</table>

			<p class="submit">
				<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e( 'Save changes', 'fed16' ); ?>">
			</p>
		</form>
	</div>
<?php
}
?>