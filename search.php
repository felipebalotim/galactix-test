<?php

session_start();

require_once('app/controllers/SearchController.php');

$search = new SearchController();

$breedName = $_POST['breedName'];

$_SESSION['breed'] = $breedName;

$_SESSION['search'] = $search->search($breedName);

header('location: index.php');