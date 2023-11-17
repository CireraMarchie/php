<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('people.gif');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .col-lg-10 {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="page-header">
                <h2 class="text-center">Registration Form</h2>
            </div>
            <?php if (isset($_SESSION['user_id'])): ?>
                <p>Welcome, <?php echo $_SESSION['user_name']; ?>!</p>
                <p>Email: <?php echo $_SESSION['user_email']; ?></p>
                <p><a href="logout.php">Logout</a></p>
            <?php else: ?>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" name="register" value="Register">
                    </div>
                </form>
                <p>Already have an account? <a href="login.php">Login</a></p>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>