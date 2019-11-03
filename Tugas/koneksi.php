<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "minggu8";

//membuat koneksi
$koneksi = mysqli_connect($server,$user,$pass,$db);

//mengecek koneksi
if(!$koneksi){
	die("Koneksi gagal : ".mysqli_connect_error());
}

?>