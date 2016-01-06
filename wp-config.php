<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'bythemsida');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '123qwe');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y3[,J,MntjYg+[p{NT0OL9:0X %J>fKeC3k{.MwNqxv,u]SrE,Xs<Ma6tb(5S|ey');
define('SECURE_AUTH_KEY',  '~_|%hMiWX+0HtWaLE4G`CVBbzvm8pOX(=qIN3?|&]BYSIPnipDYWRF1v1pB~?B@B');
define('LOGGED_IN_KEY',    'c3-!08g_z..E].75}hwwo-ywf#5Ky6m[P~jY7j|AZhmaB;]}OOOl+$+ENcqOe,:+');
define('NONCE_KEY',        '7.K[(v+I~VD|B)--|?Jr|>(r;dT5~D`U{G9R<+L;=9~2vF):gr5[Jdb[AndK328-');
define('AUTH_SALT',        'J$Ab8L<X`dbH=XI5 >Nq ;nQAS| wXCpZUvt_&qznci+lq(;Z{y]|}% NA+6X#;{');
define('SECURE_AUTH_SALT', '*[EaI*GKZ&Tj$L8qh9CBZ.]#B}QKJ!cKr%=[smG;uYrs.Xk>7j%a<nS*[MV=)xaK');
define('LOGGED_IN_SALT',   'S]aEH`QK0^6 -tpRyY7xTd)u&T#O<M[/Kqy0z(hLds0w;$GZM~PnSnJRh 1>[fX}');
define('NONCE_SALT',       'MHpMc5U{A34*Y%Kgw+S5%21A4o3o:s`8B7Z u:M!l8Zfux@@`o6aMg8qf$w<fL)7');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');