<?php

class DogApiService
{
    public function __construct() { }

    function request($breedName)
    {
        $uri = 'https://dog.ceo/api/breed/' . str_replace(' ', '-', $breedName) . '/images/random';
        
        $response = @file_get_contents($uri);

        return json_decode($response);
    }
}