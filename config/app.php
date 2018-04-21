<?php

/*--------------------------------------------------------------------------------------------------
 * Error reporting
 * TRUE for Development
 * FALSE for Production
 * -------------------------------------------------------------------------------------------------
 */
$config['development'] = env('APP_DEBUG', true);

/*--------------------------------------------------------------------------------------------------
 * Setting database
 * -------------------------------------------------------------------------------------------------
 */
$config['database']['connection']   = env('DB_CONNECTION', false); 
$config['database']['driver']       = env('DB_DRIVER', 'mysql');
$config['database']['host']         = env('DB_HOST', 'localhost');
$config['database']['username']     = env('DB_USER', 'root');
$config['database']['password']     = env('DB_PASSWORD', '');
$config['database']['dbname']       = env('DB_NAME', 'fylite');
