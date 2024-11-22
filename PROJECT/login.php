<?php
session_start();
include('./includes/connect.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sarvaswam</title>
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.container {
    margin: 50px auto;
    max-width: 400px;
    padding: 20px;
    background: white;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    text-align: center;
    color: orangered;
}

.btn {
    width: 100%;
    background: orangered;
    color: white;
    border: none;
    padding: 10px;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
}

.btn:hover {
    background: darkorange;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.error-message {
    color: red;
    text-align: center;
    margin-bottom: 15px;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>
        <form method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" name="login" class="btn">Login</button>
            <p>Not registered? <a href="signup.php">Sign up here</a></p>
        </form>
    </div>
</body>
</html>
