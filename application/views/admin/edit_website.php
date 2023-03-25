<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>Sistem Informasi Aplikasi dan Web</h1>


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Edit Data Website</h3>

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

            <?php foreach ($data_website as $row) :
            ?>

                <form action="<?php echo base_url() . 'C_Admin/website/ubah_website_aksi'; ?>" method="post" class="form-horizontal">

                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Domain</label>
                            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                            <input type="text" name="domain" class="form-control" value="<?php echo $row->domain ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">SKPD Pengelola</label>
                            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                            <input type="text" name="skpd" class="form-control" value="<?php echo $row->skpd ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Nama Admin</label>
                            <input type="hidden" name="idadmin" value="<?php echo $row->idadmin; ?>">
                            <select name="namaadminweb" class="form-control">
                                <?php foreach ($data_admin as $admin) : ?>
                                    <option <?php if ($row->idadmin == $admin->id) {
                                                echo "selected='selected'";
                                            } ?> value="<?php echo $admin->id ?>">
                                        <?php echo $admin->namaadminweb ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('Website') ?>">
                        <button type="button" class="btn btn-secondary float-right">Kembali</button>
                    </a>

                </form>
            <?php endforeach;
            ?>
        </div>
    </div>