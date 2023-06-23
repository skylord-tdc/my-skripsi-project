<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(0);
    $id_kls = $_GET['id_kls'];

    $kls = $_GET['kls'];
    $thn_angkatan = $_GET['thn_angkatan'];
    $kompetensi = $_GET['kompetensi'];
    $thn_pelajaran = $_GET['thn_pelajaran'];
    $nm_mapel = $_GET['nm_mapel'];

    $smstr_cari = $_GET['smstr_cari'];
    $thn_pelajaran_cari = $_GET['thn_pelajaran_cari'];

    $np1 = $_GET['np1'];
    $np2 = $_GET['np2'];
    $np3 = $_GET['np3'];
    $np4 = $_GET['np4'];
    $nptts = $_GET['nptts'];
    $nptas = $_GET['nptas'];
    $nk1 = $_GET['nk1'];
    $nk2 = $_GET['nk2'];
    $nk3 = $_GET['nk3'];
    $nk4 = $_GET['nk4'];

    // echo "ID";
    // $id_kls;

    // echo $kls;
    // echo $thn_angkatan;
    // echo $kompetensi;
    // echo $thn_pelajaran;
    // echo $nm_mapel;
    // echo $smstr_cari;
    // echo $thn_pelajaran_cari;
    // echo $np1;
    // echo $np2;
    // echo $np3;
    // echo $np4;
    // echo $nptts;
    // echo $nptas;
    // echo $nk1;
    // echo $nk2;
    // echo $nk3;
    // echo $nk4;

    // penghitungan rata-rata seluruh variabel untuk hitung pengetahuan
    $rata1 = (($np1) + ($np2) + ($np3) + ($np4)) / (4);

    // pembulatan rata-rata pengetahuan :
    $ph = round($rata1, 0);
    $rata2 = ((($ph) * (3)) + ($nptts) + (($nptas) * (2))) / (6);

    // pembulatan rata-rata nilai akhir pengetahuan :
    $na1 = round($rata2, 0);

    // penghitungan rata-rata seluruh variabel untuk hitung keterampilan :
    $hitung = (($nk1) + ($nk2) + ($nk3) + ($nk4)) / (4);

    // pembulatan nilai akhir untuk keterampilan :
    $na2 = round($hitung, 0);
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?gru=dk">Data Kelas</a></li>
            <li class="breadcrumb-item"><a href="?gru=buka-kelas&thn_angkatan=<?php echo $thn_angkatan; ?>&kompetensi=<?php echo $kompetensi; ?>&nm_mapel=<?php echo $nm_mapel; ?>&kls=<?php echo $kls; ?>&smstr_cari=<?php echo $smstr_cari; ?>&thn_pelajaran_cari=<?php echo $thn_pelajaran_cari; ?>"><?php echo $nm_mapel; ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">konfirmasi Nilai</li>
        </ol>
    </nav>

    <div class="card">
        <div class="mt-3 mb-3">
            <div class="p-2"><i class="fa fa-file-text fa-2x" aria-hidden="true"> Hasil Hitung Nilai</i></div>
            <hr>
            <?php
            include '../login/conn.php';
            // untuk pengulangan penomeran
            $no = 1;
            $data1 = mysqli_query($conn, "SELECT * FROM data_kelas WHERE (id_kls='$id_kls') ORDER BY `nis` ASC");
            while ($d1 = mysqli_fetch_array($data1)) {
            ?>
                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">NIS</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['nis']; ?></div>

                    <!-- create variabel nis -->
                    <?php $NIS = $d1['nis']; ?>
                </div>

                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">Nama Siswa</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['nm_siswa']; ?></div>
                </div>

                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">Kelas</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['kls']; ?></div>
                </div>

                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">Semester</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['smstr']; ?></div>
                </div>

                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">Tahun Angkatan</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['thn_angkatan']; ?></div>
                </div>

                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">kompetensi</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['kompetensi']; ?></div>
                </div>

                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">Tahun Pelajaran</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['thn_pelajaran']; ?></div>
                </div>

                <div class="d-flex flex-row mb-3">
                    <div class="p-2" style="width: 15% ;">Mapel</div>
                    <div class="p-2">:</div>
                    <div class="p-2"><?php echo $d1['nm_mapel']; ?></div>
                </div>

            <?php } ?>
            <div class="table-responsive">
                <div class="mr-2 ml-2">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Rata - rata</th>
                                <th>Nilai Akhir Pengetahuan</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo ("$ph"); ?></td>
                                <td><?php echo ("$na1"); ?></td>
                                <td>
                                    <?php
                                    if ($na1 >= 90)
                                        echo ("Amat Baik");
                                    elseif ($na1 >= 75)
                                        echo ("Baik");
                                    elseif ($na1 >= 64)
                                        echo ("Cukup");
                                    elseif ($na1 >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                            </tr>
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
                            <tr>
                                <td><?php echo ("$na2"); ?></td>
                                <td>
                                    <?php
                                    if ($na2 >= 90)
                                        echo ("Amat Baik");
                                    elseif ($na2 >= 75)
                                        echo ("Baik");
                                    elseif ($na2 >= 64)
                                        echo ("Cukup");
                                    elseif ($na2 >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>

                <form action="?gru=input-nilai" method="post">
                    <input name="id_kls" type="hidden" value="<?php echo $id_kls; ?>">
                    <input name="nis" type="hidden" value="<?php echo $NIS; ?>">
                    <input name="kls" type="hidden" value="<?php echo $kls; ?>">
                    <input name="smstr_cari" type="hidden" value="<?php echo $smstr_cari; ?>">
                    <input name="thn_pelajaran" type="hidden" value="<?php echo $thn_pelajaran_cari; ?>">
                    <input name="nm_mapel" type="hidden" value="<?php echo $nm_mapel; ?>">
                    <input name="thn_angkatan" type="hidden" value="<?php echo $thn_angkatan; ?>">
                    <input name="kompetensi" type="hidden" value="<?php echo $kompetensi; ?>">


                    <input name="np1" type="hidden" value="<?php echo $np1; ?>">
                    <input name="np2" type="hidden" value="<?php echo $np2; ?>">
                    <input name="np3" type="hidden" value="<?php echo $np3; ?>">
                    <input name="np4" type="hidden" value="<?php echo $np4; ?>">
                    <input name="nptts" type="hidden" value="<?php echo $nptts; ?>">
                    <input name="nptas" type="hidden" value="<?php echo $nptas; ?>">
                    <input name="nrr" type="hidden" value="<?php echo $ph; ?>">
                    <input name="nap" type="hidden" value="<?php echo $na1; ?>">
                    <input name="gnp" type="hidden" value="<?php
                                                            if ($na1 >= 90)
                                                                echo ("Amat Baik");
                                                            elseif ($na1 >= 75)
                                                                echo ("Baik");
                                                            elseif ($na1 >= 64)
                                                                echo ("Cukup");
                                                            elseif ($na1 >= 40)
                                                                echo ("Kurang");
                                                            ?>">


                    <input name="nk1" type="hidden" value="<?php echo $nk1; ?>">
                    <input name="nk2" type="hidden" value="<?php echo $nk2; ?>">
                    <input name="nk3" type="hidden" value="<?php echo $nk3; ?>">
                    <input name="nk4" type="hidden" value="<?php echo $nk4; ?>">
                    <input name="nak" type="hidden" value="<?php echo $na2; ?>">
                    <input name="gnk" type="hidden" value="<?php
                                                            if ($na2 >= 90)
                                                                echo ("Amat Baik");
                                                            elseif ($na2 >= 75)
                                                                echo ("Baik");
                                                            elseif ($na2 >= 64)
                                                                echo ("Cukup");
                                                            elseif ($na2 >= 40)
                                                                echo ("Kurang");
                                                            ?>">

                    <div class="checkbox mr-2 ml-2">
                        <label><input type="checkbox" required> Setuju & lanjut simpan nilai</label>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2">
                            <button name="Submit" type="submit" class="btn btn-dark">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>