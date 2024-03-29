<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Kategori</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo.png">
    <style type="text/css">
        .head {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        .body {
            border-collapse: collapse;
            border: 1px;
            border-color: black;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <center>
        <table class="head" width="625">
            <tr>
                <td><img src="<?= base_url(); ?>/assets/images/logo.png" width="90" height="90"></td>
                <td>
                    <center>
                        <!-- <font size="4">TOKO 73</font><br> -->
                        <font size="5"><b>PELABUHAN SIKAKAP MENTAWAI</b></font><br>
                        <font size="2">Alamat : Desa Sikakap, Kec. Pagai Selatan Kab. Kepulauan Mentawai</font><br>
                        <font size="2"><i>Email : sikakapmentawai@gmail.com Telp./Fax 0852-6322-7227</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <table width="625" class="head">
                <tr>
                    <td class="text2">Padang, <?= date("d M Y"); ?></td>
                </tr>
            </table>
        </table>
        <table class="head" style="margin-bottom: 20px;">
            <tr>
                <td>Laporan Data Kategori</td>
            </tr>
        </table>
        <table border="1" class="body" width="625">
            <thead>
                <tr style="height: 25px;">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Fasilitas</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($kategori as $row) : $no++ ?>
                    <tr style="height: 20px; text-align: center;">
                        <td> <?= $no; ?></td>
                        <td> <?= $row['kategoriNama']; ?></td>
                        <td> <?= $row['kategoriFasilitas']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table width="625" style="margin-top: 30px;">
            <tr style="text-align: right !important;">
                <td>Kepulauan Mentawai, <?= date("d M Y"); ?></td>
            </tr>
            <tr style="text-align: right !important;">
                <td>Pimpinan Pelabuhan</td>
            </tr>
            <tr style="text-align: right !important; height: 120px;">
                <td>(................................................)</td>
            </tr>
        </table>
    </center>
</body>

<script>
    window.print();
</script>

</html>