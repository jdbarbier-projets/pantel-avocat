<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db605163046');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo605163046');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'l9kAoZ1F');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'db605163046.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K.w<^Ld9spFnzRF(BFWUmMle(~8+{TB)(oMu./uXQ!{=:;wI0n=Qc&O`>oADR>DE');
define('SECURE_AUTH_KEY',  'eK f7%s^7-m6/r/Pt-]X~ +rPplK@6borc{5n[7@ac}4Kg+N}//GCGTy]%N&,c3(');
define('LOGGED_IN_KEY',    '+jV+]_TJs41d[SjS)@3hnackp?k.HQ,5&WD|9J+(buw-KOOXqnrN*MB|6j78&rKD');
define('NONCE_KEY',        ':YO:b$m|eTdJP-#k?)8FQdr poN_8sJ;p$#7G-O-sr98B/n--T<7^|j @h.~V-sJ');
define('AUTH_SALT',        ';H|r-eNV`CTTWwX~~,Mv*mO$J$|^vK<L8r[A4v[$S#r:^1j^#])rT.9$v}0zrv0d');
define('SECURE_AUTH_SALT', 'b<U@[;vFf-F*9f*lpK-++0iO0zb%j45Cbj1J5p-??<:*{|iY.KXN.PCt<(F}I;IQ');
define('LOGGED_IN_SALT',   'MV!wQc {1EK%2/l P+D.ilHEts|/E1n]0pR+j^LtMHFokZ++dIRUyaOZ]-,a:i D');
define('NONCE_SALT',       '8QXoC]u:u334-7(M.ivgrrT{{e+ YXLBX(UVZ_~DS=^~<[I<uju2S. |n k-RO?d');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');