<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $thn_angkatan = $_GET['thn_angkatan'];
    $kompetensi = $_GET['kompetensi'];
    $nm_mapel = $_GET['nm_mapel'];
    $kls = $_GET['kls'];

    $smstr_cari = $_GET['smstr_cari'];
    $thn_pelajaran_cari = $_GET['thn_pelajaran_cari'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?gru=dk">Data Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $nm_mapel; ?></li>
        </ol>
    </nav>

    <!-- notif  -->
    <?php

    if (!empty($_SESSION["danger"])) {
        echo $_SESSION["danger"];
        unset($_SESSION["danger"]);
    } ?>

    <?php

    if (!empty($_SESSION["success"])) {
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
    } ?>
    <!-- end notif  -->

    <div class="card">
        <div class="mt-3 mb-3 mr-3 ml-3">
            <div><i class="fa fa-caret-square-o-down fa-lg" aria-hidden="true"> <?php echo $kompetensi; ?> <?php echo $thn_angkatan; ?></i> <span class="badge bg-secondary text-white"><?php echo $smstr_cari; ?></span> <span class="badge bg-secondary text-white"><?php echo $thn_pelajaran_cari; ?></span></div>
            <hr>
            <div>
                <form action="?gru=cari_data" method="POST">
                    <!-- dropdown -->
                    <?php
                    include "../login/conn.php";
                    $kelas = mysqli_query($conn, "SELECT DISTINCT kls FROM data_kelas ORDER BY `kls` ASC ");
                    $semester = mysqli_query($conn, "SELECT DISTINCT smstr FROM data_kelas ORDER BY `smstr` ASC ");
                    $tahun_ajar = mysqli_query($conn, "SELECT DISTINCT thn_pelajaran FROM data_kelas ORDER BY `thn_pelajaran` ASC ");
                    ?>
                    <!-- dropdown end-->

                    <input type="hidden" name="thn_angkatan" value="<?php echo $thn_angkatan; ?>">
                    <input type="hidden" name="kompetensi" value="<?php echo $kompetensi; ?>">
                    <input type="hidden" name="nm_mapel" value="<?php echo $nm_mapel; ?>">
                    <input type="hidden" name="kls" value="<?php echo $kls; ?>">

                    <div class="row">

                        <div class="col-sm-3">
                            <select name="smstr_cari" class="form-control" required>
                                <option disabled value selected>Semester..</option>
                                <?php while ($row = mysqli_fetch_array($semester)) { ?>
                                    <option value="<?= $row['smstr'] ?>"><?= $row['smstr'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <select name="thn_pelajaran_cari" class="form-control" required>
                                <option disabled value selected>Tahun Pelajaran..</option>
                                <?php while ($row = mysqli_fetch_array($tahun_ajar)) { ?>
                                    <option value="<?= $row['thn_pelajaran'] ?>"><?= $row['thn_pelajaran'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <button class="btn btn-dark" name="Submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="data" class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>NAMA</th>
                            <th style="width: 30% ;">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data1 = mysqli_query($conn, "SELECT * FROM data_kelas WHERE (kls='$kls' and thn_angkatan='$thn_angkatan' and kompetensi='$kompetensi' and nm_mapel='$nm_mapel' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari') ORDER BY `nis` ASC");
                        while ($d1 = mysqli_fetch_array($data1)) {
                        ?>
                            <tr>
                                <td><?php echo $d1['nis']; ?></td>
                                <td><?php echo $d1['nm_siswa']; ?></td>
                                <td style="width: 32% ;">
                                    <a href="#" class="btn btn-sm btn-dark" data-toggle="collapse" data-target="#nilai<?php echo $d1['id_kls']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="collapse" data-target="#cek_nilai<?php echo $d1['id_kls']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                    <div id="nilai<?php echo $d1['id_kls']; ?>" class="mt-2 collapse">
                                        <div class="alert alert-dark" role="alert">
                                            Beri nilai kepada siswa
                                        </div>
                                        <form action="?gru=proses-nilai" method="POST">
                                            <h3>Pengetahuan</h3>
                                            <input name="thn_angkatan" type="hidden" value="<?php echo $thn_angkatan; ?>">
                                            <input name="kompetensi" type="hidden" value="<?php echo $kompetensi; ?>">

                                            <input name="id_kls" type="hidden" value="<?php echo $d1['id_kls']; ?>">
                                            <input name="kls" type="hidden" value="<?php echo $kls; ?>">
                                            <input name="smstr_cari" type="hidden" value="<?php echo $smstr_cari; ?>">
                                            <input name="thn_pelajaran_cari" type="hidden" value="<?php echo $thn_pelajaran_cari; ?>">
                                            <input name="nm_mapel" type="hidden" value="<?php echo $nm_mapel; ?>">

                                            <div class="form-group col-sm-3">
                                                <label>NP 1</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NP 1 = Nilai Pengetahuan 1"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="np1" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-3">
                                                <label>NP 2</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NP 2 = Nilai Pengetahuan 2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="np2" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-3">
                                                <label>NP 3</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NP 3 = Nilai Pengetahuan 3"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="np3" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-3">
                                                <label>NP 4</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NP 4 = Nilai Pengetahuan 4"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="np4" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label>NP TTS</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NP TTS = Nilai Pengetahuan Test Tengah Semester"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="nptts" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label>NP TAS</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NP TAS = Nilai Pengetahuan Test Akhir Semester"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="nptas" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <h3>Keterampilan</h3>
                                            <div class="form-group col-sm-3">
                                                <label>NK 1</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NK 1 = Nilai Keterampilan 1"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="nk1" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-3">
                                                <label>NK 2</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NK 2 = Nilai Keterampilan 2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="nk2" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-3">
                                                <label>NK 3</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NK 3 = Nilai Keterampilan 3"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="nk3" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="form-group col-sm-3">
                                                <label>NK 4</label>
                                                <button type="button" class="btn btn-sm" data-bs-toggle="tooltip" title="NK 4 = Nilai Keterampilan 4"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
                                                <input name="nk4" type="number" min="0" max="100" class="form-control" required>
                                            </div>

                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Setuju & lanjut</label>
                                            </div>
                                            <button name="Submit" type="submit" class="btn btn-dark">Simpan</button>
                                        </form>
                                    </div>

                                    <div id="cek_nilai<?php echo $d1['id_kls']; ?>" class="mt-2 collapse">

                                        <!-- cek kesedian nilai -->
                                        <?php
                                        include '../login/conn.php';
                                        $sql1 = mysqli_query($conn, "select * from data_nilai where (id_kls='$d1[id_kls]' and nm_mapel='$nm_mapel') ");
                                        $cek1 = mysqli_num_rows($sql1);
                                        if ($cek1 == 0) {
                                            echo "
                                        <div class='alert alert-warning'>
                                            <strong>Tidak Ada!</strong> Nilai Yang Ditemukan Pada Siswa Ini.
                                        </div>
                                        ";
                                        } else {
                                            echo "
                                        <a href='?gru=delete-nilai&id_kls=$d1[id_kls]&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel&kls=$kls&smstr_cari=$smstr_cari&thn_pelajaran_cari=$thn_pelajaran_cari' class='btn btn-danger btn-sm'>Hapus Nilai</a>
                                        ";
                                        }
                                        ?>
                                        <!-- end cek kesedian nilai -->


                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nilai Akhir Pengetahuan</th>
                                                    <th>Predikat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include '../login/conn.php';
                                                // untuk pengulangan penomeran
                                                $no = 1;
                                                $data2 = mysqli_query($conn, "SELECT * FROM data_nilai WHERE (id_kls='$d1[id_kls]' and nm_mapel='$nm_mapel')");
                                                while ($d2 = mysqli_fetch_array($data2)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $d2['nap']; ?></td>
                                                        <td><?php echo $d2['gnp']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nilai Akhir Keterampilan</th>
                                                    <th>Predikat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include '../login/conn.php';
                                                // untuk pengulangan penomeran
                                                $no = 1;
                                                $data3 = mysqli_query($conn, "SELECT * FROM data_nilai WHERE (id_kls='$d1[id_kls]' and nm_mapel='$nm_mapel')");
                                                while ($d3 = mysqli_fetch_array($data3)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $d3['nak']; ?></td>
                                                        <td><?php echo $d3['gnk']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>