<!DOCTYPE html>
<html lang="en">
<head>
    <title>view table</title>
</head>
<body>
<table border="2">
        <tr>
            <thead>
                <td>Username</td>
                <td>Password</td>
                <td>Nama Lengkap</td>
                <td>Email</td>
                <td>Level</td>
            </thead>
        </tr>
        <tbody>
            <?php
                include "koneksi.php";
                $a = "SELECT * from register";
                $b = $koneksi->query($a);
                while ($c =$b->fetch_array()) { ?>
                    <tr>
                    <th><?php echo $c['username']; ?></th>
                    <th><?php echo $c['pasword']; ?></th>
                    <th><?php echo $c['namalengkap']; ?></th>
                    <th><?php echo $c['email']; ?></th>
                    <th><?php echo $c['levell']; ?></th>
                    </tr>
                <?php
                }
            ?>
        </tbody>
</body>
</html>