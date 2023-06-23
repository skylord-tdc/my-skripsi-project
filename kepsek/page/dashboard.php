<script src="./canvasjs/canvasjs.min.js"> </script>

<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-2 mb-2">
                <div id="chart1" style="height: 370px; width: 100%;"></div>
            </div>
            <div class="col-sm-6 mt-2 mb-2">
                <div id="chart2" style="height: 370px; width: 100%;"></div>
            </div>
            <div class="col-sm-12 mt-2 mb-2">

                <div class="card table-responsive">
                    <div>
                        <h1 class="text-center font-weight-bold text-dark">Jumlah Siswa Berdasarkan Angkatan</h1>
                    </div>
                    <div class="mr-2 ml-2">
                        <table id="data" class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Tahun Angkatan</th>
                                    <th>Kompetensi</th>
                                    <th>Total</th>
                                    <th>Laki-laki</th>
                                    <th>Perempuan</th>
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
                                        <td><?php echo $d['thn_msk']; ?></td>
                                        <td><?php echo $d['kompetensi']; ?></td>

                                        <?php
                                        // mengambil data
                                        $data_siswa_angkatan = mysqli_query($conn, "SELECT * FROM data_siswa_1 WHERE (thn_msk='$d[thn_msk]' AND kompetensi='$d[kompetensi]') ");

                                        $data_siswa_angkatan_cowok = mysqli_query($conn, "SELECT * FROM data_siswa_1 WHERE (thn_msk='$d[thn_msk]' AND kompetensi='$d[kompetensi]' AND jk='LAKI-LAKI') ");
                                        $data_siswa_angkatan_cewek = mysqli_query($conn, "SELECT * FROM data_siswa_1 WHERE (thn_msk='$d[thn_msk]' AND kompetensi='$d[kompetensi]' AND jk='PEREMPUAN') ");

                                        // menghitung data
                                        $jumlah_siswa = mysqli_num_rows($data_siswa_angkatan);
                                        $jumlah_siswa_cowok = mysqli_num_rows($data_siswa_angkatan_cowok);
                                        $jumlah_siswa_cewek = mysqli_num_rows($data_siswa_angkatan_cewek);
                                        ?>
                                        <td><?php echo $jumlah_siswa; ?> Pelajar</td>
                                        <td><?php echo $jumlah_siswa_cowok; ?> <i class="fa fa-male" aria-hidden="true"></i></td>
                                        <td><?php echo $jumlah_siswa_cewek; ?> <i class="fa fa-female" aria-hidden="true"></i></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-2 mb-2">
                <div id="chart3" style="height: 370px; width: 100%;"></div>
            </div>

        </div>
    </div>

</div>

<?php
include '../login/conn.php';
?>

<script type="text/javascript">
    window.onload = function() {

        //chart 1
        var chart = new CanvasJS.Chart("chart1", {
            theme: "light1", // "light2", "dark1", "dark2"
            animationEnabled: false, // change to true		
            title: {
                text: "Data Siswa"
            },
            subtitles: [{
                text: "Jumlah Keseluruhan Siswa Berdasarkan Gender"
            }],
            data: [{
                // Change type to "bar", "area", "spline", "pie",etc.
                type: "column",
                dataPoints: [{

                        label: "Laki - Laki",
                        y: <?php
                            $jumlah_siswa_laki_laki = mysqli_query($conn, "SELECT * FROM data_siswa_1 WHERE jk='laki-laki' ");
                            echo mysqli_num_rows($jumlah_siswa_laki_laki);
                            ?>
                    },
                    {
                        label: "Perempuan",
                        y: <?php
                            $jumlah_siswa_perempuan = mysqli_query($conn, "SELECT * FROM data_siswa_1 WHERE jk='perempuan' ");
                            echo mysqli_num_rows($jumlah_siswa_perempuan);
                            ?>
                    }
                ]
            }]
        });
        chart.render();
        //end chart 1

        //chart 2
        var chart = new CanvasJS.Chart("chart2", {
            theme: "light1", // "light1", "light2", "dark1"
            animationEnabled: true,
            exportEnabled: true,
            title: {
                text: "Siswa SMK Purnama 1 Semarang"
            },
            axisX: {
                margin: 10,
                labelPlacement: "inside",
                tickPlacement: "inside"
            },
            axisY2: {
                title: "Total Keseluruhan",
                titleFontSize: 14,
                includeZero: true,
                suffix: " Siswa"
            },
            data: [{
                type: "bar",
                axisYType: "secondary",
                yValueFormatString: "#,###.## Siswa",
                indexLabel: "{y}",
                dataPoints: [{
                    label: "Bisnis Daring Pemasaran",
                    y: <?php
                        $jumlah_siswa_seluruh = mysqli_query($conn, "SELECT * FROM data_siswa_1 where kompetensi='Bisnis Daring Dan Pemasaran' ");
                        echo mysqli_num_rows($jumlah_siswa_seluruh);
                        ?>
                }]
            }]
        });
        chart.render();
        //end chart 2

        //chart 3
        var chart = new CanvasJS.Chart("chart3", {
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "Users Aktif"
            },
            subtitles: [{
                text: "Jumlah Keseluruhan Users Sesuai Bidang & Gender"
            }],
            axisX: {
                title: "Bidang Pekerjaan"
            },
            axisY: {
                title: "Laki - laki",
                titleFontColor: "#4F81BC",
                lineColor: "#4F81BC",
                labelFontColor: "#4F81BC",
                tickColor: "#4F81BC",
                includeZero: true
            },
            axisY2: {
                title: "Perempuan",
                titleFontColor: "#C0504E",
                lineColor: "#C0504E",
                labelFontColor: "#C0504E",
                tickColor: "#C0504E",
                includeZero: true
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor: "pointer",
                itemclick: toggleDataSeries
            },
            data: [{
                    type: "column",
                    name: "Laki - laki",
                    showInLegend: true,
                    yValueFormatString: "#,##0.# Anggota",
                    dataPoints: [{
                            label: "Admin Sistem",
                            y: <?php
                                $jumlah_admin_laki_laki = mysqli_query($conn, "SELECT * FROM pengguna WHERE (role='1' and kelamin='L') ");
                                echo mysqli_num_rows($jumlah_admin_laki_laki);
                                ?>
                        },
                        {
                            label: "Guru",
                            y: <?php
                                $jumlah_guru_laki_laki = mysqli_query($conn, "SELECT * FROM pengguna WHERE (role='3' and kelamin='L') ");
                                echo mysqli_num_rows($jumlah_guru_laki_laki);
                                ?>
                        },
                        {
                            label: "Wali Kelas",
                            y: <?php
                                $jumlah_wk_laki_laki = mysqli_query($conn, "SELECT * FROM pengguna WHERE (role='4' and kelamin='L') ");
                                echo mysqli_num_rows($jumlah_wk_laki_laki);
                                ?>
                        }
                    ]
                },
                {
                    type: "column",
                    name: "Perempuan",
                    axisYType: "secondary",
                    showInLegend: true,
                    yValueFormatString: "#,##0.# Anggota",
                    dataPoints: [{
                            label: "Admin Sistem",
                            y: <?php
                                $jumlah_admin_perempuan = mysqli_query($conn, "SELECT * FROM pengguna WHERE (role='1' and kelamin='P') ");
                                echo mysqli_num_rows($jumlah_admin_perempuan);
                                ?>
                        },
                        {
                            label: "Guru",
                            y: <?php
                                $jumlah_guru_perempuan = mysqli_query($conn, "SELECT * FROM pengguna WHERE (role='3' and kelamin='P') ");
                                echo mysqli_num_rows($jumlah_guru_perempuan);
                                ?>
                        },
                        {
                            label: "Wali Kelas",
                            y: <?php
                                $jumlah_wk_perempuan = mysqli_query($conn, "SELECT * FROM pengguna WHERE (role='4' and kelamin='P') ");
                                echo mysqli_num_rows($jumlah_wk_perempuan);
                                ?>
                        }
                    ]
                }
            ]
        });
        chart.render();

        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else {
                e.dataSeries.visible = true;
            }
            e.chart.render();
        }
        //end chart 3

    }
</script>