<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>back/../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>back/../../dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
                    <form method="post" action="<?= base_url('Dashboard/FormAccident') ?>">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="kode">Kode Booking Pendaki</label>
                                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode Booking Pendaki">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama Pendaki</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pendaki">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="kode">NIK Pendaki</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan Kode Booking Pendaki">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama">Telephone Pendaki</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nama Pendaki">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Tanggal Mendaki</label>
                                    <input type="date" class="form-control " id="tanggal" name="tanggal" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Schedule Turun</label>
                                    <input type="date" class="form-control" id="schedule" name="schedule" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Pos Turun</label>
                                    <input type="password" class="form-control " id="jalur" name="jalur" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Status Accident</label>
                                    <select name="status" class="form-control">
                                        <option value="None">--Pilih Status Accident--</option>
                                        <option value="Turun">Sakit</option>
                                        <option value="Sakit">Meninggal</option>
                                        <option value="Hilang">Hilang</option>
                                    </select>

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