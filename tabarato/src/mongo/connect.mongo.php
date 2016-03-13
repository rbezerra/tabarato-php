<?php

function getDB() {
  $dbhost = 'http://localhost:27017';
  $dbuser = '';
  $dbpasswd = '';
  $dbname = 'tabarato';

  try{
    $manager = new MongoDB\Driver\Manager();
  }catch(MongoConnectionException $e){
    die('Error'. $e->getMessage());
  }

  return $manager;
}

function getQuery($filter, $options){
  $query = new MongoDB\Driver\Query($filter, $options);
  return $query;
}


?>
