<?php
namespace Ugc\Comment;

use \GuzzleHttp\Client;

class Index
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function list()
    {
        $url = config('comment.url');
        $response = $this->client->get($url, ['query' => [
            'time' => time(),
            'type' => 0,
            'sort' => 0,
            'questionIds' => '[21835,46112,71595]',
            'tableType' => 0,
        ]]);
        $result = [];
        if($response->getStatusCode() == 200) {
            $result = json_decode($response->getBody()->getContents(), true);
        }
        return $result;
    }
}