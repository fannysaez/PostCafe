<?php
require_once './db/pdo.php';

function getArticles()
{
    global $pdo;
    $sql = "SELECT articles.*, categories.name AS category_name, categories.color AS category_color
            FROM articles 
            LEFT JOIN categories ON articles.category_id = categories.id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getArticle($id)
{
    global $pdo;
    $sql = "SELECT articles.*, categories.name AS category_name, categories.color AS category_color
            FROM articles 
            LEFT JOIN categories ON articles.category_id = categories.id 
            WHERE articles.id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);

    $article = $stmt->fetch();
    return $article;
}

function getArticlesByCategory($category_id)
{
    global $pdo;
    $sql = "SELECT articles.*, category.name AS category_name, category.color AS category_color
            FROM articles 
            LEFT JOIN category ON articles.category_id = category.id
            WHERE articles.category_id = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$category_id]);
    return $stmt->fetchAll();
}
