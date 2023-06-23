<?php
session_start();
?>

<?php
//ceklogin hak akses
if (!isset($_SESSION['id_akun'])) {
  die(header('location:../error'));
}

if ($_SESSION['role'] != "1") {
  die(header('location:../index'));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin | SMK Purnama 1 Semarang</title>

  <!-- w3css & boostrap js-->
  <link rel="stylesheet" href="../error_css/w3.css">
  <script src="../error_css/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">

  <!-- datatables -->
  <link rel="stylesheet" href="../datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css" />

  <!-- ckeditor -->
  <!-- <link type="text/css" href="ckeditor/sample/css/sample.css" rel="stylesheet" media="screen" /> -->

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="?adm=dash" class="site_title"><i class="fa fa-graduation-cap"></i> <span>SMK Purnama 1</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/<?php echo $_SESSION['kelamin']; ?>.svg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>
                <?php
                echo $_SESSION['nm'];
                ?>
              </h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu Utama</h3>

              <ul class="nav side-menu">

                <li><a href="?adm=dash"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
                <li><a href="?adm=wb"><i class="fa fa-home"></i> Layanan Sistem</a></li>
                <li><a href="?adm=dp"><i class="fa fa-users"></i> Data Pengguna</a></li>
                <li><a><i class="fa fa-archive"></i> Data Akademik <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="?adm=da1">Data Guru</a></li>
                    <li><a href="?adm=da5">Data Wali Kelas</a></li>
                    <li><a href="?adm=da2">Data Siswa</a></li>
                    <li><a href="?adm=da3">Data Kelas</a></li>
                    <li><a href="?adm=da4">Data Nilai Siswa</a></li>
                  </ul>
                </li>


              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->


        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/<?php echo $_SESSION['kelamin']; ?>.svg" alt="">
                  <?php
                  echo $_SESSION['nm'];
                  ?>
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../login/out"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">


        <div class="row">
          <div class="col-sm-12">
            <?php include 'set.php'; ?>
          </div>
        </div>


      </div>

    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Sistem Akademik - <a href="#">Thomas Dwi C</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="vendors/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>

  <!-- js dataTables -->
  <script src="../datatables/jquery.dataTables.min.js"></script>
  <script src="../datatables/dataTables.bootstrap4.min.js"></script>

  <!-- function dataTables -->
  <script>
    $(document).ready(function() {
      $('#data').DataTable();
    });
  </script>
</body>

<!-- ckeditor -->
<script src="ckeditor/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor'), {
      // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
      // toolbar: ['heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'link', 'insertTable']
      toolbar: ['heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'link']
    })
    .then(editor => {
      window.editor = editor;
    })
    .catch(err => {
      console.error(err.stack);
    });
</script>

</html>