<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $thn_angkatan = $_GET['thn_angkatan'];
    $kompetensi = $_GET['kompetensi'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da4">Data Nilai</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $kompetensi ?> <?php echo $thn_angkatan ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mr-2 ml-2 mt-2 mb-2">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>DB</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT DISTINCT nis, nm_siswa FROM data_kelas order by nis DESC ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['nis']; ?></td>
                            <td><?php echo $d['nm_siswa']; ?></td>
                            <td><a href="?adm=view-list-nilai-db&thn_angkatan=<?php echo $thn_angkatan ?>&kompetensi=<?php echo $kompetensi ?>&nm_siswa=<?php echo $d['nm_siswa']; ?>&nis=<?php echo $d['nis']; ?>"><i class="fa fa-file" aria-hidden="true"> Open</i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>