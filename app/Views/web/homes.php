<section class="section">
    <div class="section-header">
        <h1>AYO SEGERA DAFTAR KUOTA TERBATAS !</h1>
        <div class="section-header-breadcrumb">
            <button type="button" data-id="pendaftaran" class="btn klikmenu btn-danger animated infinite pulse delay-2s">Daftar Sekarang</button> &nbsp;
            <!-- <button id="btnmasuk" data-id="login" type="button" class="klikmenu btn btn-primary">MASUK KE WEB</button> -->
        </div>
    </div>

    <div class="section-body ">

        <?php if (strtotime(date('Y-m-d H:i:s')) < strtotime($syarat['ppdb_open'])) { ?>
            <div class="section-header">


                <h1>PENDAFTARAN BELUM DIBUKA</h1>

                <div class="clock" style="margin:2em;"></div>
                <div class="message"></div>

            </div>

            <script>
                <?php
                $datetime = strtotime($syarat['ppdb_open']) - strtotime(date('Y-m-d H:i:s'));
                ?>
                var datetime = <?= $datetime ?>;
                var clock = $('.clock').FlipClock({
                    clockFace: 'DailyCounter',
                    autoStart: false,
                    callbacks: {
                        stop: function() {
                            $('.message').html('The clock has stopped!')
                        }
                    }
                });

                clock.setTime(datetime);
                clock.setCountdown(true);
                clock.start();
            </script>

        <?php } ?>

        <div id='isi_load'>
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pendaftar</h4>
                            </div>
                            <div class="card-body">
                                <?= $count; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Data Sekolah</h4>
                            </div>
                            <div class="card-body">
                                19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Data Jenjang</h4>
                            </div>
                            <div class="card-body">
                                3
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Kuota Pendaftaran</h4>
                            </div>
                            <div class="card-body">
                                <?php $sisa = 0; ?>
                                <?php foreach ($kuota as $key) : ?>
                                    <?php $sisa = $sisa + $key['kuota'] ?>
                                <?php endforeach; ?>
                                <?= $sisa - $count; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animated bounceInUp">

                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active show" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="false">Informasi Pendaftaran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Syarat Pendaftaran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="true">Kontak Pendaftaran</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <div class="tab-content no-padding" id="myTab2Content">
                                        <div class="tab-pane fade active show" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="activities">
                                                        <div class="activity">
                                                            <div class="activity-icon bg-primary text-white shadow-primary">
                                                                1
                                                            </div>
                                                            <div class="activity-detail">
                                                                <p>Calon Siswa mendaftar di web pendaftaran.</p>
                                                                <p><button type="button" data-id="pendaftaran" class="btn klikmenu btn-danger">Daftar Sekarang</button>.</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="activities">
                                                        <div class="activity">
                                                            <div class="activity-icon bg-primary text-white shadow-primary">
                                                                2
                                                            </div>
                                                            <div class="activity-detail">
                                                                <p>Jika selesai pendaftaran silahkan cetak formulir yang telah di download</p>
                                                                <!-- <p><button type="button" data-id="login" class="klikmenu btn btn-success">Login Masuk</button>.</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="activities">
                                                        <div class="activity">
                                                            <div class="activity-icon bg-primary text-white shadow-primary">
                                                                3
                                                            </div>
                                                            <div class="activity-detail">
                                                                <p>Lengkapi Formulir yang diberikan dengan data yang benar.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                            <?=
                                            $syarat['syarat'];
                                            ?>
                                        </div>
                                        <div class="tab-pane fade " id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                            <div class=" author-box">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animated bounceIn">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Statistik Sekolah</h4>
                            <div class="card-header-action">

                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-striped" id="sortable-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <i class="fas fa-th"></i>
                                            </th>
                                            <th class="th-sm">NPSN</th>
                                            <th>Nama Sekolah</th>

                                            <th>Pendaftar</th>
                                        </tr>
                                    <tbody class="ui-sortable">
                                        <?php $no = 1; ?>
                                        <?php $index = 0; ?>
                                        <?php foreach ($sekolah as $sekolah) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td>null</td>
                                                <td><?= $sekolah ?></td>
                                                <td><?= $jumlah[$index++] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.klikmenu').click(function() {
                        var menu = $(this).data('id');
                        if (menu == "pendaftaran") {
                            $('#btndaftar').hide();
                            $('#isi_load').load('<?= base_url() ?>/web/pendaftaran');
                        } else if (menu == "regis") {
                            $('#regis').hide();
                            $('#isi_load').load('<?= base_url() ?>/web/pendaftaran');
                        }
                    });




                });
            </script>
        </div>



    </div>
</section>