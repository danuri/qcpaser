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
      <h4 class="mb-sm-0">Distribusi Zona</h4>

      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
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
        <table class="table table-striped align-middle" style="width:100%">
        <thead class="">
              <tr class="text-center">
                <th>Zona</th>
                <th>TPS Sample</th>
                <th>Suara Masuk (%)</th>
                <th>(1) Fahmi - Ikhwan (%)</th>
                <th>(2) Syarifah - Denni (%)</th>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach($zona as $row){
                    $suaramasuk = ($row->kandidat1+$row->kandidat2);
                    $progressuara = ($suaramasuk / $row->dpt)*100;
                ?>
                <tr>
                    <td><a href="<?= site_url('admin/distribusi/kecamatan/'.$row->zona_id)?>"><?= $row->zona_name?></a></td>
                    <td>...</td>
                    <td class="text-center"><?= shortdec($progressuara)?></td>
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
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>
