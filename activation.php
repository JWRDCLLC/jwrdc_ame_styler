<?php
/**
 * Functions related to plugin activation.
 *
 * @package JWRDC_AME_Styler
 */

namespace JWRDC_AME_Styler;

defined( 'ABSPATH' ) || exit;

/**
 * Plugin activation hook.
 *
 * @return void
 */
function activate() {

	$is_ame_active = \is_plugin_active( 'admin-menu-editor/menu-editor.php' );

	if ( false === $is_ame_active ) {
		\deactivate_plugins( \plugin_basename( JWRDC_AME_STYLER_PATH . 'index.php' ) );
		\wp_die(
			\esc_html__( 'JWRDC AME Styler requires the Admin Menu Editor plugin to be installed and active.', 'jwrdc-ame-styler' ),
			\esc_html__( 'Plugin Activation Error', 'jwrdc-ame-styler' ),
			array( 'back_link' => true )
		);
	}
}
register_activation_hook( JWRDC_AME_STYLER_PATH . 'index.php', __NAMESPACE__ . '\activate' );
