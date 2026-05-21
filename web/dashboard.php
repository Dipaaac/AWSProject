<?php
require 'auth.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

    <div class="container-fluid">

        <span class="navbar-brand">
            AWS Docker Project
        </span>

        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>

    </div>

</nav>

<div class="container mt-5">

    <div class="p-5 bg-light rounded shadow">

        <h1>Benvenuto <?php echo $_SESSION['user']; ?></h1>

        <hr>

        <h2>🏠 Home</h2>

        <p>
            Sistema web sicuro ospitato su AWS tramite Docker.
        </p>

        <h2>📄 Relazione Progetto</h2>

        <p>
            Il progetto utilizza AWS EC2 come infrastruttura cloud.
            Docker consente l’isolamento dei servizi tramite container.
            Apache gestisce il web server HTTPS.
            PHP implementa autenticazione e sessioni sicure.
            MySQL gestisce i dati utenti.
        </p>

        <h2>⚙️ Tecnologie Utilizzate</h2>

        <ul>
            <li>AWS EC2 Ubuntu 22.04</li>
            <li>Docker</li>
            <li>Docker Compose</li>
            <li>Apache</li>
            <li>PHP 8</li>
            <li>MySQL 8</li>
            <li>Bootstrap 5</li>
        </ul>

        <h2>🏗️ Architettura</h2>

        <p>
            La comunicazione tra container avviene tramite rete Docker interna.
            L’accesso esterno è consentito solo tramite HTTPS.
        </p>

    </div>

</div>

</body>
</html>