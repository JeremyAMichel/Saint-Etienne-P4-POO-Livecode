<?php
include_once '../utils/bdd.php';
include_once '../utils/autoloader.php';

$dogRepository = new DogRepository($pdo);

$dog = $dogRepository->findById(1);

echo $dog->getNom();

$dogRepository->insert(5, "fihhi", "yugd", "hfjdsbj");