<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>
    <link rel="icon" type="image/jpg" href="<?= base_url() ?>assetss/img/merbabu.jpg">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>back/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>back/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>back/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>back/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>back/plugins/summernote/summernote-bs4.min.css">
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        img {
            margin-right: 1000px;
            margin-left: 20px;
        }

        marquee {
            width: 100%;
            text-transform: uppercase;
            color: blue;
            white-space: nowrap;
            display: inline-block;
            animation: animate 5s linier infinite;

        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <img src="<?= base_url() ?>assetss/img/merbabu.jpg" alt="" width="50px" height="60px">
            <!-- Right navbar links -->



        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url() ?>back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url("Dashboard") ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url("Dashboard/PendaftarPages") ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pendaftar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Dashboard/Simaksi') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simaksi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Dashboard/DashboardNaik') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pendaki Naik</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Dashboard/DashboardTurun') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pendaki Turun</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Dashboard/FormAccident') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Form Accident</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Dashboard/DashboardAccident') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard Accident</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('Dashboard/regis') ?>" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Registasi Akun

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Dashboard/kelompok') ?>" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Anggota Kelompok

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Admin/logout') ?>" class="nav-link">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <p>
                                    Logout

                                </p>
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
                    <marquee>-- selamat datang di aplikasi operational pendakian taman nasional gunung merbabu --</marquee>

                    <div class="row mb-2">
                        <div class="col-sm-6">

                            <h1 class="m-0" style="margin-bottom: 10%;">Dashboard</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->