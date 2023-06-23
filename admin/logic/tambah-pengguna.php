<?php
if (isset($_POST['Submit'])) {

    $role = $_POST['role'];
    $nm = $_POST['nm'];
    $kelamin = $_POST['kelamin'];
    $username = $_POST['username'];
    $pw = $_POST['pw'];


    include_once("../login/conn.php");

    // validasi anti duplikat
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pengguna WHERE (username='$username' and pw='$pw' and role='$role') "));
    if ($cek > 0) {

        // alert boostrap
        // session_start();
        $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Maaf Username Dengan Password Tersebut, Sudah Terdaftar. !!
      </div>';
        //   end alert

        echo '<script>window.location="javascript:history.back()"</script>';
    } else {
        // Insert data 
        $result = mysqli_query($conn, "INSERT INTO pengguna (role,nm,kelamin,username,pw) 
    VALUES('$role','$nm','$kelamin','$username','$pw')");

        // alert boostrap
        // session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Data Pengguna Baru Berhasil Di Tambahkan !!</div>';
        //   end alert

        echo
        "   <script type='text/javascript'>
            window.location='./admin?adm=dp';
    </script>";
    }
}
