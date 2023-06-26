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
define( 'AUTH_KEY',         'upU@_jK1r9+<CFHUY_/Ot2VsT&^q/U1+y:M6s]5nI56VRx7Oz_|n%NtNO+YZp;Kj' );
define( 'SECURE_AUTH_KEY',  '[,(I85/$33rExeNa}]3<[[NPP1:uVqpJZOK453m]PF*_L^-DfI~>|~Z&Dw|dd]Sl' );
define( 'LOGGED_IN_KEY',    '?8{1(d7&(!YkZbr=*31L>Zc.k?s2e0%u=#`.xAX9C3rb,~MLw:zIa_1S%dZzrL%v' );
define( 'NONCE_KEY',        'y^X5GelCvfwui>E+Gw;j)x?A;Rt$/vP!aFJ,[zgh_,5QUG=6l}vx *7,83nMJBH]' );
define( 'AUTH_SALT',        'rE|cN+;`4Km|UobH|)BID`AEJ2CzmMd`{d7n,Nl6OvY_#YAnXXeKn~FPSmH]WWK/' );
define( 'SECURE_AUTH_SALT', '=H_JvTZZiRC?]udWDr)6whS=`;KKa17czn.G%:0_/e;YE Pd.r/J}376rjv+GgJh' );
define( 'LOGGED_IN_SALT',   'uX+N`KpJ)rc2t)GB]<z!/KN1Nf|D,X!FxNo[QP@W4T2 ,d7pc?:kx(A6TGUA^f43' );
define( 'NONCE_SALT',       '*v?IR)eI}rYT@Esiz`}>S# X^)JK|V=fw]b_}RX}aLWJ`,c.jru~U`?SHViB&q!Z' );
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
