<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BERITA SMK PURNAMA 1 SEMARANG</title>
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
    <section id="berita" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
          <p>Sekolah</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 divPortofolioHeader">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <?php
              include '../login/conn.php';
              // untuk pengulangan penomeran
              $no = 1;
              $data = mysqli_query($conn, "SELECT DISTINCT data_filter FROM data_berita ");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <li data-filter=".filter-<?php echo $d['data_filter']; ?>"><?php echo $d['data_filter']; ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php
          include 'logic/time-ago.php';
          include '../login/conn.php';
          // untuk pengulangan penomeran
          $no = 1;
          $data = mysqli_query($conn, "SELECT * FROM data_berita ORDER BY `id` DESC");
          while ($d = mysqli_fetch_array($data)) {
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $d['data_filter']; ?>">
              <div class="portfolio-wrap">
                <img src="admin/logic/berita_sklh/<?php echo $d['foto']; ?>" class="img-fluid" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: 300px; width: 100% ">
                <div class="portfolio-links">
                  <a href="baca-berita/<?php echo $d['slug']; ?>" title="More Details"><i class="bi bi-box-arrow-up-right"></i>Detail</a>
                </div>
                <div class="portfolio-info">
                  <h4><?php echo $d['title']; ?></h4>
                  <p>
                    <?php
                    $tgl_data = $d['date'];
                    date_default_timezone_set('Asia/Jakarta');
                    echo time_since(strtotime($tgl_data));
                    ?>
                  </p>
                </div>
              </div>
            </div>
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