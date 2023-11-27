view nya

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Memuat Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Summernote CSS dan JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" integrity="sha384-RCFNf08DDCWN4rFCaP0/P6FTGp02tV0F65JFH05rr3Nw8q+akVjl6dx4PGsM6aBx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js" integrity="sha384-DgSO07JbM0vbDDKvphYcPd8z+Z3V7dAjrCOj2pGqv7+IIhO1neI2WvMVa+86OW7B" crossorigin="anonymous"></script>

    <style>
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

        .checkout form {
            display: inline-block;
            margin: 0;
        }

        .btn-turun {
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
            size: auto;
        }

        .btn-turun:hover {
            background-color: #45a049;
        }

        .input-group-append button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .input-group-append button:hover {
            background-color: #45a049;
        }

        /* styles.css */
        .btn-turun-modal {
            background-color: #ff0000;
            /* Ganti dengan warna latar merah yang diinginkan */
            color: white;
            padding: 8px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s;
            border: none;
        }

        .btn-turun-modal:hover {
            background-color: #cc0000;
            /* Warna latar saat tombol di-hover */
        }
    </style>

    </styl.checkout>

</head>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3> <?= isset($jml_pendaki_naik[0]['JumlahNaik']) ? $jml_pendaki_naik[0]['JumlahNaik'] : '0' ?><sup style="font-size: 20px"></sup> Orang</h3>
                        <p>Pendaki Naik</p>
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
                <h3 class="card-title">Daftar Pendaki Naik</h3>
            </div>
            <form method="get" action="<?= base_url('dashboard/searchNaik') ?>">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan Kode Pendakian">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr bgcolor="#eee"><b>
                                <th>No</th>
                                <th>Kode Pendakian</th>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>NIK</th>
                                <th>No Telepohone</th>
                                <th>Tanggal Pendakian</th>
                                <th>Jalur Pendakian</th>
                                <th>Schedule Turun</th>

                                <td>Action</td>
                            </b>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($PendakiNaik as $p) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <input type="text" name="kode" value="<?= $p['kode'] ?>" size="3" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="nama" value="<?= $p['nama'] ?>" size="5" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="belakang" value="<?= $p['belakang'] ?>" size="5" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="nik" value="<?= $p['nik'] ?>" size="9" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="telp" value="<?= $p['telepon'] ?>" size="5" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="tanggal" value="<?= $p['tanggal'] ?>" size="3" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="jalur" value="<?= $p['jalur'] ?>" size="1" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="schedule" value="<?= $p['schedule'] ?>" size="3" readonly class="form-control">
                                </td>
                                <td>
                                    <div class="checkout">
                                        <?php
                                        // Mendapatkan tanggal sekarang dan tanggal pada schedule
                                        $tanggalSekarang = date('Y-m-d');
                                        $tanggalSchedule = $p['schedule'];

                                        // Memeriksa apakah tanggal pada schedule sudah melewati tanggal sekarang
                                        if (strtotime($tanggalSchedule) < strtotime($tanggalSekarang)) {
                                            // Tampilkan modal
                                            echo '<button type="button" class="btn-turun-modal" data-toggle="modal" data-target="#myModal">Check Out</button>';
                                        } else {
                                            // Jika belum melewati, gunakan tombol Check Out biasa
                                            echo '<form method="post" action="' . base_url("dashboard/checkOut/{$p['id']}") . '">';
                                            echo '<input type="hidden" name="idm" value="' . $p['id'] . '">';
                                            echo '<button type="submit" class="btn-turun btn-primary" name="turuntombol">Check Out</button>';
                                            echo '</form>';
                                        }
                                        ?> </div>
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
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tanggal turun telah lewat!</p>
            </div>
            <div class="modal-footer">
                <!-- Tombol untuk Overstay -->
                <button type="button" class="btn btn-danger" onclick="handleOverlay('<?= $p['id'] ?>')">Overlay</button>

                <!-- Tombol untuk Accident -->
                <button type="button" class="btn btn-warning" onclick="handleAccident()">Accident</button>

                <!-- Tombol untuk Menutup Modal -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>
<script>
    function handleOverlay(idPendaki) {
        // Redirect langsung ke URL "Check Out" dengan mengirimkan ID pendaki
        window.location.href = '<?= base_url('dashboard/checkOut/') ?>' + idPendaki;
    }
</script>


</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

<!-- /.content -->
</div>