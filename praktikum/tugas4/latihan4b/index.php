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
       td {
        text align: center;
      }

    </style>
    <title>Document</title>
</head>
<body>
<h2 style="text-align:center;">Berbagai Perangkat keras Computer</h2>
<h3 style="text-align:center;"><i>Semua barang disini Original 100 persen dan claim garansinya juga ada!!</i></h3>
<br>
<table class="table table-hover" border="1" cellpadding="10">


  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Descripsion</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Pesan</th>
    </tr>
  </thead>

 
  <tbody>

  <?php foreach( $perangkat_keras_komputer as $D) : ?>
    
  <tr>
    <td><?= $D["No"];?></td>
    <td style="text-align:center;"><img src="img/<?= $D["Image"]?>"></td>
    <td><?= $D["Descripsion"];?></td>
    <td><?= $D["Price"];?></td>
    <td><?= $D["Category"];?></td>
    <td><button type="button" class="btn btn-outline-success"><?= $D["Pesan"]?></button></td>
</tr>

 <?php endforeach; ?>
    
  </tbody>

</table>


    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>