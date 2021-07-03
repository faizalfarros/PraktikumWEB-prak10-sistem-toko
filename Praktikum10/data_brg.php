<!DOCTYPE html>
<html lang="en">
<head>
    <title>view data</title>
</head>
<body>
    <table border="1">
            <tr>
                <thead>
                    <td>kode Barang</td>
                    <td>Nama Barang</td>
                    <td>Stok Barang</td>
                </thead>
            </tr>
            <tbody>
                <?php
                    include "koneksi.php";
                    $a = "SELECT * FROM table_admin";
                    $b = $koneksi->query($a);
                    while ($c =$b->fetch_array()) { ?>
                    <tr>
                    <th><?php echo $c['kode_brg']; ?></th>
                    <th><?php echo $c['nama_brg']; ?></th>
                    <th><?php echo $c['stok_brg']; ?></th>
                    </tr>
                <?php
                }
                ?>
            <a href="admin.php">Kembali</a>
            </tbody>
    </table>   
</body>
</html>