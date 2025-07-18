<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header("Location: index.html");
  exit();
}
include 'koneksi.php';

$judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
$isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
$link = mysqli_real_escape_string($koneksi, $_POST['link']);
$tanggal = date("Y-m-d");

$query = "INSERT INTO berita (judul, isi, link, tanggal) VALUES ('$judul', '$isi', '$link', '$tanggal')";

if (mysqli_query($koneksi, $query)) {
  echo "<script>alert('Berita berhasil disimpan!'); window.location.href = 'form_berita.php';</script>";
} else {
  echo "Gagal simpan: " . mysqli_error($koneksi);
}
?>
