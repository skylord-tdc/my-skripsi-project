<?php
if (isset($_POST['SUBMIT'])) {

    $nis = $_POST['nis'];
    $nm_siswa = $_POST['nm_siswa'];
    $kls = $_POST['kls'];
    $kompetensi = $_POST['kompetensi'];
    $angkatan = $_POST['angkatan'];
    $smstr_cari = $_POST['smstr_cari'];
    $thn_pelajaran_cari = $_POST['thn_pelajaran_cari'];
    $tanggal = $_POST['tanggal'];

    $semester1 = $smstr_cari;
    $semester2 = $smstr_cari;
    if ($semester1 == "Ganjil" or $semester1 == "1") {
        echo
        "<script type='text/javascript'>
            window.location='../page/cetak-nilai-pdf-ganjil?nm_siswa=$nm_siswa&nis=$nis&kls=$kls&thn_pelajaran_cari=$thn_pelajaran_cari&smstr_cari=$smstr_cari&angkatan=$angkatan&kompetensi=$kompetensi&tanggal=$tanggal';
        </script>";
    } elseif ($semester2 == "Genap" or $semester2 == "2") {
        echo
        "<script type='text/javascript'>
            window.location='../page/cetak-nilai-pdf-genap?nm_siswa=$nm_siswa&nis=$nis&kls=$kls&thn_pelajaran_cari=$thn_pelajaran_cari&smstr_cari=$smstr_cari&angkatan=$angkatan&kompetensi=$kompetensi&tanggal=$tanggal';
        </script>";
    }
}
