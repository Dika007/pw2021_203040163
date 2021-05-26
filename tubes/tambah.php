<link rel="stylesheet" href="css/bootstrap.min.css">

<h3 style="margin-left: 280px;">Form tambah produk</h3>
<form action="" method="post" style="text-align: center;">
    <ul style="list-style: none;">


        <li>
            <label for="Image">Image :</label><br>
            <input type="text" name="Image" id="Image" required><br><br>
        </li>


        <li>
            <label for="Descripsion">Descripsion :</label><br>
            <input type="text" name="Descripsion" id="Descripsion" required><br><br>
        </li>

        <li>
            <label for="Price">Price :</label><br>
            <input type="text" name="Price" id="Price" required><br><br>
        </li>

        <li>
            <label for="Category">Category :</label><br>
            <input type="text" name="Category" id="Category" required><br><br>
        </li>

        <li>
            <label for="Pesan">Pesan :</label><br>
            <input type="text" name="Pesan" id="Pesan" required><br><br>
        </li>


        <br>
        <button type="submit" name="tambah" class="btn btn-outline-success">Tambah produk</button>
        <button type="submit" class="btn btn-outline-primary">
            <a href="index.php" style="text-decoration: none;">Kembali</a>
        </button>

    </ul>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</form>



<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo "<script>
                     alert('Data gagal ditambahkan');
                    document.location.href = 'admin.php';
              </script>";
    }
}

?>