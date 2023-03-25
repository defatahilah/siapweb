<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>Sistem Informasi Aplikasi dan Web</h1>

    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Input Data Admin</h3>

            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= base_url('/Dashboard') ?>">
                        <i>Dashboard</i></a>

                </div>
                <div class="breadcrumb-item active">
                    <i>Data Admin</i>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="<?php echo base_url() . 'c_admin/admin/tambah_admin_aksi'; ?>" method="post" class="form-horizontal">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" name="namaadminweb" class="form-control" id="namaadminweb" autocomplete="off" autofocus>
                        <?php echo form_error('namaadminweb', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">No HP</label>
                        <input type="text" name="nohpadminweb" class="form-control">
                        <?php echo form_error('nohpadminweb', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo base_url('Admin') ?>"></a>

            </form>

        </div>
    </div>