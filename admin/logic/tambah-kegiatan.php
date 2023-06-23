<?php
include_once("../login/conn.php");
if (isset($_POST['tombol'])) {
    $temp = $_FILES['foto']['tmp_name'];
    $name = rand(0, 9999) . $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $type = $_FILES['foto']['type'];

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $youtube = $_POST['youtube'];

    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('Y-m-d H:i:s');

    // slug
    //kita buat post slug dan mengganti spasi dengan tanda hubung(-)
    $slug2 = preg_replace("/\s/", "-", $judul);

    // mengubah huruf besar ke kecil
    $slug1 = strtolower($slug2);

    // menghapus semua karakter unik dijudul
    $slug = preg_replace("/[^a-zA-Z0-9 -]/", "", $slug1); // data siap post ke database
    // end slug

    $cekdulu = "select * from data_kegiatan where judul='$_POST[judul]'";
    $prosescek = mysqli_query($conn, $cekdulu);
    if (mysqli_num_rows($prosescek) > 0) { //proses mengingatkan data sudah ada
        // alert boostrap
        // session_start();
        $_SESSION["warning"] = '<div class="alert alert-warning" role="alert">Kegiatan sudah tersedia</div>';
        //   end alert
        echo '<script>window.location="javascript:history.back()"</script>';
    } elseif ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) { //proses menambahkan data
        $folder = "logic/kegiatan_sklh/";
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($conn, "insert into data_kegiatan (slug,judul,isi,youtube,tanggal,foto,tipe_gambar,ukuran_gambar)
        values (
            '$slug',
            '$judul',
            '$isi',
            '$youtube',
            '$tanggal',
            '$name',
            '$type',
            '$size')");

        // alert boostrap
        // session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Kegiatan berhasil ditambahkan</div>';
        //   end alert

        echo
        "<script type='text/javascript'>
            window.location='./admin?adm=hdw-kegiatan';
        </script>";
    } else {
        // alert boostrap
        // session_start();
        $_SESSION["danger"] = '
        <div class="alert alert-danger" role="alert">
            Ukuran Gambar Terlalu Besar Coba Dengan Ukuran 2 mb kebawah atau Format File Bukan Bertipe Gambar !!
        </div>';

        echo
        "   <script type='text/javascript'>history.go(-1)</script>";
    }
}
