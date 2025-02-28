<?php include 'components/header.php'; ?>

<main class="container d-flex flex-column align-items-center justify-content-center px-5">
    <div class="container">

    <form action="" method="POST" class="border p-4 rounded shadow">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de l'Article</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <select class="form-select" id="categorie" name="categorie" required>
                <option value="">Choisir...</option>
                <option value="Technologie">Espresso</option>
                <option value="Science">Latte</option>
                <option value="Art">Cappucino</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Envoyer</button>
    </form>
    </div>
</main>










<?php include 'components/footer.php'; ?>