<?php

$pemain = [
    [
"nama" =>"Cristiano Ronaldo",
"klub" =>"Juventus",
"main" => 100,
"goal" => 76,
"assist" => 30
    ],
    [
"nama" =>"Lionel Messi",
"klub" =>"Barcelona",
"main" => 120,
"goal" => 80,
"assist" => 12
    ],
    [
"nama" =>"Luca Modric",
"klub" =>"Real Madrid",
"main" => 87,
"goal" => 12,
"assist" => 48
    ],
    [
"nama" =>"Mohammad Salah",
"klub" =>"Liverpool",
"main" => 90,
"goal" => 103,
"assist" => 8
    ],
    [
"nama" =>"Neymar Jr",
"klub" =>"Paris Saint Germain",
"main" => 109,
"goal" => 56,
"assist" => 15
    ],
    [
"nama" =>"Sadio Mane",
"klub" =>"Liverpool",
"main" => 63,
"goal" => 30,
"assist" => 70
    ],
    [
"nama" =>"Zlatan Ibrahimovic",
"klub" =>"Ac Milan",
"main" => 100,
"goal" => 10,
"assist" => 12
    ],
];

$total_main = 0;
$total_gol = 0;
$total_assist = 0;

foreach ($pemain as $item => $value) {
    $total_main += $value['main'];
    $total_gol += $value['goal'];
    $total_assist += $value['assist'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Latihan 3 D</title>

<style>
        table,
        th,
        td {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
</style>
</head>

<body>

<h3><b>Daftar pemain bola terkenal dan clubnya</b></h3>
<table border="1">
<tr>
<th>NO</th>
<th>NAMA</th>
<th>CLUB</th>
<th>MAIN</th>
<th>GOL</th>
<th>ASSIST</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($pemain as $p) : ?>
<tr>
<td><?= $i ?></td>
<td><?= $p["nama"] ?></td>
<td><?= $p["klub"] ?></td>
<td><?= $p["main"] ?></td>
<td><?= $p["goal"] ?></td>
<td><?= $p["assist"] ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
<tr>
<th>#</th>
<th colspan="2">
<center>Jumlah</center>
</th>
<th><?= $total_main ?></th>
<th><?= $total_gol ?></th>
<th><?= $total_assist ?></th>
</tr>
</table>

</body>

</html>
