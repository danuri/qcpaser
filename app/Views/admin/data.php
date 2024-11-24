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
      <h4 class="mb-sm-0">Distribusi Kecamatan</h4>

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
        <table class="table table-striped table-bordered align-middle datatable">
        <thead class="">
              <tr>
                <th>Waktu</th>
                <th>TPS</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Zona</th>
                <th>(1) Fahmi - Ikhwan (%)</th>
                <th>(2) Syarifah - Denni (%)</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach($tps as $row){?>
                <tr>
                    <td><?= $row->created_at?></td>    
                    <td><?= $row->tps_name?></td>    
                    <td><?= $row->kelurahan_name?></td>    
                    <td><?= $row->kecamatan_name?></td>    
                    <td><?= $row->zona_name?></td>    
                    <td><?= $row->kandidat_1?></td>    
                    <td><?= $row->kandidat_2?></td>    
                    <td>
                        <?php if($row->kandidat_1){?>
                            <a href="javascript:;" class="btn btn-sm btn-warning" onclick="preview('<?= base_url('uploads/c1/'.$row->lampiran) ?>')">Lihat C1</a>
                        <a href="javascript:;" class="btn btn-sm btn-primary" onclick="edit(<?= $row->tps_id?>,'<?= $row->tps_name?>')">Update</a>
                        <?php } ?>
                    </td>    
                </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="preview" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" id="object">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Update Suara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="" id="editform">
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="tps_name" class="form-label">TPS</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="text" class="form-control" id="tps_name" value="" disabled>
                      <input type="hidden" name="tps_id" id="tps_id">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="websiteUrl" class="form-label">Kandidat 1</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="kandidat1" id="kandidat1">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="dateInput" class="form-label">Kandidat 2</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="kandidat2" id="kandidat2">
                  </div>
              </div>
          </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" onclick="$('#editform').submit()">Simpan</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  function edit(id,name) {
    $.get('<?= site_url('admin/data/getdata')?>/'+id, function(res) {
       $('#tps_id').val(id);
       $('#tps_name').val(name);
       $('#kandidat1').val(res.kandidat_1);
       $('#kandidat2').val(res.kandidat_2);
       $('#editModal').modal('show');
    });
  }

  function preview(berkas) {
  $('#object').html('<object data="'+berkas+'" type="application/pdf" width="100%" style="height: 80vh;" id="object">'+
                      '<p>Browser tidak mendukung!</p>'+
                    '</object>');
  $('#preview').modal('show');
}
</script>
<?= $this->endSection() ?>
