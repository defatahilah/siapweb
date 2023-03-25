<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-danger">
            <h3 class="card-title">Tabel Rekap Email</h3>
        </div>
        <div class="card-body border-bottom-danger">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card-body"><a class="btn btn-outline-danger mb-3 border-left-danger" href="<?php echo base_url('C_Admin/Email/print') ?>">
                    <i class="fa fa-print fa-fw"></i>Print PDF</a>

                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center" width="400px">Alamat Email</th>
                                <th class="text-center" width="400px">SKPD</th>
                                <th class="text-center" width="150px">Aksi</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 0; ?>
                            <?php foreach ($tabelemail as $eml) {
                                $no++; ?>
                                <tr>
                                    <td class="text-center"><?php echo "$no" ?></td>
                                    <td><?php echo $eml->email ?></td>
                                    <td><?php echo $eml->skpd1 ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo site_url('Edit_Email/' . $eml->id) ?>">
                                            <div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>
                                        </a>
                                        <a href="<?php echo site_url('C_Admin/email/hapus_email_aksi/' . $eml->id) ?>">
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