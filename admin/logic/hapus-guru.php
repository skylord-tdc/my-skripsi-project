
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url
$id_grup = $_GET['id_grup'];
$mapel = $_GET['mapel'];


// menghapus data dari database
mysqli_query($conn, "delete from grup_kelas where (id_grup='$id_grup')");

// mengalihkan halaman kembali ke
echo
"   <script type='text/javascript'>
    window.location='./admin?adm=view-guru&mpel=$mapel';
</script>";
?>
