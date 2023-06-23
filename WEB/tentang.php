<section id="tentang" class="faq">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Tentang</h2>
      <p>Kami</p>
    </div>

    <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

      <li>
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Profil Sekolah <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
          <div class="p-5">
            <table class="table table-sm table-striped">
              <thead>
                <tr>
                  <th>Field</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // 
                // untuk pengulangan penomeran
                $no = 1;
                $data = mysqli_query($conn, "select * from data_profil_sekolah");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td>Nama Sekolah</td>
                    <td>
                      <?php echo $d['nm_sekolah']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>
                      <?php echo $d['status_sekolah']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>NSS / NPSN</td>
                    <td>
                      <?php echo $d['nss_npsn']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>
                      <?php echo $d['almt_sekolah']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td>
                      <?php echo $d['telp_sekolah']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>E-mail</td>
                    <td>
                      <?php echo $d['email_sekolah']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Nama Kepala Sekolah</td>
                    <td>
                      <?php echo $d['nm_kepsek']; ?>
                    </td>
                  </tr>
                <?php
                  // looping end penomeran    
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Visi & Misi <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
          <div class="p-5">
            <h2>Visi</h2>
            <ol>
              <?php
              // 
              // untuk pengulangan penomeran
              $no = 1;
              $data = mysqli_query($conn, "SELECT * FROM data_visi_misi WHERE kategori='Visi' ORDER BY `id` ASC");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <li><?php echo $d['keterangan']; ?></li>
              <?php } ?>
            </ol>

            <h2>Misi</h2>
            <ol>
              <?php

              // untuk pengulangan penomeran
              $no = 1;
              $data = mysqli_query($conn, "SELECT * FROM data_visi_misi WHERE kategori='Misi' ORDER BY `id` ASC");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <li><?php echo $d['keterangan']; ?></li>
              <?php } ?>
            </ol>
          </div>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Struktur Organisasi <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
          <div class="row p-5 ">
            <?php
            // 
            // untuk pengulangan penomeran
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM data_struktur_organisasi ORDER BY `id` ASC");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <div class="col-xl-12 col-lg-12 col-md-12" id="Struktur">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                  <img src="./admin/logic/s_organisasi/<?php echo $d['foto']; ?>" class="card-img-top" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: auto;">
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Fasilitas Sekolah<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">

          <div class="row p-5">
            <?php
            // 
            // untuk pengulangan penomeran
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM data_fasilitas ORDER BY `id` ASC");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-2" id="Fasilitas">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                  <img src="./admin/logic/fasilitas_sklh/<?php echo $d['foto']; ?>" class="card-img-top" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: 262px;">
                  <div class="card-body ">
                    <h5 class="card-title"><?php echo $d['fasilitas']; ?></h5>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ekstra Kurikuler <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq4" class="collapse" data-bs-parent=".faq-list">

          <div class="row p-5">
            <?php
            // 
            // untuk pengulangan penomeran
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM data_eskul ORDER BY `id` ASC");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-2" id="Eskul">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                  <img src="./admin/logic/eskul/<?php echo $d['foto']; ?>" class="card-img-top" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: 262px;">
                  <div class="card-body">
                    <h5 class="card-title">Ekstra Kurikuler <?php echo $no++; ?></h5>
                    ~ <?php echo $d['eskul']; ?> ~<br>
                    <?php echo $d['keterangan']; ?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

        </div>
      </li>



    </ul>

  </div>
</section>