<?php 
/*
Dika Sulaeman Akbar
203040163

https://github.com/Dika007/pw2021_203040163
pertemuan 4 - 3 maret 2021

mempelajari tentang Function
*/

/* ....date
    untuk menampikan tanggal dengan format tertentu
l = untuk menampilkan hari
m = untuk menampilkan bulan ( dalam bentuk angka)
M = untuk menampilkan bulan
d = untuk menampilkan tanggal
Y = untuk menampilkan tahun
untuk lebih detailnya bisa dilihat di php.net

Contoh :
echo date("l, d-M-Y"); 
*/
   
// ....Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970-sekarang
//echo time();




/*
echo date("d M Y",time()+60*60*24*100); -> menghitung 100 hari kedepan
echo date("d M Y",time()-60*60*24*100); -> menghitung 100 hari kebelakang
*/


// ....mktime
// membuat sendiri detik 
// mktime   (0,   0,    0,    0,     0,     0)
//          jam,menit,detik,bulan,tanggal,tahun

//echo date("l",mktime(0,0,0,03,07,2002));




// ....strtotime
//echo date("l",strtotime("07 mar 2002"))

//------------------------------------------------------------------------
// String
// strlen() -> untuk menghitung panjang dari sebuah string
// strcmp() -> untuk menggabungkan 2 buah string
// explode() -> untuk memecah sebuah string menjadi array
// htmlspecialchars() -> untuk menjaga / melindungi website kita ( hacker)


//------------------------------------------------------------------------


//Utiliy
// var_dump -> untuk mencetak isi dari sebuah variabel array object
// isset() -> untuk mengecek apakah sebuah varibel sudah dibikin atau belum (true/false)
// empty() -> untuk mengecek apakah varibel tersebut kosong / ada isinya
// die() -> untuk memberhentikan program kita
// slepp() -> untuk memberhentikan sementara program

//------------------------------------------------------------------------


// User-defined-function

function salam($waktu,$nama) {
    return "Selamat $waktu, $nama!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo salam("Sore","Dika");?></h1>
</body>
</html>