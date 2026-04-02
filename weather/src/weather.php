<?php

$city = $_GET["city"] ?? 'Nice';
$apiKey = "da3228c8a75fa8352d4b84b9ce162a73"; // <------- AJOUTER VOTRE CLE API ICI

require '../vendor/autoload.php';

$client = new GuzzleHttp\Client();

try {
    $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [ 
        'query' => [
            'q' => $city, // Ville
            'appid' => $apiKey, // Clé API
            'units' => 'metric', // Unités en Celcius
            'lang' => 'fr' // Langue en français 🇫🇷🥸🥐🥖 CLAIR OBSCUR EXPEDITION 33
        ]
    ]);

    $data = json_decode($response->getBody(), true);

    echo json_encode($data);
} catch(Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?> 