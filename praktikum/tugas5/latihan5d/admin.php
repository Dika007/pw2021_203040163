<?php

// menghubungkan dengan file php lainnya
    require 'functions.php';

// melakukan query
$perangkat_keras_komputer = query("SELECT * FROM perangkat_keras_komputer");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>admin</title>
</head>
<body>

<div class= "add">
    <a href="tambah.php"><button type="button" class="btn btn-outline-warning">Tambah data</button></a>
</div>
<br>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <td style="text-align:center;">No</td>
            <td style="text-align:center;">opsi</td>
            <td style="text-align:center;">Image</td>
            <td style="text-align:center;">Descripsion</td>
            <td style="text-align:center;">Price</td>
            <td style="text-align:center;">Category</td>
            <td style="text-align:center;">Pesan</td>
        
        </tr>

        <?php $i = 1;?>
        <?php foreach ($perangkat_keras_komputer as $D) :?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $D['id']?>"><button type="button" class="btn btn-outline-primary">Ubah</button></a>
                    <a href="hapus.php?id=<?= $D['id']?>" onclick="return confirm('Hapus data??')"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                </td>

                <td style="text-align:center;"><img src="img/<?= $D['Image']?>" alt=""></td>
                <td style="text-align:center;"><?= $D['Descripsion']?></td>
                <td style="text-align:center;"><?= $D['Price']?></td>
                <td style="text-align:center;"><?= $D['Category']?></td>
                <td style="text-align:center;"><button type="button" class="btn btn-outline-success"><?= $D['Pesan']?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    
    </table>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>