<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Polindra</title>
</head>

<body>
  <!-- include php -->
  <?php
  include './php/process.php';
  ?>

  <?php
  $mysqli = new mysqli('localhost', 'root', '', 'pw1') or die(mysqli_error($mysqli));
  $result = $mysqli->query("select * from post;") or die(mysqli_error($mysqli));
  function wordCounter($str)
  {
    if (str_word_count($str) > 10) {
      $part = str_word_count($str, 1);
      for ($i = 0; $i < 10; $i++) {
        print_r($part[$i]);
        echo " ";
        if ($i == 10 - 1) {
          echo "...";
        }
      }
    }
  }
  ?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo_baru.png" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Tentang Kami</a>
              <a class="dropdown-item" href="#">Visi dan Misi</a>
              <a class="dropdown-item" href="#">Struktur Organisasi</a>
              <a class="dropdown-item" href="#">Lokal dan Alamat</a>
              <a class="dropdown-item" href="#">Video Profil</a>
              <a class="dropdown-item" href="#">Galeri</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akademik</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Program Studi</a>
              <a class="dropdown-item" href="#">Kurikulum</a>
              <a class="dropdown-item" href="#">Jadwal Perkuliahan</a>
              <a class="dropdown-item" href="#">Jadwal Ujian</a>
              <a class="dropdown-item" href="#">Kalender Akademik</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">UPT BAHASA</a>
              <a class="dropdown-item" href="#">UPT PERPUSTAKAAN</a>
              <a class="dropdown-item" href="#">LAB POLINDRA</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jurusan</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Teknik Informatika</a>
              <a class="dropdown-item" href="#">Teknik Mesin</a>
              <a class="dropdown-item" href="#">Teknik Pendingin</a>
              <a class="dropdown-item" href="#">Keperawatan</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PMB</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Informasi Pendaftaran</a>
              <a class="dropdown-item" href="#">Panduan Pendaftaran</a>
              <a class="dropdown-item" href="#">Jalur Pendaftaran</a>
              <a class="dropdown-item" href="#">Daftar Persyaratan</a>
              <a class="dropdown-item" href="#">Gelombang Pendaftaran</a>
              <a class="dropdown-item" href="#">Hasil Seleksi & Penerimaan</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Sejarah Tentang Polinda</a>
              <a class="dropdown-item" href="#">Agenda</a>
              <a class="dropdown-item" href="#">Berita</a>
              <a class="dropdown-item" href="#">Pengumuman</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Sistem Informasi Akdemik</a>
              <a class="dropdown-item" href="#">Lecturer</a>
              <a class="dropdown-item" href="#">Pengaduan</a>
              <a class="dropdown-item" href="#">P3M</a>
              <a class="dropdown-item" href="#">P4MP</a>
              <a class="dropdown-item" href="#">PPID</a>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--- Image Slider -->
  <div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/2019010001.jpg" alt="" />
        <!-- <div class="carousel-caption">
            <h1 class="display-2">Bootstrap</h1>
            <h3>Complete Website Latout</h3>
            <button type="button" class="btn btn-outline-light btn-lg">
              VIEW DEMO
            </button>
            <button type="button" class="btn btn-primary btn-lg">
              Get Started
            </button>
          </div> -->
      </div>
      <div class="carousel-item">
        <img src="img/2018040001.jpg" alt="" />
      </div>
      <div class="carousel-item">
        <img src="img/2018040002.jpg" alt="" />
      </div>
    </div>
  </div>

  <!--- Two Column Section -->
  <div class="container-fluid padding">

    <div class="row padding">
      <div class="col-md-8">
        <h3 class="mt-4 ml-4 col-md-8">Update Terbaru</h3>
        <div class="row padding">
          <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="col-md-6">
              <div class="card">
                <img src="img/team1.png" alt="team1" class="card-img-top" />
                <div class="card-body">
                  <h4 class="card-title"><?php echo $row['title']; ?></h4>
                  <p class="card-text">
                    <?php
                      //echo $row['content'];
                      wordCounter($row['content']);
                      ?>
                  </p>
                  <a href="#" class="btn btn-secondary">View More</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-md-4">
        <h3 class="mt-4 ml-4 padding">Info Kampus</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, dolor?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, explicabo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, doloribus!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptatem!</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, ullam!</p>
      </div>
    </div>
    <div>
      <hr class="my-4" />
    </div>

    <!--- Footer -->

    <footer>
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-3">
            <hr class="light" />
            <h5>Profil</h5>
            <hr class="light" />
            <p><a href="#">Tentang Kami</a> </p>
            <p><a href="#">Visi dan Misi</a> </p>
            <p><a href="#">Struktur Informasi</a> </p>
            <p><a href="#">Denah dan Lokasi</a> </p>
          </div>
          <div class="col-md-3">
            <hr class="light" />
            <h5>Akademik</h5>
            <hr class="light" />
            <p><a href="#">Program Studi</a> </p>
            <p><a href="#">Fasilitas</a> </p>
            <p><a href="#">Kurikulum</a> </p>
            <p><a href="#">Kalender Akademik</a> </p>
          </div>
          <div class="col-md-3">
            <hr class="light" />
            <h5>Informasi</h5>
            <hr class="light" />
            <p><a href="#">Penerimaan Mahasiswa Baru</a> </p>
            <p><a href="#">Info Kampus</a> </p>
            <p><a href="#">Info Perkuliahan</a> </p>
            <p><a href="#">Info Lowongan Kerja</a> </p>
          </div>
          <div class="col-md-3">
            <hr class="light" />
            <h5>Contact</h5>
            <hr class="light" />
            <p><a href="#">Jl. Lohbener Lama No.08, Lohbener, Legok, Indramayu, Kabupaten Indramayu, Jawa Barat</a> </p>
            <p><a href="#">Kode Pos : 45252</a> </p>
            <p><a href="#">Telepon : (0234) 5746464</a> </p>
            <p><a href="#">Fax : (0234) 5746464</a> </p>
            <p><a href="#">Email : info@polindra.ac.id</a> </p>
          </div>
          <div class="col-12">
            <hr class="light-100" />
            <div class="row">
              <div class="col">
                <img src="img/ft_logo_baru.png" alt="">
              </div>
              <div class="col">
                Copyright © 2010 - 2019. IT Team Politeknik Negeri Indramayu
              </div>
              <div class="col">
                Politeknik Negeri Indramayu
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Script -->
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
</body>

</html>