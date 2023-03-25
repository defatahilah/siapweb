<body id="page-top">

    <!-- Page Wrapper -->

    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Sampaikan Pesan Anda Disini</h3>


        </div>
    </div>


    <div class="card-body">
        <form action="<?php echo base_url() . 'c_guest/kontak'; ?>" method="post" class="form-horizontal">
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Nama Anda</label>
                    <input type="text" name="nama" class="form-control" id="nama" autocomplete="off" autofocus>
                    <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Email Anda</label>
                    <input type="text" name="email" class="form-control">
                    <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Pesan Anda</label>
                    <input type="text" name="pesan" class="form-control">
                    <?php echo form_error('pesan', '<div class="text-small text-danger">', '</div>') ?>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Kirim</button>
            <a href="<?php echo base_url('Kontak') ?>"></a>

        </form>

    </div>


</body>