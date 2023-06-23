<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Kelas</li>
        </ol>
    </nav>

    <div>
        <?php
        include '../login/conn.php';
        $sql1 = mysqli_query($conn, "SELECT DISTINCT kelas, angkatan, kompetensi_kelas, mapel FROM grup_kelas where guru='$_SESSION[id_akun]' ");
        $cek1 = mysqli_num_rows($sql1);
        if ($cek1 == 0) {
            echo "
                <div class='alert alert-warning'>
                    <strong>Anda saat ini tidak sedang mengajar pada kelas apapun.
                </div>
                                        ";
        } else {
            echo "
                <div class='alert alert-info'>
                    <strong>Kelas yang sedang anda ampuh.
                </div>
                                        ";
        }
        ?>
    </div>



    <div class="card table-responsive">
        <div class="mr-2 ml-2 mt-2 mb-2">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mapel</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>Kompetensi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT DISTINCT kelas, angkatan, kompetensi_kelas, mapel FROM grup_kelas where guru='$_SESSION[id_akun]' ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['mapel']; ?></td>
                            <td><?php echo $d['kelas']; ?></td>
                            <td><?php echo $d['angkatan']; ?></td>
                            <td><?php echo $d['kompetensi_kelas']; ?></td>
                            <td><a href="?gru=buka-kelas&thn_angkatan=<?php echo $d['angkatan']; ?>&kompetensi=<?php echo $d['kompetensi_kelas']; ?>&nm_mapel=<?php echo $d['mapel']; ?>&kls=<?php echo $d['kelas']; ?>"><i class="fa fa-chevron-circle-right" aria-hidden="true"> Buka Kelas</i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>