<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $thn_angkatan = $_GET['thn_angkatan'];
    $kompetensi = $_GET['kompetensi'];

    $thn_angkatan_cari = $_GET['thn_angkatan_cari'];
    $kompetensi_cari = $_GET['kompetensi_cari'];

    $nm_siswa = $_GET['nm_siswa'];
    $nis = $_GET['nis'];

    //cari
    $kls_cari = $_GET['kls_cari'];
    $smstr_cari = $_GET['smstr_cari'];
    $thn_pelajaran_cari = $_GET['thn_pelajaran_cari'];
    ?>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?adm=da4">Data Nilai</a></li>
        <li class="breadcrumb-item"><a href="?adm=view-list-nilai&thn_angkatan=<?php echo $thn_angkatan ?><?php echo $thn_angkatan_cari ?>&kompetensi=<?php echo $kompetensi ?><?php echo $kompetensi_cari ?>"><?php echo $kompetensi ?> <?php echo $kompetensi_cari ?> <?php echo $thn_angkatan_cari ?></a></li>
        <li class="breadcrumb-item active" aria-current="page">DB <?php echo $nis ?></li>
    </ol>

    <div class="card mb-2">
        <div class="container mr-3 ml-3 mt-2 mb-2">
            <div class="row">

                <div class="col-sm-12 mb-2">
                    Nama Siswa : <?php echo $nm_siswa; ?>
                </div>
                <div class="col-sm-12">
                    <form action="?adm=cari_nilai" method="POST">
                        <!-- dropdown -->
                        <?php
                        include "../login/conn.php";
                        $kelas = mysqli_query($conn, "SELECT DISTINCT kls FROM data_kelas ORDER BY `kls` ASC ");
                        $semester = mysqli_query($conn, "SELECT DISTINCT smstr FROM data_kelas ORDER BY `smstr` ASC ");
                        $tahun_ajar = mysqli_query($conn, "SELECT DISTINCT thn_pelajaran FROM data_kelas ORDER BY `thn_pelajaran` ASC ");
                        ?>
                        <!-- dropdown end-->

                        <input type="hidden" name="nis" value="<?php echo $nis; ?>">
                        <input type="hidden" name="thn_angkatan" value="<?php echo $thn_angkatan; ?>">
                        <input type="hidden" name="kompetensi" value="<?php echo $kompetensi; ?>">
                        <input type="hidden" name="id_kls" value="<?php echo $id_kls; ?>">
                        <input type="hidden" name="nm_siswa" value="<?php echo $nm_siswa; ?>">

                        <div class="row">
                            <div class="col-sm-3">
                                <select name="kls_cari" class="form-control" required>
                                    <option disabled value selected>Kelas..</option>
                                    <?php while ($row = mysqli_fetch_array($kelas)) { ?>
                                        <option value="<?= $row['kls'] ?>"><?= $row['kls'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

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
            </div>

        </div>


    </div>

    <div class="card table-responsive">
        <div class="mr-2 ml-2 mt-2 mb-2">

            <div>
                <!-- cek result rapor -->
                <?php
                if (empty($kls_cari)) {
                    echo '
                    <div class="alert alert-danger text-center">
                        <strong>Opps!</strong> Anda belum melakukan pencarian, silahkan cari data pada form pencarian diatas.
                    </div>
                    ';
                } else {
                    echo '
                    <div class="alert alert-success text-center mb-2">
                        <strong>Yeah!</strong> Anda barusan melakukan pencarian.
                    </div>
                    ';

                    echo
                    "
                    <div class='text-center text-white mb-2'>
                        <h6><span class='badge bg-info'> $kls_cari </span> <span class='badge bg-info'> $smstr_cari </span> <span class='badge bg-info'> $thn_pelajaran_cari </span></h6>
                    </div>
                    ";

                    echo '
                    <div class="text-center mb-2">
                        Silahkan masukkan tanggal sebelumn mencetak rapor
                    </div>
                    ';

                    echo "
                    <div class='container'>
                        <form action='logic/proses-tangkap-pdf' method='POST' target='blank'>
                            <input type='hidden' name='nis' value='$nis'>
                            <input type='hidden' name='nm_siswa' value='$nm_siswa'>
                            <input type='hidden' name='thn_pelajaran_cari' value='$thn_pelajaran_cari'>
                            <input type='hidden' name='smstr_cari' value='$smstr_cari'>
                            <input type='hidden' name='kls_cari' value='$kls_cari'>
                            <input type='hidden' name='thn_angkatan_cari' value='$thn_angkatan_cari'>
                            <input type='hidden' name='kompetensi_cari' value='$kompetensi_cari'>
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <input type='date' class='form-control mb-2' name='tanggal' required>
                                </div>
                                <div class='col-sm-6'>
                                    <button class='btn btn-outline-danger btn-block' name='SUBMIT'><i class='fa fa-file-pdf-o' aria-hidden='true'> Cetak ke PDF</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    ";
                    $show = 'show'; //untuk menampilkan tabel rapor
                }
                ?>
                <!-- end cek result rapor -->
            </div>

            <!-- RAPOR -->
            <div class="collapse <?php echo $show ?>">
                <!-- HEADER -->
                <!-- <table class="tg table table-sm">
                    <thead>
                        <tr>
                            <td class="tg-0lax" rowspan="4"></td>
                            <td class="tg-0lax" rowspan="4"><img class="mx-auto d-block" src="images/desain-logo2.png" alt="cop 1" style="height: 190px;"></td>
                            <td class="tg-0lax text-center" colspan="10" rowspan="4">
                                <div style="padding: 50px 0;">
                                    <span class="align-middle">
                                        <h5>YAYASAN PURNAMA DAERAH JAWA TENGAH</h5>
                                        <h3>SMK PURNAMA 1 SEMARANG</h3>
                                        <h6>Jl. Jendral Sudirman No. 265 telp. 7612536 Semarang </h6>
                                    </span>
                                </div>
                            </td>
                            <td class="tg-0lax" rowspan="4"><img class="mx-auto d-block" src="images/desain-logo1.png" alt="cop 1" style="height: 190px;"></td>
                            <td class="tg-0lax" rowspan="4"></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </thead>
                </table> -->
                <!-- END HEADER -->

                <hr size="10px">

                <!-- detail id -->
                <table class="tg table table-sm table-borderless">
                    <tbody>
                        <tr>
                            <td class="tg-0lax text-center" colspan="14">
                                <h3><u>LAPORAN PENILAIAN AKHIR SEMESTER</u></h3>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="tg-0lax" colspan="14"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax" style="width: 22% ;"></td>
                            <td class="tg-0lax" colspan="5" style="width: 20% ;">
                                <h6>Bidang Studi Keahlian</h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2" style="width: 4% ;">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php
                                $bidang = mysqli_query($conn, "SELECT * FROM data_siswa_1 where (nis='$nis') ");
                                $rows = mysqli_fetch_array($bidang);
                                echo $rows['bidang'];
                                ?>
                            </td>
                            <td class="tg-0lax" style="width: 22% ;"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax" colspan="5">
                                <h6>Program Studi Keahlian</h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php
                                $program = mysqli_query($conn, "SELECT * FROM data_siswa_1 where (nis='$nis') ");
                                $rows = mysqli_fetch_array($program);
                                echo $rows['program'];
                                ?>
                            </td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax" colspan="5">
                                <h6>Kompetensi Keahlian</h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php
                                $kompetensi = mysqli_query($conn, "SELECT * FROM data_siswa_1 where (nis='$nis') ");
                                $rows = mysqli_fetch_array($kompetensi);
                                echo $rows['kompetensi'];
                                ?>
                            </td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax" colspan="5">
                                <h6>Tahun Pelajaran</h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php echo $thn_pelajaran_cari; ?>
                            </td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax" colspan="5">
                                <h6>Nomor Absen Siswa</h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php
                                $no_absen = mysqli_query($conn, "SELECT * FROM data_siswa_1 where (nis='$nis') ");
                                $rows = mysqli_fetch_array($no_absen);
                                echo $rows['absen'];
                                ?>
                            </td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax" colspan="5">
                                <h6>Nomor Induk Siswa</h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php echo $nis; ?>
                            </td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax" colspan="5">
                                <h6>Nama Peserta didik</h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php echo $nm_siswa; ?>
                            </td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax" colspan="5">
                                <h6>Kelas / Semester </h6>
                            </td>
                            <td class="tg-0lax text-center" colspan="2">:</td>
                            <td class="tg-0lax" colspan="5">
                                <?php echo $kls_cari; ?> / <?php echo $smstr_cari; ?>
                            </td>
                            <td class="tg-0lax"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- end detail id -->

                <!-- nilai sikap -->
                <table class="tg table table-sm table-borderless">
                    <tbody>
                        <tr>
                            <td class="tg-0lax" colspan="14">
                                <h6>Nilai Sikap Spiritual</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-0lax text-center border" colspan="2" rowspan="3" style="width: 20% ;">
                                <div style="padding: 20px 0;"><span class="align-middle font-weight-bold">
                                        <?php
                                        $nilai_sikap_spiritual_predikat = mysqli_query($conn, "SELECT * FROM data_nilai_sikap where (nis_siswa='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari') ");
                                        $rows = mysqli_fetch_array($nilai_sikap_spiritual_predikat);
                                        echo $rows['p_spiritual'];
                                        $ket_spiritual = $rows['p_spiritual'];
                                        ?>
                                    </span></div>
                            </td>
                            <td class="tg-0lax border" colspan="12" rowspan="3">
                                <div style="padding: 4px 0;"><span class="align-middle">
                                        <?php
                                        if ($ket_spiritual == "A")
                                            echo ("Selalu Bersyukur dan Berdoa Sebelum memulai Kegiatan serta memiliki Toleran pada agama yang berbeda. Ketataan Beribadah <b>Sudah</b> Berkembang");
                                        elseif ($ket_spiritual == "B")
                                            echo ("Selalu Bersyukur dan Berdoa Sebelum memulai Kegiatan serta memiliki Toleran pada agama yang berbeda. Ketataan Beribadah <b>Mulai</b> Berkembang");
                                        ?>
                                    </span></div>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td class="tg-0lax" colspan="14"></td>
                        </tr>
                        <tr>
                            <td class="tg-0lax" colspan="14">
                                <h6>Nilai Sikap Sosial</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-0lax text-center border" colspan="2" rowspan="3" style="width: 20% ;">
                                <div style="padding: 20px 0;"><span class="align-middle font-weight-bold">
                                        <?php
                                        $nilai_sikap_sosial_predikat = mysqli_query($conn, "SELECT * FROM data_nilai_sikap where (nis_siswa='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari') ");
                                        $rows = mysqli_fetch_array($nilai_sikap_sosial_predikat);
                                        echo $rows['p_sosial'];
                                        $ket_sosial = $rows['p_sosial'];
                                        ?>
                                    </span></div>
                            </td>
                            <td class="tg-0lax border" colspan="12" rowspan="3">
                                <div style="padding: 4px 0;"><span class="align-middle">
                                        <?php
                                        if ($ket_sosial == "A")
                                            echo ("Memiliki Sikap Santun dan tanggung Jawab, Responsif dalam pergaulan. Sikap Peduli terhadap Sesama dan Lingkungan <b>Sudah</b> meningkat");
                                        elseif ($ket_sosial == "B")
                                            echo ("Memiliki Sikap Santun dan tanggung Jawab, Responsif dalam pergaulan. Sikap Peduli terhadap Sesama dan Lingkungan <b>mulai</b> meningkat");
                                        ?>
                                    </span></div>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <!-- end nilai sikap -->

                <!-- rapor nilai -->
                <table class="table table-sm table-borderless">
                    <tbody>
                        <tr>
                            <td colspan="8" rowspan="2" class="text-center border">
                                <div style="padding: 17px 0;"><span class="align-middle">MATA PELAJARAN</span></div>
                            </td>
                            <td colspan="3" class="text-center border">
                                PENGETAHUAN
                            </td>
                            <td colspan="3" class="text-center border">
                                KETRAMPILAN
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center border">KB</td>
                            <td class="text-center border">Angka</td>
                            <td class="text-center border" style="width: 24% ;">Predikat</td>
                            <td class="text-center border">KB</td>
                            <td class="text-center border">Angka</td>
                            <td class="text-center border" style="width: 24% ;">Predikat</td>
                        </tr>
                        <tr class="border">
                            <td colspan="14">A. MUATAN NASIONAL</td>
                        </tr>

                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT MPO1 FROM `mapel` WHERE NOT MPO1='kosong'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td style="width: 4% ;" class="text-center border"><?php echo $no++; ?></td>
                                <td class="border" colspan="7"><?php echo $d['MPO1']; ?></td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_pengetahuan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO1]') ");
                                    $rows = mysqli_fetch_array($nilai_pengetahuan);
                                    echo $rows['nap'];
                                    $nap = $rows['nap'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nap >= 90)
                                        echo ("Amat Baik");
                                    elseif ($nap >= 75)
                                        echo ("Baik");
                                    elseif ($nap >= 64)
                                        echo ("Cukup");
                                    elseif ($nap >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_keterampilan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO1]') ");
                                    $rows = mysqli_fetch_array($nilai_keterampilan);
                                    echo $rows['nak'];
                                    $nak = $rows['nak'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nak >= 90)
                                        echo ("Amat Baik");
                                    elseif ($nak >= 75)
                                        echo ("Baik");
                                    elseif ($nak >= 64)
                                        echo ("Cukup");
                                    elseif ($nak >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="14"></td>
                        </tr>
                        <tr class="border">
                            <td colspan="14">B. MUATAN KEWILAYAHAN</td>
                        </tr>

                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT MPO2 FROM `mapel` WHERE NOT MPO2='kosong'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td class="border text-center"><?php echo $no++; ?></td>
                                <td class="border" colspan="7"><?php echo $d['MPO2']; ?></td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_pengetahuan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO2]') ");
                                    $rows = mysqli_fetch_array($nilai_pengetahuan);
                                    echo $rows['nap'];
                                    $nap = $rows['nap'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nap >= 90)
                                        echo ("Amat Baik");
                                    elseif ($nap >= 75)
                                        echo ("Baik");
                                    elseif ($nap >= 64)
                                        echo ("Cukup");
                                    elseif ($nap >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_keterampilan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO2]') ");
                                    $rows = mysqli_fetch_array($nilai_keterampilan);
                                    echo $rows['nak'];
                                    $nak = $rows['nak'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nak >= 90)
                                        echo ("Amat Baik");
                                    elseif ($nak >= 75)
                                        echo ("Baik");
                                    elseif ($nak >= 64)
                                        echo ("Cukup");
                                    elseif ($nak >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="14"></td>
                        </tr>
                        <tr class="border">
                            <td colspan="14">C. MUATAN PEMINTAN KEJURUAN</td>
                        </tr>
                        <tr class="border">
                            <td colspan="14">C1. Dasar Bidang Keahlian</td>
                        </tr>

                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT MPO3_1 FROM `mapel` WHERE NOT MPO3_1='kosong'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td class="border text-center"><?php echo $no++; ?></td>
                                <td class="border" colspan="7"><?php echo $d['MPO3_1']; ?></td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_pengetahuan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO3_1]') ");
                                    $rows = mysqli_fetch_array($nilai_pengetahuan);
                                    echo $rows['nap'];
                                    $nap = $rows['nap'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nap >= 75)
                                        echo ("Kompeten");
                                    elseif ($nap <= 75)
                                        echo ("Belum Kompeten");
                                    ?>
                                </td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_keterampilan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO3_1]') ");
                                    $rows = mysqli_fetch_array($nilai_keterampilan);
                                    echo $rows['nak'];
                                    $nak = $rows['nak'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nak >= 75)
                                        echo ("Kompeten");
                                    elseif ($nak <= 75)
                                        echo ("Belum Kompeten");
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="14"></td>
                        </tr>
                        <tr class="border">
                            <td colspan="14">C2. Dasar Progam Keahlian</td>
                        </tr>

                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT MPO3_2 FROM `mapel` WHERE NOT MPO3_2='kosong'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td class="border text-center"><?php echo $no++; ?></td>
                                <td class="border" colspan="7"><?php echo $d['MPO3_2']; ?></td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_pengetahuan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO3_2]') ");
                                    $rows = mysqli_fetch_array($nilai_pengetahuan);
                                    echo $rows['nap'];
                                    $nap = $rows['nap'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nap >= 75)
                                        echo ("Kompeten");
                                    elseif ($nap <= 75)
                                        echo ("Belum Kompeten");
                                    ?>
                                </td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_keterampilan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO3_2]') ");
                                    $rows = mysqli_fetch_array($nilai_keterampilan);
                                    echo $rows['nak'];
                                    $nak = $rows['nak'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nak >= 75)
                                        echo ("Kompeten");
                                    elseif ($nak <= 75)
                                        echo ("Belum Kompeten");
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="14"></td>
                        </tr>
                        <tr class="border">
                            <td colspan="14">C3. Kompetensi Keahlian</td>
                        </tr>

                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT MPO3_3 FROM `mapel` WHERE NOT MPO3_3='kosong'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td class="border text-center"><?php echo $no++; ?></td>
                                <td class="border" colspan="7"><?php echo $d['MPO3_3']; ?></td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_pengetahuan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO3_3]') ");
                                    $rows = mysqli_fetch_array($nilai_pengetahuan);
                                    echo $rows['nap'];
                                    $nap = $rows['nap'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nap >= 75)
                                        echo ("Kompeten");
                                    elseif ($nap <= 75)
                                        echo ("Belum Kompeten");
                                    ?>
                                </td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_keterampilan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO3_3]') ");
                                    $rows = mysqli_fetch_array($nilai_keterampilan);
                                    echo $rows['nak'];
                                    $nak = $rows['nak'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nak >= 75)
                                        echo ("Kompeten");
                                    elseif ($nak <= 75)
                                        echo ("Belum Kompeten");
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="14"></td>
                        </tr>
                        <tr>
                            <td colspan="14"></td>
                        </tr>
                        <tr class="border">
                            <td colspan="14">D. Muatan Lokal</td>
                        </tr>

                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT MPO4 FROM `mapel` WHERE NOT MPO4='kosong'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td class="border text-center"><?php echo $no++; ?></td>
                                <td class="border" colspan="7"><?php echo $d['MPO4']; ?></td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_pengetahuan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO4]') ");
                                    $rows = mysqli_fetch_array($nilai_pengetahuan);
                                    echo $rows['nap'];
                                    $nap = $rows['nap'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nap >= 90)
                                        echo ("Amat Baik");
                                    elseif ($nap >= 75)
                                        echo ("Baik");
                                    elseif ($nap >= 64)
                                        echo ("Cukup");
                                    elseif ($nap >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                                <td class="text-center border">75</td>
                                <td class="text-center border">
                                    <?php
                                    $nilai_keterampilan = mysqli_query($conn, "SELECT * FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari' and nm_mapel='$d[MPO4]') ");
                                    $rows = mysqli_fetch_array($nilai_keterampilan);
                                    echo $rows['nak'];
                                    $nak = $rows['nak'];
                                    ?>
                                </td>
                                <td class="text-center border">
                                    <?php
                                    if ($nak >= 90)
                                        echo ("Amat Baik");
                                    elseif ($nak >= 75)
                                        echo ("Baik");
                                    elseif ($nak >= 64)
                                        echo ("Cukup");
                                    elseif ($nak >= 40)
                                        echo ("Kurang");
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td class="border"></td>
                            <td class="border text-center" colspan="7">Jumlah Nilai</td>
                            <td class="border"></td>
                            <td class="text-center border">
                                <?php
                                $jumlah_total_nilai_nap = mysqli_query($conn, "SELECT SUM(nap) AS total_nap FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari') ");
                                $rows = mysqli_fetch_array($jumlah_total_nilai_nap);
                                echo $rows['total_nap'];
                                ?>
                            </td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="text-center border">
                                <?php
                                $jumlah_total_nilai_nak = mysqli_query($conn, "SELECT SUM(nak) AS total_nak FROM data_nilai where (nis='$nis' and kls='$kls_cari' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari') ");
                                $rows = mysqli_fetch_array($jumlah_total_nilai_nak);
                                echo $rows['total_nak'];
                                ?>
                            </td>
                            <td class="border"></td>
                        </tr>

                    </tbody>
                </table>
                <!-- end rapor nilai -->

                <!-- absen -->
                <!-- <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="text-center border" style="width: 4% ;">No</td>
                        <td colspan="7" class="text-center border">Kegiatan Ekstra Kurikuler</td>
                        <td colspan="3" class="text-center border">Nilai</td>
                        <td colspan="3" class="text-center border">Deskripsi</td>
                    </tr>
                    <tr>
                        <td class="text-center border">1</td>
                        <td colspan="7" class="border"></td>
                        <td colspan="3" class="border"></td>
                        <td colspan="3" class="border"></td>
                    </tr>
                    <tr>
                        <td class="text-center border">2</td>
                        <td colspan="7" class="border"></td>
                        <td colspan="3" class="border"></td>
                        <td colspan="3" class="border"></td>
                    </tr>
                    <tr>
                        <td class="text-center border">3</td>
                        <td colspan="7" class="border"></td>
                        <td colspan="3" class="border"></td>
                        <td colspan="3" class="border"></td>
                    </tr>
                    <tr>
                        <td colspan="8" class="text-center border">Ketidak Hadiran</td>
                        <td colspan="6" class="text-center border">Catatan untuk perhatian orang tua/wali</td>
                    </tr>
                    <tr class="border">
                        <td colspan="5" style="width: 15% ;">Sakit</td>
                        <td class="text-center" style="width: 2% ;">:</td>
                        <td></td>
                        <td>hari</td>
                        <td colspan="6" rowspan="3" class="border"></td>
                    </tr>
                    <tr class="border">
                        <td colspan="5">Izin</td>
                        <td class="text-center">:</td>
                        <td></td>
                        <td>hari</td>
                    </tr>
                    <tr class="border">
                        <td colspan="5">Tanpa Keterangan</td>
                        <td class="text-center">:</td>
                        <td></td>
                        <td>hari</td>
                    </tr>
                </tbody>
                </table> -->
                <!-- end absen -->

                <!-- ttd -->
                <!-- <table class="table table-sm table-borderless">
                    <tbody>
                        <tr>
                            <td style="width: 2%;"></td>
                            <td colspan="4" rowspan="2"></td>
                            <td colspan="4" rowspan="7"></td>
                            <td class="text-left" style="width: 10% ;">Diberikan di</td>
                            <td style="width: 2% ;"></td>
                            <td style="width: 2% ;" class="text-center">:</td>
                            <td colspan="2">Semarang</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">Tanggal</td>
                            <td></td>
                            <td class="text-center">:</td>
                            <td colspan="2">18 September 2020</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4" class="text-center" style="width: 27% ;">Orang Tua/Wali,</td>
                            <td colspan="5" class="text-center">Wali Kelas,</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4" rowspan="3" style="height: 70px ;"></td>
                            <td colspan="5" rowspan="3"></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <hr>
                            </td>
                            <td colspan="5" class="text-center" style="width: 30%;">
                                <?php
                                $cari_wk = mysqli_query($conn, "SELECT * FROM grup_wali_kelas where (kelas='$kls_cari' and angkatan='$thn_angkatan_cari' and kompetensi_kelas='$kompetensi_cari') ");
                                $rows = mysqli_fetch_array($cari_wk);
                                $wali_kls = $rows['wali_kls'];

                                $cari_wk_pengguna = mysqli_query($conn, "SELECT * FROM pengguna where (role='4' and id_akun='$wali_kls') ");
                                $rows = mysqli_fetch_array($cari_wk_pengguna);
                                $nama_wk = $rows['nm'];
                                ?>
                                <u><?php echo $nama_wk; ?></u>
                            </td>
                        </tr>
                    </tbody>
                </table> -->
                <!-- end ttd -->

                <!-- ttd kenaikan kelas -->
                <!-- <table class="table table-borderless table-sm">
                    <tbody>
                        <tr>
                            <td style="width: 1% ;"></td>
                            <td style="width: 9% ;">Diberikan di</td>
                            <td style="width: 2% ;">:</td>
                            <td style="width: 18% ;">Semarang</td>
                            <td colspan="6" rowspan="7" style="width: 25% ;"></td>
                            <td>Keputusan :</td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>12 juli 2022</td>
                            <td colspan="4">Dengan memperhatikan hasil yang dicapai</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">Wali Kelas,</td>
                            <td colspan="4">Pada semester <b>1</b> ( satu ) dan <b>2</b> ( dua )</td>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="3" style="height: 100px ;"></td>
                            <td colspan="2">Maka ditetapkan :</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center font-weight-bold font-italic">NAIK / TIDAK NAIK</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center font-weight-bold">Ketingkat : <?php echo $kls_cari ?>
                                <?php
                                if ($kls_cari == "X")
                                    echo ("(Sepuluh)");
                                elseif ($kls_cari == "XI")
                                    echo ("(Sebelas)");
                                elseif ($kls_cari == "XII")
                                    echo ("(Duabelas)");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center font-weight-bold">
                                <?php
                                $cari_wk = mysqli_query($conn, "SELECT * FROM grup_wali_kelas where (kelas='$kls_cari' and angkatan='$thn_angkatan_cari' and kompetensi_kelas='$kompetensi_cari') ");
                                $rows = mysqli_fetch_array($cari_wk);
                                $wali_kls = $rows['wali_kls'];

                                $cari_wk_pengguna = mysqli_query($conn, "SELECT * FROM pengguna where (role='4' and id_akun='$wali_kls') ");
                                $rows = mysqli_fetch_array($cari_wk_pengguna);
                                $nama_wk = $rows['nm'];
                                ?>
                                <u><?php echo $nama_wk; ?></u>
                            </td>
                            <td colspan="4" class="text-capitalize">Kompetensi Keahlian : BISNIS DARING DAN PEMASARAN</td>
                        </tr>
                        <tr>
                            <td colspan="14" class="text-center">Mengetahui :</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">Orang Tua / Wali,</td>
                            <td colspan="6" rowspan="5"></td>
                            <td colspan="4" class="text-center">Kepala Sekolah</td>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="3" style="height: 100px ;"></td>
                            <td colspan="4" rowspan="3"></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                <hr>
                            </td>
                            <td colspan="4" class="text-center font-weight-bold">
                                <?php
                                $cari_kepsek = mysqli_query($conn, "SELECT DISTINCT nm FROM pengguna where (role='2') ");
                                $rows = mysqli_fetch_array($cari_kepsek);
                                $nama_kepsek = $rows['nm'];
                                ?>
                                <u><?php echo $nama_kepsek ?></u>
                            </td>
                        </tr>
                    </tbody>
                </table> -->
                <!-- end ttd kenaikan kelas -->
            </div>
            <!-- END RAPOR -->

        </div>
    </div>
</div>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>