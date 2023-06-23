
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url
$id_akun = $_GET['id_akun'];


// menghapus data dari database
mysqli_query($conn, "delete from pengguna where id_akun='$id_akun'");

// mengalihkan halaman kembali ke
echo
"<script type='text/javascript'>
    window.location='./admin?adm=dp';
</script>";
?>
