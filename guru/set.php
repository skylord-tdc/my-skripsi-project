<?php

@$gru = $_GET['gru'];

if (!empty($gru)) {
    switch ($gru) {

            // data kelas
        case 'dk':
            include "page/d-kelas.php";
            break;
            // end data kelas

            //logic data kelas
        case 'cari_data':
            include "logic/proses-tangkap-data-kelas.php";
            break;
        case 'proses-nilai':
            include "logic/proses-tangkap-nilai.php";
            break;
        case 'input-nilai':
            include "logic/tambah-nilai.php";
            break;
        case 'delete-nilai':
            include "logic/hapus-nilai.php";
            break;
            //end logic data kelas

            //next page data kelas
        case 'buka-kelas':
            include "page/daftar-kelas.php";
            break;
        case 'confirmasi':
            include "page/konfirmasi-nilai.php";
            break;
            //end next page data kelas

        default:
            include "page/d-kelas.php";
            break;
    }
} else {

    include "page/d-kelas.php";
}
