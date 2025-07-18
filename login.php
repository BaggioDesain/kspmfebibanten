<?php
session_start();
$valid_username = "kspmfebiuinbanten";
$valid_password = "20240418";

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['loggedin'] = true;
    header("Location: form_berita.php");
    exit();
  } else {
    echo "<script>alert('Username atau Password salah!'); window.location.href = 'index.html';</script>";
  }
} else {
  echo "Akses tidak valid.";
}
?>
