<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h3 class="card-title">Tabel Rekap Website</h3>
        </div>
        <div class="card-body border-bottom-primary">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center" width="400px">Domain</th>
                            <th class="text-center" width="400px">SKPD Pengelola</th>
                            <th class="text-center" width="400px">Nama Admin</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 0;
                        foreach ($website as $row) {
                            $no++; ?>

                            <tr>
                                <td class="text-center"><?php echo "$no" ?></td>
                                <td><a href="http://<?php echo $row->domain; ?>"><?php echo $row->domain ?></td>
                                <td><?php echo $row->skpd ?></td>
                                <td><?php echo $row->namaadminweb ?></td>

                            </tr>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>