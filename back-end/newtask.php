<?php
header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Content-Type: application/json');

$newTodo = $_GET['newTodo'];

$todojson = file_get_contents("todo.json");
$todoList = json_decode($todojson);

$todoList[] = [
    "text" => $newTodo,
    "completed" => false
];
$todojson = json_encode($todoList);
file_put_contents('todo.json', $todojson);







?>