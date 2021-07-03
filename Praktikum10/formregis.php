<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTER</title>
</head>
<body>
    <h3>REGISTER</h3>
    <form action="aksiregis.php" method = "POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user" placeholder="Isi Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pw" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td>Nama Panjang</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama Anda"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Masukkan Email Anda"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                <select name="level">
						<option value="admin">Admin</option>
						<option value="pengguna">Pengguna</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="Simpan"></td>
				<td><input type="reset" name="cancel" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>