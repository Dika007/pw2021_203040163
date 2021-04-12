<?php 
    require 'functions.php';

// ambil data di url
$id = $_GET["id"];

//query data berdasarkan id
$D = query("SELECT * FROM perangkat_keras_komputer WHERE id = $id")[0];

// cek apakah tombol submit suda ditekan atau belum
if(isset($_POST['ubah'])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0 ) {
        echo "<script>
                    alert('Data berhasil diubah');
                    document.location.href = 'admin.php';
              </script>";
    }else{
        echo "<script>
                     alert('Data gagal diubah');
                    document.location.href = 'admin.php';
              </script>";
    }
}

?>




<h3>Form tambah produk</h3>
<form action="" method="post">
    <ul>
        
        <input type="hidden" name="id" id="id" value ="<?= $D["id"];?>">
        <li>
            <label for="Image">Image :</label><br>
            <input type="text" name="Image" id="Image" required
            value ="<?= $D["Image"];?>"><br><br>
        </li>

        
        <li>
            <label for="Descripsion">Descripsion :</label><br>
            <input type="text" name="Descripsion" id="Descripsion" required
            value ="<?= $D["Descripsion"];?>"><br><br>
        </li>

        <li>
            <label for="Price">Price :</label><br>
            <input type="text" name="Price" id="Price" required
            value ="<?= $D["Price"];?>"><br><br>
        </li>

        <li>
            <label for="Category">Category :</label><br>
            <input type="text" name="Category" id="Category" required
            value ="<?= $D["Category"];?>"><br><br>
        </li>

        <li>
            <label for="Pesan">Pesan :</label><br>
            <input type="text" name="Pesan" id="Pesan" required
            value ="<?= $D["Pesan"];?>"><br><br>
        </li>


        <br>
            <button type="submit" name="ubah">ubah produk</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
    
    </ul>

</form>
