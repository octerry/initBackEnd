<?php

require '../vendor/autoload.php';

$client = new GuzzleHttp\Client();

try {
    $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
        'query' => [
            'q' => 'Nice', // Ville
            'appid' => 'da3228c8a75fa8352d4b84b9ce162a73', // Clé API
            'units' => 'metric', // Unités en Celcius
            'lang' => 'fr' // Langue en français 🇫🇷🥸🥐🥖 CLAIR OBSCUR EXPEDITION 33
        ]
    ]);

    $data = json_decode($response->getBody(), true);

    echo "Météo à " . $data['name'] . " : " . $data["weather"][0]["description"] . "<br>";
    echo "Température : " . $data["main"]["temp"] . "°C<br>";
    echo "Humidité : " . $data["main"]["humidity"] . "%<br>";
} catch(Exception $e) {
    echo "Erreur : " . $e->getMessage();
} 

?>