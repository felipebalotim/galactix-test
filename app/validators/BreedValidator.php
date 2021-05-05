<?php

require_once(APP_DIR . '/exceptions/BreedException.php');

class BreedValidator
{

    private $breedException;

    public function __construct()
    {
        $this->breedException = new BreedException();

    }

    public function breedNameValidator($breedName)
    {
        
        if (!is_string($breedName))
        {
            return $this->breedException->breedNameException($breedName, 'string');
        }

        return;
    }
}
