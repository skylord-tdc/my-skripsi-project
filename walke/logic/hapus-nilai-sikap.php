
<?php
// koneksi database
include '../login/conn.php';

// menangkap data id yang di kirim dari url
$nis = $_GET['nis'];
$nm_siswa = $_GET['nm_siswa'];
$kls = $_GET['kls'];
$kompetensi = $_GET['kompetensi'];
$angkatan = $_GET['angkatan'];
$smstr_cari = $_GET['smstr_cari'];
$thn_pelajaran_cari = $_GET['thn_pelajaran_cari'];

// menghapus data dari database
mysqli_query($conn, "delete from data_nilai_sikap where (nis_siswa='$nis' and kls='$kls' and smstr='$smstr_cari' and thn_pelajaran='$thn_pelajaran_cari')");

// mengalihkan halaman kembali ke
echo
"   <script type='text/javascript'>
    window.location='./walke?wlk=e-rapor&nis=$nis&nm_siswa=$nm_siswa&kls=$kls&kompetensi=$kompetensi&angkatan=$angkatan&smstr_cari=$smstr_cari&thn_pelajaran_cari=$thn_pelajaran_cari';
</script>";
?>
