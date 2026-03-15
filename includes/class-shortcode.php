<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class AF_Shortcode {
    public function __construct() {
        add_shortcode('article-feedback', [$this, 'register_shortcodes']);
    }

    public function register_shortcodes($atts, $content = null) {
        ob_start();
        ?>
        <div class="wpaf-container">
            <div class="wpaf-card">
                <h3 class="wpaf-title">Was this article helpful?</h3>
                <div class="wpaf-stars">
                    <svg data-value="1" viewBox="0 0 24 24">
                        <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 1.401 8.168L12 18.897l-7.335 3.869 1.401-8.168L.132 9.211l8.2-1.193z"/>
                    </svg>
                    <svg data-value="2" viewBox="0 0 24 24">
                        <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 1.401 8.168L12 18.897l-7.335 3.869 1.401-8.168L.132 9.211l8.2-1.193z"/>
                    </svg>
                    <svg data-value="3" viewBox="0 0 24 24">
                        <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 1.401 8.168L12 18.897l-7.335 3.869 1.401-8.168L.132 9.211l8.2-1.193z"/>
                    </svg>
                    <svg data-value="4" viewBox="0 0 24 24">
                        <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 1.401 8.168L12 18.897l-7.335 3.869 1.401-8.168L.132 9.211l8.2-1.193z"/>
                    </svg>
                    <svg data-value="5" viewBox="0 0 24 24">
                        <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.787 1.401 8.168L12 18.897l-7.335 3.869 1.401-8.168L.132 9.211l8.2-1.193z"/>
                    </svg>
                </div>
                <p class="wpaf-rating-label"></p>
                <form class="wpaf-form">
                    <div class="wpaf-field">
                        <label for="wpaf-name">Your Name</label>
                        <input type="text" id="wpaf-name" name="name" required>
                    </div>
                    <div class="wpaf-field">
                        <label for="wpaf-email">Your Email</label>
                        <input type="email" id="wpaf-email" name="email">
                    </div>
                    <div class="wpaf-field">
                        <label for="wpaf-feedback">Your Feedback</label>
                        <textarea id="wpaf-feedback" name="feedback"></textarea>
                    </div>
                    <button type="submit" class="wpaf-submit-btn">
                        Submit Feedback
                    </button>
                </form>
                <div class="wpaf-message"></div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}