<?php 
// fungsi untuk melakukan koneksi database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");

    mysqli_select_db($conn, "pw_tubes_203040163");

    return $conn;



}


// function untuk melakukan query dan memasukannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

        return $rows;

}

// function menambahkan data
function tambah($data) 
{
    $conn = koneksi();
    
   
    $Image = htmlspecialchars($data['Image']);
    $Descripsion = htmlspecialchars($data['Descripsion']);
    $Price = htmlspecialchars($data['Price']);
    $Category = htmlspecialchars($data['Category']);
    $Pesan  = htmlspecialchars($data['Pesan ']);

    $query = "INSERT INTO perangkat_keras_komputer
                VALUES
                ('', '$No','$Image','$Descripsion','$Price','$Category','$Pesan')";


mysqli_query($conn, $query);

return mysqli_affected_rows($conn);



}


// function menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM perangkat_keras_komputer WHERE id = $id");

    return mysqli_affected_rows($conn);
}




// function menghapus data
function ubah($data) 
{
    $conn = koneksi();
    
    $id = $data["id"];
    $Image = htmlspecialchars($data['Image']);
    $Descripsion = htmlspecialchars($data['Descripsion']);
    $Price = htmlspecialchars($data['Price']);
    $Category = htmlspecialchars($data['Category']);
    $Pesan  = htmlspecialchars($data['Pesan']);

    $query = "UPDATE perangkat_keras_komputer SET
                Image = '$Image',
                Descripsion = '$Descripsion',
                Price = '$Price',
                Category = '$Category',
                Pesan = '$Pesan'
                WHERE id = $id;
                ";


mysqli_query($conn, $query);

return mysqli_affected_rows($conn);



}




// registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>

