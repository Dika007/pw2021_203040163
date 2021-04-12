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
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <td>No</td>
            <td>opsi</td>
            <td>Image</td>
            <td>Descripsion</td>
            <td>Price</td>
            <td>Category</td>
            <td>Pesan</td>
        
        </tr>

        <?php $i = 1;?>
        <?php foreach ($perangkat_keras_komputer as $D) :?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button type="button" class="btn btn-outline-primary">Ubah</button></a>
                    <a href=""><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                </td>

                <td style="text-align:center;"><img src="img/<?= $D['Image']?>" alt=""></td>
                <td><?= $D['Descripsion']?></td>
                <td><?= $D['Price']?></td>
                <td><?= $D['Category']?></td>
                <td><button type="button" class="btn btn-outline-success"><?= $D['Pesan']?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    
    </table>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>