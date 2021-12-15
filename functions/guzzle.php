<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->get('https://api.giphy.com/v1/gifs/trending?api_key=rVqooAAUbXsqtcG9FddZEn3MRKK9rXZX&limit=25&rating=g');

$data = $response->getBody();
var_dump($data);