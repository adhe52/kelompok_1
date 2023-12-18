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

        .form-control {
            border: none;
            border-bottom: 2px solid #4CAF50;
            /* Warna garis bawah saat input aktif */
            padding: 5px;
            margin: 2px;
            background-color: transparent;
            /* Hapus background agar terlihat lebih bersih */
            transition: border-bottom 0.3s;
        }

        .form-control:hover,
        .form-control:focus {
            border-bottom: 2px solid #45a049;
            /* Warna garis bawah saat input di-hover atau aktif */
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

        .btn-delete {
            background-color: red;
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

        .btn-delete:hover {
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
                <h3 class="card-title">Daftar Pendaftaran Online</h3>
            </div>
            <form method="get" action="<?= base_url('dashboard/searchDaftar') ?>">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan Kode Pendaftaran">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 40px">no</th>
                            <th style="width: 120px">Kode Booking</th>
                            <th style="width: 150px">Nama Pendaki</th>
                            <th style="width: 70px">NIK</th>
                            <th style="width: 70px">Telepon</th>
                            <th style="width: 50px">Anggota</th>
                            <th style="width: 120px">Jalur Pendakian</th>
                            <th style="width: 70px">Tgl Pendakian</th>
                            <th style="width: 150px">Action</th>
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
                                <td><?= $p['nik'] ?></td>
                                <td><?= $p['telp'] ?></td>
                                <td><?= $p['anggota'] ?></td>
                                <td><?= $p['jalur'] ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td>

                                    <button id="checkInBtn_<?= $p['id'] ?>" class="btn btn-primary check-in-btn" data-kode="<?= $p['id'] ?>" onclick="handleCheckIn(this, '<?= $p['tanggal'] ?>')">Check In</button>
                                    <button class="btn-delete " onclick="handleDelete('<?= $p['id'] ?>')">Hapus</button>

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

<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?= base_url() ?>assetss/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assetss/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assetss/js/sb-admin-2.min.js"></script>
<script>
    function handleCheckIn(button, tanggalPendakian) {
        var kodePendaftar = button.getAttribute('data-kode');

        // Mengubah format tanggal menjadi sesuai dengan objek Date di JavaScript (misalnya: YYYY-MM-DD)
        var formattedTanggal = tanggalPendakian.replace(/(\d{2})\/(\d{2})\/(\d{4})/, '$3-$1-$2');

        // Mengambil tanggal pendakian dari baris data terkait
        var tanggalPendakianDate = new Date(formattedTanggal);

        // Mengambil tanggal saat ini
        var tanggalSaatIni = new Date();

        // Memeriksa apakah tanggal pendakian sudah melewati tanggal saat ini
        if (tanggalPendakianDate < tanggalSaatIni) {
            // Jika ya, ubah warna tombol menjadi merah
            button.classList.remove('btn-primary');
            button.classList.add('btn-danger');
        }

        // Tambahkan AJAX request untuk menghapus data dari database
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Dashboard/daftar/" + kodePendaftar,
            success: function(response) {
                // Handle response dari server setelah menghapus data
                console.log(response);

                // Mengarahkan ke halaman regisulang.php dengan parameter kode
                window.location.href = '<?= base_url() ?>Dashboard/Simaksi?kode=' + kodePendaftar;
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }




    function handleDelete(kode) {
        // Tambahkan logika AJAX untuk penghapusan data
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Dashboard/hapus/" + kode,
            success: function(response) {
                // Setelah penghapusan berhasil, perbarui tampilan atau reload halaman
                location.reload();
            }
        });
    }
</script>