<?= $this->extend('admin/templates/index'); ?>



<?= $this->section('konten'); ?>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Info Persyaratan</h4>
            </div>
            <?php
            if (session()->getFlashdata('sukses')) :
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('sukses'); ?>
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
            <div class="card-body">
                <form method="post" action="<?= base_url() ?>/crud/updatesyarat">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Isi Info dengan Persyaratan</label>
                        <textarea name="syarat" class="summernote" required><?= $syaratD['syarat'] ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>