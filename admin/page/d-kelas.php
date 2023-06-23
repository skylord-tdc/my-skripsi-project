<?php
// Load file autoload.php
require 'logic/phpexcel/vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
?>

<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Kelas</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#form" aria-expanded="false" aria-controls="collapseExample">
                    Tambah Data kelas
                </button>

                <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#f-kelas" aria-expanded="false" aria-controls="collapseExample">
                    Format Data Kelas
                </button>

                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#grup_kelas" aria-expanded="false" aria-controls="collapseExample">
                    Tambah Grup Guru Kelas
                </button>

                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#grup_wali_kelas" aria-expanded="false" aria-controls="collapseExample">
                    Tambah Grup Wali Kelas
                </button>



                <!-- notif  -->
                <?php

                if (!empty($_SESSION["danger"])) {
                    echo $_SESSION["danger"];
                    unset($_SESSION["danger"]);
                } ?>

                <?php

                if (!empty($_SESSION["success"])) {
                    echo $_SESSION["success"];
                    unset($_SESSION["success"]);
                } ?>
                <!-- end notif  -->

                <div class="collapse" id="form">
                    <div class="card card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <label>- Hanya Mendukung Format xls, jika saat upload error/tidak tampil silahkan save as ulang file ke Excel 97-2003 Workbook (*xls)</label> <br>
                            <label>- Bersihkan Temp File setelah import atau error</label> <br>
                            <label>- <a href="logic/phpexcel/Kelas-Semester  Nama Mapel (Tahun Pelajaran).xls"><i class="fa fa-download" aria-hidden="true"></i> Unduh Format Default</a></label>

                            <div class="custom-file mb-3">
                                <input type="file" name="file" class="custom-file-input" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <button type="submit" name="preview" class="btn btn-sm btn-success">Preview</button>
                            <a href="?adm=delete-temp-kls" class="btn btn-sm btn-danger">Clear Temp xls</a>

                        </form>
                    </div>
                </div>

                <div class="collapse" id="f-kelas">
                    <div class="card card-body text-center">
                        Tindakan ini akan menghapus seluruh kelas, dan nilai yang sudah di inputkan.

                        <a href="" class="btn btn-danger mt-3">Lanjutkan</a>
                    </div>
                </div>

                <div class="collapse" id="grup_kelas">
                    <div class="card card-body">

                        <!-- peringatan data -->
                        <?php
                        include "../login/conn.php";
                        $sql = mysqli_query($conn, "select * from data_kelas");
                        $cek = mysqli_num_rows($sql);
                        if ($cek == 0) {
                            echo "
                            <div class='alert alert-warning alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Peringatan!</strong> Sebelum melakukan tahap ini anda harus sudah meng-inputkan data kelas, jika belum maka ada data yang tidak bisa ditampilkan, pada form ini.
                        </div>
                            ";
                        } else {
                            echo "
                            <div class='alert alert-info alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Pemberitahuan!</strong> Anda bisa melanjutkan pada tahap ini.
                        </div>
                            ";
                        }
                        ?>
                        <!-- end peringatan data -->

                        <form action="?adm=input-grup-guru" method="POST">

                            <!-- dropdown -->
                            <?php
                            include "../login/conn.php";
                            $guru = mysqli_query($conn, "SELECT * FROM pengguna where role='3' ");
                            $kelas = mysqli_query($conn, "SELECT DISTINCT kls FROM data_kelas ORDER BY `kls` ASC ");
                            $angkatan = mysqli_query($conn, "SELECT DISTINCT thn_angkatan FROM data_kelas ORDER BY `thn_angkatan` ASC ");
                            $kompetensi = mysqli_query($conn, "SELECT DISTINCT kompetensi FROM data_kelas ORDER BY `kompetensi` ASC ");
                            $mapel = mysqli_query($conn, "SELECT DISTINCT nm_mapel FROM data_kelas ORDER BY `nm_mapel` ASC ");
                            ?>
                            <!-- dropdown end-->
                            <div class="form-group">
                                <label>Guru</label>
                                <select name="guru" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($guru)) { ?>
                                        <option value="<?= $row['id_akun'] ?>"><?= $row['nm'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Mapel Tersedia Pada Kelas Saat Ini</label>
                                <select name="mapel" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($mapel)) { ?>
                                        <option value="<?= $row['nm_mapel'] ?>"><?= $row['nm_mapel'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($kelas)) { ?>
                                        <option value="<?= $row['kls'] ?>"><?= $row['kls'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tahun Angkatan</label>
                                <select name="angkatan" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($angkatan)) { ?>
                                        <option value="<?= $row['thn_angkatan'] ?>"><?= $row['thn_angkatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kompetensi</label>
                                <select name="kompetensi_kelas" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($kompetensi)) { ?>
                                        <option value="<?= $row['kompetensi'] ?>"><?= $row['kompetensi'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>



                            <div class="checkbox">
                                <label><input type="checkbox" required> Setuju & lanjut</label>
                            </div>
                            <button name="Submit" type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>

                <div class="collapse" id="grup_wali_kelas">
                    <div class="card card-body">

                        <!-- peringatan data -->
                        <?php
                        include "../login/conn.php";
                        $sql = mysqli_query($conn, "select * from data_kelas");
                        $cek = mysqli_num_rows($sql);
                        if ($cek == 0) {
                            echo "
                            <div class='alert alert-warning alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Peringatan!</strong> Sebelum melakukan tahap ini anda harus sudah meng-inputkan data kelas, jika belum maka ada data yang tidak bisa ditampilkan, pada form ini.
                        </div>
                            ";
                        } else {
                            echo "
                            <div class='alert alert-info alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Pemberitahuan!</strong> Anda bisa melanjutkan pada tahap ini.
                        </div>
                            ";
                        }
                        ?>
                        <!-- end peringatan data -->

                        <form action="?adm=input-grup-wk" method="POST">

                            <!-- dropdown -->
                            <?php
                            include "../login/conn.php";
                            $wk = mysqli_query($conn, "SELECT * FROM pengguna where role='4' ");
                            $kelas = mysqli_query($conn, "SELECT DISTINCT kls FROM data_kelas ORDER BY `kls` ASC ");
                            $angkatan = mysqli_query($conn, "SELECT DISTINCT thn_angkatan FROM data_kelas ORDER BY `thn_angkatan` ASC ");
                            $kompetensi = mysqli_query($conn, "SELECT DISTINCT kompetensi FROM data_kelas ORDER BY `kompetensi` ASC ");
                            ?>
                            <!-- dropdown end-->
                            <div class="form-group">
                                <label>Wali Kelas</label>
                                <select name="wali_kls" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($wk)) { ?>
                                        <option value="<?= $row['id_akun'] ?>"><?= $row['nm'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($kelas)) { ?>
                                        <option value="<?= $row['kls'] ?>"><?= $row['kls'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tahun Angkatan</label>
                                <select name="angkatan" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($angkatan)) { ?>
                                        <option value="<?= $row['thn_angkatan'] ?>"><?= $row['thn_angkatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kompetensi</label>
                                <select name="kompetensi_kelas" class="form-control" required>
                                    <option disabled value selected>Pilihan..</option>
                                    <?php while ($row = mysqli_fetch_array($kompetensi)) { ?>
                                        <option value="<?= $row['kompetensi'] ?>"><?= $row['kompetensi'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" required> Setuju & lanjut</label>
                            </div>
                            <button name="Submit" type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mb-3">
                <div class="card table-responsive">
                    <div class="mt-3 mb-3 mr-2 ml-2">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Tag Kelas - Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../login/conn.php';
                                // untuk pengulangan penomeran
                                $no = 1;
                                $data1 = mysqli_query($conn, "SELECT DISTINCT kls, smstr FROM data_kelas ORDER BY `kls` ASC");
                                while ($d1 = mysqli_fetch_array($data1)) {
                                ?>
                                    <tr>
                                        <td><i class="fa fa-hashtag" aria-hidden="true"> <?php echo $d1['kls']; ?> - <?php echo $d1['smstr']; ?></i></td>
                                        <td>
                                            <a href="?adm=list-ys&kls=<?php echo $d1['kls']; ?>&smstr=<?php echo $d1['smstr']; ?>"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Buka</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mb-3">
                <?php
                // Jika user telah mengklik tombol Preview
                if (isset($_POST['preview'])) {
                    $tgl_sekarang = date('YmdHis'); // Ini akan mengambil waktu sekarang dengan format yyyymmddHHiiss
                    $nama_file_baru = 'data' . $tgl_sekarang . '.xls';

                    // Cek apakah terdapat file data.xls pada folder tmp
                    if (is_file('logic/kls/' . $nama_file_baru)) // Jika file tersebut ada
                        unlink('logic/kls/' . $nama_file_baru); // Hapus file tersebut

                    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
                    $tmp_file = $_FILES['file']['tmp_name'];

                    // Cek apakah file yang diupload adalah file Excel 2003 (.xls)
                    if ($ext == "xls") {
                        // Upload file yang dipilih ke folder tmp
                        // dan rename file tersebut menjadi data{tglsekarang}.xls
                        // {tglsekarang} diganti jadi tanggal sekarang dengan format yyyymmddHHiiss
                        // Contoh nama file setelah di rename : data20210814192500.xls
                        move_uploaded_file($tmp_file, 'logic/kls/' . $nama_file_baru);

                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                        $spreadsheet = $reader->load('logic/kls/' . $nama_file_baru); // Load file yang tadi diupload ke folder kls
                        $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                        // Buat sebuah tag form untuk proses import data ke database
                        echo "<form method='post' action='?adm=import-data-kelas'>";

                        // Disini kita buat input type hidden yg isinya adalah nama file excel yg diupload
                        // ini tujuannya agar ketika import, kita memilih file yang tepat (sesuai yg diupload)
                        echo "<input type='hidden' name='namafile' value='" . $nama_file_baru . "'>";

                        // Buat sebuah div untuk alert validasi kosong
                        // echo "<div id='kosong' style='color: red;margin-bottom: 10px;'>
                        // 			Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                        //         </div>";

                        // Buat sebuah tombol untuk mengimport data ke database
                        echo "<div class='container'> <hr> </div>";
                        echo "<div class='container'> <center> <button type='submit' class='btn btn-sm btn-info mb-3' name='import'>Import</button> </center> </div>";

                        echo "<div class='card container w3-responsive'> <table cellpadding='5' class='mt-2 mb-2 mr-2 ml-2 table-sm table table-bordered'>
					<tr>
						<th colspan='11' class='text-center'>Preview Data</th>
					</tr>
					<tr>
						<th>KELAS</th>
                        <th>SEMESTER</th>
						<th>NIS</th>
						<th>NAMA SISWA</th>
                        <th>TAHUN ANGKATAN</th>
                        <th>KOMPETENSI</th>
                        <th>NAMA MAPEL</th>
                        <th>TAHUN PELAJARAN</th>
					</tr>";

                        $numrow = 1;
                        $kosong = 0;
                        foreach ($sheet as $row) { // Lakukan perulangan dari data yang ada di excel
                            // Ambil data pada excel sesuai Kolom
                            $kls = $row['A'];
                            $smstr = $row['B'];
                            $nis = $row['C'];
                            $nm_siswa = $row['D'];
                            $thn_angkatan = $row['E'];
                            $kompetensi = $row['F'];
                            $nm_mapel = $row['G'];
                            $thn_pelajaran = $row['H'];

                            // Cek jika semua data tidak diisi
                            if ($kls == "" && $smstr == "" && $nis == "" && $nm_siswa == "" && $thn_angkatan == "" && $kompetensi == "" && $nm_mapel == "" && $thn_pelajaran == "")
                                continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                            // Cek $numrow apakah lebih dari 1
                            // Artinya karena baris pertama adalah nama-nama kolom
                            // Jadi dilewat saja, tidak usah diimport
                            if ($numrow > 1) {
                                // Validasi apakah semua data telah diisi
                                $kls_td = (!empty($kls)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                                $smstr_td = (!empty($smstr)) ? "" : " style='background: #E07171;'";
                                $nis_td = (!empty($nis)) ? "" : " style='background: #E07171;'";
                                $nm_siswa_td = (!empty($nm_siswa)) ? "" : " style='background: #E07171;'";
                                $thn_angkatan_td = (!empty($thn_angkatan)) ? "" : " style='background: #E07171;'";
                                $kompetensi_td = (!empty($kompetensi)) ? "" : " style='background: #E07171;'";
                                $nm_mapel_td = (!empty($nm_mapel)) ? "" : " style='background: #E07171;'";
                                $thn_pelajaran_td = (!empty($thn_pelajaran)) ? "" : " style='background: #E07171;'";

                                // Jika salah satu data ada yang kosong
                                if ($kls == "" or $smstr == "" or $nis == "" or $nm_siswa == "" or $thn_angkatan == "" or $kompetensi == "" or $nm_mapel == "" or $thn_pelajaran == "") {
                                    $kosong++; // Tambah 1 variabel $kosong
                                }

                                echo "<tr>";
                                echo "<td" . $kls_td . ">" . $kls . "</td>";
                                echo "<td" . $smstr_td . ">" . $smstr . "</td>";
                                echo "<td" . $nis_td . ">" . $nis . "</td>";
                                echo "<td" . $nm_siswa_td . ">" . $nm_siswa . "</td>";
                                echo "<td" . $thn_angkatan_td . ">" . $thn_angkatan . "</td>";
                                echo "<td" . $kompetensi_td . ">" . $kompetensi . "</td>";
                                echo "<td" . $nm_mapel_td . ">" . $nm_mapel . "</td>";
                                echo "<td" . $thn_pelajaran_td . ">" . $thn_pelajaran . "</td>";
                                echo "</tr>";
                            }

                            $numrow++; // Tambah 1 setiap kali looping
                        }

                        echo "</table> </div>";

                        // Cek apakah variabel kosong lebih dari 0
                        // Jika lebih dari 0, berarti ada data yang masih kosong
                        if ($kosong > 0) {
                ?>

                <?php
                        }

                        echo "</form>";
                    } else { // Jika file yang diupload bukan File Excel 2003 (.xls)
                        // Munculkan pesan validasi
                        echo "<div style='color: red;margin-bottom: 10px;' class='container'>
					Hanya File Excel 2003 (.xls) yang diperbolehkan
                </div>";
                    }
                }
                ?>
            </div>


        </div>
    </div>

</div>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>