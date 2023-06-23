<?php
if (isset($_POST['Submit'])) {

    $id_kls = $_POST['id_kls'];
    $nis = $_POST['nis'];
    $kls = $_POST['kls'];
    $smstr = $_POST['smstr'];
    $thn_pelajaran = $_POST['thn_pelajaran'];
    $thn_angkatan = $_POST['thn_angkatan'];
    $kompetensi = $_POST['kompetensi'];
    $nm_mapel = $_POST['nm_mapel'];

    $np1 = $_POST['np1'];
    $np2 = $_POST['np2'];
    $np3 = $_POST['np3'];
    $np4 = $_POST['np4'];
    $nptts = $_POST['nptts'];
    $nptas = $_POST['nptas'];
    $nk1 = $_POST['nk1'];
    $nk2 = $_POST['nk2'];
    $nk3 = $_POST['nk3'];
    $nrr = $_POST['nrr'];
    $nap = $_POST['nap'];
    $gnp = $_POST['gnp'];

    $nk1 = $_POST['nk1'];
    $nk2 = $_POST['nk2'];
    $nk3 = $_POST['nk3'];
    $nk4 = $_POST['nk4'];
    $nak = $_POST['nak'];
    $gnk = $_POST['gnk'];

    include_once("../login/conn.php");

    // validasi anti duplikat
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_nilai WHERE (id_kls='$id_kls' and kls='$kls' and smstr='$smstr' and thn_pelajaran='$thn_pelajaran' and nm_mapel='$nm_mapel') "));
    if ($cek > 0) {

        // alert boostrap
        // session_start();
        $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Maaf siswa tersebut sudah diberi nilai, silahkan cek tanda mata. !!
      </div>';
        //   end alert

        echo
        "   <script type='text/javascript'>
            window.location='./admin?adm=list-mp&kls=$kls&smstr=$smstr&thn_pelajaran=$thn_pelajaran&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel';
    </script>";
    } else {
        // Insert data 
        $result = mysqli_query($conn, "INSERT INTO data_nilai (id_kls,nis,kls,smstr,thn_pelajaran,nm_mapel,np1,np2,np3,np4,nptts,nptas,nrr,nap,gnp,nk1,nk2,nk3,nk4,nak,gnk) 
    VALUES(
        '$id_kls',
        '$nis',
        '$kls',
        '$smstr',
        '$thn_pelajaran',
        '$nm_mapel',
        '$np1',
        '$np2',
        '$np3',
        '$np4',
        '$nptts',
        '$nptas',
        '$nrr',
        '$nap',
        '$gnp',
        '$nk1',
        '$nk2',
        '$nk3',
        '$nk4',
        '$nak',
        '$gnk'
        )");

        // alert boostrap
        session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Data nilai siswa berhasil ditambahkan !!</div>';
        //   end alert

        echo
        "   <script type='text/javascript'>
            window.location='./admin?adm=list-mp&kls=$kls&smstr=$smstr&thn_pelajaran=$thn_pelajaran&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel';
    </script>";
    }
}
