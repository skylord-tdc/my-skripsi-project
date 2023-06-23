<?php
if (isset($_POST['Submit'])) {

    $guru = $_POST['guru'];
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];
    $kompetensi_kelas = $_POST['kompetensi_kelas'];

    include_once("../login/conn.php");

    // validasi anti duplikat
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM grup_kelas WHERE (guru='$guru' and mapel='$mapel' and kelas='$kelas' and angkatan='$angkatan' and kompetensi_kelas='$kompetensi_kelas' ) "));
    if ($cek > 0) {

        // alert boostrap
        // session_start();
        $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Guru sudah terdaftar pada kelas tersebut. !!
      </div>';
        //   end alert

        echo '<script>window.location="javascript:history.back()"</script>';
    } else {
        // Insert data 
        $result = mysqli_query($conn, "INSERT INTO grup_kelas (guru, mapel, kelas, angkatan, kompetensi_kelas) 
    VALUES('$guru','$mapel','$kelas','$angkatan','$kompetensi_kelas')");

        // alert boostrap
        // session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Grup Kelas Berhasil Dibuat, Silahkan Cek Pada Halaman Menu Data Guru Tersebut. !!</div>';
        //   end alert

        echo
        "   <script type='text/javascript'>
            window.location='./admin?adm=da3';
    </script>";
    }
}
