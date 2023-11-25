<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Operational</title>
    <!--gambar icon-->

    <link rel="icon" type="image/jpg" href="assetss/img/merbabu.jpg">

    <!-- Custom fonts for this template-->
    <link href="assetss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assetss/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
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

        .red-button {
            background-color: red !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard Operational </div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                Operation
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="regisulang.php">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Re-Register</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="naik.php">
                    <i class="fas fa-angle-double-up"></i>
                    <span>List Pendaki Naik</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="turun.php">
                    <i class="fas fa-angle-double-down"></i>
                    <span>List Pendaki Turun</span></a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <img src="assetss/img/merbabu.jpg" alt="" width="50px" height="60px">


                    <ul class="navbar-nav ml-auto">






                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Logout </span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <marquee>-- selamat datang di aplikasi operational pendakian taman nasional gunung merbabu --</marquee>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h3 font-weight-bold text-info text-uppercase mb-1">Pendaftar Online
                                            </div>
                                            <div class="h5 mt-3 font-weight-bold">
                                                <?= isset($jml_pendaftar[0]['JumlahDaftar']) ? $jml_pendaftar[0]['JumlahDaftar'] : '0' ?> orang
                                            </div>
                                            <div class="row no-gutters align-items-center">

                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300" style="font-size :90px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h3 font-weight-bold text-success text-uppercase mb-1">Pendaki Naik
                                            </div>
                                            <div class="h5 mt-3 font-weight-bold">
                                                <?= isset($jml_pendaki_naik[0]['JumlahNaik']) ? $jml_pendaki_naik[0]['JumlahNaik'] : '0' ?> orang
                                            </div>
                                            <div class="row no-gutters align-items-center">

                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300" style="font-size :90px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-3">
                    <h2 class="text-gray-800">Daftar Pendaftar</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <tr bgcolor="#eee"><b>
                                        <td>No</td>
                                        <td>Kode Booking</td>
                                        <td>Nama Pendaftar</td>
                                        <td>Nama Belakang</td>
                                        <td>Nik</td>
                                        <td>Jumlah Anggota</td>
                                        <td>Jalur Pendakian</td>

                                        <td>Action</td>
                                    </b>
                                </tr>

                                <?php
                                $no = 1;
                                foreach ($all_pendaftar as $p) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['kode'] ?></td>
                                        <td><?= $p['nama_depan'] ?></td>
                                        <td><?= $p['nama_belakang'] ?></td>
                                        <td><?= $p['nik'] ?></td>
                                        <td><?= $p['anggota'] ?></td>
                                        <td><?= $p['jalur'] ?></td>
                                        <td>
                                            <button id="checkInBtn_<?= $p['kode'] ?>" class="btn btn-primary check-in-btn" data-kode="<?= $p['kode'] ?>" onclick="handleCheckIn(this)">Check In</button>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </table>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 3</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url("Admin/logout"); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assetss/vendor/jquery/jquery.min.js"></script>
    <script src="assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assetss/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assetss/js/sb-admin-2.min.js"></script>
    <script>
        function handleCheckIn(button) {
            var kodePendaftar = button.getAttribute('data-kode');

            // Cek apakah cookie sudah ada (tombol pernah diklik sebelumnya)
            var isButtonClicked = document.cookie.indexOf('checkInClicked_' + kodePendaftar) !== -1;

            if (!isButtonClicked) {
                // Menambahkan kelas untuk mengubah warna tombol menjadi merah
                button.classList.add('red-button');

                // Menonaktifkan tombol setelah diklik (opsional)
                button.disabled = true;

                // Set cookie untuk menandai bahwa tombol ini sudah diklik
                document.cookie = 'checkInClicked_' + kodePendaftar + '=true';

                // Mengarahkan ke halaman regisulang.php dengan parameter kode
                window.location.href = 'regisulang.php?kode=' + kodePendaftar;
            } else {
                // Tombol sudah diklik sebelumnya, lakukan tindakan yang sesuai
                alert("Anda sudah melakukan Check In sebelumnya.");
            }
        }
    </script>

</body>

</html>