<?php
require("vendor/autoload.php");

use GuzzleHttp\Client;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$client = new Client();

//$res = $client->request('GET','http://unicorns.idioti.se/', ['headers' =>['Accept' => 'application/json']]);
//$data = json_decode($res->getBody());
//echo json_encode($data);

function getUnicorn($id){
$client = new Client();
$res = $client->request('GET','http://unicorns.idioti.se/' . $id , ['headers' =>['Accept' => 'application/json']]);
$data = json_decode($res->getBody());
return $data;
//return json_encode($data);
	
}
function getAllUnicorn(){
$client = new Client();
$res = $client->request('GET','http://unicorns.idioti.se/',['headers' =>['Accept' => 'application/json']]);
$data = json_decode($res->getBody());
return $data;
}


// Anropa URL: http://unicorns.idioti.se/


// Omvandla JSON-svar till datatyper


//echo json_encode($data);

//$log = new Logger('log');
//$log->pushHandler(new StreamHandler('unicornLog.log', Logger::INFO));
//$log->info(json_encode($data));
