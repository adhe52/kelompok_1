<head>
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
                                    <input type="text" name="nik" value="<?= $p['nik'] ?>" size="5" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="telp" value="<?= $p['telepon'] ?>" size="5" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="tanggal" value="<?= $p['tanggal'] ?>" size="3" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="jalur" value="<?= $p['jalur'] ?>" size="3" readonly class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="schedule" value="<?= $p['schedule'] ?>" size="3" readonly class="form-control">
                                </td>
                                <td>
                                    <div class="checkout">
                                        <form method="post" action="<?= base_url("dashboard/checkOut/{$p['id']}") ?>">
                                            <input type="hidden" name="idm" value="<?= $p['id'] ?>">
                                            <button type="submit" class="btn-turun btn-primary" name="turuntombol">Check Out</button>
                                        </form>
                                    </div>
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
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

<!-- /.content -->
</div>