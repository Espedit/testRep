<?php

ini_set('display_errors',1);

require  'C:\xampp\htdocs\composerproject\vendor\autoload.php';


use Monolog\Logger;

use Monolog\Handler\Streamhandler;

$log = new Monolog\Logger(__FILE__);

$log->pushHandler( new Monolog\Handler\Streamhandler('C:\xampp\htdocs\composerproject\app\classroom\error_collection\error.php',LOGGER::WARNING));


$log->error('Error example');



echo '<h1>Errors send file </h1>';












?>