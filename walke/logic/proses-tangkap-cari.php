<?php
if (isset($_POST['Submit'])) {

    $nis = $_POST['nis'];
    $nm_siswa = $_POST['nm_siswa'];
    $kls = $_POST['kls'];
    $kompetensi = $_POST['kompetensi'];
    $angkatan = $_POST['angkatan'];

    $smstr_cari = $_POST['smstr_cari'];
    $thn_pelajaran_cari = $_POST['thn_pelajaran_cari'];

    echo
    "   <script type='text/javascript'>
            window.location='./walke?wlk=e-rapor&nis=$nis&nm_siswa=$nm_siswa&kls=$kls&kompetensi=$kompetensi&angkatan=$angkatan&smstr_cari=$smstr_cari&thn_pelajaran_cari=$thn_pelajaran_cari';
    </script>";
}
