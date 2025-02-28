<?php
require_once './db/pdo.php';

function getCategories() {
    global $pdo; // toujours présent
    $sql = 'SELECT * FROM categories';
    // $sql = 'SELECT * FROM article';
    $stmt = $pdo->prepare($sql); // toujours présent
    $stmt->execute();

    // on fech ou fetchAll pour la lecture de données
    return $stmt->fetchAll();
}