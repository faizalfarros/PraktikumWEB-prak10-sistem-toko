<?php
session_start();
include "koneksi.php";
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
if (!isset($_SESSION['username'])) {
    die("Anda belum Login");
}
$username = $_SESSION['username'];
$level = $_SESSION['levell'];
if ($level=='admin') {
    echo "Anda sebagai ".$level;
}elseif ($level=='pengguna') {
    echo "Anda sebagai ".$level;
}
?>