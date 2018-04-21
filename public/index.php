<?php

/**
 * FYLite - Mini MVC framework for small application. Lite, simple and easy to use.
 *
 * @author   Mohammad Robih T. Z <biobii.game@gmail.com>
 * 
 * Github - https://github.com/biobii/fylite
 * 
 */

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

require __DIR__ . '/../bootstrap/container.php';