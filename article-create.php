<?php
require_once './db/pdo.php';
require_once './db/db-categories.php';
$categories = getCategories();
include 'components/header.php';

?>


<main class="container d-flex flex-column align-items-center justify-content-center px-5">
    <h1> Formulaire création d'un article </h1>
    <div class="container">

        <form action="" method="POST" class="border p-4 rounded shadow">
            <div class="mb-3">
                <label for="nom" class="form-label">Le titre de votre article</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Le contenu de votre article</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="categorie" class="form-label">Quelle est la catégorie de votre article ?</label>
                <select class="form-select" id="categorie" name="categorie" required>
                    <option value="">Choisir...</option>
                    <?php foreach ($categories as $categorie): ?>
                        <option value="<?php echo $categorie['id']; ?>" style="color: <?php echo $categorie['color']; ?>;">
                            <?php echo $categorie['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Envoyer</button>
        </form>
    </div>
</main>










<?php include 'components/footer.php'; ?>