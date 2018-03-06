<?php
session_start();

require __DIR__ . '/../config/app.php';

// display error message
$config['development'] ? error_reporting(1) : error_reporting(0);

/*-----------------------------------------
 * Start running route
 * ----------------------------------------
 */
require __DIR__ . '/../config/router.php';