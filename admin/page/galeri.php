<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=wb">Layanan Sistem</a></li>
            <li class="breadcrumb-item"><a href="?adm=wb/halaman-depan">Halaman Depan Website</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
        </ol>
    </nav>

    <?php
    if (!empty($_SESSION["success"])) {
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
    }
    ?>
    <?php
    if (!empty($_SESSION["warning"])) {
        echo $_SESSION["warning"];
        unset($_SESSION["warning"]);
    }
    ?>
    <?php

    if (!empty($_SESSION["danger"])) {
        echo $_SESSION["danger"];
        unset($_SESSION["danger"]);
    } ?>

    <div class="card">
        <button type="button" class="btn btn-dark ml-2 mr-2 mt-2 mb-2" data-toggle="collapse" data-target="#demo">Tambah Galeri</button>
        <div id="demo" class="collapse">
            <form action="?adm=add-galeri" enctype="multipart/form-data" method="POST">

                <div class="form-row ml-2 mr-2 mt-2 mb-2">

                    <div class="col-md-12 mb-3 mt-3">
                        <label>Judul Galeri</label>
                        <input type="text" class="form-control form-group" name="judul" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Keterangan Galeri</label>
                        <input type="text" class="form-control form-group" name="keterangan" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Gambar Galeri <sup>Ukuran max dibawah 2mb </sup></label>
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <button type="submit" name="tombol" class="btn btn-secondary mt-3"><i class="fa fa-cloud-upload" aria-hidden="true"> Upload</i></button>
                    </div>
                </div>

            </form>
        </div>

        <div class="mt-2 mb-2 ml-2 mr-2">

            <div class="container text-center">
                <div class="row">

                    <?php
                    include 'logic/time-ago.php';

                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT * FROM data_galeri ORDER BY `id_galeri` DESC");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <div class="col-sm-4 ">
                            <div class="card">
                                <h5 class="card-header text-white" style="background-color: #2A3F54 ;"><?php echo $d['judul']; ?></h5>
                                <img src="logic/galeri/<?php echo $d['foto']; ?>" class="card-img-top" alt="<?php echo $d1['foto']; ?>" style="object-fit: cover;" width="200" height="250">

                                <figure class="text-center">
                                    <blockquote class="blockquote ">
                                        <p class="text-center"><?php echo $d['keterangan']; ?></p>
                                    </blockquote>

                                    <?php
                                    $tgl_data = $d['tanggal'];
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo time_since(strtotime($tgl_data));
                                    ?>

                                </figure>

                                <div>
                                    <a href="?adm=delete-galeri&id=<?php echo $d['id_galeri']; ?>" class="btn btn-danger btn-sm btn-block">Hapus</a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>

    </div>


</div>