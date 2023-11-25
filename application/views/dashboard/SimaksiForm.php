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
        hr {
            border: 1px solid #ddd;
            margin-top: 20px;
        }

        .table-bordered {
            border: 1px solid #ddd;
        }

        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
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
    </style>
</head>
<section>
    <hr class="mt-3">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="<?= base_url('Dashboard/processForm') ?>">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Masukan Jumlah Anggota : </td>
                        <td>
                            <input type="text" name="jum" size="10">
                            <input type="submit" name="submitanggota" value="Proses" class="btn btn-primary">


                        </td>

                    </tr>


                </table>
                <?php echo form_error('jum', '<span class="text-danger">', '</span>'); ?>
            </form>

        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</section>