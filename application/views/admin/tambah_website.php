<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>Sistem Informasi Aplikasi dan Web</h1>


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Input Data Website</h3>

            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= base_url('/Dashboard') ?>">
                        <i>Dashboard</i></a>

                </div>
                <div class="breadcrumb-item active">
                    <i>Data Website</i>
                </div>
            </div>
        </div>
        <div class="card-body">


            <form action="<?php echo base_url() . 'c_admin/website/tambah_website_aksi'; ?>" method="post" class="form-horizontal">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Domain</label>
                        <input type="text" name="domain" class="form-control" id="domain" autocomplete="off" autofocus>
                        <?php echo form_error('domain', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">SKPD Pengelola</label>
                        <input type="text" name="skpd" class="form-control">
                        <?php echo form_error('skpd', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold"">Nama Admin</label>
                        <select name=" idadmin" class="form-control">
                            <option value="" disabled selected> Pilih Nama Admin</option>
                            <?php foreach ($data_admin as $admin) : ?>
                                <option value="<?php echo $admin->id ?>">
                                    <?php echo $admin->namaadminweb ?>
                                </option>
                            <?php endforeach ?>
                            </select>
                            <?php echo form_error('namaadminweb', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo base_url('Website') ?>"></a>

            </form>

        </div>
    </div>