<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="php/regitser.php" method="post">

        <table>
            <tr>
                <td>User Name :</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm Password :</td>
                <td><input type="password" name="confirmpassword"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="formsubmitted" value="1"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="button" value="Regester"></td>
            </tr>
        </table>
    </form>
</body>
</html>