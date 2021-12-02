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
                    <form method="post" action="<?= base_url() ?>/crud/addkontak">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Nama Kontak</label>
                            <input type="text" name="nama_kontak" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>No WhatsApp</label>
                            <input type="number" name="no_kontak" class="form-control" required="">
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
                <h4>Data kontak</h4>
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>

                                <th>Nama kontak</th>
                                <th>No kontak</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($kontak as $kontak) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>

                                    <td><?= $kontak['nama_kontak'] ?></td>
                                    <td><?= $kontak['no_kontak'] ?></td>
                                    <td>
                                        <?php if ($kontak['status'] == 1) { ?>
                                            <span class="badge badge-success">Aktif</span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger">Non Aktif</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>/crud/hapuskontak/<?= $kontak['id_kontak'] ?>" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Hapus</a>
                                        <button type="button" class="btn btn-primary" tabindex="-1" data-toggle="modal" data-target="#modaledit<?= $no ?>"></i> Edit
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modaledit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="card-body">
                                                        <form method="post" action="<?= base_url() ?>/crud/updatekontak/<?= $kontak['id_kontak'] ?>">
                                                            <?= csrf_field() ?>
                                                            <div class="form-group">
                                                                <label>Nama Kontak</label>
                                                                <input type="text" value="<?= $kontak['nama_kontak'] ?>" name="nama_kontak" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>No WhatsApp</label>
                                                                <input type="number" value="<?= $kontak['no_kontak'] ?>" name="no_kontak" class="form-control" required="">
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
                                <script>
                                    $('#form-edit<?= $no ?>').submit(function(e) {
                                        e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'mod_kontak/crud_kontak.php?pg=ubah',
                                            data: $(this).serialize(),
                                            success: function(data) {

                                                iziToast.success({
                                                    title: 'OKee!',
                                                    message: 'Data Berhasil diubah',
                                                    position: 'topRight'
                                                });
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 2000);
                                                $('#modal-edit<?= $no ?>').modal('hide');
                                                //$('#bodyreset').load(location.href + ' #bodyreset');
                                            }
                                        });
                                        return false;
                                    });
                                </script>
                            <?php endforeach; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_kontak/crud_kontak.php?pg=tambah',
            data: $(this).serialize(),
            success: function(data) {

                iziToast.success({
                    title: 'Mantap!',
                    message: 'Data Berhasil ditambahkan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
                $('#tambahdata').modal('hide');
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });

    $('#table-1').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Are you sure?',
            text: 'Akan menghapus data ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_kontak/crud_kontak.php?pg=hapus',
                    method: "POST",
                    data: 'id_kontak=' + id,
                    success: function(data) {
                        iziToast.error({
                            title: 'Horee!',
                            message: 'Data Berhasil dihapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        })

    });
</script>


<?= $this->endSection(); ?>