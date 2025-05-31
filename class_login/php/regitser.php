<?php

    require_once('db/user_class.php');

    $user = new user();

    if (isset($_POST["formsubmitted"])) {
        
        $username = htmlspecialchars($_POST["user_name"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);
        $confirmpassword = htmlspecialchars($_POST["confirmpassword"]);
    
        $user->register($username,$email,$password,$confirmpassword);
    }

