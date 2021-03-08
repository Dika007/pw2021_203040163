<?php 


/*
Dika Sulaeman Akbar
203040163

https://github.com/Dika007/pw2021_203040163
pertemuan 5 - 8 maret 2021

mempelajari tentang array
*/



// Array
// adalah varibel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0(nol)

// membuat array
// cara lama
$hari = array("Senin", "selasa","rabu");


// cara baru
$bulan = ["Januari","febuari","Maret"];
$arr1 = [123, "tulisan", false];




// menampilkan array
// var_dump / print_r()
/*
var_dump($hari);
echo "</br>";
print_r($bulan);
echo "</br>";
*/

// menampilkan 1 elemen pada array
/*
echo $arr1[0];
echo "</br>";
echo $bulan[1];
*/



// menambahkan elemen baru pada array
/*
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "</br>";
var_dump($hari);
*/


//----------------------------------------------------------

// latihan 2
// pengulangan pada array
// for / foreach

$angka = [32, 18, 40, 532, 71, 87, 2000];



//==========================================================

//latihan 3

$mahasiswa =[
     ["Mr.D", "99999", "Teknik IT", "email"],
     ["Mr.X", "12808", "Teknik IT", "email"],
     ["Mr.S", "20483", "Teknik IT", "email"]
    ];






?>



<?php
// latihan 2

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{ clear : both;} 
    </style>
</head>
<body>

        <?php for( $i = 0; $i < count($angka); $i++  ){?>
      <div class = "kotak"><?= $angka[$i] ?></div>
        <?php }?>




        <div class="clear"></div>
            <?php foreach( $angka as $a) {?>
                <div class = "kotak"><?= $a;?></div>
            <?php } ?>




            <div class="clear"></div>

            <?php foreach( $angka as $a) :?>
                <div class = "kotak"><?= $a;?></div>
            <?php endforeach; ?>

</body>
</html>





<?php 
// latihan 3

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
    <h1>Data MHS</h1>
         <?php foreach( $mahasiswa as $m) :?>

               
    
    <ul>
    
        <li>Id :<?php echo $m[0]; ?></li>
        <li>No  :<?php echo $m[1]; ?></li>
        <li>Jurusan :<?php echo $m[2]; ?></li>
        <li>Email    :<?php echo $m[3]; ?></li>
    </ul>


    <?php endforeach; ?>
</body>
</html>


