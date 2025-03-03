<?php
require_once './db/pdo.php';
function addUser($username, $email, $password)
{
    global $pdo;

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, email, password, created_at) 
            VALUES (?, ?, ?, NOW())";

    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$username, $email, $passwordHash]);
}
?>