<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <center>
                                    <img src="<?= base_url(); ?>assets/img/bjb.png" height="20%" width="20%">
                                </center>

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                                </div>

                                <?php if ($this->session->flashdata('error')) {
                                    //echo $this->session->flashdata('error'); 
                                ?>

                                    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
                                    <?php //echo form_open('/Dashboard');
                                    ?>
                                <?php } ?>
                                <form class="user" method="post" action="<?= base_url('Auth/login'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="Name" name="namauser" placeholder="Nama" value="<?= set_value('namauser'); ?>">
                                        <?= form_error('namauser', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="Password" name="passworduser" placeholder="Password">
                                        <?= form_error('passworduser', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <span><?php echo $captcha_image; ?></span>

                                        <a href="#" onclick="parent.window.location.reload(true)" class="fas fa-sync-alt"> [Perbaharui Gambar]</a>
                                        <!-- <input type="text" name="captcha" class="form-control"> -->
                                        <div class="form-group">
                                            <br>
                                            <input type="text" class="form-control form-control-user" id="Captcha" name="captcha" placeholder="Captcha" value="<?= set_value('captcha'); ?>" autocomplete="off">
                                            <?= form_error('captcha', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <button type='submit' class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <?php echo form_close();
                                ?>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>