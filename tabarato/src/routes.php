<?php

require('mongo/connect.mongo.php');

// Routes

$app->get('/item', 'listItem');





function listItem ($request, $response, $args) {
    $db = getDB();
    $query = getQuery();

    $data = array('message' => 'list of items');
    header("Content-Type: application/json");
    echo json_encode($data);
    exit;
}


