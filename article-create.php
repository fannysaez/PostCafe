<?php
require_once './db/pdo.php';
require_once './db/db-categories.php';
require_once './db/db-article.php';
$categories = getCategory();
include 'components/header.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['titre'];
    $description = $_POST['description'];
    $content = $_POST['contenu'];
    $category_id = $_POST['category'];

    if (!empty($title) && ($description) && ($content) && $category_id) {

        if (addArticle($title, $description, $content, $category_id)) {
            $message = "Votre article à été ajouter avec succés";
        } else {
            $message = "Une erreur c'est produite";
        }
    } else {
        $message = "Tout les champs doivent être remplis.";
    }
}
?>


<main class="container d-flex flex-column align-items-center justify-content-center px-5">
    <h1> Formulaire création d'un article </h1>
    <div class="container">

        <form action="" method="POST" class="border p-4 rounded shadow">
            <div class="mb-5">
                <label for="titre" class="form-label">Titre de l'article</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="mb-5">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="mb-5">
                <label for="contenu" class="form-label">Contenu</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="3" required></textarea>
            </div>

            <div class="mb-5">
                <label for="category" class="form-label">Quelle est la catégorie de votre article ?</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="">Choisir...</option>
                    <?php foreach ($categories as $categorie): ?>
                        <option value="<?php echo $categorie['id']; ?>" style="color: <?php echo $categorie['color']; ?>;">
                            <?php echo $categorie['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Envoyer</button>
            <?php echo $message ?>
        </form>
    </div>
</main>

<?php include 'components/footer.php'; ?>