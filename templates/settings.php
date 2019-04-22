<style type="text/css">
	label {
		display: inline-block;
		margin-bottom: .5rem;
		font-size: 1rem;
	}
	.form-group {
		margin-bottom: 1rem;
	}
	.form-control {
		display: block;
		width: 100%;
		padding: .375rem .75rem;
		font-size: 1rem;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #ced4da;
		border-radius: .25rem;
		transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}
	.w-50 {
		width: 50% !important;
	}
	.mb-3 {
		margin-bottom: 1rem !important;
	}
</style>

<div class="wrap w-50">
	<h1 class="mb-3">WP-Laravel Bridge</h1>
	<h2 class="mb-2">Basic settings</h2>
	<form action="options.php" method="POST">
		<?php settings_fields( 'cc_wp_laravel_bridge_options_group' ); ?>
		<div class="form-group">
			<label for="app_base_url">App Base URL</label>
			<input type="text" class="form-control" name="app_base_url" id="app_base_url" value="<?php echo get_option( 'app_base_url' ); ?>">
		</div>
		<div class="form-group">
			<label for="app_api_client_id">App API Client ID</label>
			<input type="text" class="form-control" name="app_api_client_id" id="app_api_client_id" value="<?php echo get_option( 'app_api_client_id' ); ?>">
		</div>
		<div class="form-group">
			<label for="app_api_client_secret">App API Client Secret</label>
			<input type="text" class="form-control" name="app_api_client_secret" id="app_api_client_secret" value="<?php echo get_option( 'app_api_client_secret' ); ?>">
		</div>
		<?php submit_button(); ?>
	</form>
</div>
