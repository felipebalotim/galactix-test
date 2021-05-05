<?php

class BreedException
{
    public function breedNameException($breedName, $type) {
        switch ($type) {
            case 'string':
                return [
                    'statusCode' => 422,
                    'message' => $breedName . ' não é um nome válido!',
                ];
                break;
        }
    }
}
