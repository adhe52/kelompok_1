<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: center;
            padding: 8px;
            border: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #eee;
        }

        /* Gaya untuk input text */
        .form-control.input-medium,
        .form-control.input-small,
        .form-control.input-large {
            border: none;
            border-radius: 5px;
            border-bottom: 2px solid #4CAF50;
            padding: 5px;
            margin: 5px 0;
            background-color: transparent;
            transition: border-bottom 0.3s;
            outline: none;
            /* Menghapus garis seleksi bawaan browser saat input aktif */
            display: inline-block;
        }

        .form-control.input-medium:hover,
        .form-control.input-small:hover,
        .form-control.input-large:hover,
        .form-control.input-medium:focus,
        .form-control.input-small:focus,
        .form-control.input-large:focus {
            border-bottom: 2px solid #45a049;
            /* Warna garis bawah saat input di-hover atau aktif */
        }

        /* Gaya untuk dropdown */
        /* Gaya untuk dropdown */
        .select-dropdown {
            position: relative;
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: none;
            border-radius: 20px;
            background-color: transparent;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
            outline: none;
            background-image: url('https://cdn.jsdelivr.net/gh/Google/material-design-icons/action/svg/production/ic_keyboard_arrow_down_48px.svg');
            background-repeat: no-repeat;
            background-position: right 10px center;
            transition: background-color 0.3s, color 0.3s;
        }

        .select-dropdown:hover,
        .select-dropdown:focus {
            border-color: #45a049;
            background-color: transparent;
        }

        .select-dropdown:active,
        .select-dropdown:checked {
            background-color: transparent;
            /* Menghilangkan glitch warna hijau saat diklik */
            color: white;
        }

        .input-small {
            width: 100px;
        }

        .input-medium {
            width: 125px;
        }

        .input-large {
            width: 170px;
        }

        input[type="date"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        /* Gaya untuk input type date saat dihover atau difokuskan */
        input[type="date"]:hover,
        input[type="date"]:focus {
            border-color: #45a049;
        }
    </style>
</head>

<section style="margin-left: 20px; margin-right: 10px;">
    <form method="POST" action="<?= base_url('Dashboard/saveData') ?>">
        <table class="table table-bordered table-hover">
            <tr bgcolor="#eee">
                <th width="50">kode</th>
                <th width="100">Nama Depan</th>
                <th width="100">Nama Belakang</th>
                <th width="150">NIK</th>
                <th width="100">No Telephone</th>
                <th width="50">Tanggal Pendakian</th>
                <th width="90">Jalur Pendakian</th>
                <th width="50">Schedule Turun</th>
            </tr>

            <?php for ($i = 1; $i <= $jum; $i++) : ?>
                <tr>
                    <td><input type='text' name='kode_booking[]' class='form-control input-medium' size='10' required></td>
                    <td><input type='text' name='nama[]' class='form-control input-small' size='10' required></td>
                    <td><input type='text' name='nbelakang[]' class='form-control input-small' size='10' required></td>
                    <td><input type='text' name='nik[]' class='form-control input-large' size='15' required></td>
                    <td><input type='text' name='telp[]' class='form-control input-medium' size='15' required></td>
                    <td><input type='date' name='tanggal[]' class='form-control input-medium' required></td>
                    <td>
                        <select name='lokasi[]' class='form-control input-medium select-dropdown' required>
                            <option value='Selo'>Selo</option>
                            <option value='Suwanting'>Suwanting</option>
                            <option value='Wekas'>Wekas</option>
                            <option value='Cuntel'>Cuntel</option>
                            <option value='Thekelan'>Thekelan</option>
                        </select>
                    </td>
                    <td><input type='date' name='schedule[]' class='form-control input-medium' required></td>
                </tr>
            <?php endfor; ?>

        </table>
        <input type="hidden" name="jum" value="<?= $jum; ?>">
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </form>
</section>

</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

<!-- /.content -->
</div>