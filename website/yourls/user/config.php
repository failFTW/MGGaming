<?php
/* This is a sample config file.
 * Edit this file with your own settings and save it as "config.php"
 */

/*
 ** MySQL settings - You can get this info from your web host
 */

/** MySQL database username */
define( 'YOURLS_DB_USER', 'mggaming_YOURLS' );

/** MySQL database password */
define( 'YOURLS_DB_PASS', 'Links123' );

/** The name of the database for YOURLS */
define( 'YOURLS_DB_NAME', 'mggaming_LINKS' );

/** MySQL hostname.
 ** If using a non standard port, specify it like 'hostname:port', eg. 'localhost:9999' or '127.0.0.1:666' */
define( 'YOURLS_DB_HOST', 'localhost' );

/** MySQL tables prefix */
define( 'YOURLS_DB_PREFIX', 'yourls_' );

/*
 ** Site options
 */

/** YOURLS installation URL -- all lowercase and with no trailing slash.
 ** If you define it to "http://site.com", don't use "http://www.site.com" in your browser (and vice-versa) */
define( 'YOURLS_SITE', 'http://go.failftw.info' );

/** Timezone GMT offset */
define( 'YOURLS_HOURS_OFFSET', -5 ); 

/** YOURLS language or "locale".
 ** Change this setting to "localize" YOURLS (use a translation instead of the default English). A corresponding .mo file
 ** must be installed in the user/language directory.
 ** See http://yourls.org/translations for more information */
define( 'YOURLS_LANG', '' ); 

/** Allow multiple short URLs for a same long URL
 ** Set to true to have only one pair of shortURL/longURL (default YOURLS behavior)
 ** Set to false to allow multiple short URLs pointing to the same long URL (bit.ly behavior) */
define( 'YOURLS_UNIQUE_URLS', true );

/** Private means the Admin area will be protected with login/pass as defined below.
 ** Set to false for public usage (eg on a restricted intranet or for test setups)
 ** Read http://yourls.org/privatepublic for more details if you're unsure */
define( 'YOURLS_PRIVATE', true );

/** A random secret hash used to encrypt cookies. You don't have to remember it, make it long and complicated. Hint: copy from http://yourls.org/cookie **/
define( 'YOURLS_COOKIEKEY', 's({XWBM(H]}MT6BqPfmU&SSt2S|ds2q$67djtC6t' );

/** Username(s) and password(s) allowed to access the site. Passwords either in plain text or as encrypted hashes
 ** YOURLS will auto encrypt plain text passwords in this file
 ** Read http://yourls.org/userpassword for more information */
$yourls_user_passwords = array(
	'Admin' => 'phpass:!2a!08!wJfSewBo8szyPHdvpgfate6rZsCZ0kEl2WEf00npJJ/5MZjfiGJ8S' /* Password encrypted by YOURLS */ , // You can have one or more 'login'=>'password' lines
	);

/** Debug mode to output some internal information
 ** Default is false for live site. Enable when coding or before submitting a new issue */
define( 'YOURLS_DEBUG', false );
	
/*
 ** URL Shortening settings
 */

/** URL shortening method: 36 or 62 */
define( 'YOURLS_URL_CONVERT', 62 );
/*
 * 36: generates all lowercase keywords (ie: 13jkm)
 * 62: generates mixed case keywords (ie: 13jKm or 13JKm)
 * Stick to one setting. It's best not to change after you've started creating links.
 */

/** 
* Reserved keywords (so that generated URLs won't match them)
* Define here negative, unwanted or potentially misleading keywords.
*/
$yourls_reserved_URL = array(
	'porn', 'faggot', 'sex', 'nigger', 'fuck', 'cunt', 'dick', 'gay',
);

/*
 ** Personal settings would go after here.
 */

