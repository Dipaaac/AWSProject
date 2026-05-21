<?php

session_start();

require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = :username";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':username' => $username
]);

$user = $stmt->fetch();

if($user && password_verify($password, $user['password_hash'])) {

    $_SESSION['user'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    header("Location: dashboard.php");

} else {

    echo "Credenziali non valide";
}
?>