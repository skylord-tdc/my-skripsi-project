
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url 
$id_siswa = $_GET['id_siswa'];
$thn_msk = $_GET['thn_msk'];
$kompetensi = $_GET['kompetensi'];


// menghapus data dari database
mysqli_query($conn, "delete from data_siswa_1 where (id_siswa='$id_siswa')");

// mengalihkan halaman kembali ke
echo
"   <script type='text/javascript'>
    window.location='./admin?adm=view-siswa&thn_msk=$thn_msk&kompetensi=$kompetensi';
</script>";
?>
