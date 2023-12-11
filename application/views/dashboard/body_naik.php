<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets\js\custom.js') ?>"></script>
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

        .btn-turun-merah {
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

        .btn-turun-merah:hover {
            background-color: #cc0000;
            /* Warna latar saat tombol di-hover */
        }
    </style>

    </styl.checkout>
    <script>
        function handleOverlay(idPendaki) {
            // Lakukan AJAX untuk memanggil fungsi handleOverlay pada controller
            $.ajax({
                url: '<?= base_url('dashboard/handleOverlay') ?>',
                method: 'POST',
                data: {
                    idPendaki: idPendaki
                },
                success: function(response) {
                    // Respon dari server (jika diperlukan)
                    console.log(response);
                    // Refresh halaman setelah operasi selesai
                    location.reload();
                },
                error: function(error) {
                    // Tangani kesalahan (jika ada)
                    console.error(error);
                }
            });
        }
    </script>

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
                                <th>Nama </th>
                                <th>NIK</th>
                                <th>No HP</th>
                                <th>Tgl Mendaki</th>
                                <th>Jalur</th>
                                <th>Tgl Turun</th>
                                <th>Action</th>
                                <th>Status</th>
                                <th>Accident</th>
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
                                    <?php
                                    // Mendapatkan tanggal sekarang dan tanggal pada schedule
                                    $tanggalSekarang = date('Y-m-d');
                                    $tanggalSchedule = $p['schedule'];

                                    // Memeriksa apakah tanggal pada schedule sudah melewati tanggal sekarang
                                    if (strtotime($tanggalSchedule) < strtotime($tanggalSekarang)) {
                                        // Tampilkan tombol Check Out dengan warna merah
                                        echo '<form method="post" action="' . base_url("dashboard/checkOut/{$p['id']}") . '">';
                                        echo '<input type="hidden" name="idm" value="' . $p['id'] . '">';
                                        echo '<button type="submit" class="btn-turun-modal btn-turun-merah" name="turuntombol">Turun</button>';
                                        echo '</form>';
                                    } else {
                                        // Jika belum melewati, gunakan tombol Check Out biasa
                                        echo '<form method="post" action="' . base_url("dashboard/checkOut/{$p['id']}") . '">';
                                        echo '<input type="hidden" name="idm" value="' . $p['id'] . '">';
                                        echo '<button type="submit" class="btn-turun btn-primary" name="turuntombol">Turun</button>';
                                        echo '</form>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <form method="post" action="<?= base_url("dashboard/handleAccident/{$p['id']}") ?>">
                                        <input type="hidden" name="idm" value="<?= $p['id'] ?>">
                                        <select name="status" class="form-control">
                                            <option value="Turun">Sakit</option>
                                            <option value="Sakit">Meninggal</option>
                                            <option value="Hilang">Hilang</option>
                                        </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn-turun-merah btn-danger" name="accidenttombol">Accident</button>
                                    </form>
                                </td>
                            </tr>
            </div>


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




</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

<!-- /.content -->
</div>