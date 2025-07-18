<?php
$host = "localhost"; // Biasanya tetap localhost di cPanel
$user = "cpanelusername_dbuser";
$pass = "passworddb";
$db   = "cpanelusername_dbname";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi GAGAL: " . mysqli_connect_error());
}
?>
