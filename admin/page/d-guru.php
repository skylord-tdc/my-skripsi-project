<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Guru</li>
        </ol>
    </nav>

    <div class="container">
        <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#info"><i class="fa fa-question" aria-hidden="true"> Pertanyaan</i></button>

        <div id="info" class="card collapse">
            <div class="mt-3 mb-3 mr-2 ml-2">
                <i class="fa fa-bookmark-o fa-lg" aria-hidden="true"> Seputar Pertanyaan</i>
                <hr>

                <a href="#p1" class="" data-toggle="collapse">Data tidak tampil? apa yang harus saya lakukan?</a><br>
                <div id="p1" class="collapse">
                    <ul type="circle">
                        <li>Data Akan Tampil Ketika Anda Sudah Membuat <b>Grup Guru Kelas</b>.</li>
                    </ul>
                </div>

                <a href="#p2" class="" data-toggle="collapse">Bagaimana cara membuat grup guru kelas?</a>
                <div id="p2" class="collapse">
                    <ul type="circle">
                        <li>Silahkan kunjungi sub menu <mark><i>Data Kelas</i></mark> pada menu <mark><i>Data Akademik</i></mark></li>
                        <li>Atau <mark><a href="?adm=da3">klik tautan ini.</a></mark> dan pilih tombol menu <button class="btn btn-sm btn-info">Tambah Grup Guru Kelas</button></li>
                        <li>Ketika data sudah di inputkan maka data akan otomatis akan tampil pada halaman ini.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="table-responsive card">
        <div class="mt-2 mb-2 mr-2 ml-2">
            <table id="data" class="mt-3 mb-3 table table-bordered" style="width: 100% ;">
                <thead>
                    <tr>
                        <th>Tag Grup Kelas</th>
                        <th>Jmlh Guru</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT DISTINCT mapel FROM grup_kelas order by mapel DESC ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td>
                                <a href="?adm=view-guru&mpel=<?php echo $d['mapel']; ?>"># <?php echo $d['mapel']; ?></a>
                            </td>

                            <?php
                            // mengambil data
                            $data_guru_pada_mapel = mysqli_query($conn, "SELECT * FROM grup_kelas WHERE mapel='$d[mapel]' ");

                            // menghitung data
                            $jumlah_pengajar = mysqli_num_rows($data_guru_pada_mapel);
                            ?>
                            <td><?php echo $jumlah_pengajar; ?> Pengajar</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>