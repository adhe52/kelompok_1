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
    <!-- Modifikasi modal -->
    <div class="modal fade" id="ambilDataModal" tabindex="-1" role="dialog" aria-labelledby="ambilDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ambilDataModalLabel">Ambil Data dari Database</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Input dan Tombol Cari -->
                    <div class="form-group">
                        <label for="cariNamaKode">Cari Nama/Kode Booking</label>
                        <input type="text" class="form-control" name="input" id="cariNamaKode" placeholder="Masukkan Nama/Kode Booking">
                    </div>
                    <button type="button" class="btn btn-primary" id="btnCari">Cari</button>

                    <!-- Tabel untuk Menampilkan Data -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Booking</th>
                                <th>Nama Pendaki</th>
                                <th>NIK Pendaki</th>

                            </tr>
                        </thead>
                        <tbody id="tabelDataBody">
                            <!-- Tempat untuk menampilkan data dari database -->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Event handler untuk tombol Cari
            $('#btnCari').on('click', function() {
                // Ambil data dari input
                const input = $('#cariNamaKode').val();

                // Panggil fungsi getDataByNamaKode() di controller
                $.ajax({
                    url: 'Dashboard/ModelAmbil',
                    data: {
                        input: input
                    },
                    type: 'post',
                    success: function(data) {
                        // Tampilkan data yang ditemukan
                        const table = $('#tabelDataBody');
                        table.empty(); // Kosongkan isi tabel sebelum menambahkan data baru

                        for (const row of data) {
                            const tr = $('<tr>').html(`
                        <td>${row.kode}</td>
                        <td>${row.nama}</td>
                        <td>${row.nik}</td>
                    `);
                            table.append(tr);
                        }

                        // Buka modal
                        $('#ambilDataModal').modal('show');
                    }
                });
            });
        });
    </script>

</section>