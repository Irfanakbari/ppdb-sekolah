<section class="section">
    <div class="section-header">
        <h1>AYO SEGERA DAFTAR !</h1>
        <div class="section-header-breadcrumb">
            <button type="button" data-id="pendaftaran" class="btn klikmenu btn-danger animated infinite pulse delay-2s">Daftar Sekarang</button> &nbsp;
            &nbsp;
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