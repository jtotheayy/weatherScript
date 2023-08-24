<?php
$env = parse_ini_file('.env');
$apiKey = $env['API_KEY'];

header('Content-Type: application/json');
echo json_encode(['apiKey' => $apiKey]);
?>