<?php
if (isset($_POST['Submit'])) {

    $thn_angkatan = $_POST['thn_angkatan'];
    $kompetensi = $_POST['kompetensi'];
    $nm_mapel = $_POST['nm_mapel'];
    $kls = $_POST['kls'];

    $smstr_cari = $_POST['smstr_cari'];
    $thn_pelajaran_cari = $_POST['thn_pelajaran_cari'];

    echo
    "   <script type='text/javascript'>
            window.location='./guru?gru=buka-kelas&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel&kls=$kls&smstr_cari=$smstr_cari&thn_pelajaran_cari=$thn_pelajaran_cari';
    </script>";
}
