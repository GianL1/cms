<?php 
require "vendor/autoload.php";
require "config.php";

session_start();
use \Core\Core;

$c = new Core();
$c->run();