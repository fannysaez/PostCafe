<?php
require_once './db/pdo.php';

function getArticles()
{
    global $pdo;
    $sql = "SELECT * FROM articles";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $articles = $stmt->fetchAll();
    return $articles;
}

function getArticle($id)
{
    global $pdo;
    $sql = "SELECT * FROM articles WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);

    $article = $stmt->fetch();
    return $article;
}
