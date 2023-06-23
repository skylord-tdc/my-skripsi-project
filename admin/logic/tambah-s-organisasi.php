<?php
include_once("../login/conn.php");
if (isset($_POST['tombol'])) {
    $temp = $_FILES['foto']['tmp_name'];
    $name = rand(0, 9999) . $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $type = $_FILES['foto']['type'];

    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('Y-m-d H:i:s');

    $cekdulu = "select * from data_struktur_organisasi where label='SatuKali'";
    $prosescek = mysqli_query($conn, $cekdulu);
    if (mysqli_num_rows($prosescek) > 0) { //proses mengingatkan data sudah ada
        // alert boostrap
        // session_start();
        $_SESSION["warning"] = '<div class="alert alert-warning" role="alert">Struktur organisasi hanya diperbolehakan upload sekali, silahkan hapus terlebih dahulu data sebelumnya.</div>';
        //   end alert
        echo
        "<script type='text/javascript'>
            window.location='./admin?adm=hdw-tentang';
        </script>";
    } elseif ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) { //proses menambahkan data
        $folder = "logic/s_organisasi/";
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($conn, "insert into data_struktur_organisasi (tanggal,foto,tipe_gambar,ukuran_gambar)
        values (
            '$tanggal',
            '$name',
            '$type',
            '$size')");

        // alert boostrap
        // session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Struktur Organisasi berhasil ditambahkan</div>';
        //   end alert

        echo
        "<script type='text/javascript'>
            window.location='./admin?adm=hdw-tentang';
        </script>";
    } else {
        // alert boostrap
        session_start();
        $_SESSION["danger"] = '
        <div class="alert alert-danger" role="alert">
            Ukuran Gambar Terlalu Besar Coba Dengan Ukuran 2 mb kebawah atau Format File Bukan Bertipe Gambar !!
        </div>';

        echo
        "   <script type='text/javascript'>history.go(-1)</script>";
    }
}
