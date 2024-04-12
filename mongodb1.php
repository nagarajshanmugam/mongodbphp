<?php
require 'vendor/autoload.php';
//require __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017"); //connection

$companydb = $client -> companydb; //create a database if that connection is true

$result1 = $companydb -> createCollection('staffCollection'); //Create a collection inside that database

var_dump($result1); // store the result


?>