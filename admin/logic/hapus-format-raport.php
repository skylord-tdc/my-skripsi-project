
<?php
// koneksi database
include '../login/conn.php';

// menghapus data dari database
mysqli_query($conn, "TRUNCATE TABLE mapel");

// mengalihkan halaman kembali ke index.php
echo
"<script type='text/javascript'>
        window.location='./admin?adm=wb/sistem-akademik';
    </script>";
?>
