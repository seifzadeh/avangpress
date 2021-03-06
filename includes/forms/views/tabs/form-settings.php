<h2><?php echo __( 'Form Settings', 'avangpress' ); ?></h2>

<div class="medium-margin"></div>

<h3><?php echo __( 'Mail specific settings', 'avangpress' ); ?></h3>

<table class="form-table" style="table-layout: fixed;">

	<?php
	/** @ignore */
	do_action( 'avangpress_admin_form_after_mail_settings_rows', $opts, $form );
	?>

	<tr valign="top">
		<th scope="row" style="width: 250px;"><?php _e( 'Lists this form subscribes to', 'avangpress' ); ?></th>
		<?php // loop through lists
		if( empty( $lists ) ) {
			?><td colspan="2"><?php printf( __( 'No lists found, <a href="%s">are you connected to Mail</a>?', 'avangpress' ), admin_url( 'admin.php?page=avangpress' ) ); ?></td><?php
		} else { ?>
			<td >

				<ul id="avangpress-lists" style="margin-bottom: 20px; max-height: 300px; overflow-y: auto;">
					<?php foreach( $lists as $list ) { ?>
						<li>
							<label>
								<input class="avangpress-list-input" type="checkbox" name="avangpress_form[settings][lists][]" value="<?php echo esc_attr( $list->id ); ?>" <?php  checked( in_array( $list->id, $opts['lists'] ), true ); ?>> <?php echo esc_html( $list->name ); ?>
							</label>
						</li>
					<?php } ?>
				</ul>
				<p class="help"><?php _e( 'Select the list(s) to which people who submit this form should be subscribed.' ,'avangpress' ); ?></p>
			</td>
		<?php } ?>

	</tr>
		<tr valign="top">
		<th scope="row"><?php _e( 'Add to any post?', 'avangpress' ); ?></th>
		<td class="nowrap">
			<label>
				<input type="radio"  name="avangpress_form[settings][any_post]" value="1" <?php checked( $opts['any_post'], 1 ); ?> />&rlm;
				<?php _e( 'Yes' ); ?>
			</label> &nbsp;
			<label>
				<input type="radio" name="avangpress_form[settings][any_post]" value="0" <?php checked( $opts['any_post'], 0 ); ?> onclick="return confirm('<?php esc_attr_e( 'Are you sure you want to disable any post show?', 'avangpress' ); ?>');" />&rlm;
				<?php _e( 'No' ); ?>
			</label>
			<p class="help"><?php _e( 'We strongly suggest keeping double opt-in enabled. Disabling double opt-in may result in abuse.', 'avangpress' ); ?></p>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><?php _e( 'Use double opt-in?', 'avangpress' ); ?></th>
		<td class="nowrap">
			<label>
				<input type="radio"  name="avangpress_form[settings][double_optin]" value="1" <?php checked( $opts['double_optin'], 1 ); ?> />&rlm;
				<?php _e( 'Yes' ); ?>
			</label> &nbsp;
			<label>
				<input type="radio" name="avangpress_form[settings][double_optin]" value="0" <?php checked( $opts['double_optin'], 0 ); ?> onclick="return confirm('<?php esc_attr_e( 'Are you sure you want to disable double opt-in?', 'avangpress' ); ?>');" />&rlm;
				<?php _e( 'No' ); ?>
			</label>
			<p class="help"><?php _e( 'We strongly suggest keeping double opt-in enabled. Disabling double opt-in may result in abuse.', 'avangpress' ); ?></p>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><?php _e( 'Update existing subscribers?', 'avangpress' ); ?></th>
		<td class="nowrap">
			<label>
				<input type="radio" name="avangpress_form[settings][update_existing]" value="1" <?php checked( $opts['update_existing'], 1 ); ?> />&rlm;
				<?php _e( 'Yes' ); ?>
			</label> &nbsp;
			<label>
				<input type="radio" name="avangpress_form[settings][update_existing]" value="0" <?php checked( $opts['update_existing'], 0 ); ?> />&rlm;
				<?php _e( 'No' ); ?>
			</label>
			<p class="help"><?php _e( 'Select "yes" if you want to update existing subscribers with the data that is sent.', 'avangpress' ); ?></p>
		</td>
	</tr>

	<?php $config = array( 'element' => 'avangpress_form[settings][update_existing]', 'value' => 1 ); ?>
	<tr valign="top" data-showif="<?php echo esc_attr( json_encode( $config ) ); ?>">
		<th scope="row"><?php _e( 'Replace interest groups?', 'avangpress' ); ?></th>
		<td class="nowrap">
			<label>
				<input type="radio" name="avangpress_form[settings][replace_interests]" value="1" <?php checked( $opts['replace_interests'], 1 ); ?> />&rlm;
				<?php _e( 'Yes' ); ?>
			</label> &nbsp;
			<label>
				<input type="radio" name="avangpress_form[settings][replace_interests]" value="0" <?php checked( $opts['replace_interests'], 0 ); ?> />&rlm;
				<?php _e( 'No' ); ?>
			</label>
			<p class="help">
				<?php _e( 'Select "no" if you want to add the selected interests to any previously selected interests when updating a subscriber.', 'avangpress' ); ?>
				<?php printf( ' <a href="%s" target="_blank">' . __( 'What does this do?', 'avangpress' ) . '</a>', 'https://avangpress.com/docs/#/' ); ?>
			</p>
		</td>
	</tr>

	<?php
	/** @ignore */
	do_action( 'avangpress_admin_form_after_mail_settings_rows', $opts, $form );
	?>

</table>

<div class="medium-margin"></div>

<h3><?php _e( 'Form behaviour', 'avangpress' ); ?></h3>

<table class="form-table" style="table-layout: fixed;">

	<?php
	/** @ignore */
	do_action( 'avangpress_admin_form_before_behaviour_settings_rows', $opts, $form );
	?>

	<tr valign="top">
		<th scope="row"><?php _e( 'Hide form after a successful sign-up?', 'avangpress' ); ?></th>
		<td class="nowrap">
			<label>
				<input type="radio" name="avangpress_form[settings][hide_after_success]" value="1" <?php checked( $opts['hide_after_success'], 1 ); ?> />&rlm;
				<?php _e( 'Yes' ); ?>
			</label> &nbsp;
			<label>
				<input type="radio" name="avangpress_form[settings][hide_after_success]" value="0" <?php checked( $opts['hide_after_success'], 0 ); ?> />&rlm;
				<?php _e( 'No' ); ?>
			</label>
			<p class="help">
				<?php _e( 'Select "yes" to hide the form fields after a successful sign-up.', 'avangpress' ); ?>
			</p>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="avangpress_form_redirect"><?php _e( 'Redirect to URL after successful sign-ups', 'avangpress' ); ?></label></th>
		<td>
			<input type="text" class="widefat" name="avangpress_form[settings][redirect]" id="avangpress_form_redirect" placeholder="<?php printf( __( 'Example: %s', 'avangpress' ), esc_attr( site_url( '/thank-you/' ) ) ); ?>" value="<?php echo esc_attr( $opts['redirect'] ); ?>" />
			<p class="help">
				<?php _e( 'Leave empty or enter <code>0</code> for no redirect. Otherwise, use complete (absolute) URLs, including <code>http://</code>.', 'avangpress' ); ?>
			</p>
			<p class="help">
				<?php _e( 'Your "subscribed" message will not show when redirecting to another page, so make sure to let your visitors know they were successfully subscribed.', 'avangpress' ); ?>
			</p>		
				
		</td>
	</tr>

	<?php
	/** @ignore */
	do_action( 'avangpress_admin_form_after_behaviour_settings_rows', $opts, $form );
	?>

</table>

<?php submit_button(); ?>
