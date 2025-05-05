<?php

/*
 * ==========================================================
 * INITIAL CONFIGURATION FILE
 * ==========================================================
 *
 * Insert here the information for the database connection and for other core settings.
 *
 */

/* Plugin folder url */
define('SB_URL', 'https://supportboard.tandempartner.org/supportboard');

/* The name of the database */
define('SB_DB_NAME', 'd04399c2');

/* MySQL database username */
define('SB_DB_USER', 'd04399c2');

/* MySQL database password */
define('SB_DB_PASSWORD', '9AEwcWHpNxyJkh8Fx5mm');

/* MySQL hostname */
define('SB_DB_HOST', 'localhost');

/* MySQL port (optional) */
define('SB_DB_PORT', '');

/* [extra] */

// Load custom modules
if (file_exists(__DIR__ . '/../modules/modules.php')) {
    require_once(__DIR__ . '/../modules/modules.php');
}

?>