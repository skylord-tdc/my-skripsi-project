<?php
include 'conn.php';

if (isset($_POST['submit'])) {

    //bypas karakter
    $username       = mysqli_real_escape_string($conn, $_POST['username']);
    $pw             = mysqli_real_escape_string($conn, $_POST['pw']);
    //end bypas karakter

    // $username = $_POST['username'];
    // $pw = $_POST['pw'];

    $q = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username' AND pw = '$pw'");

    if ($q->num_rows > 0) {
        $d = $q->fetch_assoc();

        // cek role user
        if ($_SESSION['role'] = $d['role'] == 1) {
            header('Location: ./admin/admin');
            $_SESSION['id_akun'] = $d['id_akun'];
            $_SESSION['nm'] = $d['nm'];
            $_SESSION['kelamin'] = $d['kelamin'];
            $_SESSION['role'] = $d['role'];
        } else if ($_SESSION['role'] = $d['role'] == 2) {
            header('Location: ./kepsek/kepsek');
            $_SESSION['id_akun'] = $d['id_akun'];
            $_SESSION['nm'] = $d['nm'];
            $_SESSION['kelamin'] = $d['kelamin'];
            $_SESSION['role'] = $d['role'];
        } else if ($_SESSION['role'] = $d['role'] == 3) {
            header('Location: ./guru/guru');
            $_SESSION['id_akun'] = $d['id_akun'];
            $_SESSION['nm'] = $d['nm'];
            $_SESSION['kelamin'] = $d['kelamin'];
            $_SESSION['role'] = $d['role'];
        } else if ($_SESSION['role'] = $d['role'] == 4) {
            header('Location: ./walke/walke');
            $_SESSION['id_akun'] = $d['id_akun'];
            $_SESSION['nm'] = $d['nm'];
            $_SESSION['kelamin'] = $d['kelamin'];
            $_SESSION['role'] = $d['role'];
        }
    } else {
        // session untuk pesan kesalahan
        $_SESSION['pesan'] = "Username atau Password tidak valid";
    }
}
