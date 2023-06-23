<?php
// error_reporting(E_ALL ^ E_NOTICE);
// error_reporting(0);
?>
<section id="pengumuman" class="faq">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pengumuman</h2>
      <p>Sekolah</p>
    </div>

    <div data-aos="fade-up" data-aos-delay="100">
      <div class="mb-3 rounded">
        <div class="col-md-6 px-0">
          <p class="lead mb-0"><a href="semua-pengumuman" class="fw-bold">Akses Lebih Banyak Pengumuman...</a></p>
        </div>
      </div>

      <div class="list-group w-auto">

        <?php

        // untuk pengulangan penomeran
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM data_pengumuman ORDER BY `id` DESC LIMIT 5");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <a href="baca-pengumuman/<?php echo $d['slug']; ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="./admin/logic/pengumuman_sklh/<?php echo $d['foto']; ?>" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0" style="object-fit: cover;">
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

  </div>
</section>