<?php
require_once 'db/pdo.php';

/**
 * Permet de récupérer tous les articles de la base de données
 * @return array
 */
function getArticles()
{
    global $pdo;
    $sql = "SELECT * from articles";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $articles = $stmt->fetchAll();
    return $articles;
}

function getArticle(int $id)
{
    global $pdo;
    $sql = "SELECT * from article"; // a faire !!!
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);

    $article = $stmt->fetch();
    return $article;
}
