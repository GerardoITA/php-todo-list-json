<?php
header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Content-Type: application/json');

$todojson = file_get_contents("todo.json");

echo $todojson









/* $todolist = json_decode($todojson, true);

echo json_encode($todolist); */





?>