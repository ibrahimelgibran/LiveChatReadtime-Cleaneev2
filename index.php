<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp - Cleanee</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('./img/bg1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            display: flex;
            align-items: center;
            height: 100vh;
        }
        #login_form {
            width: 350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-control {
            border-radius: 0;
        }
        .btn-primary {
            border-radius: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<div id="login_form">
    <h2 class="text-center"><span class="glyphicon glyphicon-lock"></span> Please Login</h2>
    <hr>
    <form method="POST" action="login.php">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        <p class="text-center" style="margin-top: 10px">No account? <a href="signup.php"> Sign up</a></p>
		<p class="text-center" style="margin-top: -5px">Live Room Membership to <a href="http://localhost/Cleanee">Cleanee.</a></p>
    </form>
    <div class="text-center" style="color: red;">
        <?php
            session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
    </div>
</div>
</body>
</html>
