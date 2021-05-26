<?php 

/*
Dika Sulaeman Akbar
203040163

https://github.com/Dika007/pw2021_203040163
pertemuan 6 - 17 maret 2021

mempelajari tentang array associative
*/


    // array
    // membuat array

$hari = array("Senin","selasa","rabu");
$bulan = ["Janurai","febuari","maret"];
$arr = [100, "teks", true];
    // menampilkan array
    // versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);

    // menampilkan 1 elemen pada array
echo "<br>";
    echo $arr[0];


//$mahasiswa = [
   // ["Mr.X", "9999", "X33@gmail.com", "IT"],
   // ["double Ks", "0000", "Dks@gmail.com", "IT"]
    



//];


// Array Associative
// definisinya sama seperti array numerik, kecuali 
// key-nya adalah  string yang kita buat sendiri

echo "<br>";
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
    "Rating" => [7,6,5],
"image" => "carbon.png"
]
                    ];

//echo $mahasiswa["Kode"];

//echo "<br>";
//echo $mahasiswa[1]["Email"]; 

//echo "<br>";
//echo $mahasiswa[1]["Rating"][2];                                                        
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
    <h1>Daftar admin</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>

    <ul>
        <li>
        <img src="img/carbon.png" alt="[image]"></li>
        <li>Id :<?php echo $mhs["Id"]; ?></li>
        <li>kod :<?php echo $mhs["Kode"]; ?></li>
        <li>email :<?php echo $mhs["Email"]; ?></li>
        <li>Keahlian :<?php echo $mhs["Keahlian"]; ?></li>  
 
    </ul>
    <?php endforeach; ?>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {

            width: 30px;
            height: 30px;
            background-color: lightblue;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
    
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear:both;
        }
    </style>

</head>
<body>
<br>

<?php 
$angka = [[2,0,1],[4,3,6],[5,8,7,9]];
echo $angka[1][1];
?>
</br>

<br>
<?php foreach($angka as $a ) : ?>
    <?php foreach ( $a as $i) : ?>
    <div class="kotak"><?php echo $i?></div>
   
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


    </br>
</body>
</html>


















