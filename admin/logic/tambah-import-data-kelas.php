<?php
// Load file koneksi.php
include "../login/conn.php";

// Load file autoload.php
require 'phpexcel/vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls;

if (isset($_POST['import'])) { // Jika user mengklik tombol Import
    $nama_file_baru = $_POST['namafile'];
    $path = 'logic/kls/' . $nama_file_baru; // Set tempat menyimpan file tersebut dimana

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    $spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
    $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

    $numrow = 1;
    foreach ($sheet as $row) {
        // Ambil data pada excel sesuai Kolom
        $kls = $row['A'];
        $smstr = $row['B'];
        $nis = $row['C'];
        $nm_siswa = $row['D'];
        $thn_angkatan = $row['E'];
        $kompetensi = $row['F'];
        $nm_mapel = $row['G'];
        $thn_pelajaran = $row['H'];

        // Cek jika semua data tidak diisi
        if ($kls == "" && $smstr == "" && $nis == "" && $nm_siswa == "" && $thn_angkatan == "" && $kompetensi == "" && $nm_mapel == "" && $thn_pelajaran == "")
            continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

        // validasi anti duplikat
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_kelas WHERE (kls='$kls' and smstr='$smstr' and nis='$nis' and thn_angkatan='$thn_angkatan' and nm_mapel='$nm_mapel') "));
        if ($cek > 0) {

            // alert boostrap
            // session_start();
            $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Peringatan Ada Data Yang Sudah Tersedia, Tapi Data Yang Belum Masuk Tetap Di Tambahkan !!
      </div>';
            //   end alert

            echo "<script>window.location='./admin?adm=da3';</script>";
        } else {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Buat query Insert

                $result = mysqli_query($conn, "INSERT INTO data_kelas(kls, smstr, nis, nm_siswa, thn_angkatan, kompetensi, nm_mapel, thn_pelajaran) 
            VALUES(
            '$kls',
            '$smstr',
            '$nis',
            '$nm_siswa',
            '$thn_angkatan',
            '$kompetensi',
            '$nm_mapel',
            '$thn_pelajaran'
            )");
            }

            $numrow++; // Tambah 1 setiap kali looping

            // unlink($path); // Hapus file excel yg telah diupload, ini agar tidak terjadi penumpukan file
            if (is_file($path)) {
                unlink($path);
            }

            echo
            "   <script type='text/javascript'>
                window.location='./admin?adm=da3'; </script>";

            // echo
            // "   <script type='text/javascript'>
            // window.location='javascript:history.go(-0)';</script>";
        }
    }
}
