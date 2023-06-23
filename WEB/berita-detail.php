<?php
// error_reporting(E_ALL ^ E_NOTICE);
// error_reporting(0);
$ModeRead = $_GET['ModeRead'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BERITA DETAIL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../WEB/assets/img/favicon.ico" rel="icon">
  <link href="../WEB/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../WEB/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../WEB/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../WEB/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../WEB/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../WEB/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../WEB/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../WEB/assets/css/style.css" rel="stylesheet">
  <link href="../WEB/assets/css/components.css" rel="stylesheet">

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
  include "header2.php";
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-medium">Berita Detail</h2>
          <ol>
            <li><a href="../semua-berita#berita">Berita</a></li>
            <li>Berita Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="berita" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <?php
          include '../login/conn.php';
          // untuk pengulangan penomeran
          $no = 1;
          $data = mysqli_query($conn, "SELECT DISTINCT foto FROM data_berita WHERE slug='$ModeRead' ");
          while ($d = mysqli_fetch_array($data)) {
          ?>
            <div class="col-lg-12">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="../admin/logic/berita_sklh/<?php echo $d['foto']; ?>" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; width: 268px; height: 400px; margin-left:auto;margin-right:auto;display:block;">
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

          <!-- <div class="col-lg-12">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div> -->

          <?php
          include 'logic/time-ago.php';
          include '../login/conn.php';
          // untuk pengulangan penomeran
          $no = 1;
          $data = mysqli_query($conn, "SELECT * FROM data_berita WHERE slug='$ModeRead'");
          while ($d = mysqli_fetch_array($data)) {
          ?>
            <div class="col-lg-12">
              <div class="portfolio-info">
                <h3>Informasi</h3>
                <ul>
                  <li><strong>Kategori</strong> <?php echo $d['data_filter']; ?></li>
                  <li><strong>Pembuat</strong> <?php echo $d['level']; ?></li>
                  <li><strong>Dibuat</strong>
                    <?php
                    $tgl_data = $d['date'];
                    date_default_timezone_set('Asia/Jakarta');
                    echo time_since(strtotime($tgl_data));
                    ?>
                  </li>
                </ul>
              </div>
              <div class="mt-5 portfolio-info">
                <h1 class="text-center" style="font-weight: bold ;"><?php echo $d['title']; ?></h1>
                <hr>
                <p class="table-bordered">
                  <?php echo $d['content']; ?>
                </p>

              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include "footer2.php";
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../WEB/assets/vendor/aos/aos.js"></script>
  <script src="../WEB/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../WEB/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../WEB/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../WEB/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../WEB/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../WEB/assets/js/main.js"></script>

</body>

</html>