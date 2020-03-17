<?php

require "environment.php";
$config = array();
global $config;

if(ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/php/cms/");
    $config['dbname'] = "cms";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = '';
}else {
    define("BASE_URL", "http://localhost/php/cms/");
    $config['dbname'] = "cms";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = '';
}