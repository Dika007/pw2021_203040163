<?php
// menghubungkan dengan php lainnya
require 'functions.php';

// melakukan query
$perangkat_keras_komputer = query("SELECT * FROM perangkat_keras_komputer");


?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>


  </style>
  <title>Document</title>
</head>

<body>
  <h2 style="text-align:center;">Berbagai Perangkat keras Computer</h2>
  <h3 style="text-align:center;"><i>Semua barang disini Original 100 persen dan claim garansinya juga ada!!</i></h3>
  <h5 style="text-align:center;"><i>Jika anda minat silahkan lihat produk kami yang ada di bawah ini!!</i></h5>
  <br>

  <a href="login.php">
    <button type="" class="btn btn-outline-primary">Masuk ke halaman admin</button>
  </a>

  <table class="table table-hover" border="1" cellpadding="10">




    <tbody>

      <?php foreach ($perangkat_keras_komputer as $D) : ?>

        <tr>


          <p class="Category" style="text-align:center;">
            <a href="detail.php?id= <?= $D['id'] ?>">
              <?= $D["Category"] ?>
          </p>


        </tr>

      <?php endforeach; ?>

    </tbody>
  </table>


  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>