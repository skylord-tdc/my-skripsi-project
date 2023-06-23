<?php
if (isset($_POST['Submit'])) {

    $nm_wali_kelas = $_POST['nm_wali_kelas'];
    $nis = $_POST['nis'];
    $kls = $_POST['kls'];
    $smstr = $_POST['smstr'];
    $thn_pelajaran = $_POST['thn_pelajaran'];

    $nis = $_POST['nis'];
    $nm_siswa = $_POST['nm_siswa'];
    $kompetensi = $_POST['kompetensi'];
    $angkatan = $_POST['angkatan'];

    $p_spiritual = $_POST['p_spiritual'];
    $p_sosial = $_POST['p_sosial'];

    include_once("../login/conn.php");

    // validasi anti duplikat
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_nilai_sikap WHERE (nm_wali_kelas='$nm_wali_kelas' and nis_siswa='$nis_siswa' and kls='$kls' and smstr='$smstr' and thn_pelajaran='$thn_pelajaran' ) "));
    if ($cek > 0) {

        // alert boostrap
        session_start();
        $_SESSION["danger"] = '<div class="alert alert-danger" role="alert">
        Maaf anda sudah memberi nilai pada siswa tersebut. !!
      </div>';
        //   end alert

        echo '<script>window.location="javascript:history.back()"</script>';
    } else {
        // Insert data 
        $result = mysqli_query($conn, "INSERT INTO data_nilai_sikap (nm_wali_kelas, nis_siswa, kls, smstr, thn_pelajaran, p_spiritual, p_sosial) 
    VALUES('$nm_wali_kelas','$nis','$kls','$smstr','$thn_pelajaran','$p_spiritual','$p_sosial')");

        // alert boostrap
        session_start();
        $_SESSION["success"] = '<div class="alert alert-success" role="alert">Anda telah berhasil memberi nilai sikap. !!</div>';
        //   end alert

        echo
        "   <script type='text/javascript'>
            window.location='./walke?wlk=e-rapor&nis=$nis&nm_siswa=$nm_siswa&kls=$kls&kompetensi=$kompetensi&angkatan=$angkatan&smstr_cari=$smstr&thn_pelajaran_cari=$thn_pelajaran';
    </script>";
    }
}
