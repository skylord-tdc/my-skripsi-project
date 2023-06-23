<?php
error_reporting(E_ALL ^ E_NOTICE);
// Load file autoload.php
require 'logic/phpexcel/vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
?>
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
        </ol>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#tambah_siswa" aria-expanded="false" aria-controls="collapseExample">
                    Tambah Data Siswa
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
            </div>

            <div class="col-sm-12 mt-2">
                <div class="collapse" id="tambah_siswa">
                    <div class="card card-body">

                        <form method="post" action="" enctype="multipart/form-data">
                            <label>- Hanya Mendukung Format xls, jika saat upload error/tidak tampil silahkan save as ulang file ke Excel 97-2003 Workbook (*xls)</label> <br>
                            <label>- Bersihkan Temp File setelah import atau error</label> <br>
                            <label>- <a href="logic/phpexcel/format-default.xls"><i class="fa fa-download" aria-hidden="true"></i> Unduh Format Default</a></label>

                            <div class="custom-file mb-3">
                                <input type="file" name="file" class="custom-file-input" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <button type="submit" name="preview" class="btn btn-sm btn-success">Preview</button>
                            <a href="?adm=delete-temp" class="btn btn-sm btn-danger">Clear Temp xls</a>

                        </form>

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
                    if (is_file('logic/tmp/' . $nama_file_baru)) // Jika file tersebut ada
                        unlink('logic/tmp/' . $nama_file_baru); // Hapus file tersebut

                    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
                    $tmp_file = $_FILES['file']['tmp_name'];

                    // Cek apakah file yang diupload adalah file Excel 2003 (.xls)
                    if ($ext == "xls") {
                        // Upload file yang dipilih ke folder tmp
                        // dan rename file tersebut menjadi data{tglsekarang}.xls
                        // {tglsekarang} diganti jadi tanggal sekarang dengan format yyyymmddHHiiss
                        // Contoh nama file setelah di rename : data20210814192500.xls
                        move_uploaded_file($tmp_file, 'logic/tmp/' . $nama_file_baru);

                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                        $spreadsheet = $reader->load('logic/tmp/' . $nama_file_baru); // Load file yang tadi diupload ke folder kls
                        $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                        // Buat sebuah tag form untuk proses import data ke database
                        echo "<form method='post' action='?adm=import'>";

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
						<th>NIS</th>
                        <th>Nomer Absen</th>
						<th>Nama Siswa</th>
						<th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Bidang</th>
                        <th>Program</th>
                        <th>Kompetensi</th>
                        <th>Tahun Masuk</th>
					</tr>";

                        $numrow = 1;
                        $kosong = 0;
                        foreach ($sheet as $row) { // Lakukan perulangan dari data yang ada di excel
                            // Ambil data pada excel sesuai Kolom
                            $nis = $row['A'];
                            $absen = $row['B'];
                            $nama = $row['C'];
                            $tempat_lahir = $row['D'];
                            $tanggal_lahir = $row['E'];
                            $agama = $row['F'];
                            $jk = $row['G'];
                            $almt = $row['H'];
                            $bidang = $row['I'];
                            $program = $row['J'];
                            $kompetensi = $row['K'];
                            $thn_msk = $row['L'];

                            // Cek jika semua data tidak diisi
                            if ($nis == "" && $absen == "" && $nama == "" && $tempat_lahir == "" && $tanggal_lahir == "" && $agama == "" && $jk == "" && $almt == "" && $bidang == "" && $program == "" && $kompetensi == "" && $thn_msk == "")
                                continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                            // Cek $numrow apakah lebih dari 1
                            // Artinya karena baris pertama adalah nama-nama kolom
                            // Jadi dilewat saja, tidak usah diimport
                            if ($numrow > 1) {
                                // Validasi apakah semua data telah diisi
                                $nis_td = (!empty($nis)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $absen_td = (!empty($absen)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $nama_td = (!empty($nama)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $tempat_lahir_td = (!empty($tempat_lahir)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $tanggal_lahir_td = (!empty($tanggal_lahir)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $agama_td = (!empty($agama)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $jk_td = (!empty($jk)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $almt_td = (!empty($almt)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $bidang_td = (!empty($bidang)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $program_td = (!empty($program)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $kompetensi_td = (!empty($kompetensi)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $thn_msk_td = (!empty($thn_msk)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah

                                // Jika salah satu data ada yang kosong
                                if ($nis == "" or $absen == "" or $nama == "" or $tempat_lahir == "" or $tanggal_lahir == "" or $agama == "" or $jk == "" or $almt == "" or $bidang == "" or $program == "" or $kompetensi == "" or $thn_msk == "") {
                                    $kosong++; // Tambah 1 variabel $kosong
                                }

                                echo "<tr>";
                                echo "<td" . $nis_td . ">" . $nis . "</td>";
                                echo "<td" . $absen_td . ">" . $absen . "</td>";
                                echo "<td" . $nama_td . ">" . $nama . "</td>";
                                echo "<td" . $tempat_lahir_td . ">" . $tempat_lahir . "</td>";
                                echo "<td" . $tanggal_lahir_td . ">" . $tanggal_lahir . "</td>";
                                echo "<td" . $agama_td . ">" . $agama . "</td>";
                                echo "<td" . $jk_td . ">" . $jk . "</td>";
                                echo "<td" . $almt_td . ">" . $almt . "</td>";
                                echo "<td" . $bidang_td . ">" . $bidang . "</td>";
                                echo "<td" . $program_td . ">" . $program . "</td>";
                                echo "<td" . $kompetensi_td . ">" . $kompetensi . "</td>";
                                echo "<td" . $thn_msk_td . ">" . $thn_msk . "</td>";
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

            <div class="col-sm-12 table-responsive card">
                <div class="mt-3 mb-3">
                    <table id="data" class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Tag Tahun Angkatan Jurusan</th>
                                <th>Jmlh Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../login/conn.php';
                            // untuk pengulangan penomeran
                            $no = 1;
                            $data = mysqli_query($conn, "SELECT DISTINCT thn_msk, kompetensi FROM data_siswa_1 order by thn_msk DESC ");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td>
                                        <a href="?adm=view-siswa&thn_msk=<?php echo $d['thn_msk']; ?>&kompetensi=<?php echo $d['kompetensi']; ?>"><i class="fa fa-hashtag" aria-hidden="true"> <?php echo $d['thn_msk']; ?> <?php echo $d['kompetensi']; ?></i> </a>
                                    </td>

                                    <?php
                                    // mengambil data
                                    $data_siswa_angkatan = mysqli_query($conn, "SELECT * FROM data_siswa_1 WHERE (thn_msk='$d[thn_msk]' AND kompetensi='$d[kompetensi]') ");

                                    // menghitung data
                                    $jumlah_siswa = mysqli_num_rows($data_siswa_angkatan);
                                    ?>

                                    <td><?php echo $jumlah_siswa; ?> Pelajar</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

</div>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>