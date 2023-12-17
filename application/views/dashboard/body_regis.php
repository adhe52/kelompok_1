<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>back/../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>back/../../dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Fungsi untuk menyembunyikan notifikasi setelah 10 detik
        function hideNotification() {
            $(".alert").fadeOut(500); // Fade out selama 1 detik
        }

        // Panggil fungsi hideNotification setelah 10 detik (10000 milidetik)
        setTimeout(hideNotification, 500);
    </script>

</head>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Isi data pendaki</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="<?= base_url('Dashboard/SaveRegis') ?>">
                        <!-- Tampilkan notifikasi jika ada -->
                        <?php
                        if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        }
                        ?>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email Anggota</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anggota" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama Anggota</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Ketikan Nama Anggota" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nim">NIM Anggota</label>
                                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Ketikan NIM ANggota" required="required">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control " id="alamat" name="alamat" placeholder="Masukan Alamat" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telp">Telepon</label>
                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Ketikan Telepon Anggota" required="required">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- Modifikasi modal -->
</section>
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

<!-- /.content -->
</div>