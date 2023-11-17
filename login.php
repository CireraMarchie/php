<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('madz.gif');
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
                <h2 class="text-center">Login Form</h2>
            </div>
            <form action="authenticate.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>