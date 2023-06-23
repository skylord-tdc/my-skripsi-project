
<?php
// koneksi database
include '../login/conn.php';

// menghapus data dari database
mysqli_query($conn, "TRUNCATE TABLE data_kelas");
mysqli_query($conn, "TRUNCATE TABLE data_nilai");

// mengalihkan halaman kembali ke index.php
echo
"<script type='text/javascript'>
        window.location='./admin?adm=da3';
    </script>";
?>
