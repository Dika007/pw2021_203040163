<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}



require 'functions.php';

// ambil data di url
$id = $_GET["id"];

//query data berdasarkan id
$D = query("SELECT * FROM perangkat_keras_komputer WHERE id = $id")[0];

// cek apakah tombol submit suda ditekan atau belum
if (isset($_POST['ubah'])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil diubah');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo "<script>
                     alert('Data gagal diubah');
                    document.location.href = 'admin.php';
              </script>";
    }
}

?>



<link rel="stylesheet" href="css/bootstrap.min.css">
<h3 style="margin-left: 300px;">Form ubah produk</h3>
<form action="" method="post" style="text-align: center;">
    <ul style="list-style: none;">

        <input type="hidden" name="id" id="id" value="<?= $D["id"]; ?>">
        <li>
            <label for="Image">Image :</label><br>
            <input type="text" name="Image" id="Image" required value="<?= $D["Image"]; ?>"><br><br>
        </li>


        <li>
            <label for="Descripsion">Descripsion :</label><br>
            <input type="text" name="Descripsion" id="Descripsion" required value="<?= $D["Descripsion"]; ?>"><br><br>
        </li>

        <li>
            <label for="Price">Price :</label><br>
            <input type="text" name="Price" id="Price" required value="<?= $D["Price"]; ?>"><br><br>
        </li>

        <li>
            <label for="Category">Category :</label><br>
            <input type="text" name="Category" id="Category" required value="<?= $D["Category"]; ?>"><br><br>
        </li>

        <li>
            <label for="Pesan">Pesan :</label><br>
            <input type="text" name="Pesan" id="Pesan" required value="<?= $D["Pesan"]; ?>"><br><br>
        </li>


        <br>
        <button type="submit" name="ubah" class="btn btn-outline-success">ubah produk</button>
        <button type="submit" class="btn btn-outline-primary">
            <a href="index.php" style="text-decoration: none;">Kembali</a>
        </button>

    </ul>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</form>