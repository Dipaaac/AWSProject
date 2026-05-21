<?php
session_start();

if(isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <title>Login AWS Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="login-container">

    <div class="card shadow-lg p-4">

        <h2 class="text-center mb-4">
            Login Sistema
        </h2>

        <form action="login.php" method="POST">

            <div class="mb-3">
                <input type="text"
                       name="username"
                       class="form-control"
                       placeholder="Username"
                       required>
            </div>

            <div class="mb-3">
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Password"
                       required>
            </div>

            <button class="btn btn-primary w-100">
                Accedi
            </button>

        </form>

    </div>

</div>

</body>
</html>