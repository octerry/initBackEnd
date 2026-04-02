<?php 

// API WANKUL -> https://wankul.fr/apps/proxy/api/wankuldex/cards

require '../vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://wankul.fr/apps/proxy/api/wankuldex/cards');
echo $res->getStatusCode();
// "200"
echo "<br/>";
// echo $res->getBody();
$cards = json_decode($res->getBody());
print_r($cards[0]);

?>