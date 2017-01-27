<?php
/** 
 * Les configuracions bàsiques del WordPress.
 *
 * Aquest fitxer té les següents configuracions: configuració de MySQL, prefix de taules,
 * claus secretes, idioma del WordPress i ABSPATH. Trobaràs més informació 
 * al Còdex (en anglès): {@link http://codex.wordpress.org/Editing_wp-config.php Editant
 * el wp-config.php}. Les dades per a configurar MySQL les pots obtenir del
 * teu proveïdor d'hostatjament de web.
 *
 * Aquest fitxer és usat per l'script de creació de wp-config.php durant la
 * instal·lació. No cal que usis el web, pots simplement copiar aquest fitxer
 * sota el nom "wp-config.php" i omplir-lo amb els teus valors.
 *
 * @package WordPress
 */

// ** Configuració de MySQL - Pots obtenir aquestes informacions del teu proveïdor de web ** //
/** El nom de la base de dades per al WordPress */
define('DB_NAME', 'ROCFERRER');

/** El teu nom d'usuari a MySQL */
define('DB_USER', 'rocferrer77');

/** La teva contrasenya a MySQL */
define('DB_PASSWORD', 'rocferrer77');

/** Nom del host de MySQL */
define('DB_HOST', 'localhost');

/** Joc de caràcters usat en crear taules a la base de dades. */
define('DB_CHARSET', 'utf8mb4');

/** Tipus d'ordenació en la base de dades. No ho canvïis si tens cap dubte. */
define('DB_COLLATE', '');

/**#@+
 * Claus úniques d'autentificació.
 *
 * Canvia-les per frases úniques diferents!
 * Les pots generar usant el {@link http://api.wordpress.org/secret-key/1.1/salt/ servei de claus secretes de WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '@77FYZz%Bpsqi4#WMJFOuS 6@(~geX*~eO[BbCI#`zGeVEM,=0o20Ul0rn`B@4<M');
define('SECURE_AUTH_KEY', 'Et9<%jW*Y.*jkKM3^_*1R.yK5$[mUP/eF7CBB[WTjYV~R>{0ZVlG86.[nB6x{YOd');
define('LOGGED_IN_KEY', 'h_5W3@ZtIyl~=1KknkR^$y,+$;F;J 5`;hUcT,pcV53)<qsE.}-7Io&rlPeLdM7w');
define('NONCE_KEY', '45u`|4F-;iN/{uEvQ#Y?|<j6Gn ZTtO]K,.ocGl$-BWI@=!/y@C=:{0[[m8=1%G:');
define('AUTH_SALT',        '?K)gp)h1C@#{nGR<The.D9c;}U,#j:P$fIgh6.RpKNrSa;H(wuM$)_=qD,&aoM`Y');
define('SECURE_AUTH_SALT', 'p:(S3F4D&LwRxdJ=w]>mIP,C.! zH#:Affw:,B5e*`9c`x((InP@!G[{UMFkon@r');
define('LOGGED_IN_SALT',   'vT#nDTYz%?)GrQDsq{9Js=?8EnVG`5u,F3ZV##h/Puoku5`,eW,D+fPXZ/NWA)dr');
define('NONCE_SALT',       'sSh0jGu.p8b$@ybK%LB/V~yuuC]${3HO{%T;j#sJu}f.<cRkTzMP<r0uge#[9fef');
/**#@-*/

/**
 * Prefix de taules per a la base de dades del WordPress.
 *
 * Pots tenir múltiples instal·lacions en una única base de dades usant prefixos
 * diferents. Només xifres, lletres i subratllats!
 */
$table_prefix  = 'wp_';


/**
 * Per a desenvolupadors: WordPress en mode depuració.
 *
 * Canvieu això si voleu que es mostren els avisos durant el desenvolupament.
 * És molt recomanable que les extensions i el desenvolupadors de temes facien servir WP_DEBUG
 * al seus entorns de desenvolupament.
 *
 * Per informació sobre altres constants que es poden utilitzar per depurar,
 * visiteu el còdex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// Això és tot, prou d'editar - que bloguis de gust!

/** Ruta absoluta del directori del Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Assigna les variables del WordPress vars i fitxers inclosos. */
require_once(ABSPATH . 'wp-settings.php');
