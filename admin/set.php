<?php

@$adm = $_GET['adm'];

if (!empty($adm)) {
    switch ($adm) {

            // dashboard
        case 'dash':
            include "page/dashboard.php";
            break;

            // logic website
        case 'add-galeri':
            include "logic/tambah-galeri.php";
            break;
        case 'delete-galeri':
            include "logic/hapus-galeri.php";
            break;

        case 'update-ps':
            include "logic/update-profil-sekolah.php";
            break;

        case 'add-visi-misi':
            include "logic/tambah-visi-misi.php";
            break;
        case 'delete-visi-misi':
            include "logic/hapus-visi-misi.php";
            break;

        case 'add-struktur':
            include "logic/tambah-s-organisasi.php";
            break;
        case 'delete-so':
            include "logic/hapus-s-organisasi.php";
            break;

        case 'add-fasilitas':
            include "logic/tambah-fasilitas.php";
            break;
        case 'delete-fasilitas':
            include "logic/hapus-fasilitas.php";
            break;

        case 'add-eskul':
            include "logic/tambah-eskul.php";
            break;
        case 'delete-eskul':
            include "logic/hapus-eskul.php";
            break;

        case 'add-pengumuman':
            include "logic/tambah-pengumuman.php";
            break;
        case 'delete-pengumuman':
            include "logic/hapus-pengumuman.php";
            break;

        case 'add-kegiatan':
            include "logic/tambah-kegiatan.php";
            break;
        case 'delete-kegiatan':
            include "logic/hapus-kegiatan.php";
            break;

        case 'add-prestasi':
            include "logic/tambah-prestasi.php";
            break;
        case 'delete-prestasi':
            include "logic/hapus-prestasi.php";
            break;

        case 'add-berita':
            include "logic/tambah-news.php";
            break;
        case 'delete-berita':
            include "logic/hapus-news.php";
            break;

        case 'delete-temp-raport':
            include "logic/hapus-temp-raport.php";
            break;
        case 'import-fraport':
            include "logic/tambah-import-format-raport.php";
            break;
        case 'format-dMapel':
            include "logic/hapus-format-raport.php";
            break;
            // end logic website

            // webiste
        case 'wb':
            include "page/p-website.php";
            break;
            // end webiste

            // nextpage website
        case 'wb/halaman-depan':
            include "page/halaman-depan.php";
            break;
        case 'wb/sistem-akademik':
            include "page/sistem-akademik.php";
            break;

        case 'hdw-galeri':
            include "page/galeri.php";
            break;
        case 'hdw-tentang':
            include "page/tentang.php";
            break;
        case 'hdw-pengumuman':
            include "page/pengumuman.php";
            break;
        case 'hdw-kegiatan':
            include "page/kegiatan.php";
            break;
        case 'hdw-prestasi':
            include "page/prestasi.php";
            break;
        case 'hdw-berita':
            include "page/berita.php";
            break;
            // end nextpage website

            // data pengguna
        case 'dp':
            include "page/d-pengguna.php";
            break;

            // sub menu data akademik
        case 'da1':
            include "page/d-guru.php";
            break;
        case 'da2':
            include "page/d-siswa.php";
            break;
        case 'da3':
            include "page/d-kelas.php";
            break;
        case 'da4':
            include "page/d-nilai-siswa.php";
            break;
        case 'da5':
            include "page/d-wali-kelas.php";
            break;
            // end sub menu data akademik

            //logic pengguna
        case 'input-pengguna':
            include "logic/tambah-pengguna.php";
            break;
        case 'delete-pengguna':
            include "logic/hapus-pengguna.php";
            break;
        case 'update-pengguna':
            include "logic/ubah-pengguna.php";
            break;
            //end logic pengguna

            //logic guru
        case 'delete-guru':
            include "logic/hapus-guru.php";
            break;
            //end logic guru

            //nextpage data guru
        case 'view-guru':
            include "page/daftar-guru.php";
            break;
            //end nextpage data guru

            // logic data siswa
        case 'import':
            include "logic/tambah-import-data-siswa.php";
            break;
        case 'delete-temp':
            include "logic/hapus-temp-xls.php";
            break;
        case 'delete-siswa':
            include "logic/hapus-siswa.php";
            break;
            //end logic data siswa

            //nextpage data siswa
        case 'view-siswa':
            include "page/daftar-siswa.php";
            break;
            //end nextpage data siswa

            //logic data kelas
        case 'import-data-kelas':
            include "logic/tambah-import-data-kelas.php";
            break;
        case 'format-kelas':
            include "logic/hapus-format-kelas-dan-nilai.php";
            break;
        case 'input-grup-guru':
            include "logic/tambah-grup-kelas.php";
            break;
        case 'input-grup-wk':
            include "logic/tambah-grup-wali-kelas.php";
            break;
        case 'delete-temp-kls':
            include "logic/hapus-temp-kls-xls.php";
            break;
        case 'delete-kelas':
            include "logic/hapus-kelas.php";
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

            //nextpage data kelas
        case 'list-class':
            include "page/daftar-kelas.php";
            break;
        case 'list-ys':
            include "page/daftar-tahun-pelajaran.php";
            break;
        case 'list-yf':
            include "page/daftar-angkatan.php";
            break;
        case 'details':
            include "page/daftar-tahun-pelajaran-kelas.php";
            break;
        case 'list-mp':
            include "page/daftar-siswa-mapel.php";
            break;
        case 'confirmasi':
            include "page/konfirmasi-nilai.php";
            break;
            //end nextpage data kelas

            //logic data nilai
        case 'cari_nilai':
            include "logic/proses-tangkap-cari.php";
            break;
        case 'cetak-pdf':
            include "logic/proses-tangkap-pdf.php";
            break;
            //end logic data nilai

            //nextpage data nilai siswa
        case 'view-list-nilai':
            include "page/daftar-nilai-kelas.php";
            break;
        case 'view-list-nilai-db':
            include "page/daftar-nilai-db.php";
            break;
            //end nextpage data nilai siswa

            //logic data wali kelas
        case 'delete-wk':
            include "logic/hapus-wali-kelas.php";
            break;
            //end logic data wali kelas

            //nextpage data wali kelas
        case 'view-list-wk':
            include "page/daftar-wali-kelas.php";
            break;
            //end nextpage data wali kelas
        default:
            include "page/dashboard.php";
            break;
    }
} else {

    include "page/dashboard.php";
}
