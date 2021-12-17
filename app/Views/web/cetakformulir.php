<section class="section">
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
                            <center>
                                <h3>Halaman Cetak Formulir</h3>
                            </center>
                        </div>
                        <div class="card-body">
                            <form id="form-daftar" method="POST" action="<?= base_url() ?>/web/printpdf">
                                <?= csrf_field() ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nik">NIK YANG TELAH DIDAFTARKAN</label>
                                        <input type="number" id="nik" maxlength="16" minlength="16" class="form-control" name="nik" placeholder="NIK" autocomplete="off" required>
                                    </div>
                                </div>
                        </div>

                        <div class="card-footer">
                            <button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">CETAK FORMULIR</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>