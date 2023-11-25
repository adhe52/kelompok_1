<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>

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

        .btn {
            background-color: #338AFF;
            color: white;
            padding: 8px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 20px;
            /* Ubah ke nilai yang sesuai */
            transition: background-color 0.3s;
            border: none;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3> <?= isset($jml_pendaftar[0]['JumlahDaftar']) ? $jml_pendaftar[0]['JumlahDaftar'] : '0' ?></h3>

                        <p>Pendaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>

                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 40px">no</th>
                            <th style="width: 40px">Kode Booking</th>
                            <th style="width: 40px">Nama Depan</th>
                            <th style="width: 40px">Nama Belakang</th>
                            <th style="width: 40px">NIK</th>
                            <th style="width: 40px">Jumlah Anggota</th>
                            <th style="width: 40px">Jalur Pendakian</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
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

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->

<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
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
            window.location.href = '<?= base_url() ?>Dashboard/Simaksi?kode=' + kodePendaftar;
        } else {
            // Tombol sudah diklik sebelumnya, lakukan tindakan yang sesuai
            alert("Anda sudah melakukan Check In sebelumnya.");
        }
    }
</script>