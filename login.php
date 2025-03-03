<?php
include 'components/header.php';
?>


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


            <button type="submit" class="btn btn-dark">Connectez-vous</button>
        </form>
    </div>
</main>

<?php include 'components/footer.php'; ?>