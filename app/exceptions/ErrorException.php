<?php

class ErrorException
{
    public function error($statusCode) {
        switch ($statusCode) {
            case 404:
                return [
                    'statusCode' => 404,
                    'message' => 'Raça não encontrada',
                ];
                break;
        }
    }
}
