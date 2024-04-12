<?php
require 'vendor/autoload.php';
//require __DIR__ . '/vendor/autoload.php';

//$client = new MongoDB\Client("mongodb://localhost:27017");

//$companydb = $client -> companydb;

$collection = (new MongoDB\Client)->companydb->staffCollection;

$insertOneResult = $collection->insertOne([
    'username' => 'Suresh',
    'email' => 'suresh@example.com',
    'name' => 'Admin User',
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());


?>