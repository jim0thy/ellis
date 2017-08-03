<?php

namespace App;

use GuzzleHttp\Client;

class Immsersun
{
    /**
     * @var string
     */
    private $serialNo;
    /**
     * @var string
     */
    private $userId;
    /**
     * @var string
     */
    private $password;
    /**
     * @var Client
     */
    private $client;

    /**
     * Immsersun constructor.
     *
     * @param string $serialNo
     * @param string $userId
     * @param string $password
     */
    public function __construct($serialNo, $userId, $password)
    {
        $this->serialNo = $serialNo;
        $this->userId = $userId;
        $this->password = $password;
        $this->client = new Client(['base_uri' => 'http://apps.myimmersun.com']);
    }

    /**
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getData()
    {
        return $this->client->request('GET', '/cgi-json-live&SN=' . $this->serialNo, [
            'auth' => [$this->userId, $this->password, 'digest']
        ])->getBody();
    }
}