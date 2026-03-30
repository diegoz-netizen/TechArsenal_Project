<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($pass !== $confirm_pass) {
        die("Las contraseñas no coinciden.");
    }

    $pass_hashed = password_hash($pass, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$user', '$email', '$pass_hashed')";

    if (mysqli_query($conexion, $sql)) {
        header("Location: login.php?res=success");
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
?>