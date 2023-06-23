<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kompetensi = $_GET['kompetensi'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da5">Data Wali Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Grup Kelas <?php echo $kompetensi; ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mr-2 ml-2 mt-2 mb-2">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pengampu Angkatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $data = mysqli_query($conn, "SELECT * FROM grup_wali_kelas where(kompetensi_kelas='$kompetensi') ORDER BY `kompetensi_kelas` ASC");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <?php
                            include '../login/conn.php';
                            // untuk pengulangan penomeran
                            $data1 = mysqli_query($conn, "SELECT * FROM pengguna where id_akun='$d[wali_kls]' ");
                            while ($d1 = mysqli_fetch_array($data1)) {
                            ?>
                                <td><?php echo $d1['nm']; ?></td>
                            <?php } ?>

                            <td><?php echo $d['angkatan']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d['id_wk']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d['id_wk']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-wk&id_wk=<?php echo $d['id_wk']; ?>&kompetensi=<?php echo $kompetensi; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik Untuk Lanjut</a>
                                    <br>
                                    <i class="text-danger">Peringatan ketika data ini dihapus maka wali kelas tersebut tidak bisa mengakses kompetensi tersebut.</i>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>