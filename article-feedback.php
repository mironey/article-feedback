<?php 

/**
 * Plugin Name: Article Feedback 
 * Description: Enable visitors to rate your posts or pages and leave feedback. Helps site owners measure content usefulness and gather insights to improve their articles.
 * Plugin URI: https://example.com/article-feedback/
 * Version: 1.0
 * Author: Mohidul Islam
 * Author URI: https://example.com/
 * Requires at least: 5.0
 * Requires PHP: 7.4
 * License: GPL V2 or Later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: article-feedback
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

const AF_VERSION = '1.0.0';
define('AF_PATH', plugin_dir_path(__FILE__));
define('AF_URL', plugin_dir_url(__FILE__));
define('AF_TEXT_DOMAIN', 'article-feedback');

require_once AF_PATH . 'includes/class-article-feedback.php';

new ArticleFeedback();