<?= $this->extend('admin/templates/index'); ?>



<?= $this->section('konten'); ?>

<div class="section-header">

    <button type="button" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#tambahdata">
        <i class="far fa-edit"></i> Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="card-body">
                    <form method="POST" id="adddata" action="<?= base_url() ?>/admin/pengumumantambah">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Judul Pengumuman</label>
                            <input type="text" name="judul" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Isi Pengumuman</label>
                            <textarea name="pengumuman" class="summernote" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="created_by" value="<?= user()->username ?>">
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



</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data pengumuman</h4>

            </div>
            <?php
            if (session()->getFlashdata('pengumuman')) :
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pengumuman'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php
            if (session()->getFlashdata('hapus')) :
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('hapus'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th>Judul Penguman</th>
                                <th>Pengumuman</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pengumuman as $key) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $key['judul'] ?></td>
                                    <td><?= $key['pengumuman'] ?></td>

                                    <td>
                                        <a href="<?= base_url() ?>/admin/hapuspengumuman/<?= $key['id'] ?>" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Hapus</a>
                                        <button type="button" class="btn btn-primary" tabindex="-1" data-toggle="modal" data-target="#modaledit<?= $no ?>"></i> Edit
                                        </button>

                                        <!-- Button trigger modal -->


                                        <!-- Modal -->
                                        <div class="modal fade" id="modaledit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="card-body">
                                                        <form method="POST" action="<?= base_url() ?>/admin/updatepengumuman/<?= $key['id'] ?>">
                                                            <?= csrf_field() ?>
                                                            <div class="form-group">
                                                                <label>Judul Pengumuman</label>
                                                                <input type="text" value="<?= $key['judul'] ?>" name="judul" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Isi Pengumuman</label>
                                                                <textarea name="pengumuman" class="summernote" required><?= $key['pengumuman'] ?></textarea>
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
                                    </td>
                                </tr>

                            <?php endforeach; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#adddata').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var formdata = false;
            if (window.FormData) {
                formdata = new FormData(form[0]);
            }
            var formAction = form.attr('action');
            $.ajax({
                type: 'POST',
                url: formAction,
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#adddata')[0].reset();
                    $('#tambahdata').modal('hide');
                    iziToast.show({
                        title: 'Berhasil',
                        message: 'Pengumuman berhasil ditambahkan',
                        color: 'green',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            });
        });
    });
</script>


<?= $this->endSection(); ?>