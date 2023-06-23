<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $mpel = $_GET['mpel'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da1">Data Guru</a></li>
            <li class="breadcrumb-item active" aria-current="page">Grup Kelas <?php echo $mpel ?>
            </li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mr-2 ml-2 mt-2 mb-2">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Guru Pengampu</th>
                        <th>Pengampu Kelas</th>
                        <th>Jumlah Murid</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT * FROM grup_kelas WHERE mapel='$_GET[mpel]' order by mapel DESC ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <?php
                            include '../login/conn.php';
                            // untuk pengulangan penomeran
                            $no = 1;
                            $data1 = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_akun='$d[guru]' order by id_akun DESC ");
                            while ($d1 = mysqli_fetch_array($data1)) {
                            ?>
                                <td><?php echo $d1['nm']; ?></td>
                            <?php } ?>

                            <td><?php echo $d['kelas']; ?> <?php echo $d['angkatan']; ?> <?php echo $d['kompetensi_kelas']; ?></td>

                            <?php
                            // mengambil data
                            $data_murid = mysqli_query($conn, "SELECT * FROM data_kelas WHERE (nm_mapel='$d[mapel]' and kls='$d[kelas]' and thn_angkatan='$d[angkatan]' and kompetensi='$d[kompetensi_kelas]') ");

                            // menghitung data
                            $jumlah_murid = mysqli_num_rows($data_murid);
                            ?>
                            <td><?php echo $jumlah_murid; ?></td>

                            <td>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d['id_grup']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d['id_grup']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-guru&id_grup=<?php echo $d['id_grup']; ?>&mapel=<?php echo $d['mapel']; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik Untuk Lanjut</a>
                                    <br>
                                    <i class="text-danger">Peringatan ketika data ini dihapus maka guru tersebut tidak bisa mengakses kelas tersebut.</i>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>