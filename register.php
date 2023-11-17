<?php
session_start();

require_once "db.php";

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashedPassword = md5($password);

    $query = "INSERT INTO portfolio_users (name, email, username, password) VALUES ('$name', '$email', '$username', '$hashedPassword')";

    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>