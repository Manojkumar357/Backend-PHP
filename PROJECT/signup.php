<?php
include('./includes/connect.php');

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_query = "SELECT * FROM `users` WHERE email='$email'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $error = "Email is already registered!";
    } else {
        $query = "INSERT INTO `users` (email, password) VALUES ('$email', '$password')";
        mysqli_query($con, $query);
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Sarvaswam</title>
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
        <h2>Signup</h2>
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
            <button type="submit" name="signup" class="btn">Sign Up</button>
            <p>Already registered? <a href="login.php">Login here</a></p>
        </form>
    </div>
</body>
</html>
