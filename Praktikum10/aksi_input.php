<?php
    include "koneksi.php";
    $Namabrg = $_POST['namabrg'];
    $Stok = $_POST['stok'];

    $sql = "INSERT INTO table_admin (nama_brg, stok_brg) values ('".$Namabrg."','".$Stok."')";
    $a = $koneksi->query($sql);
        if ($a == true) {
            header ('location: data_brg.php');
        }else{
            echo mysqli_error($koneksi);
        }
?> 
?>