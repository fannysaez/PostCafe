<?php
require_once './db/pdo.php';
require_once './db/db-user.php';
include 'components/header.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Vérifier que tous les champs sont remplis
    if (!empty($username) && !empty($email) && !empty($password)) {
        
        // Ajouter l'utilisateur en base de données
        if (addUser($username, $email, $password)) {
            $message = '<div class="alert alert-success">Inscription réussie !</div>';
        } else {
            $message = '<div class="alert alert-danger">Erreur lors de l\'inscription. Veuillez réessayer.</div>';
        }
    } else {
        $message = '<div class="alert alert-warning">Veuillez remplir tous les champs.</div>';
    }
}
?>

<main class="container d-flex flex-column align-items-center justify-content-center px-5 mt-5">
    <h3>Bienvenue ici</h3>
    <div class="container">
        <form action="" method="POST" class="border p-4 rounded shadow">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-dark">Inscrivez-vous</button>
                    <!-- Affichage du message ici -->
            <?php if (!empty($message)) echo $message; ?>
        </form>
    </div>
</main>

<?php include 'components/footer.php'; ?>
