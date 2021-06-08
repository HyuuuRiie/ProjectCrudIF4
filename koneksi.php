<?php
$host = "localhost"; ///ip server mysql
$user = "root";   ///username mysql
$pass = "";		///password mysql
$db   = "db_crud"; ///db yang digunakan

$kon = mysqli_connect($host, $user, $pass, $db);
/*
if($kon){
echo "Terkoneksi<br>";
echo "Access Success";
}else{
echo "Access Denied";
}*/
?>