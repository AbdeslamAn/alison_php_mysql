<?php
include "php/conn.php";
$usernameEroor=$passwordEroor="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function square(username){
            var xmlhttp= new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("result").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","ajax.php?username="+ username,true);
            xmlhttp.send();
        }
        
    </script>
</head>
<body>
    <form action="user.php" method="post">
        <table>
            <tr>
                <td align="center">User name :</td>
                <td><input type="text" name="username" onkeyup="square(this.value)" value=""></td>
                <td colspan="2"><div><?php echo  $usernameEroor; ?></div></td>
            </tr>
            <tr>
                <td align="center">Password :</td>
                <td><input type="password" name="password" value=""></td>
                <td colspan="2"><div><?php echo  $usernameEroor; ?></div></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit"></td>
            </tr>
        </table>
    </form>
    


</body>
</html>