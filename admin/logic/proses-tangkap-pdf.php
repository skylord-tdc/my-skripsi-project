<?php
if (isset($_POST['SUBMIT'])) {

    $nm_siswa = $_POST['nm_siswa'];
    $nis = $_POST['nis'];

    $kls_cari = $_POST['kls_cari'];
    $smstr_cari = $_POST['smstr_cari'];
    $thn_pelajaran_cari = $_POST['thn_pelajaran_cari'];

    $thn_angkatan_cari = $_POST['thn_angkatan_cari'];
    $kompetensi_cari = $_POST['kompetensi_cari'];

    $tanggal = $_POST['tanggal'];

    $semester1 = $smstr_cari;
    $semester2 = $smstr_cari;
    if ($semester1 == "Ganjil" or $semester1 == "1") {
        echo
        "<script type='text/javascript'>
            window.location='../page/cetak-nilai-pdf-ganjil?nm_siswa=$nm_siswa&nis=$nis&kls_cari=$kls_cari&thn_pelajaran_cari=$thn_pelajaran_cari&smstr_cari=$smstr_cari&thn_angkatan_cari=$thn_angkatan_cari&kompetensi_cari=$kompetensi_cari&tanggal=$tanggal';
        </script>";
    } elseif ($semester2 == "Genap" or $semester2 == "2") {
        echo
        "<script type='text/javascript'>
            window.location='../page/cetak-nilai-pdf-genap?nm_siswa=$nm_siswa&nis=$nis&kls_cari=$kls_cari&thn_pelajaran_cari=$thn_pelajaran_cari&smstr_cari=$smstr_cari&thn_angkatan_cari=$thn_angkatan_cari&kompetensi_cari=$kompetensi_cari&tanggal=$tanggal';
        </script>";
    }
}
