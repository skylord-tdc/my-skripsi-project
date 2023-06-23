<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Nilai</li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mt-2 mb-2 mr-2 ml-2">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tag Angkatan Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT DISTINCT thn_angkatan, kompetensi FROM data_kelas order by thn_angkatan DESC ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>

                            <td>
                                <a href="?adm=view-list-nilai&thn_angkatan=<?php echo $d['thn_angkatan']; ?>&kompetensi=<?php echo $d['kompetensi']; ?>"># <?php echo $d['kompetensi']; ?> <?php echo $d['thn_angkatan']; ?></a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>