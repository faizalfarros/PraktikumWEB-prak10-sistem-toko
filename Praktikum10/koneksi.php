<!DOCTYPE html>
<html lang="en">
<head>
    <title>Koneksi databse</title>
</head>
<body>
    <!-- <h1>Praktikum WEB</h1>  -->
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "databaseweb";
    $koneksi = mysqli_connect($host, $username, $password, $database);
if ($koneksi) {
    // echo "Connected";
}else {
    echo "not connected";
}
?>
</body>
</html>