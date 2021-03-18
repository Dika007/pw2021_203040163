<?php 

$bola = [
         "Cristiano Ronaldo" => "Real madrid",
         "Lionel Messi" => "Barcelona",
         "Luca modric" => "Real Madrid",
         "Mohammad Salah" => "Liverpool",
         "Neymar jr" => "Paris Saint Germain",
         "Sadio Mane" => "Liverpool",
          "Zlatan Ibrahimovic" => "Ac Milan"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      tr th{
          text-align: left;
      }
    
    
    </style>
    
    
    <title>latihan3c</title>
</head>
<body style="border : 1px solid black; padding : 10px;">
   
    <h1>Daftar pemain bola terkenal dan clubnya</h1>
         

    <table width="350px">        
     <?php foreach ($bola as $pemain => $club) : ?>
        <tr><?= "<th>$pemain</th> <td>:</td> <td>$club</td>"?></tr>
        
    <?php endforeach; ?>
   
    </table>
</body>
</html>