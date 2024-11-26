<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard Quickcount | Pilkada Paser 2024</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Danunih" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <style>
        .bg-warning {
            background-color: #FF5722 !important;
        }

        .list-group-item {
            background: none !important;
        }
    </style>
    
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->
        <section class="section pb-0 hero-section" id="hero">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container" style="max-width: 1350px;">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <!-- <center><img src="assets/images/dimensimri.png" width="50%"></center> -->
                    <div class="mt-3">
                        <!-- <h3 class="text-center">Data Masuk</h3> -->
                    <div id="total_progres" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                    <div class="text-center" id="progrestps" style="font-weight: bold;font-size: 18px;margin-top: -20px;"></div>
                    </div>
                    <div class="card" style="background: none;">
                                            <div class="card-body">
                                            <ul class="list-group list-group-flush border-dashed">
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="assets/images/svg/crypto-icons/vivo.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Voter Turn Out</h6>
                                                    <p class="fs-12 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-primary me-1"></i>VTO </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1" id="vto">0</h6>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="assets/images/svg/crypto-icons/mcap.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Margin of Error</h6>
                                                    <p class="fs-12 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-info me-1"></i>MOE </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">0.5%</h6>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="assets/images/svg/crypto-icons/ltc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Level of Confidence</h6>
                                                    <p class="fs-12 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-warning me-1"></i>LOE </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">99%</h6>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                    </ul>
                                            </div><!-- end card body -->
                                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-10">
                        <div class="text-center pt-2">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen" style="position: absolute;right: 0;">
                                <i class="bx bx-fullscreen fs-22"></i>
                            </button>
                            <h1 class="fw-semibold mb-3 lh-base">Quick Count Pilkada Paser 2024</h1>
                            <div class="row">
                                <div class="col-xl-6">
                                    <img src="assets/images/calon/1.png" alt="" class="img-paslon" />
                                    <div class="card overflow-hidden">
                                        <div class="card-body bg-marketplace p-0">
                                            <h1 class="avatar-title bg-success-subtle rounded" id="bar1text" style="font-family: fantasy;font-size: 3rem;">0</h1>
                                            <!-- <h1 class="avatar-title bg-primary-subtle rounded">24,04%</h1> -->
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="flex-grow-1">
                                                    <div class="progress animated-progress custom-progress progress-label" style="height:25px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="bar1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <img src="assets/images/calon/2.png" alt="" class="img-paslon" />
                                    <div class="card overflow-hidden">
                                        <div class="card-body bg-marketplace p-0">
                                                <h1 class="avatar-title bg-warning-subtle rounded" id="bar2text" style="font-family: fantasy;font-size: 3rem;">0</h1>
                                                <div class="d-flex align-items-center pb-2">
                                                <div class="flex-grow-1">
                                                    <div class="progress animated-progress custom-progress progress-label" style="height:25px">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="bar2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                 <div class="row">
                    <div class="col-12">
                    <div id="chartprogres" data-colors='["--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                    </div>
                 </div>
            </div>
            <!-- end container -->
            <!-- end shape -->
        </section>
        <!-- end hero section -->

        <!-- start services -->
        <section class="section" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="ff-secondary fw-semibold lh-base">Distribusi Suara</h1>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row g-3">
                    <table class="table table-stripped align-middle">
                        <thead>
                            <tr>
                                <th>Zona</th>
                                <th>TPS Sample</th>
                                <th>TPS Masuk</th>
                                <th>Data Masuk (%)</th>
                                <th>(1) Fahmi Fadli - Ikhwan Antasari (%)</th>
                                <th>(2) Syarifah Masitah - Denni Mappa (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($kecamatan as $row){
                                $suaramasuk = ($row->kandidat1+$row->kandidat2);
                                $progressuara = ($row->tpsmasuk / $row->sampel)*100;
                            ?>
                            <tr>
                                <td><a href="javascript:;" onclick="distkelurahan(<?= $row->kecamatan_id?>)"><?= $row->kecamatan_name?></a></td>
                                <td><?= $row->sampel?></td>
                                <td><?= $row->tpsmasuk?></td>
                                <td><?= shortdec($progressuara)?></td>
                                <td class="text-center"><?= ($row->kandidat1)?shortdec(($row->kandidat1/$suaramasuk)*100):0;?></td>
                                <td class="text-center"><?= ($row->kandidat2)?shortdec(($row->kandidat2/$suaramasuk)*100):0;?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                    <!-- end col -->

                    
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>

        
        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->

<!-- staticBackdrop Modal -->
<div class="modal fade" id="distKecamatan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">                
                <div class="mt-4" id="bodykecamatan">
                    <h4 class="mb-3">Distribusi Suara Kecamatan</h4>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="distKelurahan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">                
                <div class="mt-4" id="bodykelurahan">
                    <h4 class="mb-3">Distribusi Suara Kelurahan</h4>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="distTps" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">                
                <div class="mt-4" id="bodytps">
                    <h4 class="mb-3">Distribusi Suara TPS</h4>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- JAVASCRIPT -->
    <script>
    var base_url = "<?= base_url();?>";
    </script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/jquery.easy-pie-chart.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- landing init -->
    <script src="assets/js/pages/landing.init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="fullscreen"]').click(function(event) {
                document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            });
        });
        
        var options = {
          series: [],
          chart: {
          height: 400,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          }
        },
        noData: {
            text: 'Memuat data...'
        },
        colors: ['#4CAF50', '#FF5722'],
        dataLabels: {
          enabled: true,
          style: {
                fontSize: '7px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                fontWeight: 'bold',
                colors: undefined
            },
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: 'Data Realtime',
          align: 'left'
        },
        grid: {
          borderColor: '#e7e7e7',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [],
          title: {
            text: 'Progres %'
          }
        },
        yaxis: {
          title: {
            text: 'Perolehan Suara'
          },
          min: 0,
          max: 100,
          labels: {
            show: true,
            style: {
                colors: [],
                fontSize: '9px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                fontWeight: 400,
                cssClass: 'apexcharts-yaxis-label',
            }
            },
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartprogres"), options);
        chart.render();

        var url = '<?= site_url('display/progresschart')?>';
        updateseries();
        setInterval(updateseries, 20000);

        function updateseries() {
            axios({
            method: 'GET',
            url: url,
            }).then(function(response) {
            chart.updateOptions({
                xaxis: {
                    categories: response.data.categories
                },
                series: [
                    {
                    name: '(1) Fahmi Fadli - Ikhwan Antasari',
                    data: response.data.kandidat1
                    },
                    {
                    name: '(2) Syarifah Masitah - Denni Mappa',
                    data: response.data.kandidat2
                    }
                ]
            })
            });
        }

        progressBar();
        setInterval(progressBar, 10000);

        function progressBar() {
            $.get('<?= site_url('display/suara')?>', function(res) {
                $('#bar1').css('width',res.kandidat1+'%');
                $('#bar1text').text(res.kandidat1+'%');
                $('#bar2').css('width',res.kandidat2+'%');
                $('#bar2text').text(res.kandidat2+'%');
            });
        }

        var options2 = {
                series: [0],
                chart: {
                    height: 200,
                    type: 'radialBar',
                },
                dataLabels: {
                    enabled: !1
                },
                plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%"
            },
            track: {
                margin: 1
            },
            dataLabels: {
                show: !0,
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "25px",
                    fontWeight: 600,
                    offsetY: 8
                }
            }
        }
        },
        };

        var chart2 = new ApexCharts(document.querySelector("#total_progres"), options2);
        chart2.render();

        updateProgresDonut();
        setInterval(updateProgresDonut, 10000);

        function updateProgresDonut(){
            $.get('<?= site_url('display/progres')?>', function(res) {
                chart2.updateSeries([res.progres]);
            });
        }

        function distkecamatan(id) {
            $('#bodykecamatan').load('<?= site_url('display/kecamatan')?>/'+id);
            $('#distKecamatan').modal('show');
        }

        function distkelurahan(id) {
            $('#bodykelurahan').load('<?= site_url('display/kelurahan')?>/'+id);
            $('#distKelurahan').modal('show');
        }

        function disttps(id) {
            $('#bodytps').load('<?= site_url('display/tps')?>/'+id);
            $('#distTps').modal('show');
        }

        updateVto();
        setInterval(updateVto, 10000);

        function updateVto(){
            $.get('<?= site_url('display/vto')?>', function(res) {
                $('#vto').html(res);
            });
        }

        updateTps();
        setInterval(updateTps, 10000);

        function updateTps(){
            $.get('<?= site_url('display/progrestps')?>', function(res) {
                $('#progrestps').html(res);
            });
        }
    </script>
</body>

</html>