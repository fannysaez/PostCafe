<?php
//Ici créer la variable articles

// " Pour chaque article" -- foreach
// faire une card bootstrap
require_once 'db/db-article.php';

$articles = getArticles();

?>


<?php include 'components/header.php'; ?>



<div class="container">
    <?php foreach ($articles as $article) : ?>
        <?php include 'components/card-article.php'; ?>
    <?php endforeach ?>
</div>

<!-- Liste de cards boostrap par article -->



<!-- Une card par article -->


<?php include 'components/footer.php'; ?>