<?php
// koneksi ke data base dan pilih database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');



// query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
//$row = mysqli_fetch_assoc($result); // array asosiative
//$row = mysqli_fetch_array($result); // keduanya

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


// tampung ke variabel mahasiswa
$mahasiswa = $rows;


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
  <h3>Daftar mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nrp</th>
      <th>Nama</th>
      <th>email</th>
      <th>jurusan</th>
      <th>aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="80"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>