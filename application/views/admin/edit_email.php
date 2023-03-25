<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>Sistem Informasi Aplikasi dan Web</h1>


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Edit Data Email</h3>

            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= base_url('/Dashboard') ?>">
                        <i>Dashboard</i></a>

                </div>
                <div class="breadcrumb-item active">
                    <i>Data Email</i>
                </div>
            </div>
        </div>

        <div class="card-body">

            <?php foreach ($tabelemail as $eml) { ?>

                <form action="<?php echo base_url() . 'c_admin/email/ubah_email_aksi'; ?>" method="post" class="form-horizontal">

                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Alamat Email</label>
                            <input type="hidden" name="id" value="<?php echo $eml->id; ?>">
                            <input type="text" name="email" class="form-control" value="<?php echo $eml->email ?>" autocomplete="off" autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">SKPD</label>
                            <input type="text" name="skpd1" class="form-control" value="<?php echo $eml->skpd1 ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('Email') ?>">
                        <button type="button" class="btn btn-secondary float-right">Kembali</button>
                    </a>

                </form>
            <?php } ?>
        </div>
    </div>