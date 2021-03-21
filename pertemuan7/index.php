<?php 
/*
Dika Sulaeman Akbar
203040163

https://github.com/Dika007/pw2021_203040163
pertemuan 7 - 21 maret 2021

mempelajari tentang get and post
*/








// Variabel scope / lingkup variabel
$x = 10; // variabel local
function tampilx(){
    global $x; // variabel global
    echo $x;
}
tampilx();
echo "<br>";

//=========================================================================

// Superglobal
// variabel Global milik PHP
// Merupakan array associative
//  $_GET
//  $_POST
//  $_REQUEST
//  $_SESSION
//  $_COOKIE
//  $_SERVER
//  $_ENV

//-------------------------------------------------------------------------

// $_GET
// metode request get adalah metode pengiriman data lewat URL dan data tersebut
// dapat diambil atau di tangkap oleh variabel superglobal "$_GET"


var_dump($_GET);
$mahasiswa = [
    ["Id" => "Mr.X", 
        "Kode" => "9999",
            "Email" => "X33@gmail.com",
                "Keahlian" => "IT",
                    "image" => "carbon.png"],

[                      "Id" => "Mr.D", 
                 "Kode" => "0000",
            "Email" => "DXT@gmail.com",
        "Keahlian" => "IT",
"image" => "carbon.png"
]
                    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Data</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) :?>
        <li>
        <a href="index1.php?nama=<?= $mhs["Id"];?>&kode=<?= $mhs["Kode"];?>&email=<?= $mhs["Email"]?>&keahlian=<?= $mhs["Keahlian"]?>&image=<?= $mhs["image"];?>"><?php echo $mhs["Id"]; ?></li></a>
    <?php endforeach;?>
    </ul>
</body>
</html>
