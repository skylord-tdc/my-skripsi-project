<section id="capaian" class="faq">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Prestasi</h2>
      <p>Sekolah</p>
    </div>

    <div data-aos="fade-up" data-aos-delay="100">

      <div class="container">
        <div class="row">
          <?php

          // untuk pengulangan penomeran
          $no = 1;
          $data = mysqli_query($conn, "SELECT * FROM data_prestasi ORDER BY `id` ASC");
          while ($d = mysqli_fetch_array($data)) {
          ?>
            <div class="col-sm-4">
              <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <img class="bd-placeholder-img card-img-top" style="object-fit: cover; height: 225px;" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="./admin/logic/prestasi_sklh/<?php echo $d['foto']; ?>" alt="<?php echo $d['foto']; ?>">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg> -->

                <div class="card-body">
                  <h5><?php echo $d['judul']; ?></h5>
                  <p class="card-text"><?php echo $d['isi']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                      <?php
                      $tgl_data = $d['tanggal'];
                      date_default_timezone_set('Asia/Jakarta');
                      echo time_since(strtotime($tgl_data));
                      ?>
                    </small>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

    </div>


  </div>
</section>