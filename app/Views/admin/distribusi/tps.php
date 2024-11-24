<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col-12">
    <div class="card rounded-0 bg-danger-subtle mx-n4 mt-n4 border-top">
      <div class="px-4">
      </div>
      <!-- end card body -->
    </div>
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
      <h4 class="mb-sm-0">Distribusi Kelurahan</h4>

      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Distribusi</a></li>
          <li class="breadcrumb-item active">Kecamatan</li>
        </ol>
      </div>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle" style="width:100%">
        <thead class="">
              <tr>
                <th>TPS</th>
                <th>TPS Sample</th>
                <th>Suara Masuk (%)</th>
                <th>(1) Fahmi - Ikhwan (%)</th>
                <th>(2) Syarifah - Denni (%)</th>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach($tps as $row){
                
                  $suaramasuk = $row->kandidat1+$row->kandidat2;
                ?>
                <tr>
                    <td><?= $row->tps_name?></td>
                    <td><?= $row->tps_dpt?></td>
                    <td><a href="">Lihat Lampiran</a></td>
                    <td class="text-center"><?= ($row->kandidat1)?shortdec(($row->kandidat1/$suaramasuk)*100):0;?></td>
                    <td class="text-center"><?= ($row->kandidat2)?shortdec(($row->kandidat2/$suaramasuk)*100):0;?></td>
                </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Update Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
            <form action="">
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="tps_name" class="form-label">TPS</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="text" class="form-control" id="tps_name" value="" disabled>
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="websiteUrl" class="form-label">Kandidat 1</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" id="kandidat1">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="dateInput" class="form-label">Kandidat 2</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" id="kandidat2">
                  </div>
              </div>
          </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary ">Simpan</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  function edit(id) {
    $('#editModal').modal('show');
  }
</script>
<?= $this->endSection() ?>
