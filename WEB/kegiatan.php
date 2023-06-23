<section id="kegiatan" class="faq">
  <div class="container" data-aos="fade-up">

    <div data-aos="fade-up" data-aos-delay="100">
      <main class="container">
        <div class=" rounded">

          <!--Start code-->


          <div class="row">
            <div class="col-12 ">
              <!--SECTION START-->
              <section class="row">
                <!--Start slider news-->
                <div class="section-title">
                  <h2>Kegiatan</h2>
                  <p>Sekolah</p>
                </div>
                <p class="lead mb-0"><a href="semua-kegiatan" class="fw-bold">Akses Lebih Banyak Kegiatan...</a></p>
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">

                  <div id="featured" class="carousel slide carousel" data-ride="carousel">
                    <!--dots navigate-->

                    <ol class="carousel-indicators top-indicator">
                      <li data-target="#featured" data-slide-to="0" class="active"></li>
                    </ol>

                    <!--carousel inner-->
                    <?php

                    // 
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT * FROM `data_kegiatan` ORDER BY `id` DESC LIMIT 1");
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
                    $data = mysqli_query($conn, "SELECT * FROM data_kegiatan ORDER BY `id` DESC LIMIT 4 OFFSET 1");
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

                <!--End box news-->
              </section>
              <!--END SECTION-->
            </div>
          </div>


          <!--end code-->

        </div>
      </main>
    </div>

  </div>
</section>

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

<!--Container-->

</div>