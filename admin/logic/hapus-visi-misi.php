
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url 
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($conn, "delete from data_visi_misi where (id='$id')");

// mengalihkan halaman kembali ke
echo
"   <script type='text/javascript'>
    window.location='./admin?adm=hdw-tentang';
</script>";
?>
