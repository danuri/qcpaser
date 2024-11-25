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
      <h4 class="mb-sm-0">Dashboard</h4>

      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>

    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h4>Selamat Datang</h4>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>
