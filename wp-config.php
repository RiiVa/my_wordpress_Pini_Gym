<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '_OQ~&FIs.5GgY/.4.&6uQ|O~Tp`c+FR|wDL7w%)Y5w[.E|X(,}F.aK]SK`[F`9+2' );
define( 'SECURE_AUTH_KEY', 'U<];]GZ:>&CYK=(Zmnk95q$&d.=8cHX+tcDCMQ1SivrEB.Z}67NnSZ0(p+-?}N2$' );
define( 'LOGGED_IN_KEY', 'OYQUP&RJ/PGLxROn&($l_Z,).Q?GqsP4<<J_FLcvQyqAk[7nA4RCeRh8^s8+>:S*' );
define( 'NONCE_KEY', '&$w9`=6oXV6w^U^H,{wm>j=}]25}E.hSO>w2r,kgW ~+x%67U@_=FUkqZn,_2o>K' );
define( 'AUTH_SALT', '91NMfOL)xMVrw[RrCVm gddba!P5,N)VG_}2MNBb[8K7ZQGL|6K[I+u_#Vp%b8,[' );
define( 'SECURE_AUTH_SALT', '::}4RJ|Ei/IlDp>(A!C]H|%-J<u*aVUyS# HO$M[O|s]J?R[3@yi4=nsi,#4UcB)' );
define( 'LOGGED_IN_SALT', ']tAYaj~4tT:qzaT_nQC_wty=sz1}wBi:lRcp~>+59/:c;*hYn<^Qhq,i|lsNIdyj' );
define( 'NONCE_SALT', 'd`8t,li69*CZ5kwD{+i?W2<#@Qy-z)V:G30 Xm~26o6e2qp4x CM_`qToE49SOFT' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

