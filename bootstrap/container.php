<?php
session_start();

require __DIR__ . '/../config/app.php';

// display error message
if ($config['development']) {
    error_reporting(E_ALL);
    error_reporting(1);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

/*-----------------------------------------
 * Start running route
 * ----------------------------------------
 */
require __DIR__ . '/../config/router.php';