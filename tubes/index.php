<?php
// menghubungkan dengan php lainnya
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
  <style>

  </style>
  <title>TokoKita</title>
</head>

<body style="background-color: black;">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">TokoKita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="#about">About</a>
          <a class="nav-link" href="#produk">Product</a>
        </div>
      </div>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/gambar.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 160px;   text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">
          <h5 style="text-align: left;">Selamat datang di TokoKita</h5>
          <p style="text-align: left;">Selamat menikmati</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/gambar1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 160px;  text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">
          <h5>Kami melayani anda dengan sepenuh hati</h5>
          <p>Anda senang kami juga senang</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/gambar3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 160px; text-align: left; text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">
          <h5>Terima kasih sudah berkunjung</h5>
          <p>Kehadiran anda sangat berarti untuk kami</p>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br>
  <br>
  <br>
  <div class="container">
    <h4 style="text-align: center; color: white;" id="about">About</h4>
    <br>
    <div class="row">

      <div class="col-6">
        <p style="color: #00dfff;"> TokoKita adalah bukti dari sebuah usaha dan kerja keras, yang didirikan oleh Mr.D.TokoKita menyediakan berbagai macam perangkat keras komputer dimulai dari monitor sampai motherboard,TokoKita juga sudah berdiri hampir 2 tahun.Kami mempunyai moto yaitu <i>Anda senang kami juga senang</i> dan <i>Kehadiran anda sangat berarti untuk kami</i> itulah moto kami.</p>
      </div>

      <div class="col-6">
        <p style="color: #00dfff;"> Kami siap melayani anda tanpa mengenal siapa anda, jika anda ingin mengunjungi TokoKita secara langsung, anda bisa langsung saja ke Bandung, Kami tunggu kedatangan anda di TokoKita.</p>
      </div>
    </div>
  </div>





  <h4 style="text-align: center; color: white; margin-top: 200px;" id="produk">Product Kami</h4>
  <br>
  <h2 style="text-align:center; color: white;">Berbagai Perangkat keras Computer</h2>
  <br>
  <h3 style="text-align:center; color: white;"><i>Semua barang disini Original 100 persen dan claim garansinya juga ada!!</i></h3>
  <br>
  <h5 style="text-align:center; color: white;"><i>Jika anda minat silahkan lihat produk kami yang ada di bawah ini!!</i></h5>
  <br>
  <br>
  <br>

  <a href="login.php">
    <button type="" class="btn btn-outline-primary" style="color: white;">Masuk ke halaman admin</button>
  </a>
  <br>

  <table class="table table-hover">

    <br>


    <tbody>

      <?php foreach ($perangkat_keras_komputer as $D) : ?>

        <tr>

          <br>
          <div data-aos="zoom-in-down" class="card" style="width: 15rem; margin-left: 250px; background-color: black;">
            <img src="img/<?= $D["Image"] ?>" class="card-img-top" alt="...">

            <div data-aos="zoom-in-down" class="card-body">
              <p class="card-text" class="Category" style="text-align:center;">
                <button type="" class="btn btn-outline-primary"><a href="detail.php?id= <?= $D['id'] ?>" style="color: white ;">
                    <?= $D["Category"] ?></button>
              </p>
            </div>
          </div>






        </tr>

      <?php endforeach; ?>




      <script src="js/jquery-3.5.1.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>