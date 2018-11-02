<?php
defined('ABSPATH') or exit;

/** @var Avangpress_Debug_Log $log */
/** @var Avangpress_Debug_Log_Reader $log_reader */

/**
 * @ignore
 * @param array $opts
 */
function _avangpress_usage_tracking_setting($opts) {
	?>
	<div class="medium-margin" >
		<h3><?php _e('Miscellaneous settings', 'avangpress');?></h3>
		<table class="form-table">
			<tr>
				<th><?php _e('Logging', 'avangpress');?></th>
				<td>
					<select name="avangpress[debug_log_level]">
						<option value="warning" <?php selected('warning', $opts['debug_log_level']);?>><?php _e('Errors & warnings only', 'avangpress');?></option>
						<option value="debug" <?php selected('debug', $opts['debug_log_level']);?>><?php _e('Everything', 'avangpress');?></option>
					</select>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

add_action('avangpress_admin_other_settings', '_avangpress_usage_tracking_setting', 70);
?>
<div id="avangpress-admin" class="wrap avangpress-settings">

	<p class="breadcrumbs">
		<span class="prefix"><?php echo __('You are here: ', 'avangpress'); ?></span>
		<a href="<?php echo admin_url('admin.php?page=avangpress'); ?>">AvangPress for WordPress</a> &rsaquo;
		<span class="current-crumb"><strong><?php _e('Other Settings', 'avangpress');?></strong></span>
	</p>


	<div class="row">

		<!-- Main Content -->
		<div class="main-content col col-4">

			<h1 class="page-title">
				<?php _e('Other Settings', 'avangpress');?>
			</h1>

			<h2 style="display: none;"></h2>
			<?php settings_errors();?>

			<?php
/**
 * @ignore
 */
do_action('avangpress_admin_before_other_settings', $opts);
?>

			<!-- Settings -->
			<form action="<?php echo admin_url('options.php'); ?>" method="post">
				<?php settings_fields('avangpress_settings');?>

				<?php
/**
 * @ignore
 */
do_action('avangpress_admin_other_settings', $opts);
?>

				<div style="margin-top: -20px;"><?php submit_button();?></div>
			</form>

			<!-- Debug Log -->
			<div class="medium-margin">
				<h3><?php _e('Debug Log', 'avangpress');?> <input type="text" id="debug-log-filter" class="alignright regular-text" placeholder="<?php esc_attr_e('Filter..', 'avangpress');?>" /></h3>

				<?php
if (!$log->test()) {
	echo '<p>';
	echo __('Log file is not writable.', 'avangpress') . ' ';
	echo sprintf(__('Please ensure %s has the proper <a href="%s">file permissions</a>.', 'avangpress'), '<code>' . $log->file . '</code>', 'https://codex.wordpress.org/Changing_File_Permissions');
	echo '</p>';

	// hack to hide filter input
	echo '<style type="text/css">#debug-log-filter { display: none; }</style>';
} else {
	?>
					<div id="debug-log" class="avangpress-log widefat">
						<?php
$line = $log_reader->read_as_html();

	if (!empty($line)) {
		while (is_string($line)) {
			echo '<div class="debug-log-line">' . $line . '</div>';
			$line = $log_reader->read_as_html();
		}
	} else {
		echo '<div class="debug-log-empty">';
		echo '-- ' . __('Nothing here. Which means there are no errors!', 'avangpress');
		echo '</div>';
	}
	?>
					</div>

					<form method="post">
						<input type="hidden" name="_avangpress_action" value="empty_debug_log">
						<p>
							<input type="submit" class="button"
								   value="<?php esc_attr_e('Empty Log', 'avangpress');?>"/>
						</p>
					</form>
					<?php
} // end if is writable

if ($log->level >= 300) {
	echo '<p>';
	echo __('Right now, the plugin is configured to only log errors and warnings.', 'avangpress');
	echo '</p>';
}
?>

				<script>
					(function() {
						'use strict';
						// scroll to bottom of log
						var log = document.getElementById("debug-log"),
							logItems;
						log.scrollTop = log.scrollHeight;
						log.style.minHeight = '';
						log.style.maxHeight = '';
						log.style.height = log.clientHeight + "px";

						// add filter
						var logFilter = document.getElementById('debug-log-filter');
						logFilter.addEventListener('keydown', function(e) {
							if(e.keyCode == 13 ) {
								searchLog(e.target.value.trim());
							}
						});

						// search log for query
						function searchLog(query) {
							if( ! logItems ) {
								logItems = [].map.call(log.children, function(node) {
									return node.cloneNode(true);
								})
							}

							var ri = new RegExp(query.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&"), 'i');
							var newLog = log.cloneNode();
							logItems.forEach(function(node) {
								if( ! node.textContent ) { return ; }
								if( ! query.length || ri.test(node.textContent) ) {
									newLog.appendChild(node);
								}
							});

							log.parentNode.replaceChild(newLog,log);
							log = newLog;
							log.scrollTop = log.scrollHeight;
						}
					})();
				</script>
			</div>
			<!-- / Debug Log -->



			<?php include dirname(__FILE__) . '/parts/admin-footer.php';?>
		</div>

		<!-- Sidebar -->
		<div class="sidebar col col-2">
			<?php include dirname(__FILE__) . '/parts/admin-sidebar.php';?>
		</div>


	</div>

</div>

