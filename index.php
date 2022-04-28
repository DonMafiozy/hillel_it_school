<?php
include 'bootstrap.php';

use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://ithillel.ua/']);
$response = $client->request('GET', '/');
echo $response->getBody()->getContents();
