<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
    </ol>
</nav>

<div class="row">
    <div class="col-sm-12 mb-3">

        <div class="container">
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#tambah">Tambah Data</button>
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

            <div id="tambah" class="collapse card">
                <div class="mr-2 ml-2">
                    <h2>Tambah Data Pengguna</h2>
                    <form action="?adm=input-pengguna" method="POST">
                        <div class="form-group">
                            <label>Level Akses</label>
                            <select name="role" class="form-control" required>
                                <option disabled value selected>Pilihan..</option>
                                <option value="1">Admin</option>
                                <option value="2">Kepala Sekolah</option>
                                <option value="3">Guru</option>
                                <option value="4">Wali Kelas</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nm" type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="kelamin" class="form-control" required>
                                <option disabled value selected>Pilihan..</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="pw" type="password" class="form-control" required>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" required> Setuju & lanjut</label>
                        </div>
                        <button name="Submit" type="submit" class="btn btn-dark">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="animated flipInY col-sm-3">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <?php

                // menghubungkan dengan koneksi database
                include '../login/conn.php';

                // mengambil data
                $data_admin = mysqli_query($conn, "SELECT * FROM pengguna WHERE role='1' ");

                // menghitung data
                $jumlah_admin = mysqli_num_rows($data_admin);
                ?>
                <div class="count"><?php echo $jumlah_admin; ?></div>

                <h3>Admin</h3>
                <p>
                    <a href="#" data-toggle="collapse" data-target="#t_admin">
                        Details. <i class="fa fa-level-down" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
        </div>

        <div class="animated flipInY col-sm-3">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <?php

                // menghubungkan dengan koneksi database
                include '../login/conn.php';

                // mengambil data
                $data_kepsek = mysqli_query($conn, "SELECT * FROM pengguna WHERE role='2' ");

                // menghitung data
                $jumlah_kepsek = mysqli_num_rows($data_kepsek);
                ?>
                <div class="count"><?php echo $jumlah_kepsek; ?></div>

                <h3>Kepsek</h3>
                <p>
                    <a href="#" data-toggle="collapse" data-target="#t_kepsek">
                        Details. <i class="fa fa-level-down" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
        </div>

        <div class="animated flipInY col-sm-3">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <?php

                // menghubungkan dengan koneksi database
                include '../login/conn.php';

                // mengambil data
                $data_guru = mysqli_query($conn, "SELECT * FROM pengguna WHERE role='3' ");

                // menghitung data
                $jumlah_guru = mysqli_num_rows($data_guru);
                ?>
                <div class="count"><?php echo $jumlah_guru; ?></div>

                <h3>Guru</h3>
                <p>
                    <a href="#" data-toggle="collapse" data-target="#t_guru">
                        Details. <i class="fa fa-level-down" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
        </div>

        <div class="animated flipInY col-sm-3">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <?php

                // menghubungkan dengan koneksi database
                include '../login/conn.php';

                // mengambil data
                $data_wk = mysqli_query($conn, "SELECT * FROM pengguna WHERE role='4' ");

                // menghitung data
                $jumlah_wk = mysqli_num_rows($data_wk);
                ?>
                <div class="count"><?php echo $jumlah_wk; ?></div>

                <h3>Wali Kelas</h3>
                <p>
                    <a href="#" data-toggle="collapse" data-target="#t_wk">
                        Details. <i class="fa fa-level-down" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
        </div>

    </div>
    <div class="card col-sm-12">
        <div id="t_admin" class="mt-3 mb-3 collapse">
            Tabel / Admin
            <table class="mt-2 table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelamin</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "select * from pengguna where role='1'");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d1['nm']; ?></td>
                            <td><?php echo $d1['kelamin']; ?></td>
                            <td><?php echo $d1['username']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModalEdit<?php echo $d1['id_akun']; ?>"><i class=" fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d1['id_akun']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d1['id_akun']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-pengguna&id_akun=<?php echo $d1['id_akun']; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik</a>
                                </div>

                            </td>
                        </tr>

                        <!-- modal edit -->
                        <div class="modal fade" id="myModalEdit<?php echo $d1['id_akun']; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">

                                        <h4 class="modal-title font-weight-bold text-white">Ubah Data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="?adm=update-pengguna" method="POST">

                                            <?php
                                            $id = $d1['id_akun'];
                                            $query_view = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_akun='$id'");
                                            //$result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($query_view)) {
                                            ?>

                                                <input type="hidden" name="id_akun" value="<?php echo $row['id_akun']; ?>">

                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="nm" class="form-control" value="<?php echo $row['nm']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="pw" class="form-control" value="<?php echo $row['pw']; ?>">
                                                    <a href="#" title="Password Sekarang" data-bs-toggle="popover" title="Popover Header" data-bs-content="<?php echo $row['pw']; ?>">
                                                        <p class="text-right"> <i class="fa fa-info" aria-hidden="true"></i> Info pw</p>
                                                    </a>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                            <?php
                                            }
                                            //mysql_close($host);
                                            ?>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- modal edit -->

                    <?php
                        // looping end penomeran    
                    }
                    ?>
                </tbody>

            </table>
        </div>

        <div id="t_kepsek" class="mt-3 mb-3 collapse">
            Tabel / Kepala Sekolah
            <table class="mt-2 table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelamin</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "select * from pengguna where role='2'");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d1['nm']; ?></td>
                            <td><?php echo $d1['kelamin']; ?></td>
                            <td><?php echo $d1['username']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModalEdit<?php echo $d1['id_akun']; ?>"><i class=" fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d1['id_akun']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d1['id_akun']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-pengguna&id_akun=<?php echo $d1['id_akun']; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik</a>
                                </div>

                            </td>
                        </tr>

                        <!-- modal edit -->
                        <div class="modal fade" id="myModalEdit<?php echo $d1['id_akun']; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">

                                        <h4 class="modal-title font-weight-bold text-white">Ubah Data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="?adm=update-pengguna" method="POST">

                                            <?php
                                            $id = $d1['id_akun'];
                                            $query_view = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_akun='$id'");
                                            //$result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($query_view)) {
                                            ?>

                                                <input type="hidden" name="id_akun" value="<?php echo $row['id_akun']; ?>">

                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="nm" class="form-control" value="<?php echo $row['nm']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="pw" class="form-control" value="<?php echo $row['pw']; ?>">
                                                    <a href="#" title="Password Sekarang" data-bs-toggle="popover" title="Popover Header" data-bs-content="<?php echo $row['pw']; ?>">
                                                        <p class="text-right"> <i class="fa fa-info" aria-hidden="true"></i> Info pw</p>
                                                    </a>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                            <?php
                                            }
                                            //mysql_close($host);
                                            ?>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- modal edit -->

                    <?php
                        // looping end penomeran    
                    }
                    ?>
                </tbody>

            </table>
        </div>

        <div id="t_guru" class="mt-3 mb-3 collapse">
            Tabel / Guru
            <table class="mt-2 table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelamin</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "select * from pengguna where role='3'");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d1['nm']; ?></td>
                            <td><?php echo $d1['kelamin']; ?></td>
                            <td><?php echo $d1['username']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModalEdit<?php echo $d1['id_akun']; ?>"><i class=" fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d1['id_akun']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d1['id_akun']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-pengguna&id_akun=<?php echo $d1['id_akun']; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik</a>
                                </div>

                            </td>
                        </tr>

                        <!-- modal edit -->
                        <div class="modal fade" id="myModalEdit<?php echo $d1['id_akun']; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">

                                        <h4 class="modal-title font-weight-bold text-white">Ubah Data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="?adm=update-pengguna" method="POST">

                                            <?php
                                            $id = $d1['id_akun'];
                                            $query_view = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_akun='$id'");
                                            //$result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($query_view)) {
                                            ?>

                                                <input type="hidden" name="id_akun" value="<?php echo $row['id_akun']; ?>">

                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="nm" class="form-control" value="<?php echo $row['nm']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="pw" class="form-control" value="<?php echo $row['pw']; ?>">
                                                    <a href="#" title="Password Sekarang" data-bs-toggle="popover" title="Popover Header" data-bs-content="<?php echo $row['pw']; ?>">
                                                        <p class="text-right"> <i class="fa fa-info" aria-hidden="true"></i> Info pw</p>
                                                    </a>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                            <?php
                                            }
                                            //mysql_close($host);
                                            ?>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- modal edit -->

                    <?php
                        // looping end penomeran    
                    }
                    ?>
                </tbody>

            </table>
        </div>

        <div id="t_wk" class="mt-3 mb-3 collapse">
            Tabel / Wali Kelas
            <table class="mt-2 table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelamin</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../login/conn.php';
                    // untuk pengulangan penomeran
                    $no = 1;
                    $data1 = mysqli_query($conn, "select * from pengguna where role='4'");
                    while ($d1 = mysqli_fetch_array($data1)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d1['nm']; ?></td>
                            <td><?php echo $d1['kelamin']; ?></td>
                            <td><?php echo $d1['username']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModalEdit<?php echo $d1['id_akun']; ?>"><i class=" fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="collapse" data-target="#hapus<?php echo $d1['id_akun']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                <div id="hapus<?php echo $d1['id_akun']; ?>" class="mt-2 collapse">
                                    <a href="?adm=delete-pengguna&id_akun=<?php echo $d1['id_akun']; ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Klik</a>
                                </div>

                            </td>
                        </tr>

                        <!-- modal edit -->
                        <div class="modal fade" id="myModalEdit<?php echo $d1['id_akun']; ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">

                                        <h4 class="modal-title font-weight-bold text-white">Ubah Data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="?adm=update-pengguna" method="POST">

                                            <?php
                                            $id = $d1['id_akun'];
                                            $query_view = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_akun='$id'");
                                            //$result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($query_view)) {
                                            ?>

                                                <input type="hidden" name="id_akun" value="<?php echo $row['id_akun']; ?>">

                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="nm" class="form-control" value="<?php echo $row['nm']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="pw" class="form-control" value="<?php echo $row['pw']; ?>">
                                                    <a href="#" title="Password Sekarang" data-bs-toggle="popover" title="Popover Header" data-bs-content="<?php echo $row['pw']; ?>">
                                                        <p class="text-right"> <i class="fa fa-info" aria-hidden="true"></i> Info pw</p>
                                                    </a>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                            <?php
                                            }
                                            //mysql_close($host);
                                            ?>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- modal edit -->

                    <?php
                        // looping end penomeran    
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>