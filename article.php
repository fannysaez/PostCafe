<?php
require_once './db/db-article.php';
require_once './db/db-comments.php';

$article = getArticle($_GET['id']);

$comments = getComments($_GET["id"]);
include 'components/header.php';
?>

<!-- article.php -->
<main class="container py-lg-4 justify-content-center align-items-center">
    <section class="container mt-5 py-5 mb-3">
        <div class="card mb-3 py-0 mb-3">
            <span style="background-color: <?php echo $article['category_color']; ?>;" class="badge rounded-pill"><?php echo $article['category_name']; ?></span>
            <h1 class="card-header text-center"><?php echo $article['title']; ?></h1>

            <div class="row g-0 py-4 mb-3">
                <!-- Colonne pour l'image -->
                <div class="col-md-4 justify-content-center center-image">
                    <img src="<?php echo $article['img_cover']; ?>" style="max-width: 300px" class="card-img-top rounded img-fluid mx-auto d-block py-5">
                </div>
                <!-- Colonne pour la description -->
                <div class="col-md-8 py-1">
                    <div class="card-body">
                        <p class="card-text text-justify"><?php echo $article['content']; ?></p>
                    </div>
                </div>
            </div>
            <p class="cardcard-date text-end mb-3 me-3" style="margin-right: 20px;"> <?php echo $article['description']; ?></p>
            <p class="card-date text-end" style="margin-right: 20px;"><?php echo $article['created_at']; ?></p>
            </p>
        </div>
    </section>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Commentaires</h1>
            </div>
            <?php foreach ($comments as $comment): ?>
                <div class="card">
                    <div class="card-body">
                        <p><strong>
                                <?php echo $comment["username"] ?></strong></p>
                        <p><?php echo $comment["content"] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php include 'components/footer.php'; ?>