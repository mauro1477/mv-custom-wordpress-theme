<?php
/**
 * Bootstrap file responsible for loading WordPress.
 *
 * When the full WordPress core is unavailable (for example while developing
 * this theme in isolation) a lightweight bootstrapper from the theme is used
 * so the templates can still be previewed.
 */

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

$wpLoad = __DIR__ . '/wp-load.php';

if (file_exists($wpLoad)) {
    require_once $wpLoad;
    if (function_exists('wp')) {
        wp();
    }
    if (defined('WPINC')) {
        require_once ABSPATH . WPINC . '/template-loader.php';
    }
    return;
}

require __DIR__ . '/wp-content/themes/mv-simple/dev-bootstrap.php';
