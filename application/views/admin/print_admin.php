<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan Data Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <table align="center">
        <tbody>
            <tr>
                <td rowspan="5"><img src="/Siap/img/Lambang.png" width="100" height="130" style="margin-right: 15px;"></td>
                <td style="text-align: center; vertical-align:middle;" width="800px">
                    <h3>DINAS KOMUNIKASI DAN INFORMATIKA
                        <br>PEMERINTAH KOTA BANJARBARU</br>
                    </h3>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align:middle;">Jl. Pangeran Suriansyah Nomor 5 Loktabat Utara, Banjarbaru Utara</td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align:middle;">Kota Banjarbaru</td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align:middle;">Kalimantan Selatan 70711</td>
            </tr>
    </table>
    </head>

    <hr class="line-title">
    <p align="center"><b>LAPORAN DATA ADMIN</b></p>
    <table cellspacing="0" width="100%" border="1" cellspacing="0" cellpadding="3" align="center">
        <thead>
            <tr>
                <th class="col-sm text-center" style="width: 5px;">No</th>
                <th class="text-center">Nama Admin</th>
                <th class="text-center">No HP</th>
            </tr>
        </thead>
        <tbody>
            <div class="card-body">
                <?php
                $no = 1;
                foreach ($tabeladmin as $padm) : ?>
                    <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td><?php echo $padm->namaadminweb ?></td>
                        <td align="center"><?php echo $padm->nohpadminweb ?></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    <table border="0" align="right">
        <tbody>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Banjarbaru, <?= date('d-m-Y') ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center">Admin</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center">(.............................)</td>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>