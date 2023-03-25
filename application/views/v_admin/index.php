<!-- Begin Page Content -->
<div class="container-fluid">
    <img src="img/diskom.gif" width="20%" height="20%">
    <hr>
    <!-- Page Heading -->
    <div class="card-body">
        <a href="<?= base_url('Admin'); ?>"><button type="button" class="btn btn-primary btn-lg">
                <div class="row">
                    <div class="h2 mb-0 mr-2"><?php echo $data_admin ?></div>
                    <div class="text-md font-weight-bold mr-2">Data Admin</div>
                    <i class="fas fa-users fa-2x mr-2"></i>
                </div>
            </button></a>
        <a href="<?= base_url('Aplikasi'); ?>"><button type="button" class="btn btn-success btn-lg">
                <div class="row">
                    <div class="h2 mb-0 mr-2"><?php echo $data_aplikasi ?></div>
                    <div class="text-md font-weight-bold mr-2">Data Aplikasi</div>
                    <i class="fas fa-chart-bar fa-2x mr-2"></i>
                </div>
            </button></a>
        <a href="<?= base_url('Email'); ?>"><button type="button" class="btn btn-danger btn-lg">
                <div class="row">
                    <div class="h2 mb-0 mr-2"><?php echo $data_email ?></div>
                    <div class="text-md font-weight-bold mr-2">Data Email</div>
                    <i class="fas fa-chart-pie fa-2x mr-2"></i>
                </div>
            </button></a>
        <a href="<?= base_url('Website'); ?>"><button type="button" class="btn btn-warning btn-lg">
                <div class="row">
                    <div class="h2 mb-0 mr-2"><?php echo $data_website ?></div>
                    <div class="text-md font-weight-bold mr-2">Data Website</div>
                    <i class="fas fa-globe fa-2x mr-2"></i>
                </div>
            </button></a>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->