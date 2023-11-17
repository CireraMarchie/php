<?php
include 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM portfolio_users WHERE uid=$id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: operations.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>