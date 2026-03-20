<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class AF_Database {
    public static function create_database() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'article_feedback';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            feedback text NOT NULL,
            rating TINYINT NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}