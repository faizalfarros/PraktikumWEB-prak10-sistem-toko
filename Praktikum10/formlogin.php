<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
</head>
<body>
    <form action="act_login.php?op=in" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="usrname"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="psw"></td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>