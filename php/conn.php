
<?php

$dns = 'mysql:host=localhost;dbname:alison_kurs_php';
$username='root';
$password="";

// $option= array(
//     // for not problem mit sprechen arabisch
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);

try {

    $db= new PDO($dns,$username,$password,$option); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql= "";
    // $db->exec($sql);  


}
 catch (PDOException $e) {

    echo " Failad ". $e-> getMessage();
}






$dns = 'mysql:host=localhost;dbname:alison_kurs_php';
$username='root';
$password="";

// $option= array(
//     // for not problem mit sprechen arabisch
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);

try {

    $db= new PDO($dns,$username,$password,$option); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql= "";
    // $db->exec($sql);  


}
 catch (PDOException $e) {

    echo " Failad ". $e-> getMessage();
}



?>