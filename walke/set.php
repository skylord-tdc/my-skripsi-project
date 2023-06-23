<?php

@$wlk = $_GET['wlk'];

if (!empty($wlk)) {
    switch ($wlk) {

            // rekap nilai
        case 'rkp':
            include "page/rekap-nilai.php";
            break;

            // logic rekap nilai
        case 'cari-nilai':
            include "logic/proses-tangkap-cari.php";
            break;
        case 'nilai-sikap':
            include "logic/tambah-nilai-sikap.php";
            break;
        case 'hapus-nilai-sikap':
            include "logic/hapus-nilai-sikap.php";
            break;
            // end logic rekap nilai

            // nextpage rekap nilai
        case 'kompetensi':
            include "page/kompetensi-siswa.php";
            break;
        case 'e-rapor':
            include "page/rapor-siswa.php";
            break;
            // end nextpage rekap nilai

        default:
            include "page/rekap-nilai.php";
            break;
    }
} else {

    include "page/rekap-nilai.php";
}
