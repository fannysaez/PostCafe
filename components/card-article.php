<div class="col-md-3 mb-4">
    <div class="card" style="width: 18rem;">
        <img src="/assets/img/articles/ <?php echo $article["/assets/img/articles"] ;?>" class="card" alt=<?php echo $article["/assets/img/articles"]; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $article['title'] ?></h5>
            <p class="card-text text-secondary"><?php echo $article['description'] ?></p>
            <p class="card-description"><?php echo $article['content']; ?></p>
            <p class="card-creator"><?php echo $article['created_at']; ?></p>
            <a href="pages/single.php?id=<?php echo $id ?>" class="border btn btn-light">Ouvrir l'article</a>
        </div>
    </div>
</div>