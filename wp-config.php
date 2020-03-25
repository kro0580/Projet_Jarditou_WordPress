<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'jarditouwp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'p]{:Lc$!R2<]@AU^~Cw[)0(F3%odZ%{+/@`W*=F[!fT_Zj:0mE3^/ha^a?$*SF6u' );
define( 'SECURE_AUTH_KEY',  '{{d6kYd83Rr-+lZpYES/BF)C{Mt|Ws41-d%M&4c+LYDd(dD=q|V:}N4:_*h*RXoY' );
define( 'LOGGED_IN_KEY',    'pJ=3[,9.ESZ&KA#)/2MFLmS)5:Sf(r4vJ@>G1QZO?ySgx1/A(nW9]g?UQ^]0Q$k;' );
define( 'NONCE_KEY',        'vd`YMk{vAlu|HlN1-rnn>E,sF+)A`|uiP!j4%f;2K2eR/()1ju#3EXHG$-T8<zPG' );
define( 'AUTH_SALT',        'm><V>+TP|FPA}ALX[I` _ImBM^r?u&Y5{@X]?(2}!>+MHv+_zpP5Cq(Oqg)D#!+4' );
define( 'SECURE_AUTH_SALT', 'b6 3X{&j4dm3gQuk2bv=5P Xv!yv1t5k*d@jyfyEWV8ky&|h*S73SfS}.i.SyJHN' );
define( 'LOGGED_IN_SALT',   'b%$6jDheDlRj K@LxJMsm-p uoSYWYK>qK}!*)#u+.0fo S[G!XB)4t(3Yr*#qdi' );
define( 'NONCE_SALT',       '-MY!?~m1c]Px)<u|OVZ~J :C9^9EixT-NAr4GiUV)X=hn.fHEsLBP6D/T+73VUlB' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ja_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
