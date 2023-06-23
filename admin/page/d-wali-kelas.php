<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Wali Kelas</li>
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
                        <li>Data Akan Tampil Ketika Anda Sudah Membuat <b>Grup Wali Kelas</b>.</li>
                    </ul>
                </div>

                <a href="#p2" class="" data-toggle="collapse">Bagaimana cara membuat grup wali kelas?</a>
                <div id="p2" class="collapse">
                    <ul type="circle">
                        <li>Silahkan kunjungi sub menu <mark><i>Data Kelas</i></mark> pada menu <mark><i>Data Akademik</i></mark></li>
                        <li>Atau <mark><a href="?adm=da3">klik tautan ini.</a></mark> dan pilih tombol menu <button class="btn btn-sm btn-info">Tambah Grup Wali Kelas</button></li>
                        <li>Ketika data sudah di inputkan maka data akan otomatis akan tampil pada halaman ini.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="card table-responsive">
        <div class="mr-3 ml-3 mt-3 mb-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tag Kompetensi</th>
                        <th>Jumlah Wali Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "SELECT DISTINCT kompetensi_kelas FROM grup_wali_kelas ORDER BY `kompetensi_kelas` ASC");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td><a href="?adm=view-list-wk&kompetensi=<?php echo $d1['kompetensi_kelas']; ?>"># <?php echo $d1['kompetensi_kelas']; ?></a></td>

                            <?php
                            // mengambil data
                            $data_wk = mysqli_query($conn, "SELECT * FROM grup_wali_kelas WHERE kompetensi_kelas='$d1[kompetensi_kelas]' ");

                            // menghitung data
                            $jumlah_wk = mysqli_num_rows($data_wk);
                            ?>
                            <td><?php echo $jumlah_wk; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>