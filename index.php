<?php
/*
Plugin Name: Layotter
Description: Add and arrange your content freely with an intuitive drag and drop interface!
Author: Dennis Hingst
Version: 1.5.12
Author URI: http://www.layotter.com/
Text Domain: layotter
GitHub Plugin URI: hingst/layotter
*/

namespace Layotter;

// load translations
load_plugin_textdomain('layotter', false, basename(__DIR__) . '/languages/');

require_once __DIR__ . '/core/Settings.php';
require_once __DIR__ . '/core/Core.php';

Settings::init();
Core::init();

//add_action('plugins_loaded', array('Layotter', 'init'));
// TODO: had init hooked to plugins_loaded before -- I guess there was a reason?
