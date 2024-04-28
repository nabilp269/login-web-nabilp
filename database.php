<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$database = "coba-regist";

$conn = mysqli_connect($hostname, $user, $pass, $database);

if($conn->connect_error) {
    echo "Koneksi database gagal";
    die("error!");
}
?>