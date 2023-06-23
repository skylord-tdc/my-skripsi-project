<footer id="footer">

  <div class="footer-top section-bg">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <h3>Kontak</h3>
          <p>
            Jl. Jendral Sudirman
            <br>
            No. 265 Semarang Barat<br>
            <br><br>
            <strong>Phone:</strong>
            <?php
            include '../login/conn.php';
            $cari_phone = mysqli_query($conn, "SELECT telp_sekolah FROM data_profil_sekolah ");
            $rows = mysqli_fetch_array($cari_phone);
            echo $rows['telp_sekolah'];
            ?>
            <br>
            <strong>Email:</strong>
            <?php
            $cari_email = mysqli_query($conn, "SELECT email_sekolah FROM data_profil_sekolah ");
            $rows = mysqli_fetch_array($cari_email);
            echo $rows['email_sekolah'];
            ?>
            <br>
          </p>
        </div>

        <div class="col-lg-4 col-md-3 footer-links">
          <h4>Navigasi</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="./home#home">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="./home#galeri">Galeri</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="./home#tentang">Tentang Kami</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="./home#pengumuman">Pengumuman Sekolah</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="./home#kegiatan">Kegiatan Sekolah</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="./home#capaian">Prestasi Sekolah</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="./semua-berita#berita">Berita</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-3 footer-links">
          <h4>Link</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="./log-in">Login</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div> -->

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; <script>
        document.write(new Date().getFullYear())
      </script> Copyright <strong><span>Thomas DC</span></strong>/NIM - 2.22.18.0005
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->

    </div>
  </div>
</footer>