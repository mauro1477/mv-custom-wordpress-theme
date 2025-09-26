<?php
/**
 * WordPress configuration file for the MV simple site.
 *
 * Sensitive values are injected from environment secrets so nothing
 * confidential is stored in the repository.
 */

$env = static function (string $key, string $default = ''): string {
    $value = getenv($key);
    if ($value === false) {
        return $default;
    }
    return $value;
};

// Database settings supplied from secrets.
define('DB_NAME', $env('WP_DB_NAME', 'database_name'));
define('DB_USER', $env('WP_DB_USER', 'database_user'));
define('DB_PASSWORD', $env('WP_DB_PASSWORD', 'database_password'));
define('DB_HOST', $env('WP_DB_HOST', 'localhost'));

define('DB_CHARSET', $env('WP_DB_CHARSET', 'utf8mb4'));
define('DB_COLLATE', $env('WP_DB_COLLATE', ''));

$table_prefix = $env('WP_TABLE_PREFIX', 'wp_');

define('AUTH_KEY', $env('WP_AUTH_KEY'));
define('SECURE_AUTH_KEY', $env('WP_SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', $env('WP_LOGGED_IN_KEY'));
define('NONCE_KEY', $env('WP_NONCE_KEY'));
define('AUTH_SALT', $env('WP_AUTH_SALT'));
define('SECURE_AUTH_SALT', $env('WP_SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', $env('WP_LOGGED_IN_SALT'));
define('NONCE_SALT', $env('WP_NONCE_SALT'));

// Optional URLs for headless deployments.
if ($home = $env('WP_HOME')) {
    define('WP_HOME', $home);
}
if ($siteUrl = $env('WP_SITEURL')) {
    define('WP_SITEURL', $siteUrl);
}

define('WP_DEBUG', filter_var($env('WP_DEBUG', 'false'), FILTER_VALIDATE_BOOLEAN));

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

// Allow local overrides (kept out of version control).
$localConfig = __DIR__ . '/wp-config-local.php';
if (file_exists($localConfig)) {
    require_once $localConfig;
}

$wpSettings = ABSPATH . 'wp-settings.php';
if (file_exists($wpSettings)) {
    require_once $wpSettings;
    return;
}

// Development fallback keeps the theme previewable without the full core.
require_once ABSPATH . 'wp-content/themes/mv-simple/dev-bootstrap.php';
