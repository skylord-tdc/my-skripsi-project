<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kls = $_GET['kls'];
    $smstr = $_GET['smstr'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da3">Data Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $kls; ?> - <?php echo $smstr; ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mt-3 mb-3 mr-2 ml-2">
            <div>
                <table id="data" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tag Angkatan</th>
                            <th>kompetensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../login/conn.php';
                        // untuk pengulangan penomeran
                        $no = 1;
                        $data1 = mysqli_query($conn, "SELECT DISTINCT thn_angkatan, kompetensi FROM data_kelas where smstr='$smstr' ORDER BY `thn_angkatan` ASC");
                        while ($d1 = mysqli_fetch_array($data1)) {
                        ?>
                            <tr>
                                <td>
                                    <a href="?adm=details&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_angkatan=<?php echo $d1['thn_angkatan']; ?>&kompetensi=<?php echo $d1['kompetensi']; ?>"><i class="fa fa-hashtag" aria-hidden="true"></i> <?php echo $d1['thn_angkatan']; ?></a>
                                </td>
                                <td><?php echo $d1['kompetensi']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>