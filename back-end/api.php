<?php
header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Headers: X-Requested-With');
$testObj = [
    [
        "en" => "hello world",
        "it" => "ciao mondo",
    ]

];

header('Content-Type: application/json');

echo json_encode($testObj);