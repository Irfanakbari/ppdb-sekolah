<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Habib</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/fontawesome/css/all.min.css"> -->

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/animate/animate.css">
    <!-- CSS DATATABLE -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/components.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/flipclock/compiled/flipclock.css">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

    <!-- /END GA -->
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('assets/img/spinner-primary.svg') 50% 50% no-repeat rgb(249, 249, 249);
            opacity: .9;
        }
    </style>
</head>

<body class="layout-3">
    <!-- <div class='loader'></div> -->
    <div class="chating" style=" z-index: 99999; width: 50px; padding: 15px;  bottom: 0; position: fixed; ">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?= $setting['nolivechat'] ?>&text=<?= $setting['livechat'] ?>">

            <img src="<?= base_url() ?>/assets/img/wa.png" width="150"> </a>
    </div>
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="." class="navbar-brand sidfebar-gone-hide d-none d-sm-block">
                    <img src="<?= base_url() ?>/img/<?= $setting['logo'] ?>" width="50"> <?= $setting['nama_sekolah'] ?>
                </a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                <!-- <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li>
                    </ul>
                </div> --> -->


            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>" class="nav-link klikmenu" data-id="beranda"><i class="fas fa-home"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/web/pendaftaran" class="nav-link klikmenu " data-id="pendaftaran"><i class="fas fa-heart"></i><span>Daftar Sekarang</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/web/cetakformulir" class="nav-link klikmenu" data-id="daftar"><i class="fas fa-print"></i><span>Cetak Formulir</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/web/pengumuman" class="nav-link klikmenu" data-id="pengumuman"><i class="fas fa-bullhorn"></i><span>Pengumuman</span></a>
                        </li>

                    </ul>
                    </span>

            </nav>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>AYO SEGERA DAFTAR KUOTA TERBATAS !</h1>
                        <div class="section-header-breadcrumb">
                            <a href="<?= base_url() ?>/web/pendaftaran" style="color: white;" id="btndaftar" class=" btn btn-danger animated infinite pulse delay-2s">DAFTAR SEKARANG</a> &nbsp;
                            <!-- <button id="btnmasuk" data-id="login" type="button" class="klikmenu btn btn-primary">MASUK KE WEB</button> -->
                        </div>
                    </div>

                    <div class="section-body ">
                        <?php
                        if (session()->getFlashdata('pesan')) :
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php
                        if (session()->getFlashdata('failed')) :
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('failed'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>


                        <div id='isi_load'>
                            <div class="row">
                                <div class="col-12 animated bounceIn">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Pengumuman</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="activities">
                                                <?php foreach ($pengumuman as $data) : ?>
                                                    <div class="activity">
                                                        <div class="activity-icon bg-primary text-white shadow-primary">
                                                            <i class="fas fa-bullhorn"></i>
                                                        </div>
                                                        <div class="activity-detail">
                                                            <div class="mb-2">
                                                                <span class="text-job text-primary"><?= $data['tgl'] ?></span>
                                                                <span class="bullet"></span>
                                                                <a class="text-job" href="#"><?= $data['created_by'] ?></a>

                                                            </div>
                                                            <h5><?= $data['judul'] ?></h5>
                                                            <p><?= $data['pengumuman'] ?></p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y') ?> Habib School <div class="bullet"></div> Design By <a href="https://nauval.in/">Stisla</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>


    <script src="https://use.fontawesome.com/4056c6ae70.js"></script>
    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/assets/modules/jquery.min.js"></script>
    <!-- <script src="assets/modules/popper.js"></script> -->
    <!-- <script src="assets/modules/tooltip.js"></script> -->
    <script src="<?= base_url() ?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>/assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/flipclock/compiled/flipclock.js"></script>
    <!-- Page Specific JS File -->

    <!-- JS DATATABLE -->
    <script src="<?= base_url() ?>/assets/modules/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>


    <!-- <script type="text/javascript">
        $('.loader').fadeOut('slow');


        // Set up FlipDown



        $(document).ready(function() {
            $('.klikmenu').click(function() {
                var menu = $(this).data('id');
                if (menu == "beranda") {
                    $('#btndaftar').show();
                    $('#isi_load').load('<?= base_url() ?>/');
                } else if (menu == "pendaftaran") {
                    $('#btndaftar').hide();
                    $('#isi_load').load('<?= base_url() ?>/web/pendaftaran');
                } else if (menu == "daftar") {
                    $('#isi_load').load('datadaftar.php');
                } else if (menu == "pengumuman") {
                    $('#isi_load').load('<?= base_url() ?>/web/pengumuman');
                } else if (menu == "login") {
                    $('#isi_load').load('login.php');
                }
            });


            // halaman yang di load default pertama kali
            $('#isi_load').load('<?= base_url() ?>/web/home');

        });
    </script> -->
    <!-- <a href="#" class="ignielToTop"></a> -->
</body>

</html>