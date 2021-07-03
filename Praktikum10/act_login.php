<?php
session_start();
include "koneksi.php";
$user = $_POST['usrname'];
$psw = md5($_POST['psw']);
$op = $_GET['op'];

if ($op=="in") {
    $query_1="SELECT * FROM register where username='$user' and pasword='$psw'";
    $h_1 = mysqli_query($koneksi,$query_1);
    if (mysqli_num_rows($h_1)==1) {
        $d_1 = $h_1->fetch_array();
        $_SESSION['username'] = $d_1['username'];
        $_SESSION['levell'] = $d_1['levell'];
        if ($d_1['levell']=="admin") {
            header("location:admin.php");
            //echo admin
        }elseif ($d_1['levell']=="pengguna") {
            header("location:penjualan.php");
            //echo dosen
        }else{
            die("password salah <a href=\"javascript:history.back()\">kembali</a>");
        }
    }
}elseif ($op=="out") {
    unset($_SESSION['username']);
    unset($_SESSION['levell']);
    header("location:formlogin.php");


}
?>