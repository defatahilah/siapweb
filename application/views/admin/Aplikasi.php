<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-danger">
            <h3 class="card-title">Tabel Rekap Aplikasi</h3>
        </div>
        <div class="card-body border-bottom-danger">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card-body"><a class="btn btn-outline-danger mb-3 border-left-danger" href="<?php echo base_url('C_Admin/Aplikasi/print') ?>">
                    <i class="fa fa-print  fa-fw"></i>Print PDF</a>

                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aplikasi</th>
                                <th class="text-center">Sektor</th>
                                <th class="text-center">SKPD Pengelola</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Fungsi</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Aksi</th>

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
                                    <td class="text-center">
                                        <a href="<?php echo site_url('Edit_Aplikasi/' . $apk->id) ?>">
                                            <div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>
                                        </a>
                                        <a href="<?php echo site_url('C_Admin/aplikasi/hapus_aplikasi_aksi/' . $apk->id) ?>">
                                            <div class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?');"><i class="fas fa-trash"></i></div>
                                        </a>
                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>