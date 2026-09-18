<?php
/**
 * Plugin Name: JWRDC AME Styler
 * Plugin URI: https://joshrobbs.com
 * Description: A plugin to add toggling to Admin Menu Editor plugin.
 * Version: 2.0.3
 * Author: Josh Robbs
 * Author URI: https://joshrobbs.com
 * License: The Unlicense
 *
 * @package JWRDC_AME_Styler
 */

namespace JWRDC_AME_Styler;

use JWRDC_AME_Styler\classes\AdminMenuStyle;
use JWRDC_AME_Styler\classes\AMEOptionsPage;
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/activation.php';

new AdminMenuStyle(); // refactor to use static fns.
new AMEOptionsPage(); // refactor to use static fns.

PucFactory::buildUpdateChecker(
	'https://github.com/JWRDCLLC/jwrdc_ame_styler/releases/latest/download/details.json',
	__FILE__,
	'jwrdc_ame_styler'
);
