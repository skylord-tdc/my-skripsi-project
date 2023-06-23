
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url
$id_kls = $_GET['id_kls'];
$thn_angkatan = $_GET['thn_angkatan'];
$kompetensi = $_GET['kompetensi'];
$nm_mapel = $_GET['nm_mapel'];
$kls = $_GET['kls'];
$smstr_cari = $_GET['smstr_cari'];
$thn_pelajaran_cari = $_GET['thn_pelajaran_cari'];



// menghapus data dari database
mysqli_query($conn, "delete from data_nilai where (id_kls='$id_kls' and nm_mapel='$nm_mapel' )");

// mengalihkan halaman kembali ke
echo
"   <script type='text/javascript'>
    window.location='./guru?gru=buka-kelas&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel&kls=$kls&smstr_cari=$smstr_cari&thn_pelajaran_cari=$thn_pelajaran_cari';
</script>";
?>
