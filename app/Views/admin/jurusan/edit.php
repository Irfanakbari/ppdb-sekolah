<?= $this->extend('admin/templates/index'); ?>



<?= $this->section('konten'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4> Edit Data jurusan</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url() ?>/crud/updatejurusan">
                    <?= csrf_field() ?>
                    <input type="hidden" value="<?= $jurusan['id_jurusan'] ?>" name="id_old" class="form-control" required="">
                    <div class="form-group">
                        <label>Kode jurusan</label>
                        <input type="text" name="id_jurusan" value="<?= $jurusan['id_jurusan'] ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama jurusan</label>
                        <input type="text" name="nama_jurusan" value="<?= $jurusan['nama_jurusan'] ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Kuota</label>
                        <input type="number" name="kuota" value="<?= $jurusan['kuota'] ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <div class="control-label">Status jurusan</div>
                        <label class="custom-switch mt-2">
                            <input type="checkbox" name="status" class="custom-switch-input" value='1' <?php if ($jurusan['status'] == 1) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description"> Pilih Status</span>
                        </label>
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