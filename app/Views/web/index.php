<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $setting['nama_sekolah'] ?></title>

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
            background: url('assets/img/spinner-primary.svg') 50% 50% no-repeat black;
            opacity: 1;
        }
    </style>
</head>

<body class="layout-3">
    <div class='loader'></div>
    <!-- <div class='loader'></div> -->
    <div class="chating" style=" z-index: 99999; width: 50px; padding: 15px;  bottom: 0; position: fixed; ">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?= $setting['nolivechat'] ?>&text=<?= $setting['livechat'] ?>">

            <img src="<?= base_url() ?>/assets/img/wa.png" width="50"> </a>
    </div>
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="." class="navbar-brand sidfebar-gone-hide d-none d-sm-block">
                    <img src="<?= base_url() ?>/img/<?= $setting['logo'] ?>" width="50"> <?= $setting['nama_sekolah'] ?>
                </a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>



            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="homes" href="#" class="nav-link klikmenu" data-id="homes"><i class="fas fa-home"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a id="daftar" href="#" class="nav-link klikmenu " data-id="pendaftaran"><i class="fas fa-heart"></i><span>Daftar Sekarang</span></a>
                        </li>
                        <li class="nav-item">
                            <a id="printform" href="#" class="nav-link klikmenu" data-id="printform"><i class="fas fa-print"></i><span>Cetak Formulir</span></a>
                        </li>
                        <li class="nav-item">
                            <a id="pengumuman" href="#" class="nav-link klikmenu" data-id="pengumuman"><i class="fas fa-bullhorn"></i><span>Pengumuman</span></a>
                        </li>

                    </ul>
                    </span>

            </nav>

            <!-- Main Content -->
            <div class="main-content">

            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y') ?> <?= $setting['nama_sekolah'] ?> <div class="bullet"></div> Template By <a href="#">Stisla</a>
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


    <script type="text/javascript">
        $('.loader').fadeOut('slow');
        $(document).on('click', '.klikmenu', function() {
            var id = $(this).data('id');
            $('.loader').fadeIn('fast');
            $.ajax({
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    if (id == 'homes') {
                        $('.main-content').load('<?= base_url() ?>/homes');
                    } else if (id == 'pendaftaran') {
                        $('.main-content').load('<?= base_url() ?>/pendaftaran');
                    } else if (id == 'printform') {
                        console.log('formulir');
                        $('.main-content').load('<?= base_url() ?>/cetakformulir');
                    } else if (id == 'pengumuman') {
                        // $('.main-content').html(data);
                        $('.main-content').load('<?= base_url() ?>/pengumuman');
                    }
                    $('.loader').fadeOut('slow');
                },
                error: function(data) {
                    alert('error');
                }
            });
        });

        // halaman yang di load default pertama kali
        $('.main-content').load('<?= base_url() ?>/web/homes');
    </script>
    <script>
        // change navbar-bg color
        var navbar = $('.navbar-bg');
        var primary = $('.bg-primary');
        // change color css
        var color = '#008c5f';
        navbar.css('background-color', color);
        primary.css('background-color', color);
    </script>

</body>

</html>