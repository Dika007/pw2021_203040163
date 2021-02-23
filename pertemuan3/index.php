<?php
/*
Dika Sulaeman Akbar
203040163

https://github.com/Dika007/pw2021_203040163
pertemuan 3 - 23 febuari 2021

mempelajari tentang struktur kendali
*/

// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array


//menggunakan pengulangan "for"
/*
for( $i = 0; $i < 5; $i++ ) {      //$i = 0 ( inisialisasi)
    echo "Hello World <br>";        // $i < 5 ( kondisi terminasi)
}                                   // $i++ (incremen dan decremen)
*/


//ada 3 bagian yaitu nilai awal(inisialisasi), kondisi terminasi, incremen dan decremen
// yang beda for sama while yaitu posisi dari bagian bagian nya

//menggunakan pengulangan "while"
/*
$i = 0;
while( $i < 5 ) {
    echo "Hello world <br>";
$i++;
}
*/


//menggunakan pengulangan "do.. while"
/*
$i = 0;
do { 
    echo "Hello World <br>";
$i++
} while( $i < 5 )
*/


// pengkondisian / percabangan
// ...if else
// ...if else if else
// ...ternary
// ...switch



//cara menggunakan if else dan if lalu else if dan else
/*
$x = 30;
if( $x < 20 ){         //mengecek apakah sebuah kondisi bernilai salah atau benar
    echo "benar";
} else if( $x == 20){
    echo "Jackpot";
} 
else{
    echo "salah";
}
*/

/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        
        <?php 
            for($i = 1; $i <= 3; $i++ ){
                echo "<tr>";
                for( $j = 1; $j <= 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        
        ?>
    </table>



</body>
</html>
*/
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ( $i = 1; $i <= 5; $i++ ) :?>
        <?php if ( $i % 2 == 1) :?>
            <tr class="warna-baris">
            <?php else : ?>
            <tr>
            <?php endif;?>
                <?php for ($j = 1; $j <= 5; $j++ ) :?>
                    <td><?php echo "$i, $j"?></td>
                    
                <?php endfor;?>

            </tr>
            
        <?php endfor;?>
        
        
        
    </table>



</body>
</html>