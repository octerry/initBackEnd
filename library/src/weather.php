<?php

$apiKey = "da3228c8a75fa8352d4b84b9ce162a73";
$city = $_GET["city"] ?? 'Nice';
$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metrics&lang=fr";

$response = file_get_contents($url);
if ($response === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Erreur lors de la récupération des données.']);
    exit;
}

header('Content-Type: application/json');
echo $response;

?>