
<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username=htmlspecialchars($_POST["username"]);
    $password=htmlspecialchars($_POST["password"]);

    if (empty($username)) {
        $usernameEroor= "User name is Empty!!";
    }
   
    if (empty($password)) {
        $passwordEroor= "password is Empty!!";
    }
    else {
        echo "user name ist : $username <br /> Password ist : $password <br />" ;
    }
    
     

}

    // else {
    //     return 
    // }







if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username=htmlspecialchars($_POST["username"]);
    $password=htmlspecialchars($_POST["password"]);

    if (empty($username)) {
        $usernameEroor= "User name is Empty!!";
    }
   
    if (empty($password)) {
        $passwordEroor= "password is Empty!!";
    }
    else {
        echo "user name ist : $username <br /> Password ist : $password <br />" ;
    }
    
     

}

    // else {
    //     return 
    // }


?>