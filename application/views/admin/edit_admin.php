<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>Sistem Informasi Aplikasi dan Web</h1>

    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Edit Data Admin</h3>

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

            <?php foreach ($tabeladmin as $adm) { ?>

                <form action="<?php echo base_url() . 'C_Admin/admin/ubah_admin_aksi'; ?>" method="post" class="form-horizontal">

                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Nama Admin</label>
                            <input type="hidden" name="id" value="<?php echo $adm->id; ?>">
                            <input type="text" name="namaadminweb" class="form-control" value="<?php echo $adm->namaadminweb ?>" autocomplete="off" autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">No HP</label>
                            <input type="text" name="nohpadminweb" class="form-control" value="<?php echo $adm->nohpadminweb ?>" autocomplete="off">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('Admin') ?>">
                        <button type="button" class="btn btn-secondary float-right">Kembali</button>
                    </a>

                </form>
            <?php } ?>
        </div>
    </div>