<?php
require 'vendor/autoload.php';
//require __DIR__ . '/vendor/autoload.php';

//$client = new MongoDB\Client("mongodb://localhost:27017");

//$companydb = $client -> companydb;

$collection = (new MongoDB\Client)->companydb->staffCollection;

$cursor = $collection->find(['name' => 'Admin User']);
  $userName = '';
foreach ($cursor as $document) {
    $userName .= $document['username'].",". "<br/>";
     
}
$finalUser = $userName;
$outlength = strlen($finalUser);
echo $outlength;
echo rtrim($finalUser, ',');


?>