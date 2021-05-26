<?php
session_start();
require 'functions.php';
// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}



















// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// login
// username nya : happy;
// password nya : sad ;

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");


    // mencocokan username dan password
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            // jika remember me di centang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }



            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: index.php");
            die;
        }
    }
    $error = true;
}
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<h6 style="text-align: center; margin-top: 120px; margin-left: 80px;">Selamat datang admin,<p>silahkan masukan username dan password nya dulu :)</p>
</h6>
<form action="" method="post" style="text-align: center; margin-top: 60px;">
    <?php if (isset($error)) : ?>
        <p style="color : red; font-style: italic; margin-left: 100px;">Kenapa username atau password anda salah?
        <p style="color : red; font-style: italic; margin-left: 100px;">siapa anda?:(, anda bukan admin kami:(</p>
        </p>

    <?php endif; ?>

    <table style=" margin-left: 270px; ">
        <tr>
            <td><label for=" username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username" size="30" placeholder="Masukan username anda..." autofocus autocomplete="off" required></td>
        </tr>

        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" name="password" size="30" required></td>
        </tr>
    </table>

    <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit" name="submit" type="button" class="btn btn-primary">Login</button>

    <div class="registrasi">
        <p>belum punya akun ? Registasi <a href="registrasi.php">Disini</a></p>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</form>