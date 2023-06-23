<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kls = $_GET['kls'];
    $smstr = $_GET['smstr'];
    $thn_pelajaran = $_GET['thn_pelajaran'];
    $thn_angkatan = $_GET['thn_angkatan'];
    $kompetensi = $_GET['kompetensi'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da3">Data Kelas</a></li>
            <li class="breadcrumb-item"><a href="?adm=list-ys&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>">Kelas <?php echo $kls; ?> - <?php echo $smstr; ?></a></li>
            <li class="breadcrumb-item"><a href="?adm=list-yf&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_pelajaran=<?php echo $thn_pelajaran; ?>">Tahun Pelajaran <?php echo $thn_pelajaran; ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">Angkatan <?php echo $thn_angkatan; ?> <?php echo $kompetensi; ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mt-2 mb-2 mr-2 ml-2">
            <h4><?php echo $kompetensi; ?></h4>
            <hr>
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "SELECT DISTINCT nm_mapel FROM data_kelas ORDER BY `nm_mapel` ASC");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td><a href="?adm=list-mp&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_pelajaran=<?php echo $thn_pelajaran; ?>&thn_angkatan=<?php echo $thn_angkatan; ?>&kompetensi=<?php echo $kompetensi; ?>&nm_mapel=<?php echo $d1['nm_mapel']; ?>"> <?php echo $d1['nm_mapel']; ?></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>