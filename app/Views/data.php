<?= $this->extend('template') ?>

<?= $this->section('style') ?>
<style>
  table {
    font-size: 0.9rem;
  }
</style>
<?= $this->endSection() ?>
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
                <th>(1) Fahmi Fadli-Ikhwan Antasari</th>
                <th>(2) Syarifah Masitah-Denni Mappa</th>
                <th>Tidak Sah</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach($tps as $row){
                  $suaramasuk = ($row->kandidat_1 + $row->kandidat_2);  
                ?>
                <tr>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->tps_name?></td>
                    <td><?= $row->kelurahan_name?> - <?= $row->kecamatan_name?></td>
                    <td><?= $row->kandidat_1?></td>
                    <td><?= $row->kandidat_2?></td>
                    <td><?= $row->tidak_sah?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <?php if($suaramasuk > 0){?>
                          <a href="javascript:;" type="button" class="btn btn-sm btn-warning" onclick="preview('<?= base_url('uploads/c1/'.$row->lampiran) ?>')">C1</a>
                          <a href="javascript:;" type="button" class="btn btn-sm btn-primary" onclick="edit(<?= $row->tps_id?>,'<?= $row->tps_name?>')">Update</a>
                          <?php }else{?>
                          <a href="javascript:;" type="button" class="btn btn-sm btn-primary" onclick="add(<?= $row->tps_id?>,'<?= $row->tps_name?>')">Input</a>
                        <?php }?>
                      </div>
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
    <div class="modal-dialog modal-lg">
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
                      <label for="kandidat1" class="form-label">(1) Fahmi Fadli - Ikhwan Antasari</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="kandidat1" id="kandidat1">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="kandidat2" class="form-label">(2) Syarifah Masitah - Denni Mappa</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="kandidat2" id="kandidat2">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="tidak_sah" class="form-label">Tidak Sah</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="tidak_sah" id="tidak_sah">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="tidak_sah" class="form-label">Lampiran C1</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="file" class="form-control" name="lampiran">
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
<div id="addModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Input Suara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="<?= site_url('data/add')?>" id="addform" enctype="multipart/form-data">
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="tps_name" class="form-label">TPS</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="text" class="form-control" id="addtps_name" value="" disabled>
                      <input type="hidden" name="tps_id" id="addtps_id">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="kandidat1" class="form-label">(1) Fahmi Fadli - Ikhwan Antasari</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="kandidat1" required>
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="kandidat2" class="form-label">(2) Syarifah Masitah - Denni Mappa</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="kandidat2" required>
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="kandidat5" class="form-label">Suara Tidak Sah</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="number" class="form-control" name="tidak_sah" required>
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col-lg-3">
                      <label for="kandidat5" class="form-label">Lampiran C1</label>
                  </div>
                  <div class="col-lg-9">
                  <input type="file" class="form-control" name="photo">
                  </div>
              </div>
          </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" onclick="$('#addform').submit()">Simpan</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  $(document).ready(function() {
    var table = new DataTable('.datatable',{
      order: [[0,'desc']]
    });
  });

  function edit(id,name) {
    $.get('<?= site_url('data/getdata')?>/'+id, function(res) {
       $('#tps_id').val(id);
       $('#tps_name').val(name);
       $('#kandidat1').val(res.kandidat_1);
       $('#kandidat2').val(res.kandidat_2);
       $('#tidak_sah').val(res.tidak_sah);
       $('#editModal').modal('show');
    });
  }

  function add(id,name) {
    $('#addtps_id').val(id);
    $('#addtps_name').val(name);
    $('#addModal').modal('show');
  }

  function preview(berkas) {
  $('#object').html('<object data="'+berkas+'" type="application/pdf" width="100%" style="height: 80vh;" id="object">'+
                      '<p>Browser tidak mendukung!</p>'+
                    '</object>');
  $('#preview').modal('show');
}
</script>
<?= $this->endSection() ?>
