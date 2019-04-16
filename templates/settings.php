<div class="wrap">
	<h1>WP Laravel Bridge Settings</h1>
	<form action="options.php" method="POST">
		<?php settings_fields('cc_wp_laravel_bridge_options_group'); ?>
		<br>
		<label>App URL</label>
		<br>
		<input type="text" name="cc_app_url" style="width:50%;height:30px;" value="<?php echo get_option('cc_app_url'); ?>">
		<br>
		<br>
		<label>Client ID</label>
		<br>
		<input type="text" name="cc_client_id_key" style="width:50%;height:30px;" value="<?php echo get_option('cc_client_id_key'); ?>">
		<br>
		<br>
		<label>Client Secret</label>
		<br>
		<input type="text" name="cc_client_secret_key" style="width:50%;height:30px;" value="<?php echo get_option('cc_client_secret_key'); ?>">
		<br>
		<br>
		<?php submit_button(); ?>
	</form>
</div>
