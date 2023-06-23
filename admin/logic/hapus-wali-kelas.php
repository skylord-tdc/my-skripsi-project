
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url
$id_wk = $_GET['id_wk'];
$kompetensi = $_GET['kompetensi'];


// menghapus data dari database
mysqli_query($conn, "delete from grup_wali_kelas where (id_wk='$id_wk')");

// mengalihkan halaman kembali ke
echo
"   <script type='text/javascript'>
    window.location='./admin?adm=view-list-wk&kompetensi=$kompetensi';
</script>";
?>
