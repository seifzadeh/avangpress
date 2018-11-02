<?php
defined( 'ABSPATH' ) or exit;

$tags = avangpress('forms')->get_tags();
?>
<h2><?php _e( 'Add dynamic form variable', 'avangpress' ); ?></h2>
<p>
	<?php echo sprintf( __( 'The following list of variables can be used to <a href="%s">add some dynamic content to your form or success and error messages</a>.', 'avangpress' ), 'https://avangpress.com/docs/#/' ) . ' ' . __( 'This allows you to personalise your form or response messages.', 'avangpress' ); ?>
</p>
<table class="widefat striped">
	<?php foreach( $tags as $tag => $config ) {
		$tag = ! empty( $config['example'] ) ? $config['example'] : $tag;
		?>
		<tr>
			<td>
				<input type="text" class="widefat" value="<?php echo esc_attr( sprintf( '{%s}', $tag ) ); ?>" readonly="readonly" onfocus="this.select();" />
				<p class="help" style="margin-bottom:0;"><?php echo strip_tags( $config['description'], '<strong><b><em><i><a><code>' ); ?></p>
			</td>
		</tr>
	<?php } ?>
</table>
