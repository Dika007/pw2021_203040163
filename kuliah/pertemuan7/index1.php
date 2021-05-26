<?php 
/*
Dika Sulaeman Akbar
203040163

https://github.com/Dika007/pw2021_203040163
pertemuan 7 - 21 maret 2021

mempelajari tentang get and post
*/












// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["kode"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["keahlian"]) ||
    !isset($_GET["image"]) ){
    // redirect
    header("Location: index.php");
    exit;
}







?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail data</title>
</head>
<body>
    
<ul>
        <li><img src="img/<?= $_GET["image"];?>"></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["kode"];?></li> 
        <li><?= $_GET["email"];?></li> 
        <li><?= $_GET["keahlian"];?></li> 
 
    </ul>

    <a href="index.php">Kembali ke awal</a>



</body>
</html>