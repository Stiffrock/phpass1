<?php
require("vendor/autoload.php");

use GuzzleHttp\Client;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$client = new Client();


function getUnicorn($id)
{
	$client = new Client();
	$res = $client->request('GET','http://unicorns.idioti.se/' . $id , ['headers' =>['Accept' => 'application/json']]);
	$data = json_decode($res->getBody());
	$log = new Logger('log');
	$log->pushHandler(new StreamHandler('unicornLog.log', Logger::INFO));
	$logData = "Requested info about: ".$data->name;
	$log->info(json_encode($logData));
	return $data;
}

function getAllUnicorn()
{
	$client = new Client();
	$res = $client->request('GET','http://unicorns.idioti.se/',['headers' =>['Accept' => 'application/json']]);
	$data = json_decode($res->getBody());
	$log = new Logger('log');
	$log->pushHandler(new StreamHandler('unicornLog.log', Logger::INFO));
	$logData = "Requested info about unicorns";
	$log->info(json_encode($logData));
	return $data;
}



