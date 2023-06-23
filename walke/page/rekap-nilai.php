<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Rekap Nilai</li>
        </ol>
    </nav>

    <div>
        <?php
        include '../login/conn.php';
        $sql1 = mysqli_query($conn, "SELECT DISTINCT kelas, angkatan, kompetensi_kelas FROM grup_wali_kelas where wali_kls='$_SESSION[id_akun]' ");
        $cek1 = mysqli_num_rows($sql1);
        if ($cek1 == 0) {
            echo "
                <div class='alert alert-warning'>
                    <strong>Anda saat ini tidak sedang mengampuh angkatan apapun.
                </div>
                                        ";
        } else {
            echo "
                <div class='alert alert-info'>
                    <strong>Angkatan yang sedang anda ampuh.
                </div>
                                        ";
        }
        ?>
    </div>

    <div>
        <?php
        include '../login/conn.php';
        // untuk pengulangan penomeran
        $no = 1;
        $data = mysqli_query($conn, "SELECT DISTINCT kelas, angkatan, kompetensi_kelas FROM grup_wali_kelas where wali_kls='$_SESSION[id_akun]' ");
        while ($d = mysqli_fetch_array($data)) {
        ?>

            <div class="card table-responsive">
                <div class="mt-2 mb-2 mr-2 ml-2">

                    <table id="data" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kompetensi Yang Diampuh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../login/conn.php';
                            // untuk pengulangan penomeran
                            $no = 1;
                            $data1 = mysqli_query($conn, "SELECT DISTINCT kls, thn_angkatan, kompetensi FROM data_kelas ");
                            while ($d1 = mysqli_fetch_array($data1)) {
                            ?>
                                <tr>
                                    <td><a href="?wlk=kompetensi&kls=<?php echo $d1['kls']; ?>&angkatan=<?php echo $d1['thn_angkatan']; ?>&kompetensi=<?php echo $d1['kompetensi']; ?>"><i class="fa fa-hashtag" aria-hidden="true"> <?php echo $d1['kls']; ?> <?php echo $d1['kompetensi']; ?> <?php echo $d1['thn_angkatan']; ?></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } ?>
    </div>
</div>