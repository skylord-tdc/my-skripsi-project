<?php
if (isset($_POST['Submit'])) {

    $id_kls = $_POST['id_kls'];
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
    $nk4 = $_POST['nk4'];

    echo
    "   <script type='text/javascript'>
            window.location='./admin?adm=confirmasi&id_kls=$id_kls&kls=$kls&smstr=$smstr&thn_pelajaran=$thn_pelajaran&thn_angkatan=$thn_angkatan&kompetensi=$kompetensi&nm_mapel=$nm_mapel&np1=$np1&np2=$np2&np3=$np3&np4=$np4&nptts=$nptts&nptas=$nptas&nk1=$nk1&nk2=$nk2&nk3=$nk3&nk4=$nk4';
    </script>";
}