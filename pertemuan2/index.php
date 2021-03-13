<?php

// ini adalah komentar
// ini juga komentar

/*
ini komentar
ini juga komentar
*/

/*
Dika Sulaeman Akbar
203040163

https://github.com/Dika007/pw2021_203040163
pertemuan 2 - 14 febuari 2021

mempelajari tentnag sintaks php
*/



// pertemuan 2 - php dasar
// sintaks php

// standar output
// echo, print = biasanya digunakan untuk mencetak tulisan, isi variabel, dll
// print_r = khusus digunakan untuk mencetak isi array
// var_dump = biasanya digunakan untuk melihat isi dari variabel nanti akan tampil informasi tentang variabel tersebut

    echo "Dika Sulaeman Akbar";

    //print "Dika Sulaeman Akbar";

    //print_r("Dika Sulaeman Akbar");

    //var_dump("Dika Sulaeman Akbar");



// Penulisan sintaks php
// 1. php di dalam html
// 2. html di dalam php


// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
    $nama = "Dika S.A";
    $nama1 = "Selamat datang kembali User D";

    
    // contoh keistemewaan petik2
    //echo "hallo, nama saya $nama";


// operator
// .....aritmatika
// + - * / %
    //Contoh operator artimatika
    /*
    $x = 10;
    $y = 20;
    echo $x * $y;
    */


// .....penggabung string / concatenation / concat
// operatornya . (titik)


//Contoh penggabung string / concatenation / concat

/*
$nama_depan = "member";
$nama_belakang = "Dikz";
echo $nama_depan . "  " . $nama_belakang;
*/



//.....assignment
// =, +=, *=, /=, %/, .=

//contoh assignment
/*                                 
$x = 1;                                                   
$x += 12 ;                       
echo $x;                         

$x = 1;
$x -= 12 ;
echo $x;

$nama = "Dikx";
$nama .= " ";     
$nama .= "Star";
echo $nama;
*/



//.....perbandingan = hanya mengecek nilainya
// < , > , <= , >= , == , !=

//contoh perbandingan
//var_dump(1 < 5);



//.....identitas = mengecekan nilai dan tipe datanya
//=== , !==

//contoh identitas
//var_dump(1 === "1")



//.....Logika
// && , || , !

//contoh logika

/*
$x = 10;
var_dump($x < 20 && $x % 2 == 0); = dua-duanya harus benar milainya

$x = 30;
var_dump($x < 20 || $x % 2 == 0); = cuma satu saja yang harus benar nialinya
*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php di dalam html</title>
</head>
<body>
    <h1>Hello, Selamat datang <?php echo $nama;?></h1>
    <p><?php echo $nama1;?></p>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html di dalam php</title>
</head>
<body>
    <?php 
        echo "<h1>hello, Selamat datang di Server</h1>"
    
    ?>
    
</body>
</html>

