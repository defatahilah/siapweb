<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>Sistem Informasi Aplikasi dan Web</h1>

    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Input Data Aplikasi</h3>

            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= base_url('/Dashboard') ?>">
                        <i>Dashboard</i></a>

                </div>
                <div class="breadcrumb-item active">
                    <i>Data Aplikasi</i>
                </div>
            </div>
        </div>
        <div class="card-body">


            <form class="row g-3 needs-validation" action="<?php echo base_url() . 'c_admin/aplikasi/tambah_aplikasi_aksi'; ?>" method="post" class="form-horizontal">

                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Aplikasi</label>
                    <input type="text" name="aplikasi" class="form-control" id="aplikasi" autocomplete="off" autofocus>
                    <?php echo form_error('aplikasi', '<div class="text-small text-danger">', '</div>') ?>
                </div>


                <div class="col-md-6  form-group">
                    <label class="font-weight-bold">Link Aplikasi</label>
                    <input type="text" name="link" class="form-control">
                    <?php echo form_error('link', '<div class="text-small text-danger">', '</div>') ?>
                </div>


                <div class="col-md-6  form-group">
                    <label class="font-weight-bold">Sektor</label>
                    <select type="text" name="sektor" class="form-control">
                        <option value="" disabled selected> Pilih Sektor</option>
                        <option Value="Administrasi dan Manajemen Umum">Administrasi dan Manajemen Umum</option>
                        <option Value="Administrasi Kependudukan dan Pencatatan Sipil">Administrasi Kependudukan dan Pencatatan Sipil</option>
                        <option Value="Kesehatan">Kesehatan</option>
                        <option Value="Ketentraman dan Ketertiban Umum dan Perlindungan Masyarakat">Ketentraman dan Ketertiban Umum dan Perlindungan Masyarakat</option>
                        <option Value="Komunikasi dan Informatika">Komunikasi dan Informatika</option>
                        <option Value="Koperasi, Usaha Kecil dan Menengah">Koperasi, Usaha Kecil dan Menengah</option>
                        <option Value="Legislasi">Legislasi</option>
                        <option Value="Lingkungan Hidup">Lingkungan Hidup</option>
                        <option Value="Manajemen Kepegawaian">Manajemen Kepegawaian</option>
                        <option Value="Manajemen Keuangan">Manajemen Keuangan</option>
                        <option Value="Manajemen Pembangunan">Manajemen Pembangunan</option>
                        <option Value="Pekerjaan Umum dan Penataan Ruang">Pekerjaan Umum dan Penataan Ruang</option>
                        <option Value="Pelayanan">Pelayanan</option>
                        <option Value="Penanaman Modal">Penanaman Modal</option>
                        <option Value="Pendidikan">Pendidikan</option>
                        <option Value="Perpustakaan">Perpustakaan</option>
                        <option Value="Persandian">Persandian</option>
                        <option Value="Pertanahan">Pertanahan</option>
                        <option Value="Sosial">Sosial</option>
                        <option Value="Statistik">Statistik</option>
                        <option Value="Tenaga Kerja">Tenaga Kerja</option>
                        <option Value="Lainnya">Lainnya</option>
                    </select>
                    <?php echo form_error('sektor', '<div class="text-small text-danger">', '</div>') ?>
                </div>


                <div class="col-md-6  form-group">
                    <label class="font-weight-bold">SKPD Pengelola</label>
                    <input type="text" name="skpdapp" class="form-control">
                    <?php echo form_error('skpdapp', '<div class="text-small text-danger">', '</div>') ?>
                </div>


                <div class="col-md-6  form-group">
                    <label class="font-weight-bold">Status</label>
                    <select type="text" name="status" class="form-control">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                    <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                </div>


                <div class="col-md-6  form-group">
                    <label class="font-weight-bold">Fungsi</label>
                    <input type="text" name="fungsiapp" class="form-control">
                    <?php echo form_error('fungsiapp', '<div class="text-small text-danger">', '</div>') ?>
                </div>


                <div class="col-md-6  form-group">
                    <label class="font-weight-bold">Kategori</label>
                    <select type="text" name="kategoriapp" class="form-control">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="Layanan Masyarakat">Layanan Masyarakat</option>
                        <option value="Penunjang SKPD">Penunjang SKPD</option>
                    </select>
                    <?php echo form_error('kategoriapp', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>

            </form>

        </div>
    </div>