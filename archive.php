<?php
//Ici créer la variable articles

// " Pour chaque article" -- foreach
// faire une card bootstrap
require_once 'db/db-article.php';

$articles = getArticles();

?>


<?php include 'components/header.php'; ?>


<main class="d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
                <?php include 'components/card-article.php'; ?>
        </div>
    </div>
</main>

<!-- Liste de cards boostrap par article -->



<!-- Une card par article -->


<?php include 'components/footer.php'; ?>