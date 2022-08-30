<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *git add 
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-custom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Figaro68' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.*G[q{Du[Y_-bG$1 @+e:UfM~/~U7FlY%+SiS<q3dHi1eW#p![u10o>:8<i`,acQ');
define('SECURE_AUTH_KEY',  '[o[b}cs%$pF9u{7+xeM&fe1g}LZ-)X<?jh=qIruON^|_D2U3Pt{0|o #%cSz,d:;');
define('LOGGED_IN_KEY',    'xs,7(0?-sD-Qhof.b]]pp[+jh)<E(.P9rE~Q/YxWAPn+iKRM|G$aC*PuBo8ChW=k');
define('NONCE_KEY',        'sd^+UQufPomN64>=v+n_0Yme~rKX<-S7v2nq/SjVh;Y0qWALyQqjaWMXq5IJ<<zi');
define('AUTH_SALT',        'uZ_(uiQq?XuZrm(sQ=|^7?k,Yi-~GufN06q@C=7n>6~nyE(c<(kQGfG*O)*~c);2');
define('SECURE_AUTH_SALT', '8%oP(8-&pBR[jg4n;l<hwg,+;ufnnXMiDMwmZ6Gl[~;oxg`zkK%-,FhkJM!V%f[*');
define('LOGGED_IN_SALT',   '6[irbY{JTPNR-5+z=w}(++RE4j1 R6HRQW}?bl>6=]pL(s|UegN/x`Z`x(92ataO');
define('NONCE_SALT',       'd{}$3x|zeAq+/r!<>m{ca&ZVe<suqJ!iAn|:An$I)le,VK48e>5Yp[d-=OFvE^}B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// on ajoute des constantes pour configurer notre install custom :

// Je définis l'URL vers la page d'accueil de mon site
define(
    'WP_HOME',
    rtrim ( 'http://localhost/wp-custom', '/' )
);

// Je définis l'URL vers le dossier source de WordPress
define(
    'WP_SITEURL',
    WP_HOME . '/wp'
);

// Je définis l'URL vers le dossier wp-content
define(
    'WP_CONTENT_URL',
    WP_HOME . '/wp-content'
);

// Je définis le path (chemin côté serveur) vers le dossier wp-content
define(
    'WP_CONTENT_DIR',
    __DIR__ . '/wp-content'
);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
