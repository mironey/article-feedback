<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class ArticleFeedback {
    public function __construct() {
        add_action('plugins_loaded', [$this, 'load_files']);
        add_action(('wp_enqueue_scripts'), [$this, 'load_assets']);
    }

    public function load_files() {
        require_once AF_PATH . 'includes/class-shortcode.php';
        new AF_Shortcode();
    }

    public function load_assets() {
        wp_enqueue_style('article-feedback-style', AF_URL . 'assets/css/style.css', [], AF_VERSION, 'all');
        wp_enqueue_script('article-feedback-script', AF_URL . 'assets/js/script.js', ['jquery'], AF_VERSION, true);
    }
}