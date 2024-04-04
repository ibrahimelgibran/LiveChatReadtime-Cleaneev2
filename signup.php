<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Chat System using AJAX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('./img/bg2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #signup_form {
            width: 350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
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
<div id="signup_form">
    <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Sign Up</h2>
    <hr>
    <form method="POST" action="register.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Sign Up</button>
        <p class="text-center" style="margin-top: 10px">Already have an account? <a href="index.php"> Login</a></p>
		<p class="text-center" style="margin-top: -5px">Live Room Membership to <a href="http://localhost/Cleanee">Cleanee.</a></p>
	</form>
    <div class="text-center" style="color: red;">
        <?php
            session_start();
            if(isset($_SESSION['sign_msg'])){
                echo $_SESSION['sign_msg'];
                unset($_SESSION['sign_msg']);
            }
        ?>
    </div>
</div>
</body>
</html>
