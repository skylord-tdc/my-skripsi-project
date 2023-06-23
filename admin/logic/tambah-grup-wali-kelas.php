<?php
if (isset($_POST['Submit'])) {

    $wali_kls = $_POST['wali_kls'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];
    $kompetensi_kelas = $_POST['kompetensi_kelas'];

    include_once("../login/conn.php");

    // validasi anti duplikat
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM grup_wali_kelas WHERE (kelas='$kelas' and angkatan='$angkatan' and kompetensi_kelas='$kompetensi_kelas' ) "));
    if ($cek > 0) {

        // alert boostrap
        // session_start();
        $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Angkatan tersebut sudah terisi oleh wali kelas lain. !!
      </div>';
        //   end alert

        echo '<script>window.location="javascript:history.back()"</script>';
    } else {
        // Insert data 
        $result = mysqli_query($conn, "INSERT INTO grup_wali_kelas (wali_kls, kelas, angkatan, kompetensi_kelas) 
    VALUES('$wali_kls','$kelas','$angkatan','$kompetensi_kelas')");

        // alert boostrap
        // session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Grup Wali Kelas Berhasil Dibuat, Silahkan Cek Pada Halaman Menu Data Wali Kelas Tersebut. !!</div>';
        //   end alert

        echo
        "   <script type='text/javascript'>
            window.location='./admin?adm=da3';
    </script>";
    }
}
