<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>back/../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>back/../../dist/css/adminlte.min.css">
</head>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
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
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pos Turun</label>
                                <input type="password" class="form-control col-md-6" id="jalur" name="jalur" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ambilDataModal">
                                Ambil Data
                            </button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="modal fade" id="ambilDataModal" tabindex="-1" role="dialog" aria-labelledby="ambilDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ambilDataModalLabel">Data dari Database</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Tempat untuk menampilkan data dari database -->
                    <!-- Anda dapat menambahkan tabel atau elemen lain sesuai kebutuhan -->
                    <div id="dataFromDatabase"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- ... (kode lainnya) ... -->
<script>
    $(document).ready(function() {
        // Fungsi untuk menangani klik tombol "Ambil Data"
        $('#ambilDataModal').on('show.bs.modal', function(event) {
            // Simulasi pengambilan data dari database (gantilah dengan logika pengambilan data sebenarnya)
            var dataDariDatabase = {
                kode: '12345',
                nama: 'John Doe',
                nik: '67890',
                telepon: '08123456789',
                tanggal: '2023-11-26',
                schedule: '2023-11-27',
                jalur: 'Pos 1',
                checked: true
            };

            // Menampilkan data dalam modal
            var modalBody = $('#ambilDataModal').find('.modal-body');
            modalBody.html('<p><strong>Kode Booking Pendaki:</strong> ' + dataDariDatabase.kode + '</p>' +
                '<p><strong>Nama Pendaki:</strong> ' + dataDariDatabase.nama + '</p>' +
                '<p><strong>NIK Pendaki:</strong> ' + dataDariDatabase.nik + '</p>' +
                '<p><strong>Telephone Pendaki:</strong> ' + dataDariDatabase.telepon + '</p>' +
                '<p><strong>Tanggal Mendaki:</strong> ' + dataDariDatabase.tanggal + '</p>' +
                '<p><strong>Schedule Turun:</strong> ' + dataDariDatabase.schedule + '</p>' +
                '<p><strong>Pos Turun:</strong> ' + dataDariDatabase.jalur + '</p>' +
                '<p><strong>Check me out:</strong> ' + (dataDariDatabase.checked ? 'Ya' : 'Tidak') + '</p>');
        });
    });
</script>

</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

<!-- /.content -->
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>