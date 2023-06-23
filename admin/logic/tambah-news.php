<?php
include_once("../login/conn.php");
if (isset($_POST['tombol'])) {
    $temp = $_FILES['foto']['tmp_name'];
    $name = rand(0, 9999) . $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $type = $_FILES['foto']['type'];

    $df = $_POST['df'];
    $creator = $_POST['creator'];

    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d H:i:s');

    $title = $_POST['title'];
    $content = $_POST['content'];
    $level = $_POST['level'];

    // slug
    //kita buat post slug dan mengganti spasi dengan tanda hubung(-)
    $slug2 = preg_replace("/\s/", "-", $title);

    // mengubah huruf besar ke kecil
    $slug1 = strtolower($slug2);

    // menghapus semua karakter unik dijudul
    $slug = preg_replace("/[^a-zA-Z0-9 -]/", "", $slug1); // data siap post ke database
    // end slug

    $cekdulu = "select * from data_berita where title='$_POST[title]'";
    $prosescek = mysqli_query($conn, $cekdulu);
    if (mysqli_num_rows($prosescek) > 0) { //proses mengingatkan data sudah ada
        // alert boostrap
        // session_start();
        $_SESSION["warning"] = '<div class="alert alert-warning" role="alert">Konten berita sudah tersedia</div>';
        //   end alert
        echo '<script>window.location="javascript:history.back()"</script>';
    } elseif ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) { //proses menambahkan data
        $folder = "logic/berita_sklh/";
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($conn, "insert into data_berita (slug,data_filter,creator,date,title,content,level,foto,tipe_gambar,ukuran_gambar)
        values (
            '$slug',
            '$df',
            '$creator',
            '$date',
            '$title',
            '$content',
            '$level',
            '$name',
            '$type',
            '$size')");

        // alert boostrap
        // session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Berita berhasil ditambahkan</div>';
        //   end alert

        echo
        "<script type='text/javascript'>
            window.location='./admin?adm=hdw-berita';
        </script>";
    } else {
        // alert boostrap
        // session_start();
        $_SESSION["danger"] = '
        <div class="alert alert-danger" role="alert">
            Ukuran Gambar Terlalu Besar Coba Dengan Ukuran 2 mb kebawah atau Format File Bukan Bertipe Gambar !!
        </div>';

        echo
        "   <script type='text/javascript'>history.go(-1)</script>";
    }
}
