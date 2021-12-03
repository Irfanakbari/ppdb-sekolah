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



                        <?php if (strtotime(date('Y-m-d H:i:s')) < strtotime($pendaftaran['ppdb_open'])) { ?>

                            <center>
                                <h3>PENDAFTARAN BELUM DIBUKA</h3>
                            </center>
                            <div class="clock" style="margin:2em;"></div>


                            <script>
                                <?php
                                $datetime = strtotime($pendaftaran['ppdb_open']) - strtotime(date('Y-m-d H:i:s'));
                                ?>
                                var datetime = <?= $datetime ?>;
                                var clock = $('.clock').FlipClock({
                                    clockFace: 'DailyCounter',
                                    autoStart: false,
                                    callbacks: {
                                        stop: function() {
                                            location.reload();
                                        }
                                    }
                                });

                                clock.setTime(datetime);
                                clock.setCountdown(true);
                                clock.start();
                            </script>

                        <?php } elseif ($kuota <= $count) { ?>
                            <h3>PENDAFTARAN DITUTUP KUOTA TERPENUHI <?= $sisa; ?></h3>
                        <?php } elseif (strtotime(date('Y-m-d H:i:s')) > strtotime($pendaftaran['ppdb_close'])) { ?>
                            <h3>PENDAFTARAN SUDAH DITUTUP</h3>
                        <?php } else { ?>

                            <div class="row">
                                <div class="col-md-12 animated bounceInLeft">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Form Pendaftaran (ISI DENGAN BENAR)</h4>
                                        </div>

                                        <form id="form-daftar" method="POST" action="<?= base_url() ?>/crud/save">
                                            <?= csrf_field() ?>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="nik">NIK (lihat di Kartu Keluarga)</label>
                                                    <input type="number" id="nik" maxlength="16" minlength="16" class="form-control" name="nik" placeholder="NIK" autocomplete="off" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_lengkap">NAMA LENGKAP</label>
                                                    <input type="text" id="nama" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" style="text-transform: uppercase;" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_lengkap">Asal Sekolah</label>
                                                    <input type="text" id="nama" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" autocomplete="off" style="text-transform: uppercase;" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <select class='form-control' name='jenkel' required>
                                                        <option selected value=''>Pilih Jenis Kelamin</option>
                                                        <option value='L'>Laki-Laki</option>
                                                        <option value='P'>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">


                                                    <div class="form-group">
                                                        <label>Jurusan</label>
                                                        <select class='form-control' name='jurusan' required>
                                                            <option value=''>Pilih Jurusan</option>";
                                                            <?php foreach ($jurusan as $j) : ?>
                                                                <option value='<?= $j['id_jurusan'] ?>'><?= $j['nama_jurusan'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="no_hp">NO HANDPHONE (diisi untuk info dan konfirmasi)</label>
                                                        <input type="number" id="nohp" class="form-control" name="no_hp" placeholder="No HP/Whatsapp" required>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="tempat_lahir">TEMPAT LAHIR</label>
                                                            <input type="text" id="tempat" class="form-control" name="tempat_lahir" style="text-transform: uppercase;" required>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="tgl_lahir">TANGGAL LAHIR</label>
                                                            <input type="date" id="tgllahir" class="form-control md-form md-outline input-with-post-icon " name="tgl_lahir" required>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">

                                                        <div class="form-group mb-0">
                                                            <p>* HARAP ISIKAN DATA DENGAN BENAR</p>
                                                            <p>* PASSWORD PIN AKAN DIGUNAKAN UNTUK LOGIN</p>

                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">KIRIM DATA</button>
                                                    </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="col-md-12 animated bounceInRight">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Info Lebih Lanjut</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                                <?php foreach ($kontak as $key) : ?>
                                                    <li class="media">
                                                        <img alt="image" class="mr-3 rounded-circle" width="50" src="<?= base_url() ?>/assets/img/avatar/avatar-1.png">
                                                        <div class="media-body">
                                                            <div class="media-title"><?= $key['nama_kontak'] ?></div>
                                                            <div class="text-job text-muted"><a href="https://api.whatsapp.com/send?phone=+62<?= $key['no_kontak'] ?>&text=njkjjkj"> <?= $key['no_kontak'] ?></a></div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>




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