<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the

 * installation. You don't have to use the web site, you can

 * copy this file to "wp-config.php" and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', "sgsp_db_local");


/** MySQL database username */

define('DB_USER', "root");


/** MySQL database password */

define('DB_PASSWORD', "root");


/** MySQL hostname */

define('DB_HOST', "localhost");


/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');


/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY', '1c8629bb1747eeb59e5b635c9df8dbdb6fe22d8ac44a7bbcbe270ad6dec8175d');

define('SECURE_AUTH_KEY', 'ed87cdbc22ba40af891cdd156c754f32fd5d36b62e06b45745419f90fd717ead');

define('LOGGED_IN_KEY', 'a139707c046197bf02e6f4579b09e4f127cfe04d9b3421d92eca723965994100');

define('NONCE_KEY', '31b706812e5d4cfab3006a20c9805ab8df26d2e2ba2a1658a3cd0295b1b842b9');

define('AUTH_SALT', '3c07645d14d0924e7bd6f57ec80ccc8194185d600fdd22539ed10b6e3aba953d');

define('SECURE_AUTH_SALT', '5294ac920ee265336d8371edf506480e5d7197864c6a529ee8f0d20d0791c749');

define('LOGGED_IN_SALT', 'df809a8b96e8fb3794ff8440fea5271430a2907a68f4dc32db1ab6bc7aa7a9e1');

define('NONCE_SALT', '81654fd67cfc649238f70e79588a1388182952f73c7e670257910a685f3cbce1');


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = '_ZIY_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define('WP_DEBUG', false);



// Settings modified by hosting provider

define( 'WP_CRON_LOCK_TIMEOUT', 120   );

define( 'AUTOSAVE_INTERVAL',    300   );

define( 'WP_POST_REVISIONS',    5     );

define( 'EMPTY_TRASH_DAYS',     7     );

define( 'WP_AUTO_UPDATE_CORE',  true  );

/* That's all, stop editing! Happy blogging. */


define( 'WP_HOME', 'http://localhost:8888/sgsp_' );

define( 'WP_SITEURL', 'http://localhost:8888/sgsp_' );


/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

