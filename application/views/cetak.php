<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Online</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-booking.css">
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/js/jquery.js"></script>
    <title>Cetak Hasil Booking</title>
    <style type="text/css" media="print">
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .wrap {
            max-width: auto;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            text-align: center;
        }

        hr {
            border: 1px solid #eee;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }

        .payment-info img {
            max-width: 100px;
            height: auto;
            margin: 10px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
        }

        .btn-back {
            display: none !important;
            margin-top: 20px;
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-back:hover {
            background-color: #c9302c;
        }

        @media print {
            #btnKembali {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="wrap">

        <img src="<?= base_url() ?>assetss/img/merbabu.jpg" alt="" width="160px" height="150px" align="left" style="margin-left: 15px;">

        <center>
            <h1>E- Ticket Pendakian</h1>
        </center>
        <center>
            <h2>Taman Nasional Gunung Merbabu</h2>
        </center>
        <hr width="100%" height='1px' color="#eeee" size="10">
        <br>
        <tr>Ini adalah E-Ticket Pembayaran dengan calon Pendaki Sebagai Berikut :</tr>
        <table class="table table-hover">
            <thead>
                <tr>

                    <th>Kode Booking</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>No HP</th>
                    <th>Jalur Pendakian</th>
                    <th>Jumlah Anggota</th>
                    <th>Tanggal</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menggunakan $this->uri->segment() untuk mengambil nilai parameter id dari URL
                $parameter = $this->uri->segment(3);

                // koneksi database (Gunakan cara CodeIgniter untuk melakukan koneksi)
                $koneksi = $this->db->conn_id;

                // Query menggunakan where dengan id yang diambil dari parameter id dari URL
                $data = mysqli_query($koneksi, "SELECT * FROM booking WHERE id=" . $parameter);

                // Periksa apakah query berhasil atau tidak
                if ($data) {
                    while ($d = mysqli_fetch_array($data)) {
                ?>
                        <tr>
                            <td><?php echo $d['kode']; ?></td>
                            <td><?php echo $d['nama_depan']; ?></td>
                            <td><?php echo $d['nama_belakang']; ?></td>
                            <td><?php echo $d['telp']; ?> </td>
                            <td><?php echo $d['jalur']; ?> </td>
                            <td><?php echo $d['anggota']; ?> </td>
                            <td><?php echo $d['tanggal']; ?> </td>
                            <td><?php echo $d['total_harga']; ?> </td>
                        </tr>
                <?php
                    }
                } else {
                    // Menampilkan pesan error jika query gagal
                    echo $this->db->error();
                }
                ?>
            </tbody>

        </table>

        <br>
        <tr>
            Silakan lakukan pembayaran melalui melalui rekening di bawah ini :
        </tr>
        <br>
        <br>
        <tr>
            <td>
                <img src="<?= base_url() ?>assetss/img/BCA.jpg" alt="" width="100px" height="80px">
            </td>
        </tr>
        <th>

            <b>Rek : 17277710 A/N KELOMPOK 3</b>

        </th>
        <br>
        <br>
        <tr>
            Pendaki Wajib Membawa Bukti Pembayaran, E-Ticket dan KTP setiap anggota saat melakukan regristrasi ulang di POS Simaksi
        </tr>
        <br>
        <br>
        <tr>
            Hormat Kami,
        </tr>
        <br>
        <br>
        <tr>
            Penanggung Jawab Taman Nasional Gunung Merbabu
        </tr>
        <br>
        <br>
        <br>
        <center>
            <h2>----- Salam Lestari -----</h2>
        </center>



        <script>
            window.print();
        </script>
    </div>
</body>
<br>
<div class="text-center mt-3">
    <button class="btn btn-danger btn-print" id="btnKembali">Kembali</button>


</div>
<script>
    document.getElementById('btnKembali').addEventListener('click', function() {
        // Menggunakan window.location.href untuk mengarahkan ke controller web
        window.location.href = '<?= base_url('web') ?>';
    });
</script>


</html>