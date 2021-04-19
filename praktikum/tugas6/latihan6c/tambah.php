<h3>Form tambah produk</h3>
<form action="" method="post">
    <ul>
       

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
            <button type="submit" name="tambah">Tambah produk</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
    
    </ul>

</form>


<?php 
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}


    require 'functions.php';

if(isset($_POST['tambah'])) {
    if (tambah($_POST) > 0 ) {
        echo "<script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'admin.php';
              </script>";
    }else{
        echo "<script>
                     alert('Data gagal ditambahkan');
                    document.location.href = 'admin.php';
              </script>";
    }
}

?>