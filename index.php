<?php
require("vendor/autoload.php");
require("template");

use GuzzleHttp\Client;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

include('template.html');
// Skapa en HTTP-client
$client = new Client();

// Anropa URL: http://unicorns.idioti.se/
$res = $client->request('GET','http://unicorns.idioti.se/1',['headers' =>['Accept' => 'application/json']]);

// Omvandla JSON-svar till datatyper
$data = json_decode($res->getBody());

//echo json_encode($data);

$log = new Logger('log');
$log->pushHandler(new StreamHandler('unicornLog.log', Logger::INFO));
$log->info(json_encode($data));

