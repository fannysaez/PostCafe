<?php
require_once './db/pdo.php';
require_once './db/db-user.php';
include 'components/header.php';

$message = ""; // Variable pour stocker le message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification des champs (ajoute tes propres validations)
    if (!empty($username) && !empty($email) && !empty($password)) {

// Ici, ajoute du code pour enregistrer dans la base de données
       if (addUser($username, $email, $password)) {

         // Affichage d'un message de succès
            $message = '<div class="alert alert-success">Inscription réussie !</div>';
            exit;
        } else {
            $message = '<div class="alert alert-danger">Erreur lors de l\'inscription. Veuillez réessayer.</div>';
        }
    } else {
        $message = '<div class="alert alert-warning">Veuillez remplir tous les champs.</div>';
    }
}
?>


<main class="container d-flex flex-column align-items-center justify-content-center px-5 mt-5">
    <h3>Bienvenue ici </h3>
    <div class="container">

        <form action="register-user.php" method="POST" class="border p-4 rounded shadow">
            <div class="mb-5">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-5">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-dark">Inscrivez-vous</button>
            <?php echo $message; ?>

        </form>
    </div>
</main>



<?php include 'components/footer.php'; ?>