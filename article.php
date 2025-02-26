
<?php include 'components/header.php'; ?>

<h1>article</h1>

<!-- article.php -->
<main class="flex flex-column align-item-center">
    <section class="flex flex-column gap-80">
        <a href=""></a>
        <div class="articles-content">

            <?php
            for ($i = 0; $i < 9; $i++) {
                include('./components/card-article.php');
            }
            ?>
    </section>
</main>

    <?php include 'components/footer.php'; ?>