<?php
    
    require_once('php/db/user_class.php');

    $user = new user();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="login.php">Login</a><br><br>
    <a href="register.php">Register</a>
</body>
</html>