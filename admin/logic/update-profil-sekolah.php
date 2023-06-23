<?php
//koneksi
include '../login/conn.php';

$id = $_POST['id'];
$nm_sekolah = $_POST['nm_sekolah'];
$status_sekolah = $_POST['status_sekolah'];
$nss_npsn = $_POST['nss_npsn'];
$almt_sekolah = $_POST['almt_sekolah'];
$telp_sekolah = $_POST['telp_sekolah'];
$email_sekolah = $_POST['email_sekolah'];
$nm_kepsek = $_POST['nm_kepsek'];



//query update 
$queryupdate = mysqli_query($conn, "UPDATE data_profil_sekolah SET nm_sekolah='$nm_sekolah' , status_sekolah='$status_sekolah', nss_npsn='$nss_npsn', almt_sekolah='$almt_sekolah', telp_sekolah='$telp_sekolah', email_sekolah='$email_sekolah', nm_kepsek='$nm_kepsek' WHERE id_profil_sekolah='$id' ");

if ($queryupdate) {
    # berhasil updte ke page index
    echo '<script>window.location="javascript:history.back()"</script>';
} else {
    echo "ERROR, data gagal diupdate" . mysqli_error($conn);
}

//mysql_close($host);
