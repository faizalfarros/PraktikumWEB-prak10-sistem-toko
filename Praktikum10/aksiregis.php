<?php
    include "koneksi.php";
    $Username = $_POST['user'];
    $Pasword = md5($_POST['pw']);
    $NamaLengkap = $_POST['nama'];
    $Email = $_POST['email'];
    $Level = $_POST['level'];
    $sql = "INSERT INTO register (username,pasword,email,namalengkap,levell) VALUES ('".$Username."', '".$Pasword."', '".$NamaLengkap."', '".$Email."', '".$Level."')";
    $a = $koneksi->query($sql);
        if ($a == true) {
            header ('location: formlogin.php');
        }else{
            echo mysqli_error($koneksi);
        }
?>