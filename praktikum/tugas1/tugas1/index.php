<?php
/*
    Dika Sulaeman Akbar
    203040163
    praktikum pw pertemuan ke 1
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas pertemuan 1</title>

</head>
<body>

<table width="230px" cellspacing="5px" cellpadding="0px" border="1px">

<?php for( $i = 1; $i <= 6; $i++ ) : ?>

    <tr>
        <?php for( $j = 1; $j <= 6; $j++ ) : ?>
            <?php $k = $i + $j; ?>

            <?php if( $k % 2 == 1 ) : ?>
                <td height=30px width=30px bgcolor=salmon></td>
            <?php else : ?>
                <td height=30px width=30px bgcolor=lightblue></td>
            <?php endif; ?>

        <?php endfor; ?> 
    </tr>

<?php endfor; ?>

</table>

</body>
</html>
