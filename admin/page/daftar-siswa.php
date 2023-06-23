<div>

    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $thn_msk = $_GET['thn_msk'];
    $kompetensi = $_GET['kompetensi'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da2">Data Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Angkatan <?php echo $thn_msk; ?> <?php echo $kompetensi; ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mt-3 mb-3 mr-2 ml-2">
            <table id="data" class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>No. Absen</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Bidang</th>
                        <th>Program</th>
                        <th>Kompetensi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT * FROM data_siswa_1 where (thn_msk='$thn_msk' and kompetensi='$kompetensi') order by id_siswa DESC ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $d['absen']; ?></td>
                            <td class="text-center"><?php echo $d['nis']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['tempat_lahir']; ?>, <?php echo $d['tanggal_lahir']; ?></td>
                            <td class="text-center"><?php echo $d['agama']; ?></td>
                            <td class="text-center"><?php echo $d['jk']; ?></td>
                            <td><?php echo $d['almt']; ?></td>
                            <td><?php echo $d['bidang']; ?></td>
                            <td><?php echo $d['program']; ?></td>
                            <td><?php echo $d['kompetensi']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d['id_siswa']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d['id_siswa']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-siswa&id_siswa=<?php echo $d['id_siswa']; ?>&thn_msk=<?php echo $d['thn_msk']; ?>&kompetensi=<?php echo $d['kompetensi']; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>