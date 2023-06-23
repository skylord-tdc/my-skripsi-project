<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK PURNAMA 1 SEMARANG - Official</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="WEB/assets/img/favicon.ico" rel="icon">
  <link href="WEB/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="WEB/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="WEB/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="WEB/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="WEB/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="WEB/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="WEB/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="WEB/assets/css/style.css" rel="stylesheet">
  <link href="WEB/assets/css/components.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include "WEB/header.php";
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="home" class="d-flex align-items-center" style="height: 600px ;">

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Selamat Datang,</h1>
          <h2>Dapatkan Informasi Resmi Seputar Kegiatan Sekolah hanya dilaman ini</h2>
          <div>
            <a href="semua-berita" class="btn-get-started scrollto">Berita</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="WEB/assets/img/dashboard.png" class="img-fluid animated" alt="">
        </div>
      </div>

    </div>

  </section><!-- End Hero -->

  <main id="main">

    <?php
    include './login/conn.php';

    include 'WEB/time-ago.php';
    include 'WEB/format-tanggal-indo.php';
    ?>

    <!-- ======= Galeri Section ======= -->
    <?php
    include "WEB/galeri.php";
    ?>
    <!-- End Galeri Section-->

    <!-- ======= Tentang Section ======= -->
    <?php
    include "WEB/tentang.php";
    ?>
    <!-- End Tentang Section -->

    <!-- ======= Pengumumnan Section ======= -->
    <?php
    include "WEB/pengumuman.php";
    // include 'WEB/logic/time-ago.php';
    ?>
    <!-- End Pengumumnan Section -->

    <!-- ======= Kegiatan Section ======= -->
    <?php
    include "WEB/kegiatan.php";
    ?>
    <!-- End Kegiatan Section -->

    <!-- ======= Capaian Prestasi Section ======= -->
    <?php
    include "WEB/capaian.php";
    ?>
    <!-- End Capaian Prestasi Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include "WEB/footer.php";
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="WEB/assets/vendor/aos/aos.js"></script>
  <script src="WEB/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="WEB/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="WEB/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="WEB/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="WEB/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="WEB/assets/js/main.js"></script>


</body>

</html>