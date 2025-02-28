<?php
require_once "db/db-article.php";

$articles = getArticles();
?>

<?php foreach ($articles as $article) : ?>
    <div class="article-card col-md-6 col-lg-4 px-5 ">
        <div class="card">
            <img src="<?php echo $article['img_cover']; ?>" class="card-img-top" alt="">
            <div class="card-body">
                <div>
                    <span style="background-color: <?php echo $article['category_color']; ?>;" class="badge rounded-pill"><?php echo $article['category_name']; ?></span>
                    <h5 class="card-title"><?php echo $article['title']; ?></h5>
                    <p class="card-text text-secondary"><?php echo $article['description']; ?></p>
                    <p class="card-description"></p>
                    <p class="card-creator"><?php echo $article['created_at']; ?></p>
                </div>
                <a href="article.php?id=<?php echo $article['id']; ?>" class="border btn btn-dark">Ouvrir l'article</a>
            </div>
        </div>
    </div>
<?php endforeach ?>