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
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         'F&Ef41uJA+}/ .ylFyIdL8:C_W{Bt<E7<.D}xJRs:j,>[#P^Ay,Nv;A3<3tv[;eU' );
define( 'SECURE_AUTH_KEY',  'Z!biS1hM!Dmb,] o}+:Ps7dT],AyIi9D#,8WX$x1rjE-z,<9qi?hxagjHy/T15^u' );
define( 'LOGGED_IN_KEY',    'lFH4Z?)^52m[2>WG~|#cBV&QJ{A^4DW](C(P/wV ZP~!g-[1R8kl49&N,dT|Z`;T' );
define( 'NONCE_KEY',        'cLb6N+|=|I&$k6Qh&Sk^J$;iIw?BlG$9[((~d@s}yb.c,g_w{W4,bHBT_=27]Unf' );
define( 'AUTH_SALT',        ' %lD=BTT^P~|I}9Q#B.{B1 99z&.srqYj+D3]We{J%@ wP{CXo?!;8m:jebyY,Rr' );
define( 'SECURE_AUTH_SALT', 'iBlIrCngX`S{ipzO)50JLs#>c~w{(MZyrYbqa)@#OCERQUK,d]/NrP*,3_0lspo`' );
define( 'LOGGED_IN_SALT',   'aEV<5z>]^rz %voTyG94{+O)%B17u{n+pa3Tt=A>w9|8piToi!]q-J?v3#]~WxgP' );
define( 'NONCE_SALT',       'ZRw@,BwJ2Z6o^o4jR}2&loi.u~<3zCB4yJpAJOXcMtjYb@]:)w-1PZ7:S#j8*T6.' );
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
