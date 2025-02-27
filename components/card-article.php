<?php
require_once "db/db-article.php"


?>

<div class="col-md-6 col-lg-4 mb-4">
    <div class="card">
        <img src="<?php echo $article['img_cover']; ?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?php echo $article['title']; ?></h5>
            <p class="card-text text-secondary"><?php echo $article['description']; ?></p>
            <p class="card-description"><?php echo $article['content']; ?></p>
            <p class="card-creator"><?php echo $article['created_at']; ?></p>
            <a href="article.php?id=<?php echo $article['id']; ?>" class="border btn btn-light">Ouvrir l'article</a>
        </div>
    </div>
</div>