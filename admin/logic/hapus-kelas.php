
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url
$id_kls = $_GET['id_kls'];
$kls = $_GET['kls'];
$smstr = $_GET['smstr'];
$thn_pelajaran = $_GET['thn_pelajaran'];
$thn_angkatan = $_GET['thn_angkatan'];
$kompetensi = $_GET['kompetensi'];
$nm_mapel = $_GET['nm_mapel'];


// menghapus data dari database
mysqli_query($conn, "delete from data_kelas where (id_kls='$id_kls')");

// mengalihkan halaman kembali ke
echo
"   <script type='text/javascript'>
    window.location='./admin?adm=list-mp&kls=$kls&smstr=$smstr&thn_pelajaran=$thn_pelajaran&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel';
</script>";
?>
