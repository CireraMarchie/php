<?php
include 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM portfolio_users WHERE uid=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE portfolio_users SET name='$name', email='$email', password='$password' WHERE uid=$id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: operations.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Update User</h2>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['uid']; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>