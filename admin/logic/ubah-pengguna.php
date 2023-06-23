<?php
//koneksi
include '../login/conn.php';

$id_akun = $_POST['id_akun'];
$nm = $_POST['nm'];
$username = $_POST['username'];
$pw = $_POST['pw'];



//query update 
$queryupdate = mysqli_query($conn, "UPDATE pengguna SET nm='$nm' , username='$username', pw='$pw' WHERE id_akun='$id_akun' ");

if ($queryupdate) {
    # berhasil updte ke page index
    echo
    "   <script type='text/javascript'>
            window.location='./admin?adm=dp';
    </script>";
} else {
    echo "ERROR, data gagal diupdate" . mysqli_error($conn);
}

//mysql_close($host);
