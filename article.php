<?php
require_once 'db/db-article.php';
$article = getArticle($_GET['id']);

?>

<?php include 'components/header.php'; ?>

<!-- article.php -->
<main class="d-flex py-lg-4 justify-content-center align-items-center">
        <?php if ($article) : ?>
            <?php include('./components/card-article.php'); ?>
        <?php else : ?>
            <p>Cet article n'existe pas...</p>
            <a href="/" class="btn">Retour à l'accueil</a>
        <?php endif ?>
</main>

<?php include 'components/footer.php'; ?>