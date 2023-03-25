<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-danger">
            <h3 class="card-title">Tabel Rekap Website</h3>
        </div>
        <div class="card-body border-bottom-danger">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card-body"><a class="btn btn-outline-danger mb-3 border-left-danger" href="<?php echo base_url('C_Admin/Website/print') ?>">
                    <i class="fa fa-print fa-fw"></i>Print PDF</a>

                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Domain</th>
                                <th class="text-center">SKPD Pengelola</th>
                                <th class="text-center">Nama Admin</th>
                                <th class="text-center">No HP</th>
                                <th class="text-center">Aksi</th>

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
                                    <td><?php echo $row->nohpadminweb ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo site_url('Edit_Website/' . $row->id) ?>">
                                            <div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>
                                        </a>
                                        <a href="<?php echo site_url('C_Admin/website/hapus_website_aksi/' . $row->id) ?>">
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