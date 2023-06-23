<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=wb">Layanan Sistem</a></li>
            <li class="breadcrumb-item"><a href="?adm=wb/halaman-depan">Halaman Depan Website</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
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
        <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#info"><i class="fa fa-question" aria-hidden="true"> Pertanyaan</i></button>

        <div id="info" class="card collapse mb-3">
            <div class="mt-3 mb-3 mr-2 ml-2">
                <i class="fa fa-bookmark-o fa-lg" aria-hidden="true"> Seputar Pertanyaan</i>
                <hr>

                <a href="#p1" class="" data-toggle="collapse">Bagaimana menyisipkan video youtube?</a><br>
                <div id="p1" class="collapse">
                    <ul type="circle">
                        <li>Anda bisa copy id link youtube yang akan anda sematkan lalu pastekan pada baris form input <b>Sumber Youtube</b>.</li>
                    </ul>
                </div>

                <a href="#p2" class="" data-toggle="collapse">Yang mana id youtube?</a><br>
                <div id="p2" class="collapse">
                    <ul type="circle">
                        <li>Id youtube biasanya berada pada bagian belakang url.</b></li>
                        <li>Contoh dari url ini : <p class="text-primary">https://www.youtube.com/watch?v=d4CF4km1rUQ</p>
                        </li>
                        <li>Anda bisa mengambil pada bagian belakang setelah simbol = (sama dengan) seperti contoh dibawah ini.</li>
                        <li>
                            <p class="text-primary">https://www.youtube.com/watch?v=<mark>d4CF4km1rUQ</mark>.</p>
                        </li>
                        <li>Maka id video youtube nya adalah <i class="font-weight-bold">d4CF4km1rUQ</i>.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <button data-toggle="collapse" class="btn btn-dark btn-block" data-target="#addKegiatan">Tambah Kegiatan</button>
                <div id="addKegiatan" class="collapse mt-2 mb-2">
                    <div class="card">
                        <div class="mt-2 mb-2 ml-2 mr-2">

                            <form action="?adm=add-kegiatan" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Konten Kegiatan</label>
                                    <textarea id="editor" name="isi" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Sumber Youtube <sup>Jika ada pastekan id youtube nya saja</sup></label>
                                    <input type="text" name="youtube" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Gambar Kegiatan <sup>Ukuran max dibawah 2mb </sup></label>
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
            $data = mysqli_query($conn, "SELECT * FROM data_kegiatan ORDER BY `id` DESC");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-sm-6 mb-3" style="width: 100% ;">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="?adm=delete-kegiatan&id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger btn-block">Hapus Kegiatan</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-info btn-block btn-sm" data-toggle="collapse" data-target="#detail<?php echo $d['id']; ?>">Detail</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="logic/kegiatan_sklh/<?php echo $d['foto']; ?>" class="card-img-top w3-grayscale-min" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: 200px">

                        <div class="card-body">
                            <div id="detail<?php echo $d['id']; ?>" class="collapse">
                                <p class="card-title text-truncate text-break" style="font-size: 13px ;"><?php echo $d['isi']; ?></p>
                                <?php
                                if (empty($d['youtube'])) {
                                    echo '';
                                } else {
                                    echo "
                                        <iframe width='100%' height='315' src='https://www.youtube.com/embed/$d[youtube]; ?>' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
                                        ";
                                }
                                ?>
                            </div>


                        </div>

                        <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5">
                            <h4 class="card-title"><?php echo $d['judul']; ?></h4>
                        </div>
                        <div class="card-footer d-flex flex-row-reverse">
                            <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php
                                                                                                        $tgl_data = $d['tanggal'];
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