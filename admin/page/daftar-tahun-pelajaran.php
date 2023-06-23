<div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kls = $_GET['kls'];
    $smstr = $_GET['smstr'];
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?adm=da3">Data Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelas <?php echo $kls; ?> - <?php echo $smstr; ?></li>
        </ol>
    </nav>

    <div class="card table-responsive">
        <div class="mt-2 mb-2 mr-2 ml-2">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tag Tahun Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "SELECT DISTINCT thn_pelajaran FROM data_kelas WHERE (kls='$kls' and smstr='$smstr') ORDER BY `thn_pelajaran` ASC");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td>
                                <a href="?adm=list-yf&kls=<?php echo $kls; ?>&smstr=<?php echo $smstr; ?>&thn_pelajaran=<?php echo $d1['thn_pelajaran']; ?>"><i class="fa fa-hashtag" aria-hidden="true"></i> <?php echo $d1['thn_pelajaran']; ?></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>