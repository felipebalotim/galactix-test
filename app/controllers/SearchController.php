<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/app/config/config.php');

require_once(APP_DIR . '/services/DogApiService.php');
require_once(APP_DIR . '/validators/BreedValidator.php');

class SearchController
{
    
    private $dogApiService;
    private $validator;

    public function __construct()
    {
        $this->dogApiService = new DogApiService();
        $this->validator = new BreedValidator();

    }

    public function search($breedName)
    {
        $validate = $this->validator->breedNameValidator($breedName);

        if (!empty($validate)) {
            return $validate;
        }

        $data = $this->dogApiService->request($breedName);

        return $data;
    }
}
