<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4D(A]%1>4s<~UeY6}-:HocZA_/r^o17j}--1~kQ55T0].OcI{nNp2PI7*B$p$E55' );
define( 'SECURE_AUTH_KEY',  '0./~+d.W{Z%`([d-,%sV63;iOJ&o5uULYd>N~u[@E~uAq5zG2 Iizd)AJM(C3:r4' );
define( 'LOGGED_IN_KEY',    '*80&vOD)kNH!<Ue/E]d;p!AEA=pqtA}3TN<].CFal}p,~vqqcS}/Ze>1?3FaFoG]' );
define( 'NONCE_KEY',        'Ocy@2p!v@s{H!1S)ml-e}|IO_o2;L6 de~!>n-(nGm?}wLIz9?!>g_QkdPWg79XF' );
define( 'AUTH_SALT',        'Zad-Rw&*$NP{%Pe>b?(3,RM|b!<&_AA=Nwx1:.@@$<ER>m.uepd8X,k@Dm2eGYZT' );
define( 'SECURE_AUTH_SALT', 'xn+&98dq{E/XtoN^3C?jWc][J4f/qs?7-_aJ yp?P&&ul(,)q|TzG;NRSd@!>Zi.' );
define( 'LOGGED_IN_SALT',   '<u}+Wnf6wbjB=az1rcYw`4D_Jh*f_V^sw0kK.(V-zw$s<T:c.,Vi+tLmyQ,^Q!Dp' );
define( 'NONCE_SALT',       '%Xqup]GZQZZDo}J.5S@>g9}>~!6=QxJ<PKI6-DHcU:^4At~1&*o3u[3r9QIU}+T]' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
