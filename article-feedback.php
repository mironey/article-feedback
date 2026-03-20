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

final class ArticleFeedback {
    const VERSION = '1.0.0';

    public function __construct() {
        $this->define_constants();
        add_action('plugins_loaded', [$this, 'init_classes']);
        add_action('wp_enqueue_scripts', [$this, 'load_assets']);
        register_activation_hook(__FILE__, ['ArticleFeedback', 'activate']);
    }

    public function define_constants() {
        if (!defined('AF_VERSION')) {
            define('AF_VERSION', self::VERSION);
        }
        if (!defined('AF_PATH')) {
            define('AF_PATH', plugin_dir_path(__FILE__));
        }
        if (!defined('AF_URL')) {
            define('AF_URL', plugin_dir_url(__FILE__));
        }
        if (!defined('AF_TEXT_DOMAIN')) {
            define('AF_TEXT_DOMAIN', 'article-feedback');
        }
    }

    public static function activate() {
        require_once AF_PATH . 'includes/class-database.php';
        AF_Database::create_database();
    }

    public function init_classes() {
        require_once AF_PATH . 'includes/class-shortcode.php';
        new AF_Shortcode();
    }

    public function load_assets() {
        wp_enqueue_style('article-feedback-style', AF_URL . 'assets/css/style.css', [], AF_VERSION, 'all');
        wp_enqueue_script('article-feedback-script', AF_URL . 'assets/js/script.js', ['jquery'], AF_VERSION, true);
    }
}

new ArticleFeedback();