<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .btn-add-user {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary btn-add-user"><a href="registration.php" class="text-light">Add User</a></button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">UID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM portfolio_users";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['uid'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        echo '<tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $password . '</td>
                                <td>
                                    <a href="update.php?id=' . $id . '" class="btn btn-success">Update</a>
                                    <a href="delete.php?id=' . $id . '" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>