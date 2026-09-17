<?php
/**
 * Plugin constants.
 *
 * - Path
 * - URL
 *
 * @package JWRDC_AME_Styler
 */

defined( 'ABSPATH' ) || exit;

// Plugin path.
if ( ! defined( 'JWRDC_AME_STYLER_PATH' ) ) {
	define( 'JWRDC_AME_STYLER_PATH', plugin_dir_path( __FILE__ ) );
}

// Plugin URL.
if ( ! defined( 'JWRDC_AME_STYLER_URL' ) ) {
	define( 'JWRDC_AME_STYLER_URL', plugin_dir_url( __FILE__ ) );
}
