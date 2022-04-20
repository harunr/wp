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

define( 'DB_NAME', "abestfiv_sports" );


/** MySQL database username */

define( 'DB_USER', "abestfiv_sports" );


/** MySQL database password */

define( 'DB_PASSWORD', "sports1254\$" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


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

define( 'AUTH_KEY',         'bi6)R~]RPY8?bN,VKd+0`nuo|Oz*9[1P/rXn[BRAg&3=4%O?=wsF>/YX-a,XQ]_K' );

define( 'SECURE_AUTH_KEY',  'w(<!JKW&Oe62)RCd5b^z6UYq[c&ImN-{Rbftm%:A^h^sb`xoJ]H~Z.Vg WEg5J_7' );

define( 'LOGGED_IN_KEY',    '&b!H37rK3xM.=aQDnX_#(]Kz8!9EEUH!/Ai8jw>QDUf:@6$1hn 0#BV@nK]XnVJ8' );

define( 'NONCE_KEY',        'oJ5EOY5:_kIJ8l(9mCYHaxZYQ)SWT)-,){q-&io8(5v$|[vy:1zk}[;Hy$@rP6]w' );

define( 'AUTH_SALT',        '1{F1|W$[r=Z}~P-Q5+ITB.hfir02Z TUCc om|.p0/-latjJ6G?{(a(6Mg@facZ|' );

define( 'SECURE_AUTH_SALT', 'r#Q+_k6+Vux7RPJ7~~YrO@VLFXhPA+Xe/H:UZd!6w:.Np@yiTU|t7iDwW[)ePyrR' );

define( 'LOGGED_IN_SALT',   'z}/v{f),0O;$0?b4O5>~rry6lCNu1L^ olD:-_ GANZ=h*X>}:wP3kIx#A]sjBX+' );

define( 'NONCE_SALT',       'x6Iy}r`tE28Eve]LOE=9Ug=Yl}=(UX{PjxYK_P&DKS&t=ok$8/fWbhJ:$jXMxv_D' );


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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

