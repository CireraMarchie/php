<?php
session_start();

require_once "db.php";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password for comparison
    $hashedPassword = md5($password);

    $query = "SELECT * FROM portfolio_users WHERE (username = '$username' OR email = '$email') AND password = '$hashedPassword'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['user_id'] = $row['uid'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        header("Location: about.html");
    } else {
        $error_message = "Incorrect Username, Email, or Password!";
        header("Location: login.php?error=$error_message");
    }
}
?>