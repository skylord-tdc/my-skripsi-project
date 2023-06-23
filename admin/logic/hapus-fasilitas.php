<?php
if (isset($_GET['id'])) {
    include_once("../login/conn.php");
    $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from data_fasilitas where id='$id'");
    $data_gambar = $query->fetch_array();

    $query_hapus = mysqli_query($conn, "delete from data_fasilitas where id='$id'");
    unlink('logic/fasilitas_sklh/' . $data_gambar['foto']);
    echo
    "<script type='text/javascript'>
        window.location='./admin?adm=hdw-tentang#Fasilitas';
    </script>";
} else {
    echo
    "<script type='text/javascript'>
        window.location='./admin?adm=hdw-tentang#Fasilitas';
    </script>";
}
