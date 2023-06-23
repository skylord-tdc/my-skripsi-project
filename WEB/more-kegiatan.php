<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KEGIATAN SMK PURNAMA 1 SEMARANG</title>
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
    <section id="kegiatan" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan</h2>
          <p>Sekolah</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="row mb-2">

            <!--Start code-->


            <div class="row">
              <div class="col-12 pb-5">
                <!--SECTION START-->
                <section class="row">
                  <!--Start slider news-->

                  <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                      <!--dots navigate-->
                      <ol class="carousel-indicators top-indicator">
                        <li data-target="#featured" data-slide-to="0" class="active"></li>
                      </ol>

                      <!--carousel inner-->
                      <?php
                      include 'logic/time-ago.php';
                      include '../login/conn.php';
                      // 
                      // untuk pengulangan penomeran
                      $no = 1;
                      $data = mysqli_query($conn, "SELECT * FROM data_kegiatan ORDER BY `id` DESC LIMIT 1");
                      while ($d = mysqli_fetch_array($data)) {
                      ?>
                        <div class="carousel-inner">
                          <!--Item slider-->
                          <div class="carousel-item active">
                            <div class="card border-0 rounded-0 text-light overflow zoom">
                              <div class="position-relative">
                                <!--thumbnail img-->
                                <div class="ratio_left-cover-1 image-wrapper">
                                  <a href="baca-kegiatan/<?php echo $d['slug']; ?>">
                                    <img class="" width="540" height="440" src="./admin/logic/kegiatan_sklh/<?php echo $d['foto']; ?>" alt="<?php echo $d['foto']; ?>" style="object-fit: cover;">
                                  </a>
                                </div>
                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                  <!--title-->
                                  <a href="baca-kegiatan/<?php echo $d['slug']; ?>">
                                    <h2 class="h3 post-title text-white my-1"><?php echo $d['judul']; ?></h2>
                                  </a>
                                  <!-- meta title -->
                                  <div class="news-meta">

                                    <span class="news-date">
                                      <?php
                                      $tgl_data = $d['tanggal'];
                                      date_default_timezone_set('Asia/Jakarta');
                                      echo time_since(strtotime($tgl_data));
                                      ?>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      <?php } ?>
                      <!--end carousel inner-->
                    </div>

                  </div>
                  <!--End slider news-->

                  <!--Start box news-->

                  <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                      <!--news box-->
                      <?php

                      // 
                      // untuk pengulangan penomeran
                      $no = 1;
                      $data = mysqli_query($conn, "SELECT * FROM data_kegiatan ORDER BY `id` DESC LIMIT 1,4");
                      while ($d = mysqli_fetch_array($data)) {
                      ?>

                        <div class="col-6 pb-1 pt-0 pr-1">
                          <div class="card border-0 rounded-0 text-white overflow zoom">
                            <div class="position-relative">
                              <!--thumbnail img-->
                              <div class="ratio_right-cover-2 image-wrapper">
                                <a href="baca-kegiatan/<?php echo $d['slug']; ?>">
                                  <img class="" width="255" height="218" src="./admin/logic/kegiatan_sklh/<?php echo $d['foto']; ?>" alt="<?php echo $d['foto']; ?>" style="object-fit: cover;">
                                </a>
                              </div>
                              <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                <!-- category -->
                                <a class="p-1 badge badge-primary rounded-0" href="#kegiatan">
                                  <?php
                                  $tgl_data = $d['tanggal'];
                                  date_default_timezone_set('Asia/Jakarta');
                                  echo time_since(strtotime($tgl_data));
                                  ?>
                                </a>

                                <!--title-->
                                <a href="baca-kegiatan/<?php echo $d['slug']; ?>">
                                  <h2 class="h5 text-white my-1"><?php echo $d['judul']; ?></h2>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>

                    </div>
                  </div>

                  <div class="col-12 col-md-12 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                      <?php

                      // 
                      // untuk pengulangan penomeran
                      $no = 1;
                      $data = mysqli_query($conn, "SELECT * FROM data_kegiatan ORDER BY `id` DESC LIMIT 5,999999");
                      while ($d = mysqli_fetch_array($data)) {
                      ?>

                        <div class="col-6 pb-1 pt-0 pr-1">
                          <div class="card border-0 rounded-0 text-white overflow zoom">
                            <div class="position-relative">
                              <!--thumbnail img-->
                              <div class="ratio_right-cover-2 image-wrapper">
                                <a href="baca-kegiatan/<?php echo $d['id']; ?>">
                                  <img class="" width="100%" height="218" src="./admin/logic/kegiatan_sklh/<?php echo $d['foto']; ?>" alt="<?php echo $d['foto']; ?>" style="object-fit: cover;">
                                </a>
                              </div>
                              <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                <!-- category -->
                                <a class="p-1 badge badge-primary rounded-0" href="#kegiatan">
                                  <?php
                                  $tgl_data = $d['tanggal'];
                                  date_default_timezone_set('Asia/Jakarta');
                                  echo time_since(strtotime($tgl_data));
                                  ?>
                                </a>

                                <!--title-->
                                <a href="baca-kegiatan/<?php echo $d['id']; ?>">
                                  <h2 class="h5 text-white my-1"><?php echo $d['judul']; ?></h2>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                  </div>

                  <!--End box news-->
                </section>
                <!--END SECTION-->
              </div>
            </div>


            <!--end code-->

          </div>
        </div>

      </div>

      <style>
        .b-0 {
          bottom: 0;
        }

        .bg-shadow {
          background: rgba(76, 76, 76, 0);
          background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
          background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
          filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0);
        }

        .top-indicator {
          right: 0;
          top: 1rem;
          bottom: inherit;
          left: inherit;
          margin-right: 1rem;
        }

        .overflow {
          position: relative;
          overflow: hidden;
        }

        .zoom img {
          transition: all 0.2s linear;
        }

        .zoom:hover img {
          -webkit-transform: scale(1.1);
          transform: scale(1.1);
        }
      </style>

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