<?php
if (isset($_POST['Submit'])) {

    $thn_angkatan = $_POST['thn_angkatan'];
    $kompetensi = $_POST['kompetensi'];
    $id_kls = $_POST['id_kls'];
    $nm_siswa = $_POST['nm_siswa'];
    $nis = $_POST['nis'];

    $kls_cari = $_POST['kls_cari'];
    $smstr_cari = $_POST['smstr_cari'];
    $thn_pelajaran_cari = $_POST['thn_pelajaran_cari'];

    echo
    "   <script type='text/javascript'>
            window.location='./admin?adm=view-list-nilai-db&thn_angkatan_cari=$thn_angkatan&kompetensi_cari=$kompetensi&id_kls=&nm_siswa=$nm_siswa&nis=$nis&kls_cari=$kls_cari&smstr_cari=$smstr_cari&thn_pelajaran_cari=$thn_pelajaran_cari';
    </script>";
}
