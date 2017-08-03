<?php

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://httpbin.org']);
$serialNo = '300078';

$result = $client->request('GET', 'http://apps.myimmersun.com/cgi-json-live&SN=' . $serialNo, [
    'auth' => ['ellisorgan@icloud.com', 'business01', 'digest']
]);

print '<pre>' . $result . '</pre>';