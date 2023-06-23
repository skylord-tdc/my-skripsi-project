<?php
if (isset($_GET['id'])) {
    include_once("../login/conn.php");
    $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from data_galeri where id_galeri='$id'");
    $data_gambar = $query->fetch_array();

    $query_hapus = mysqli_query($conn, "delete from data_galeri where id_galeri='$id'");
    unlink('logic/galeri/' . $data_gambar['foto']);
    echo
    "<script type='text/javascript'>
        window.location='./admin?adm=hdw-galeri';
    </script>";
} else {
    echo
    "<script type='text/javascript'>
        window.location='./admin?adm=hdw-galeri';
    </script>";
}
