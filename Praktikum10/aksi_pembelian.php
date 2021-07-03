<?php
    include "koneksi.php";
    $Barang = $_POST['kode_brg'];
    $Jumlah = $_POST['jumlh'];

    $sql = "INSERT INTO table_pembeli (kode_brg, jumlah) values ('".$Barang."','".$Jumlah."')";
    $a = $koneksi->query($sql);
        if ($a == true) {
            header('location: pembelian.php');
        }else {
            echo "error";
        }
?>