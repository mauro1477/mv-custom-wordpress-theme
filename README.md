# MV Simple WordPress Site

This repository contains a minimal WordPress project that focuses on a single custom theme (`mv-simple`) and a `wp-config.php` file that sources all secrets from environment variables. It can be dropped into a full WordPress core installation or previewed locally using the included development bootstrapper.

## Getting started

1. Download the official [WordPress core](https://wordpress.org/download/) release and extract it into this directory, or symlink the `wp-admin` and `wp-includes` folders from an existing installation.
2. Copy the contents of this repository over the WordPress root.
3. Provide the following environment variables (for example via a `.env` file or your hosting platform) so that `wp-config.php` can read the secrets securely:

   ```bash
   export WP_DB_NAME=your_database
   export WP_DB_USER=your_user
   export WP_DB_PASSWORD=super_secret_password
   export WP_DB_HOST=localhost
   export WP_TABLE_PREFIX=wp_
   export WP_AUTH_KEY=...
   export WP_SECURE_AUTH_KEY=...
   export WP_LOGGED_IN_KEY=...
   export WP_NONCE_KEY=...
   export WP_AUTH_SALT=...
   export WP_SECURE_AUTH_SALT=...
   export WP_LOGGED_IN_SALT=...
   export WP_NONCE_SALT=...
   ```

4. (Optional) Define `WP_HOME`, `WP_SITEURL`, or `WP_DEBUG` if your environment requires them.
5. Visit the WordPress dashboard and activate the **MV Simple Theme**.

### Preview without WordPress

If you open `index.php` without having WordPress core available, the `dev-bootstrap.php` file inside the theme renders a static preview so you can see the design quickly.

## Theme features

- Responsive hero section with configurable text (via Customizer values).
- Clean card layout for posts with support for featured images and categories.
- Navigation menus for both header and footer locations.
- Sidebar widget area and sensible defaults for new installs.

Feel free to extend the theme for your project needs.
