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
    $path = 'logic/e-raport/' . $nama_file_baru; // Set tempat menyimpan file tersebut dimana

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    $spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
    $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

    $numrow = 1;
    foreach ($sheet as $row) {
        // Ambil data pada excel sesuai Kolom
        $MPO1 = $row['A'];
        $MPO2 = $row['B'];
        $MPO3_1 = $row['C'];
        $MPO3_2 = $row['D'];
        $MPO3_3 = $row['E'];
        $MPO4 = $row['F'];

        // Cek jika semua data tidak diisi
        if ($MPO1 == "" && $MPO2 == "" && $MPO3_1 == "" && $MPO3_2 == "" && $MPO3_3 == "" && $MPO4 == "")
            continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

        // validasi anti duplikat
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mapel WHERE (MPO1='$MPO1' and MPO2='$MPO2' and MPO3_1='$MPO3_1' and MPO3_2='$MPO3_2' and MPO3_3='$MPO3_3' and MPO4='$MPO4') "));
        if ($cek > 0) {

            // alert boostrap
            // session_start();
            $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Peringatan Ada Data Yang Sudah Tersedia, Tapi Data Yang Belum Masuk Tetap Di Tambahkan !!
      </div>';
            //   end alert

            echo "<script>window.location='./admin?adm=wb/sistem-akademik';</script>";
        } else {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Buat query Insert

                $result = mysqli_query($conn, "INSERT INTO mapel(MPO1,MPO2,MPO3_1,MPO3_2,MPO3_3,MPO4) 
            VALUES(
            '$MPO1',
            '$MPO2',
            '$MPO3_1',
            '$MPO3_2',
            '$MPO3_3',
            '$MPO4'
            )");
            }

            $numrow++; // Tambah 1 setiap kali looping

            // unlink($path); // Hapus file excel yg telah diupload, ini agar tidak terjadi penumpukan file
            if (is_file($path)) {
                unlink($path);
            }

            echo
            "   <script type='text/javascript'>
                window.location='./admin?adm=wb/sistem-akademik'; </script>";

            // echo
            // "   <script type='text/javascript'>
            // window.location='javascript:history.go(-0)';</script>";
        }
    }
}
