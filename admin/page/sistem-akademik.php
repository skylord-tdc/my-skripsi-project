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
            <li class="breadcrumb-item"><a href="?adm=wb">Layanan Sistem</a></li>
            <li class="breadcrumb-item active" aria-current="page">Akademik</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#e_raport" aria-expanded="false" aria-controls="collapseExample">
                    Tambah Data Mapel E-Raport
                </button>
                <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#format_e_raport" aria-expanded="false" aria-controls="collapseExample">
                    Format Data Mapel E-Raport
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
                <div class="collapse" id="e_raport">
                    <div class="card card-body">

                        <form method="post" action="" enctype="multipart/form-data">
                            <label>- Hanya Mendukung Format xls, jika saat upload error/tidak tampil silahkan save as ulang file ke Excel 97-2003 Workbook (*xls)</label> <br>
                            <label>- Bersihkan Temp File setelah import atau error</label> <br>
                            <label>- <a href="logic/phpexcel/Format-Mapel-E-Raport.xls"><i class="fa fa-download" aria-hidden="true"></i> Unduh Format Default</a></label>

                            <div class="custom-file mb-3">
                                <input type="file" name="file" class="custom-file-input" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <button type="submit" name="preview" class="btn btn-sm btn-success">Preview</button>
                            <a href="?adm=delete-temp-raport" class="btn btn-sm btn-danger">Clear Temp xls</a>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-sm-12 mt-2">
                <div class="collapse" id="format_e_raport">
                    <div class="card card-body text-center">
                        Tindakan ini akan menghapus seluruh mata pelajaran yang akan tampil pada e-raport.
                        <a href="?adm=format-dMapel" class="btn btn-danger mt-3">Setuju</a>
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
                    if (is_file('logic/e-raport/' . $nama_file_baru)) // Jika file tersebut ada
                        unlink('logic/e-raport/' . $nama_file_baru); // Hapus file tersebut

                    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
                    $tmp_file = $_FILES['file']['tmp_name'];

                    // Cek apakah file yang diupload adalah file Excel 2003 (.xls)
                    if ($ext == "xls") {
                        // Upload file yang dipilih ke folder tmp
                        // dan rename file tersebut menjadi data{tglsekarang}.xls
                        // {tglsekarang} diganti jadi tanggal sekarang dengan format yyyymmddHHiiss
                        // Contoh nama file setelah di rename : data20210814192500.xls
                        move_uploaded_file($tmp_file, 'logic/e-raport/' . $nama_file_baru);

                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                        $spreadsheet = $reader->load('logic/e-raport/' . $nama_file_baru); // Load file yang tadi diupload ke folder kls
                        $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                        // Buat sebuah tag form untuk proses import data ke database
                        echo "<form method='post' action='?adm=import-fraport'>";

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
						<th>MN</th>
                        <th>MK</th>
						<th>MPK 1</th>
						<th>MPK 2</th>
                        <th>MPK 3</th>
                        <th>ML</th>
					</tr>";

                        $numrow = 1;
                        $kosong = 0;
                        foreach ($sheet as $row) { // Lakukan perulangan dari data yang ada di excel
                            // Ambil data pada excel sesuai Kolom
                            $MPO1 = $row['A'];
                            $MPO2 = $row['B'];
                            $MPO3_1 = $row['C'];
                            $MPO3_2 = $row['D'];
                            $MPO3_3 = $row['E'];
                            $MPO4 = $row['F'];

                            // Cek jika semua data tidak diisi
                            if ($MPO1 == "" && $MPO2 == "" && $MPO3_1 == "" && $MPO3_2 == "" && $MPO3_3 == "" && $MPO4 == "")
                                continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                            // Cek $numrow apakah lebih dari 1
                            // Artinya karena baris pertama adalah nama-nama kolom
                            // Jadi dilewat saja, tidak usah diimport
                            if ($numrow > 1) {
                                // Validasi apakah semua data telah diisi
                                $MPO1_td = (!empty($MPO1)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $MPO2_td = (!empty($MPO2)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $MPO3_1_td = (!empty($MPO3_1)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $MPO3_2_td = (!empty($MPO3_2)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $MPO3_3_td = (!empty($MPO3_3)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah
                                $MPO4_td = (!empty($MPO4)) ? "" : " style='background: #E07171;'"; // Jika kosong, beri warna merah

                                // Jika salah satu data ada yang kosong
                                if ($MPO1 == "" or $MPO2 == "" or $MPO3_1 == "" or $MPO3_2 == "" or $MPO3_3 == "" or $MPO4 == "") {
                                    $kosong++; // Tambah 1 variabel $kosong
                                }

                                echo "<tr>";
                                echo "<td" . $MPO1_td . ">" . $MPO1 . "</td>";
                                echo "<td" . $MPO2_td . ">" . $MPO2 . "</td>";
                                echo "<td" . $MPO3_1_td . ">" . $MPO3_1 . "</td>";
                                echo "<td" . $MPO3_2_td . ">" . $MPO3_2 . "</td>";
                                echo "<td" . $MPO3_3_td . ">" . $MPO3_3 . "</td>";
                                echo "<td" . $MPO4_td . ">" . $MPO4 . "</td>";
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

            <div class="col-sm-12 table-responsive card mb-4">
                <div class="mt-3 mb-3">
                    <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#info"><i class="fa fa-question" aria-hidden="true"> Pertanyaan</i></button>
                    <div id="info" class="card collapse mb-2 bg-dark text-white">
                        <div class="mt-3 mb-3 mr-2 ml-2">
                            <i class="fa fa-bookmark-o fa-lg" aria-hidden="true"> Seputar Pertanyaan</i>
                            <hr class="bg-light">

                            <a href="#p1" class="text-white" data-toggle="collapse">Apa Kepanjangan dari MN ?</a><br>
                            <div id="p1" class="collapse show">
                                <ul type="circle">
                                    <li>MN adalah singkatan dari Muatan Nasional.</li>
                                </ul>
                            </div>

                            <a href="#p2" class="text-white" data-toggle="collapse">Apa Kepanjangan dari MK ?</a><br>
                            <div id="p2" class="collapse show">
                                <ul type="circle">
                                    <li>MK adalah singkatan dari Muatan Kewilayahan.</li>
                                </ul>
                            </div>

                            <a href="#p3" class="text-white" data-toggle="collapse">Apa Kepanjangan dari MPK ?</a><br>
                            <div id="p3" class="collapse show">
                                <ul type="circle">
                                    <li>MPK adalah singkatan dari Muatan Pemintan Kejuruan.</li>
                                    <li>Muatan Pemintan Kejuruan sendiri memiliki 3 dasar yaitu :</li>
                                    <li>
                                        <ol>
                                            <li>Dasar Bidang Keahlian atau disingkat MPK_1</li>
                                            <li>Dasar Program Keahlian atau disingkat MPK_2</li>
                                            <li>Kompetensi Keahlian atau disingkat MPK_3</li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <a href="#p4" class="text-white" data-toggle="collapse">Apa Kepanjangan dari ML ?</a><br>
                            <div id="p4" class="collapse show">
                                <ul type="circle">
                                    <li>ML adalah singkatan dari Muatan Lokal.</li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>MN</th>
                                    <th>MK</th>
                                    <th>MPK_1</th>
                                    <th>MPK_2</th>
                                    <th>MPK_3</th>
                                    <th>ML</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include '../login/conn.php';
                                // untuk pengulangan penomeran
                                $no = 1;
                                $data = mysqli_query($conn, "SELECT DISTINCT * FROM mapel order by id_mapel ASC ");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $d['MPO1']; ?></td>
                                        <td><?php echo $d['MPO2']; ?></td>
                                        <td><?php echo $d['MPO3_1']; ?></td>
                                        <td><?php echo $d['MPO3_2']; ?></td>
                                        <td><?php echo $d['MPO3_3']; ?></td>
                                        <td><?php echo $d['MPO4']; ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
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