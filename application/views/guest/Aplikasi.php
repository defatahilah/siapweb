<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h3 class="card-title">Tabel Rekap Aplikasi</h3>
        </div>

        <div class="card-body border-bottom-primary">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center" width="400px">Aplikasi</th>
                            <th class="text-center" width="400px">Sektor</th>
                            <th class="text-center" width="400px">SKPD Pengelola</th>
                            <th class="text-center" width="400px">Status</th>
                            <th class="text-center" width="400px">Fungsi</th>
                            <th class="text-center" width="400px">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($aplikasi as $apk) {
                            $no++; ?>
                            <tr>
                                <td class="text-center"><?php echo "$no" ?></td>
                                <td><a href="http://<?php echo $apk->link; ?>"><?php echo $apk->aplikasi ?></td>
                                <td><?php echo $apk->sektor ?></td>
                                <td><?php echo $apk->skpdapp ?></td>
                                <td><?php echo $apk->status ?></td>
                                <td><?php echo $apk->fungsiapp ?></td>
                                <td><?php echo $apk->kategoriapp ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>