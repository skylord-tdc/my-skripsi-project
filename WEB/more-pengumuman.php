<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PENGUMUMAN SMK PURNAMA 1 SEMARANG</title>
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

  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include "header3.php";
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= berita Details Section ======= -->
    <section id="pengumuman" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pengumuman</h2>
          <p>Sekolah</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <?php
          include 'logic/time-ago.php';
          include '../login/conn.php';
          // untuk pengulangan penomeran
          $no = 1;
          $data = mysqli_query($conn, "SELECT * FROM data_pengumuman ORDER BY `id` DESC");
          while ($d = mysqli_fetch_array($data)) {
          ?>
            <a href="baca-pengumuman/<?php echo $d['slug']; ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="admin/logic/pengumuman_sklh/<?php echo $d['foto']; ?>" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0" style="object-fit: cover;">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0"><?php echo $d['judul']; ?></h6>
                  <p class="mb-0 opacity-75"><?php echo $d['isi']; ?></p>
                </div>
                <small class="opacity-50 text-nowrap">
                  <?php
                  $tgl_data = $d['tanggal'];
                  date_default_timezone_set('Asia/Jakarta');
                  echo time_since(strtotime($tgl_data));
                  ?>
                </small>
              </div>
            </a>
          <?php } ?>
        </div>

      </div>
    </section>
    <!-- End berita Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include "footer3.php";
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