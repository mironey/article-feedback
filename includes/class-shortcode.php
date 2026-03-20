<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class AF_Shortcode {
    public function __construct() {
        add_shortcode('article-feedback', [$this, 'render_shortcodes']);
    }

    public function render_shortcodes($atts, $content = null) {
        ob_start();
        ?>
        <div class="af-container">
            <div class="af-card">
                <h3 class="af-title">
                    <?php echo esc_html__('Was this article helpful?', AF_TEXT_DOMAIN); ?>
                </h3>
                <div class="af-stars">
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
                <p class="af-rating-label"></p>
                <form class="af-form">
                    <div class="af-field">
                        <label for="af-name">
                            <?php echo esc_html__('Your Name', AF_TEXT_DOMAIN); ?>
                        </label>
                        <input type="text" id="af-name" name="name" required>
                    </div>
                    <div class="af-field">
                        <label for="af-email">
                            <?php echo esc_html__('Your Email', AF_TEXT_DOMAIN); ?>
                        </label>
                        <input type="email" id="af-email" name="email">
                    </div>
                    <div class="af-field">
                        <label for="af-feedback">
                            <?php echo esc_html__('Your Feedback', AF_TEXT_DOMAIN); ?>
                        </label>
                        <textarea id="af-feedback" name="feedback"></textarea>
                    </div>
                    <button type="submit" class="af-submit-btn">
                        <?php echo esc_html__('Submit Feedback', AF_TEXT_DOMAIN); ?>
                    </button>
                </form>
                <div class="af-message"></div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}