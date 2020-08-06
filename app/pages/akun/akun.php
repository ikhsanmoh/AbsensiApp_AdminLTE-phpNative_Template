<?php include "../../../config/url-base.php"; ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Absesnsi App | Akun</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<? echo $base; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<? echo $base; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Login -->
      <li class="nav-item dropdown">
        <?php if ( isset($_SESSION['username']) ) { ?>

        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <?php echo $_SESSION['username'] ?> <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">
              Logout
          </a>
        </div>
        
        <?php } else { ?>

        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          Login <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">
              Login Sebagai Admin
          </a>
        </div>
        <?php } ?>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<? echo $base; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Absensi App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<? echo $base; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ikhsan Mohamad</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<? echo $base; ?>./app/index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<? echo $base; ?>./app/pages/jabatan/jabatan.php" class="nav-link">
              <i class="nav-icon fas fa-user-tag"></i>
              <p>Data Jabatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<? echo $base; ?>./app/pages/karyawan/karyawan.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Karyawan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<? echo $base; ?>./app/pages/absensi/absensi.php" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Data Absensi</p><span class="right badge badge-danger">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<? echo $base; ?>./app/pages/akun/akun.php" class="nav-link active">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>Akun</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengaturan Akun</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">

            <div class="card card-primary card-outline">

              <div class="card-header">
                <h1 class="h4">
                  Profil  
                </h1>
              </div>

              <div class="card-body">

                <form>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Admin">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Laki-laki">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Lenteng Agung">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="admin@gmail.com">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="098287763344">
                    </div>
                  </div>
                </form>

              </div>
            </div><!-- /.card -->
          </div>

          <div class="col-md-4">

            <div class="card card-primary card-outline">

              <div class="card-header">
                <h1 class="h4">
                  Reset Password  
                </h1>
              </div>

              <div class="card-body">
                
                <form>
                  <div class="form-group">
                    <label for="inputPassword4">Password Lama</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password Baru</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Konfirmasi Password Baru</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                  </div>
                  <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

              </div>
            </div><!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<? echo $base; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<? echo $base; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<? echo $base; ?>dist/js/adminlte.min.js"></script>
</body>
</html>
