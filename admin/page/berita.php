<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=wb">Layanan Sistem</a></li>
            <li class="breadcrumb-item"><a href="?adm=wb/halaman-depan">Halaman Depan Website</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita</li>
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

    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <button data-toggle="collapse" class="btn btn-dark btn-block" data-target="#addBerita">Tambah Berita</button>
                <div id="addBerita" class="collapse mt-2 mb-2">
                    <div class="card">
                        <div class="mt-2 mb-2 ml-2 mr-2">
                            <form action="?adm=add-berita" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="df" class="form-control" required>
                                        <option disabled value selected>Pilihan..</option>
                                        <option value="Akademik">Akademik</option>
                                        <option value="Pekerjaan">Pekerjaan</option>
                                    </select>
                                </div>

                                <input type="hidden" name="creator" value="<?php echo $_SESSION['nm']; ?>">
                                <input type="hidden" name="level" value="Admin">

                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Konten</label>
                                    <textarea id="editor" name="content" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Gambar Galeri <sup>Ukuran max dibawah 2mb </sup></label>
                                    <div class=" custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" required> Setuju & lanjut</label>
                                </div>
                                <button name="tombol" type="submit" class="btn btn-dark"><i class="fa fa-plus-square" aria-hidden="true"></i> Posting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            include 'logic/time-ago.php';

            include '../login/conn.php';
            // untuk pengulangan penomeran
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM data_berita ORDER BY `id` DESC");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-sm-6 mb-3" style="width: 100% ;">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="?adm=delete-berita&id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger btn-block">Hapus Berita</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-info btn-block btn-sm" data-toggle="collapse" data-target="#detail<?php echo $d['id']; ?>">Detail</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="logic/berita_sklh/<?php echo $d['foto']; ?>" class="card-img-top w3-grayscale-min" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: 200px">
                        <div class="card-body">
                            <div id="detail<?php echo $d['id']; ?>" class="collapse">
                                <p class="card-title text-truncate text-break" style="font-size: 13px ;"><?php echo $d['content']; ?></p>
                                <hr>
                                <p class=" card-text text-dark font-weight-bold">
                                    Pembuat : <?php echo $d['creator']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
                            <h4 class="card-title"><?php echo $d['title']; ?></h4>
                            <p class="card-text"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $d['data_filter']; ?></p>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php
                                                                                                        $tgl_data = $d['date'];
                                                                                                        date_default_timezone_set('Asia/Jakarta');
                                                                                                        echo time_since(strtotime($tgl_data));
                                                                                                        ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>