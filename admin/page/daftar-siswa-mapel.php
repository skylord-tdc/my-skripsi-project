<div>

    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kls = $_GET['kls'];
    $smstr = $_GET['smstr'];
    $thn_pelajaran = $_GET['thn_pelajaran'];
    $thn_angkatan = $_GET['thn_angkatan'];
    $kompetensi = $_GET['kompetensi'];
    $nm_mapel = $_GET['nm_mapel'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da3">Data Kelas</a></li>
            <li class="breadcrumb-item"><a href="?adm=list-ys&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>">Kelas <?php echo $kls; ?> - <?php echo $smstr; ?></a></li>
            <li class="breadcrumb-item"><a href="?adm=list-yf&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_pelajaran=<?php echo $thn_pelajaran; ?>">Tahun Pelajaran <?php echo $thn_pelajaran; ?></a></li>
            <li class="breadcrumb-item"><a href="?adm=details&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_pelajaran=<?php echo $thn_pelajaran; ?>&thn_angkatan=<?php echo $thn_angkatan; ?>&kompetensi=<?php echo $kompetensi; ?>">Angkatan <?php echo $thn_angkatan; ?> <?php echo $kompetensi; ?></a></li>
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
            <div><i class="fa fa-caret-square-o-down fa-lg" aria-hidden="true"> <?php echo $nm_mapel; ?></i></div>
            <hr>
            <table id="data" class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "SELECT * FROM data_kelas WHERE (kls='$kls' and smstr='$smstr' and thn_pelajaran='$thn_pelajaran' and thn_angkatan='$thn_angkatan' and kompetensi='$kompetensi' and nm_mapel='$nm_mapel') ORDER BY `nis` ASC");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $d1['nis']; ?></td>
                            <td><?php echo $d1['nm_siswa']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d1['id_kls']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-sm btn-dark" data-toggle="collapse" data-target="#nilai<?php echo $d1['id_kls']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-sm btn-warning" data-toggle="collapse" data-target="#cek_nilai<?php echo $d1['id_kls']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d1['id_kls']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-kelas&id_kls=<?php echo $d1['id_kls']; ?>&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_angkatan=<?php echo $thn_angkatan; ?>&kompetensi=<?php echo $kompetensi; ?>&thn_pelajaran=<?php echo $thn_pelajaran; ?>&nm_mapel=<?php echo $nm_mapel; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik Untuk Hapus Siswa Dari Kelas</a>
                                    <br>
                                    <i class="text-danger">peringatan nilai yang sudah ada pada siswa tidak akan terhapus, tapi tidak akan terbaca oleh sistem dengan baik, pastikan telah mengambil keputusan yang tepat.</i>
                                </div>

                                <div id="nilai<?php echo $d1['id_kls']; ?>" class="mt-2 collapse">
                                    <div class="alert alert-dark" role="alert">
                                        Beri nilai kepada siswa
                                    </div>
                                    <form action="?adm=proses-nilai" method="POST">
                                        <h3>Pengetahuan</h3>

                                        <input name="id_kls" type="hidden" value="<?php echo $d1['id_kls']; ?>">
                                        <input name="kls" type="hidden" value="<?php echo $kls; ?>">
                                        <input name="smstr" type="hidden" value="<?php echo $smstr; ?>">
                                        <input name="thn_pelajaran" type="hidden" value="<?php echo $thn_pelajaran; ?>">
                                        <input name="thn_angkatan" type="hidden" value="<?php echo $thn_angkatan; ?>">
                                        <input name="kompetensi" type="hidden" value="<?php echo $kompetensi; ?>">
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

                                <div id="cek_nilai<?php echo $d1['id_kls']; ?>" class="table-responsive mt-2 collapse">

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
                                        <a href='?adm=delete-nilai&id_kls=$d1[id_kls]&kls=$kls&smstr=$smstr&thn_pelajaran=$thn_pelajaran&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel' class='btn btn-danger btn-sm'>Hapus Nilai</a>
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
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>