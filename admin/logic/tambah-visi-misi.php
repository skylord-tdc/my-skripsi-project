<?php
if (isset($_POST['Submit'])) {

    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];

    include_once("../login/conn.php");

    // validasi anti duplikat
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_visi_misi WHERE (kategori='$kategori' and keterangan='$keterangan' ) "));
    if ($cek > 0) {

        // alert boostrap
        // session_start();
        $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Data sudah ada. !!
      </div>';
        //   end alert

        echo '<script>window.location="javascript:history.back()"</script>';
    } else {
        // Insert data 
        $result = mysqli_query($conn, "INSERT INTO data_visi_misi (kategori, keterangan) 
    VALUES('$kategori','$keterangan')");

        // alert boostrap
        // session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Data berhasil ditambah. !!</div>';
        //   end alert

        echo
        "<script type='text/javascript'>
            window.location='./admin?adm=hdw-tentang';
        </script>";
    }
}
