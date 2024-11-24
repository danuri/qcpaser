
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Submit Suara | Quickcount Kutai Timur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Danunih" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-2 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="" class="d-block">
                                                    <img src="assets/images/quickcount.png" alt="" height="18">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Hasil C1 TPS</h5>
                                            <p class="text-muted">Isi data dengan benar.</p>
                                        </div>

                                        <div class="mt-4">
                                        <?php if($suara){ ?>
                                            <form method="POST" class="needs-validation" novalidate action="">

                                                <div class="mb-2">
                                                    <label for="tps" class="form-label">Lokasi <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="tps" id="tps" value="<?= session('tps_name')?>" disabled>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="kandidat1" class="form-label">Kasmidi - Kinsu <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="kandidat1" id="kandidat1" value="<?= $suara->kandidat_1?>" disabled>
                                                    <div class="invalid-feedback">
                                                        Isi hasil Kandidat 1
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="kandidat2" class="form-label">Ardiansyah - Mahyunadi <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="kandidat2" id="kandidat2" value="<?= $suara->kandidat_2?>" disabled>
                                                    <div class="invalid-feedback">
                                                    Isi hasil Kandidat 2
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="password-input">Photo Hasil C1</label>
                                                    <div><a href="<?= base_url('uploads/c1/'.$suara->lampiran)?>" class="btn btn-warning">Lihat Lampiran</a></div>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-0 fs-12 text-muted fst-italic">Pastikan telah diisi dengan benar</p>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title text-muted">Status</h5>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p class="mb-0 text-success">Anda sudah mengunggah hasil pada: <?= $suara->created_at?></p>
                                                </div>
                                            </form>
                                            <?php }else{ ?>
                                            <form method="POST" class="needs-validation" novalidate action="<?= site_url('update')?>" enctype="multipart/form-data">

                                            <div class="mb-2">
                                                <label for="tps" class="form-label">Lokasi <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="tps" id="tps" value="<?= session('tps_name')?>" disabled>
                                                <input type="text" class="form-control" name="kelurahan" id="kelurahan" value="<?= session('kelurahan_name')?>" disabled>
                                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= session('kecamatan_name')?>" disabled>
                                            </div>
                                            <div class="mb-2">
                                                <label for="kandidat1" class="form-label">1. Kasmidi - Kinsu <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="kandidat1" id="kandidat1" required>
                                                <div class="invalid-feedback">
                                                    Isi hasil Kandidat 1
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="kandidat2" class="form-label">2. Ardiansyah - Mahyunadi <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="kandidat2" id="kandidat2" required>
                                                <div class="invalid-feedback">
                                                Isi hasil Kandidat 2
                                                </div>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="password-input">Photo Hasil C1</label>
                                                <input type="file" class="form-control" name="photo" id="photo" required>
                                                <div class="invalid-feedback">
                                                Lampirkan photo
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <p class="mb-0 fs-12 text-muted fst-italic">Pastikan telah diisi dengan benar</p>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Kirim</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title text-muted">Status</h5>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-danger">Anda belum mengunggah hasil</p>
                                            </div>
                                        </form>
                                            <?php }?>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <a href="<?= site_url('auth/logout')?>" class="text-danger">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                2024 Quickcount. <i class="mdi mdi-heart text-danger"></i> by MRI
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- validation init -->
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>
    <script type="text/javascript">
      function alert($text) {
        Toastify({
          text: $text,
          duration: 5000,
          newWindow: true,
          close: true,
          gravity: "top", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
          },
          onClick: function(){} // Callback after click
        }).showToast();
      }

      <?php
      if(session()->getFlashdata('message')){
        ?>
        alert("<?= session()->getFlashdata('message')?>");
        <?php
      }
      ?>

      <?php
      if(session()->getFlashdata('error')){
        ?>
        alert("<?= session()->getFlashdata('error')?>");
        <?php
      }
      ?>

    </script>
</body>

</html>