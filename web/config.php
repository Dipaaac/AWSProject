<?php

$host = "db";
$dbname = "AWSProject";
$user = "user";
$pass = "password";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    die("Errore DB: " . $e->getMessage());
}
?>