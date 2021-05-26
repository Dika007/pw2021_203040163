<?php

$Data = [
  [
    "No" => "1",
    "Image" => "download.jpg",
    "Descripsion" => "Barang ini bagus untuk digunakan terutama dalam hal bermain game",
    "Price" => "Rp.4.000.000",
    "Category" => "Monitor Gaming",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "2",
    "Image" => "foto.jpg",
    "Descripsion" => "Barang ini cukup bagus dan kuat untuk editing baik itu edit foto maupun video",
    "Price" => "Rp.9.000.000",
    "Category" => "Monitor Editing",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "3",
    "Image" => "foto1.jpg",
    "Descripsion" => "Motherboard ini adalah motherboard yang bisa kamu beli jika kamu seorang Gamer",
    "Price" => "Rp.4.500.000",
    "Category" => "Motherboard",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "4",
    "Image" => "foto2.jpg",
    "Descripsion" => "Keyboard ini minimalis cocok buat yang tidak suka rgba, dan harganya cukup terjangkau",
    "Price" => "Rp.400.000",
    "Category" => "Keyboard",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "5",
    "Image" => "foto3.jpg",
    "Descripsion" => "Speaker ini memiliki suara yang jelas, cocok buat yang tidak suka dengan bass yang terlalu besar",
    "Price" => "Rp.200.000",
    "Category" => "Spiker",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "6",
    "Image" => "foto4.png",
    "Descripsion" => "Case ini cocok buat yang anda yang anti-mainstream, dimana bentuknya berbeda dari umumnya case yang berbentuk kotak",
    "Price" => "Rp.3.000.000",
    "Category" => "Case",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "7",
    "Image" => "foto5.jpg",
    "Descripsion" => "Prosesor ini adalah proses dengan spek  yang cukup tinggi, cocok buat kamu yang suka editing atau bermain game berat(Game dengan ukuran yang besar)",
    "Price" => "Rp.8.000.000",
    "Category" => "Prosesor",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "8",
    "Image" => "foto6.jpg",
    "Descripsion" => "Vga ini adalah vga yang cukup diminati oleh para gamers ataupun pro player untuk bisa memperkuat dan menstabilkan PC mereka",
    "Price" => "Rp.12.000.000",
    "Category" => "Video Graphics Array(VGA)",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "9",
    "Image" => "foto7.jpg",
    "Descripsion" => "Headphone ini sangat nyaman ketika diletakan di telingan, dan suaranya pun jernih dan jelas",
    "Price" => "Rp.500.000",
    "Category" => "Headphone",
    "Pesan" => "klik jika ingin memesan"
  ],

  [
    "No" => "10",
    "Image" => "foto8.jpg",
    "Descripsion" => "Mouse ini sangat cocok baik anda yang tidak ingin ribet karena mouse ini di lengkapi dengan bluetooth ",
    "Price" => "Rp.750.000",
    "Category" => "Mouse",
    "Pesan" => "klik jika ingin memesan"
  ],





];



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
      <?php foreach ($Data as $D) : ?>

        <tr>
          <td><?= $D["No"]; ?></td>
          <td style="text-align:center;"><img src="img/<?= $D["Image"] ?>"></td>
          <td><?= $D["Descripsion"]; ?></td>
          <td><?= $D["Price"]; ?></td>
          <td><?= $D["Category"]; ?></td>
          <td><button type="button" class="btn btn-outline-success"><?= $D["Pesan"] ?></button></td>
        </tr>






      <?php endforeach; ?>

    </tbody>

  </table>


  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>