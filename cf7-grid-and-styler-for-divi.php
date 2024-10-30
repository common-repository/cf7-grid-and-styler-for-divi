<?php
/**
 * Plugin Name:     Grid & Styler For Contact Form 7 And Divi
 * Description:     Grid Builder & Divi Styler for Contact Form 7
 * Author:          WP Tools
 * Author URI:      https://wptools.app
 * Text Domain:     cf7-grid-and-styler-for-divi
 * Domain Path:     /languages
 * Version:         1.6.0
 */

if (!function_exists('wpt_cf7_divi_initialize_extension')):
    function wpt_cf7_divi_initialize_extension()
{
        require_once plugin_dir_path(__FILE__) . 'includes/WptCf7Divi.php';
    }

    add_action('divi_extensions_init', 'wpt_cf7_divi_initialize_extension');
endif;

require_once __DIR__ . '/freemius.php';
require_once __DIR__ . '/vendor/autoload.php';

$loader = \WPT\Cf7Divi\Loader::getInstance();

$loader['plugin_name']    = 'Contact Form 7 Grid And Styler For Divi';
$loader['plugin_version'] = '1.6.0';
$loader['plugin_dir']     = __DIR__;
$loader['plugin_url']     = plugins_url('/' . basename(__DIR__));
$loader['plugin_file']    = __FILE__;
$loader['plugin_slug']    = 'cf7-grid-and-styler-for-divi';

$loader->run();
