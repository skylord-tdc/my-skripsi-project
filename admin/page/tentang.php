<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=wb">Layanan Sistem</a></li>
            <li class="breadcrumb-item"><a href="?adm=wb/halaman-depan">Halaman Depan Website</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tentang</li>
        </ol>
    </nav>

    <?php
    if (!empty($_SESSION["success"])) {
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
    }
    ?>
    <?php
    if (!empty($_SESSION["danger"])) {
        echo $_SESSION["danger"];
        unset($_SESSION["danger"]);
    } ?>
    <?php
    if (!empty($_SESSION["warning"])) {
        echo $_SESSION["warning"];
        unset($_SESSION["warning"]);
    } ?>

    <div class="container text-center card">
        <div class="row ml-3 mr-3 mt-4 mb-4">
            <div class="col-sm-12 mt-2">
                <div class="w3-card-4">
                    <header class="w3-container w3-light-grey">
                        <h3>Profil Sekolah</h3>
                    </header>

                    <div class="w3-container">
                        <p>Buka pada tombol setting dibawah</p>
                        <hr>
                        <div id="profil" class="collapse mb-3">
                            <form action="?adm=update-ps" method="POST">
                                <table class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../login/conn.php';
                                        // untuk pengulangan penomeran
                                        $no = 1;
                                        $data = mysqli_query($conn, "select * from data_profil_sekolah");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <input type="hidden" name="id" value="<?php echo $d['id_profil_sekolah']; ?>">
                                            <tr>
                                                <td>Nama Sekolah</td>
                                                <td>
                                                    <input name="nm_sekolah" type="text" class="form-control form-group" value="<?php echo $d['nm_sekolah']; ?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>
                                                    <input name="status_sekolah" type="text" class="form-control form-group" value="<?php echo $d['status_sekolah']; ?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NSS / NPSN</td>
                                                <td>
                                                    <input name="nss_npsn" type="text" class="form-control form-group" value="<?php echo $d['nss_npsn']; ?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>
                                                    <input name="almt_sekolah" type="text" class="form-control form-group" value="<?php echo $d['almt_sekolah']; ?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Telepon</td>
                                                <td>
                                                    <input name="telp_sekolah" type="text" class="form-control form-group" value="<?php echo $d['telp_sekolah']; ?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>
                                                    <input name="email_sekolah" type="text" class="form-control form-group" value="<?php echo $d['email_sekolah']; ?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kepala Sekolah</td>
                                                <td>
                                                    <input name="nm_kepsek" type="text" class="form-control form-group" value="<?php echo $d['nm_kepsek']; ?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="14"><button type="submit" class="btn btn-dark btn-sm btn-block">Rubah Data</button></td>
                                            </tr>
                                        <?php
                                            // looping end penomeran    
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    <button class="w3-button w3-block w3-dark-grey" data-toggle="collapse" data-target="#profil">+ Open Profil Sekolah</button>
                </div>
            </div>
            <div class="col-sm-12 mt-2">
                <div class="w3-card-4">
                    <header class="w3-container w3-light-grey">
                        <h3>Visi & Misi</h3>
                    </header>

                    <div class="w3-container">
                        <p>Buka pada tombol setting dibawah</p>
                        <hr>
                        <div id="visi_misi" class="collapse mb-3">
                            <form action="?adm=add-visi-misi" method="POST" class="text-left">
                                <div class="form-group">
                                    <select name="kategori" class="form-control" required>
                                        <option disabled value selected>Kategori..</option>
                                        <option value="Visi">Visi</option>
                                        <option value="Misi">Misi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input name="keterangan" type="text" class="form-control form-group">
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" required> Setuju & lanjut</label>
                                </div>
                                <button name="Submit" type="submit" class="btn btn-dark">Simpan</button>
                            </form>
                            <hr>
                            <div class="alert alert-dark" role="alert">
                                <div class="text-left">
                                    <h2>Visi</h2>
                                    <ol>
                                        <?php
                                        include '../login/conn.php';
                                        // untuk pengulangan penomeran
                                        $no = 1;
                                        $data = mysqli_query($conn, "SELECT * FROM data_visi_misi WHERE kategori='Visi' ORDER BY `id` ASC");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <li><?php echo $d['keterangan']; ?> <a href="?adm=delete-visi-misi&id=<?php echo $d['id']; ?>"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></li>
                                        <?php } ?>
                                    </ol>

                                    <h2>Misi</h2>
                                    <ol>
                                        <?php
                                        include '../login/conn.php';
                                        // untuk pengulangan penomeran
                                        $no = 1;
                                        $data = mysqli_query($conn, "SELECT * FROM data_visi_misi WHERE kategori='Misi' ORDER BY `id` ASC");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <li><?php echo $d['keterangan']; ?> <a href="?adm=delete-visi-misi&id=<?php echo $d['id']; ?>"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></li>
                                        <?php } ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w3-button w3-block w3-dark-grey" data-toggle="collapse" data-target="#visi_misi">+ Open Visi & Misi</button>
                </div>
            </div>
            <div class="col-sm-12 mt-2">
                <div class="w3-card-4">
                    <header class="w3-container w3-light-grey">
                        <h3>Struktur Organisasi</h3>
                    </header>

                    <div class="w3-container">
                        <p>Buka pada tombol setting dibawah</p>
                        <hr>
                        <div id="s_organisasi" class="collapse mb-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="?adm=add-struktur" enctype="multipart/form-data" method="POST" class="text-left">

                                        <div class="form-row ml-2 mr-2 mt-2 mb-2">

                                            <div class="col-md-12 mb-3">
                                                <label>Gambar Struktur Organisasi <sup>Ukuran max dibawah 2mb </sup></label>
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

                                <?php
                                include '../login/conn.php';
                                // untuk pengulangan penomeran
                                $no = 1;
                                $data = mysqli_query($conn, "SELECT * FROM data_struktur_organisasi ORDER BY `id` ASC");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <div class="col-sm-12" id="struktur_organisasi">
                                        <div class="card">
                                            <img src="logic/s_organisasi/<?php echo $d['foto']; ?>" class="card-img-top" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: auto;">
                                            <div class="card-body">
                                                <h5 class="card-title">Struktur Organisasi SMK Purnama 1 Semarang</h5>
                                                <a href="?adm=delete-so&id=<?php echo $d['id']; ?>" class="btn btn-danger btn-block btn-sm">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <button class="w3-button w3-block w3-dark-grey" data-toggle="collapse" data-target="#s_organisasi">+ Open Struktur Organisasi</button>
                </div>
            </div>
            <div class="col-sm-12 mt-2">
                <div class="w3-card-4">
                    <header class="w3-container w3-light-grey">
                        <h3>Fasilitas</h3>
                    </header>

                    <div class="w3-container">
                        <p>Buka pada tombol setting dibawah</p>
                        <hr>
                        <div id="fasilitas" class="collapse mb-3">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="?adm=add-fasilitas" enctype="multipart/form-data" method="POST" class="text-left">

                                            <div class="form-row ml-2 mr-2 mt-2 mb-2">

                                                <div class="col-md-12 mb-3 mt-3">
                                                    <label>Nama Fasilitas</label>
                                                    <input type="text" class="form-control form-group" name="fs" required>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label>Gambar Fasilitas <sup>Ukuran max dibawah 2mb </sup></label>
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

                                    <?php
                                    include '../login/conn.php';
                                    // untuk pengulangan penomeran
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT * FROM data_fasilitas ORDER BY `id` ASC");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <div class="col-sm-4" id="Fasilitas">
                                            <div class="card">
                                                <img src="logic/fasilitas_sklh/<?php echo $d['foto']; ?>" class="card-img-top" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: 262px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Fasilitas <?php echo $no++; ?></h5>
                                                    <p class="card-text"><?php echo $d['fasilitas']; ?></p>
                                                    <a href="?adm=delete-fasilitas&id=<?php echo $d['id']; ?>" class="btn btn-danger btn-block btn-sm">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w3-button w3-block w3-dark-grey" data-toggle="collapse" data-target="#fasilitas">+ Open Fasilitas</button>
                </div>
            </div>
            <div class="col-sm-12 mt-2">
                <div class="w3-card-4">
                    <header class="w3-container w3-light-grey">
                        <h3>Ekstra Kurikuler</h3>
                    </header>

                    <div class="w3-container">
                        <p>Buka pada tombol setting dibawah</p>
                        <hr>
                        <div id="ekstra_kurikuler" class="collapse mb-3">
                            <form action="?adm=add-eskul" enctype="multipart/form-data" method="POST" class="text-left">

                                <div class="form-row ml-2 mr-2 mt-2 mb-2">

                                    <div class="col-md-12 mb-3 mt-3">
                                        <label>Nama Ekstra Kurikuler</label>
                                        <input type="text" class="form-control form-group" name="es" required>
                                    </div>

                                    <div class="col-md-12 mb-3 mt-3">
                                        <label>Keterangan Ekstra Kurikuler</label>
                                        <input type="text" class="form-control form-group" name="ket" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Gambar Ekstra Kurikuler <sup>Ukuran max dibawah 2mb </sup></label>
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

                            <div class="container text-center">
                                <div class="row">
                                    <?php
                                    include '../login/conn.php';
                                    // untuk pengulangan penomeran
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT * FROM data_eskul ORDER BY `id` ASC");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <div class="col-sm-4" id="Eskul">
                                            <div class="card">
                                                <img src="logic/eskul/<?php echo $d['foto']; ?>" class="card-img-top" alt="<?php echo $d['foto']; ?>" style="object-fit: cover; height: 262px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ekstra Kurikuler <?php echo $no++; ?></h5>
                                                    <p class="card-text">~ <?php echo $d['eskul']; ?> ~</p><br>
                                                    <p class="card-text"><?php echo $d['keterangan']; ?></p>
                                                    <a href="?adm=delete-eskul&id=<?php echo $d['id']; ?>" class="btn btn-danger btn-block btn-sm">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w3-button w3-block w3-dark-grey" data-toggle="collapse" data-target="#ekstra_kurikuler">+ Open Ekstra Kurikuler</button>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>