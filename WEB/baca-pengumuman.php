<?php
$berkas = $_GET['berkas'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BACA PENGUMUMAN</title>
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

        <!-- ======= berita Details Section ======= -->
        <section id="pengumuman" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-5">
                        <div class="col-md-8">

                            <article class="blog-post">
                                <?php
                                include 'logic/time-ago.php';
                                include '../login/conn.php';
                                // untuk pengulangan penomeran
                                $no = 1;
                                $data = mysqli_query($conn, "SELECT * FROM data_pengumuman WHERE slug='$berkas' ");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <h2 class="blog-post-title mb-1"><?php echo $d['judul']; ?></h2>

                                    <p class="blog-post-meta">
                                        <?php
                                        $tgl_data = $d['tanggal'];
                                        date_default_timezone_set('Asia/Jakarta');
                                        echo time_since(strtotime($tgl_data));
                                        ?>
                                        by <a href="#">Admin</a></p>

                                    <img src="../admin/logic/pengumuman_sklh/<?php echo $d['foto']; ?>" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; width: 100%; height: 400px ;">
                                    <p><?php echo $d['isi']; ?></p>
                                    <hr>
                                <?php } ?>
                            </article>

                        </div>

                        <div class="col-md-4">
                            <div class="position-sticky" style="top: 2rem;">
                                <div class="p-4 mb-3 bg-light rounded">
                                    <h4 class="fst-italic">Hai Semuanya</h4>

                                    <p class="mb-0">Pantau terus pengumuman terbaru yang akan disajikan untuk mu hanya pada website ini.</p>
                                </div>

                                <div class="p-4">
                                    <h4 class="fst-italic">Pengumuman Terbaru</h4>
                                    <ol class="list-unstyled mb-0">
                                        <?php
                                        include '../login/conn.php';
                                        // untuk pengulangan penomeran
                                        $no = 1;
                                        $data = mysqli_query($conn, "SELECT * FROM data_pengumuman ORDER BY `id` DESC LIMIT 12 ");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <li><a class="btn btn-outline-secondary" style="width: 100% ;" href="<?php echo $d['slug']; ?>"><?php echo $d['judul']; ?></a></li>
                                        <?php } ?>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End berita Details Section -->

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