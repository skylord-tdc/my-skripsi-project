<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kls = $_GET['kls'];
    $smstr = $_GET['smstr'];
    $thn_pelajaran = $_GET['thn_pelajaran'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da3">Data Kelas</a></li>
            <li class="breadcrumb-item"><a href="?adm=list-ys&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>">Kelas <?php echo $kls; ?> - <?php echo $smstr; ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">Tahun Pelajaran <?php echo $thn_pelajaran; ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mt-2 mb-2 mr-2 ml-2">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tag Angkatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "SELECT DISTINCT thn_angkatan, kompetensi FROM data_kelas ORDER BY `thn_angkatan` ASC");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td>
                                <a href="?adm=details&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_pelajaran=<?php echo $thn_pelajaran; ?>&thn_angkatan=<?php echo $d1['thn_angkatan']; ?>&kompetensi=<?php echo $d1['kompetensi']; ?>"><i class="fa fa-hashtag" aria-hidden="true"></i> <?php echo $d1['thn_angkatan']; ?> <?php echo $d1['kompetensi']; ?></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>