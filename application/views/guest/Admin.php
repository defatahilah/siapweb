<!-- Begin Page Content -->
<div class="container-fluid">




  <!-- Main content -->
  <div class="card mb-4">
    <div class="card-header py-3 border-bottom-primary">
      <h3 class="card-title">Tabel Rekap Admin</h3>
    </div>

    <div class="card-body border-bottom-primary">
      <div class="table-responsive">
        <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center" width="50px">No</th>
              <th class="text-center">Nama Admin</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 0; ?>
            <?php foreach ($tabeladmin as $adm) {
              $no++; ?>
              <tr>
                <td class="text-center"><?php echo "$no" ?></td>
                <td><?php echo $adm->namaadminweb ?></td>
              </tr>
            <?php
            }
            ?>
        </table>
      </div>
    </div>
  </div>