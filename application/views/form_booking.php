<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Online</title>
    <link rel="stylesheet" href="assets/css/style-booking.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
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
    </style>

<body background="assets/img/gedung.jpg" style="height : 100%">
    <div class="wrap">

        <img src="assets/img/merapi.jpg" width="800px" height="300px">
    </div>

    <div class="wrap" style="background-color:white">

        <form method="POST">
            <table width="682">
                <div class="form-group">
                    <h3 style="background-color:grey" align="center">Form Identitas Diri</h3>
                    <tr>
                        <td>Kode Booking</td>
                        <td>
                            <?php
                            $id = mysqli_query($conn, "select max(id) as maxID from booking");
                            $datakode = mysqli_fetch_array($id);

                            $kodebooking = $datakode['maxID'];

                            $kodebooking++;
                            $ket = date("Ymd");
                            $kodeauto = $ket . sprintf("%03s", $kodebooking);

                            ?>
                            <input type="text" name="unik" value="<?= $kodeauto; ?>" class="form-control" readonly>

                        </td>
                    </tr>

                    <tr>
                        <div class="col-lg-3">
                            <td>Nama Depan</td>
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
                            <td><input type="text" name="tlp" class="form-control" required="required"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="col-lg-3">
                            <td>No Telp Darurat</td>
                            <td><input type="text" name="darurat" class="form-control" required="required"></td>
                        </div>
                    </tr>

            </table>

            <table width="499">
                <div class="form-group">
                    <h3 style="background-color: greyh" align="center">Data Booking</h3>

                    <tr>
                        <td>Jalur Pendakian</td>
                        <td>
                            <select id="pilih" name="pilih" onchange="changeValue(this.value) " required="required">
                                <option disabled="" selected="">Pilih</option>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM harga");
                                $jsArray = "var prdName = new Array();\n";
                                while ($data = mysqli_fetch_array($sql)) {

                                    echo '<option value="' . $data['jalur'] . '">' . $data['jalur'] . '</option> ';
                                    $jsArray .= "prdName['" . $data['jalur'] . "'] = {harga:'" . addslashes($data['price']) . "'};\n";
                                }
                                ?>
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
                            <td>Total Harga</td>
                            <td><input type="text" step="any" min="0" name="tharga" id="tharga" value="0" class="form-control" readonly></td>
                        </div>
                    </tr>

                </div>
            </table>
            <br>
            <br>

            <tr><u><b> Syarat dan ketentuan </b></u></tr>
            <br>
            <tr>1. Lakukan pembayaran melalui bank yang tertera di E-Ticket sebelum waktu pendakian</tr></br>
            <tr>2. Melakukan Re-Register di pos Simaksi dengan membawa E-Ticket dan bukti pembayaran</tr>
            <br>
            <tr>3. Pendaki di larang membawa barang barang sebagai berikut :</tr></br>
            <li> Tissue Basah</li>
            <li> Obat Obatan Terlarang</li>
            <li> Minuman Keras</li>
            <li> zat kimia lainnya </li>
            <tr>4. Membawa obat obatan pribadi</tr>
            <br>
            <tr>5. Dilarang membuang sampah semabarangan dan membawa kembali sampah ke bank sampah</tr></br>
            <tr>6. Dilarang memberi makan satwa</tr>
            <br>
            <tr>7. Dilarang memetik flora yang ada di gunung merbabu</tr></br>
            </br>
            </br>
            <br>
            <button type="submit" name="submitbooking" class="btn btn-primary" align="center">Submit</button>
            <th>
                <a href="<?php echo base_url('web') ?>" class="btn btn-danger" type="submit">Kembali</a>
            </th>
            </br>

    </div>



    </form>
    </div>
    </div>
    <script type="text/javascript">
        <?php echo $jsArray; ?>

        function changeValue(x) {
            document.getElementById('harga').value = prdName[x].harga;
        };
        $("#harga").keyup(function() {
            var a = parseInt($("#harga").val());
            var b = parseInt($("#anggota").val());
            var c = a * b;
            $("#total").val(c);
        });

        $("#anggota").keyup(function() {
            var a = parseInt($("#harga").val());
            var b = parseInt($("#anggota").val());
            var c = a * b;
            $("#tharga").val(c);
        });
    </script>


</body>

</html>