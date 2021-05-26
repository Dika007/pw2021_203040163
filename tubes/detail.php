<?php


// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan di kembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

require 'functions.php';


// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang di ambil dari url
$perangkat_keras_komputer = query("SELECT * FROM perangkat_keras_komputer WHERE id = $id")[0];


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
    <div class="container">

        <div class=keterangan>
            <p>No.<?= $perangkat_keras_komputer["No"]; ?></p>
            <p><img src="img/<?= $perangkat_keras_komputer["Image"]; ?>"></p>
            <p>Descripsion : <?= $perangkat_keras_komputer["Descripsion"]; ?></p>
            <p>Price : <?= $perangkat_keras_komputer["Price"]; ?></p>
            <p>Category : <?= $perangkat_keras_komputer["Category"]; ?></p>
            <p><a href="Pesanan.php"><button type="button" class="btn btn-outline-success">Klik untuk memesan</button>
                </a></p>

        </div>



        <button class="btn btn-outline-primary"><a href="index.php">Kembali</a></button>


</body>

</html>