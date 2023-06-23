<?php
if (isset($_POST['Submit'])) {

    $thn_angkatan = $_POST['thn_angkatan'];
    $kompetensi = $_POST['kompetensi'];

    $id_kls = $_POST['id_kls'];
    $nis = $_POST['nis'];
    $kls = $_POST['kls'];
    $smstr_cari = $_POST['smstr_cari'];
    $thn_pelajaran_cari = $_POST['thn_pelajaran_cari'];
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
    $nk4 = $_POST['nk4'];

    echo
    "   <script type='text/javascript'>
            window.location='./guru?gru=confirmasi&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel&kls=$kls&smstr_cari=$smstr_cari&thn_pelajaran_cari=$thn_pelajaran_cari&id_kls=$id_kls&np1=$np1&np2=$np2&np3=$np3&np4=$np4&nptts=$nptts&nptas=$nptas&nk1=$nk1&nk2=$nk2&nk3=$nk3&nk4=$nk4';
    </script>";
}
