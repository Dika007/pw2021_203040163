<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';


$mahasiswa = query("SELECT * FROM mahasiswa");


// ketika tombol cari di klik
if (isset($_POST['cari'])) {

  $mahasiswa = cari($_POST['keyword']);
}
?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar mahasiswa</title>
</head>

<body>
  <a href="logout.php">logout</a>
  <h3>Daftar mahasiswa</h3>
  <a href="tambah.php">Tambah data mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>


  </form>

  <br><br>


  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>

      <th>Nama</th>

      <th>aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">maaf, data mahasiswa tidak ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="80"></td>

        <td><?= $m['nama']; ?></td>

        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">Selengkapnya</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>