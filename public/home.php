<?php
include_once '../utils/bdd.php';
include_once '../utils/autoloader.php';

$query = "SELECT * FROM dog WHERE id = :id";

try {
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':id' => 1
    ]);
    $dogData = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($dogData);
} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

$dogMapper = new DogMapper();

var_dump($dogMapper);

$dog = $dogMapper->mapToObject($dogData);

var_dump($dog);

echo $dog->getNom();