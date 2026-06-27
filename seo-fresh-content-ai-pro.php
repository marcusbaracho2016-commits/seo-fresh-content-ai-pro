<?php
/**
 * Plugin Name: SEO Fresh Content AI PRO
 * Description: Base plugin.
 * Version:0.1.0
 */
if(!defined('ABSPATH')) exit;
define('SFCA_PLUGIN_PATH', plugin_dir_path(__FILE__));
require_once SFCA_PLUGIN_PATH.'includes/class-loader.php';
SFCA_Loader::init();
