
<div class="col-md-3 mb-4">
    <div class="card" style="width: 18rem;">
        <img src="/assets/img/articles/<?php echo $article['img_cover']; ?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?php echo $article['title']; ?></h5>
            <p class="card-text text-secondary"><?php echo $article['description']; ?></p>
            <p class="card-description"><?php echo $article['content']; ?></p>
            <p class="card-creator"><?php echo date('d/m/Y H:i', strtotime($article['created_at'])); ?></p>
            <a href="article.php?id=<?php echo $article['id']; ?>" class="border btn btn-light">Ouvrir l'article</a>
        </div>
    </div>
</div>