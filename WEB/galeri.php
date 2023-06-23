<section id="galeri" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Galeri</h2>
      <p>Sekolah</p>
    </div>

    <div class="row">

      <?php
      // 
      // untuk pengulangan penomeran
      $no = 1;
      $data = mysqli_query($conn, "SELECT * FROM data_galeri ORDER BY `id_galeri` ASC");
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="member">
            <img src="./admin/logic/galeri/<?php echo $d['foto']; ?>" class="img-fluid" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; width: 261px; height: 262px;">
            <div class="member-info">
              <div class="member-info-content">
                <h4><?php echo $d['judul']; ?></h4>
                <span><?php echo $d['keterangan']; ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>




    </div>
</section>