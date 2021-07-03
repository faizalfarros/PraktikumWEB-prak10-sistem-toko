<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pembelian</title>
</head>
<body>
    <h3>Masukkan Pembelian</h3>
    <form action="aksi_pembelian.php" method="POST">
        <table>
            <tr>
                <td>Barang</td>
                <td>
                    <select name="kode_brg">
                        <?php
                            $koneksi = mysqli_connect("localhost",'root',"","databaseweb");
                            if (!$koneksi) {
                                die("Koneksi Database Gagal:".mysqli_connect_error());
                            }
                            $sql = "SELECT * FROM table_admin";
                            $hasil = mysqli_query($koneksi,$sql);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $no++;
                        ?>
                            <option value="<?php echo $data['kode_brg']; ?>"><?php echo $data['nama_brg'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input type="text" name="jumlh" placeholder="Masukkan Jumlah Barang"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Save" value="simpan"></td>
                <td><input type="reset" name="Cancel" value="Reset"></td>
            </tr>
        </table>
        <a href="admin.php">Kembali</a>
    </form>
</body>
</html>