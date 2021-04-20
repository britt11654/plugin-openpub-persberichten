<?php

/**
 * Plugin Name:       Yard | OpenPub Persberichten
 * Plugin URI:        https://www.openwebconcept.nl/
 * Description:       Press releases are a variation on OpenPub items. A press release can be added to a laposta campaign based on the connected taxonomy. This only happens when the press release is saved for the first time.
 * Version:           0.0.1
 * Author:            Yard | Digital Agency
 * Author URI:        https://www.yard.nl/
 * License:           GPL-3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       openpub-persberichten
 * Domain Path:       /languages
 */

/**
 * If this file is called directly, abort.
 */
if (!defined('WPINC')) {
    die;
}

/**
 * manual loaded file: the autoloader.
 */
require_once __DIR__ . '/autoloader.php';
$autoloader = new OWC\OpenPub\Persberichten\Autoloader();

/**
 * Begin execution of the plugin
 *
 * This hook is called once any activated plugins have been loaded. Is generally used for immediate filter setup, or
 * plugin overrides. The plugins_loaded action hook fires early, and precedes the setup_theme, after_setup_theme, init
 * and wp_loaded action hooks.
 */
\add_action('plugins_loaded', function () {
    $plugin = (new OWC\OpenPub\Persberichten\Foundation\Plugin(__DIR__))->boot();
}, 10);
