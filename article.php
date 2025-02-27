<?php
require_once 'db/db-article.php';
$article = getArticle($_GET['id']);

?>

<?php include 'components/header.php'; ?>

<h1>article</h1>

<!-- article.php -->
<main class="flex flex-column align-item-center">
    <section class="flex flex-column gap-80">
        <a href=""></a>
        <div class="articles-content">
            <?php if ($article) : ?>
                <?php include('./components/card-article.php'); ?>
            <?php else : ?>
                <p>Cet article n'existe pas...</p>
                <a href="/" class="btn">Retour à l'accueil</a>
            <?php endif ?>
    </section>
</main>

<?php include 'components/footer.php'; ?>