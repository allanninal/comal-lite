<?php
/**
 * Comal Lite — theme bootstrap.
 *
 * The free edition of Comal, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package comal-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'COMAL_LITE_VERSION', '1.0.0' );
define( 'COMAL_LITE_DIR', get_template_directory() );
define( 'COMAL_LITE_URI', get_template_directory_uri() );

require COMAL_LITE_DIR . '/inc/setup.php';
require COMAL_LITE_DIR . '/inc/media.php';
require COMAL_LITE_DIR . '/inc/food.php';
require COMAL_LITE_DIR . '/inc/lite.php';
require COMAL_LITE_DIR . '/inc/updater.php';
