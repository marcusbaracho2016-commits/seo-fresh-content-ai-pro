<?php
/**
 * Plugin Name: SEO Fresh Content AI PRO
 * Plugin URI: https://github.com/marcusbaracho2016-compromissos/seo-fresh-content-ai-pro
 * Description: Plugin de atualização inteligente de conteúdo com IA para WordPress.
 * Version: 0.1.0
 * Author: Marcus Baracho
 * Author URI: https://gospellivefestival.com.br
 * License: GPL2
 * Text Domain: seo-fresh-content-ai-pro
 */

if (!defined('ABSPATH')) {
    exit;
}

define('SFCA_VERSION', '0.1.0');
define('SFCA_PLUGIN_FILE', __FILE__);
define('SFCA_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('SFCA_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once SFCA_PLUGIN_PATH . 'includes/class-loader.php';

SFCA_Loader::init();
