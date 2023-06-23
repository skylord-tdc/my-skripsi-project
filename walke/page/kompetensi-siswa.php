<?php
error_reporting(E_ALL ^ E_NOTICE);
$kls = $_GET['kls'];
$angkatan = $_GET['angkatan'];
$kompetensi = $_GET['kompetensi'];
?>
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?wlk=rkp">Rekap Nilai</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $kls ?> <?php echo $kompetensi ?> <?php echo $angkatan ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mt-2 mb-2 mr-2 ml-2">

            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>DB</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "SELECT DISTINCT nis, nm_siswa FROM data_kelas where(kls='$kls' and thn_angkatan='$angkatan' and kompetensi='$kompetensi') ORDER BY `nis` ASC ");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td><?php echo $d1['nis']; ?></td>
                            <td><?php echo $d1['nm_siswa']; ?></td>
                            <td>
                                <a href="?wlk=e-rapor&nis=<?php echo $d1['nis']; ?>&nm_siswa=<?php echo $d1['nm_siswa']; ?>&kls=<?php echo $kls ?>&kompetensi=<?php echo $kompetensi ?>&angkatan=<?php echo $angkatan ?>"><i class="fa fa-file" aria-hidden="true"> E-Raport</i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>