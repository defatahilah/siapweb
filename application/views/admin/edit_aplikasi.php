<!-- Begin Page Content -->
<div class="container-fluid">
    <h1>Sistem Informasi Aplikasi dan Web</h1>


    <!-- Main content -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h3 class="card-title">Form Edit Data Aplikasi</h3>

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

            <?php foreach ($aplikasi as $apk) { ?>

                <form class="row g-3 needs-validation" action="<?php echo base_url() . 'c_admin/aplikasi/ubah_aplikasi_aksi'; ?>" method="post">


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Aplikasi</label>
                        <input type="hidden" name="id" value="<?php echo $apk->id; ?>">
                        <input type="text" name="aplikasi" class="form-control" value="<?php echo $apk->aplikasi ?>" autocomplete="off" autofocus>
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Link Aplikasi</label>
                        <input type="text" name="link" class="form-control" value="<?php echo $apk->link ?>">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Sektor</label>
                        <select type="text" name="sektor" class="form-control" value="<?php echo $apk->sektor ?>">
                            <option <?php if ($apk->sektor == "Administrasi dan Manajemen Umum") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Administrasi dan Manajemen Umum">Administrasi dan Manajemen Umum</option>
                            <option <?php if ($apk->sektor == "Administrasi Kependudukan dan Pencatatan Sipil") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Administrasi Kependudukan dan Pencatatan Sipil">Administrasi Kependudukan dan Pencatatan Sipil</option>
                            <option <?php if ($apk->sektor == "Kesehatan") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Kesehatan">Kesehatan</option>
                            <option <?php if ($apk->sektor == "Ketentraman dan Ketertiban Umum dan Perlindungan Masyarakat") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Ketentraman dan Ketertiban Umum dan Perlindungan Masyarakat">Ketentraman dan Ketertiban Umum dan Perlindungan Masyarakat</option>
                            <option <?php if ($apk->sektor == "Komunikasi dan Informatika") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Komunikasi dan Informatika">Komunikasi dan Informatika</option>
                            <option <?php if ($apk->sektor == "Koperasi, Usaha Kecil dan Menengah") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Koperasi, Usaha Kecil dan Menengah">Koperasi, Usaha Kecil dan Menengah</option>
                            <option <?php if ($apk->sektor == "Legislasi") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Legislasi">Legislasi</option>
                            <option <?php if ($apk->sektor == "Lingkungan Hidup") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Lingkungan Hidup">Lingkungan Hidup</option>
                            <option <?php if ($apk->sektor == "Manajemen Kepegawaian") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Manajemen Kepegawaian">Manajemen Kepegawaian</option>
                            <option <?php if ($apk->sektor == "Manajemen Keuangan") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Manajemen Keuangan">Manajemen Keuangan</option>
                            <option <?php if ($apk->sektor == "Manajemen Pembangunan") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Manajemen Pembangunan">Manajemen Pembangunan</option>
                            <option <?php if ($apk->sektor == "Pekerjaan Umum dan Penataan Ruang") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Pekerjaan Umum dan Penataan Ruang">Pekerjaan Umum dan Penataan Ruang</option>
                            <option <?php if ($apk->sektor == "Pelayanan") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Pelayanan">Pelayanan</option>
                            <option <?php if ($apk->sektor == "Penanaman Modal") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Penanaman Modal">Penanaman Modal</option>
                            <option <?php if ($apk->sektor == "Pendidikan") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Pendidikan">Pendidikan</option>
                            <option <?php if ($apk->sektor == "Perpustakaan") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Perpustakaan">Perpustakaan</option>
                            <option <?php if ($apk->sektor == "Persandian") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Persandian">Persandian</option>
                            <option <?php if ($apk->sektor == "Pertanahan") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Pertanahan">Pertanahan</option>
                            <option <?php if ($apk->sektor == "Sosial") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Sosial">Sosial</option>
                            <option <?php if ($apk->sektor == "Statistik") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Statistik">Statistik</option>
                            <option <?php if ($apk->sektor == "Tenaga Kerja") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Tenaga Kerja">Tenaga Kerja</option>
                            <option <?php if ($apk->sektor == "Lainnya") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->sektor; ?> value="Lainnya">Lainnya</option>
                        </select>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">SKPD Pengelola</label>
                        <input type="text" name="skpdapp" class="form-control" value="<?php echo $apk->skpdapp ?>">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Status</label>
                        <select type="text" name="status" class="form-control" value="<?php echo $apk->status ?>">
                            <option value="" disabled selected>Pilih Status</option>
                            <option <?php if ($apk->status == "Aktif") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->status; ?> value="Aktif">Aktif</option>
                            <option <?php if ($apk->status == "Tidak Aktif") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->status; ?> value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>


                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Fungsi</label>
                        <input type="text" name="fungsiapp" class="form-control" value="<?php echo $apk->fungsiapp ?>">

                    </div>

                    <div class="col-md-6 form-group">
                        <label class="font-weight-bold">Kategori</label>
                        <select type="text" name="kategoriapp" class="form-control" value="<?php echo $apk->kategoriapp ?>">

                            <option value="" disabled selected>Pilih Kategori</option>
                            <option <?php if ($apk->kategoriapp == "Layanan Masyarakat") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->kategoriapp; ?> value="Layanan Masyarakat">Layanan Masyarakat</option>
                            <option <?php if ($apk->kategoriapp == "Penunjang SKPD") {
                                        echo "selected='selected'";
                                    }
                                    echo $apk->kategoriapp; ?> value="Penunjang SKPD">Penunjang SKPD</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="<?php echo base_url('Aplikasi') ?>">


                            <button type="button" class="btn btn-secondary float-right">Kembali</button>
                        </a>
                    </div>

                </form>
            <?php } ?>
        </div>
    </div>