<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Berita KSPM</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      padding: 40px;
    }

    h2 {
      text-align: center;
      color: #0033a0;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    label {
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    button[type="submit"] {
      background: #0033a0;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }

    button[type="submit"]:hover {
      background: #002070;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #0033a0;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h2>Form Input Berita</h2>
  <form action="simpan_berita.php" method="POST">
    <label>Judul Berita:</label><br>
    <input type="text" name="judul" required><br><br>

    <label>Isi Berita:</label><br>
    <textarea name="isi" rows="5" required></textarea><br><br>

    <label>Link (opsional):</label><br>
    <input type="text" name="link"><br><br>

    <button type="submit">Simpan Berita</button>
  </form>
  <a href="logout.php">Logout</a>
</body>
</html>
