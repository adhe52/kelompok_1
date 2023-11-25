<?php
defined('BASEPATH') or exit('No direct script allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Online</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-booking.css">
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        p {
            line-height: 15px;
        }

        li {
            padding-left: 30px;
        }

        button {
            padding-left: 50px;
        }

        td {
            padding-bottom: 10px;
        }
    </style>

<body background="assets/img/gedung.jpg" style="height : 100%">
    <div class="wrap">

        <img src="assets/img/merapi.jpg" width="800px" height="300px">
    </div>

    <div class="wrap" style="background-color:white">

        <form method="POST" action="<?php echo base_url('booking/submit_booking'); ?>" style="margin-top: 20px; margin-bottom: 20px;">
            <table width="682">
                <div class="form-group">
                    <h3 style="background-color: grey" align="center">Form Identitas Diri</h3>
                    <tr>
                        <td>Kode Booking</td>
                        <td>
                            <?php if (is_array($kd) && isset($kd['kode_booking'])) : ?>
                                <input type="text" name="unik" value="<?= $kd['kode_booking']; ?>" class="form-control" readonly>
                            <?php endif; ?>


                        </td>
                    </tr>

                    <tr>
                        <div class="col-lg-3">
                            <td>Nama Depan </td>
                            <td><input type="text" name="depan" class="form-control" required="required"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>Nama Belakang</td>
                            <td><input type="text" name="belakang" class="form-control"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>NIK</td>
                            <td><input type="text" name="nik" class="form-control" required="required"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>Alamat</td>
                            <td><textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" required="required">  </textarea></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>Jenis Kelamin</td>
                            <td>
                                <input type="radio" name="kelamin" value="Pria" />Pria
                                <input type="radio" name="kelamin" value="Wanita" />Wanita

                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>pekerjaan</td>
                            <td><input type="text" name="pekerjaan" class="form-control"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>No Telp</td>
                            <td><input type="text" name="tlp" class="form-control" required="required" style="padding-bottom: 10px;"></td>
                        </div>
                    </tr>
                    <td>
                        <tr>
                            <div class="col-lg-3">
                                <td>No Telp Darurat</td>
                                <td><input type="text" name="darurat" class="form-control" required="required"></td>
                            </div>
                        </tr>
                    </td>

            </table>

            <table width="499">
                <div class="form-group">
                    <h3 style="background-color: grey" align="center">Data Booking</h3>

                    <tr>
                        <td>Jalur Pendakian</td>
                        <td>
                            <select id="id_jalur" name="id_jalur" onchange="pilih_jalur()" required="required">
                                <option disabled="" selected="">--Pilih Jalur Pendakian--</option>
                                <?php foreach ($datajalur as $jalur) { ?>
                                    <option value="<?php echo $jalur['jalur']; ?>"><?php echo $jalur['jalur']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>Harga</td>
                            <td><input type="number" name="harga" id="harga" class="form-control" readonly placeholder="Silakan Pilih Jalur Pendakian"></td>
                        </div>
                    <tr>
                        <td>Anggota</td>
                        <td><input type="number" name="anggota" placeholder="Isi Jumlah Anggota" id="anggota" class="form-control" required="required"></td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Tanggal Pendakian</td>
                        <td><input type="date" name="tanggal" required="required"></td>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>Total Harga (Rp)</td>
                            <td><input type="text" step="any" min="0" name="tharga_rp" id="tharga_rp" value="Rp 0" class="form-control" readonly></td>
                        </div>
                    </tr>
                </div>
            </table>
            <br>
            <br>

            <u><b> Syarat dan ketentuan </b></u>
            <br>
            1. Lakukan pembayaran melalui bank yang tertera di E-Ticket sebelum waktu pendakian</br>
            2. Melakukan Re-Register di pos Simaksi dengan membawa E-Ticket dan bukti pembayaran
            <br>
            3. Pendaki di larang membawa barang barang sebagai berikut :</br>
            <li> Tissue Basah</li>
            <li> Obat Obatan Terlarang</li>
            <li> Minuman Keras</li>
            <li> zat kimia lainnya </li>
            <tr>4. Membawa obat obatan pribadi</tr>
            <br>
            5. Dilarang membuang sampah semabarangan dan membawa kembali sampah ke bank sampah</br>
            6. Dilarang memberi makan satwa
            <br>
            7. Dilarang memetik flora yang ada di gunung merbabu</br>
            </br>
            </br>
            <br>
            <button type="submit" name="submitbooking" class="btn btn-primary" align="center">Submit</button>
            <th>
                <a href="<?= base_url('web') ?>" class="btn btn-danger" type="submit">Kembali</a>

            </th>
            </br>
        </form>
    </div>
    <script type="text/javascript">
        function pilih_jalur() {
            var $id_jalur = $("#id_jalur").val();
            $.ajax({
                url: "<?php echo base_url() ?>index.php/booking/pilih_harga",
                data: "id_jalur=" + $id_jalur,
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $("#harga").val(data.price_j);
                    hitungTotalHarga(); // Memanggil fungsi hitungTotalHarga untuk mengupdate total harga
                }
            });
        }

        function formatRupiah(angka) {
            var number_string = angka.toString();
            var split = number_string.split(',');
            var sisa = split[0].length % 3;
            var rupiah = split[0].substr(0, sisa);
            var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                var separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return 'Rp ' + rupiah;
        }

        function hitungTotalHarga() {
            // Mendapatkan nilai dari input harga dan anggota
            var harga = parseFloat(document.getElementById('harga').value) || 0;
            var anggota = parseFloat(document.getElementById('anggota').value) || 0;

            // Melakukan perhitungan total harga
            var totalHarga = harga * anggota;

            // Menampilkan hasil perhitungan di input total harga dalam format mata uang
            document.getElementById('tharga_rp').value = formatRupiah(totalHarga);

            // Menampilkan hasil perhitungan di input total harga dalam format teks Bahasa Indonesia
            document.getElementById('tharga_terbilang').value = terbilang(totalHarga) + ' Rupiah';
        }

        // Memanggil fungsi updateTotalHarga saat nilai input harga atau anggota berubah
        document.getElementById('harga').addEventListener('input', hitungTotalHarga);
        document.getElementById('anggota').addEventListener('input', hitungTotalHarga);

        // Memanggil fungsi pilih_jalur() saat jalur berubah
        document.getElementById('id_jalur').addEventListener('change', pilih_jalur);
    </script>
</body>

</html>