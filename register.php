<?php
require_once './db/pdo.php';
include 'components/header.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $created_at = $_POST['created_at'];

    if (!empty($username) && ($email) && ($password) && $created_at) {

        if (addArticle($username, $email, $password, $created_at)) {
            $message = "Connexion avec succés";
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    } else {
        $message = "Tout les champs doivent être remplis.";
    }
}
?>





<?php include 'components/footer.php'; ?>

<main class="container d-flex flex-column align-items-center justify-content-center px-5 mt-5">
    <h3>Bienvenue ici </h3>
    <div class="container">

        <form action="" method="POST" class="border p-4 rounded shadow">
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
        </form>
    </div>
</main>

<?php include 'components/footer.php'; ?>