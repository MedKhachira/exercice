<?php

namespace FootballBundle\Football;

use GuzzleHttp\Client;
use JMS\Serializer\Serializer;

class Football
{
    private $footballClient;
    private $serializer;
    private $apiKey;

    public function __construct(Client $footballClient, Serializer $serializer, $apiKey)
    {
        $this->footballClient = $footballClient;
        $this->serializer = $serializer;
        $this->apiKey = $apiKey;
    }

    public function getTeamsByLigue($ligue)
    {
        if(empty($ligue)){
            return array();
        }
        $uri = '/api/v1/json/'.$this->apiKey.'/search_all_teams.php?l='.$ligue;
        $response = $this->footballClient->get($uri);
        $data = $this->serializer->deserialize($response->getBody()->getContents(), 'array', 'json');
        return $data;
    }

    public function getPlayersByTeam($team)
    {
        $uri = '/api/v1/json/'.$this->apiKey.'/searchplayers.php?t='.$team;
        $response = $this->footballClient->get($uri);
        $data = $this->serializer->deserialize($response->getBody()->getContents(), 'array', 'json');
        return $data;
    }
}