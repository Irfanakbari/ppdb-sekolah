<?= $this->extend('admin/templates/index'); ?>



<?= $this->section('konten'); ?>

<div class="section-header">

    <a href="<?= base_url() ?>/crud/tambahjurusan" class="btn btn-icon icon-left btn-primary" tabindex="-1" role="button" aria-disabled="true"><i class="far fa-edit"></i> Tambah Data</a>

</div>
<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data jurusan</h4>
            </div>
            <?php
            if (session()->getFlashdata('update')) :
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('update'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php
            if (session()->getFlashdata('delete')) :
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('delete'); ?>
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
                                <th>Kode jurusan</th>
                                <th>Nama jurusan</th>
                                <th>Kuota</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($jurusan as $jurusan) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $jurusan['id_jurusan'] ?></td>
                                    <td><?= $jurusan['nama_jurusan'] ?></td>
                                    <td><?= $jurusan['kuota'] ?></td>
                                    <td>
                                        <?php if ($jurusan['status'] == 1) { ?>
                                            <span class="badge badge-success">Aktif</span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger">Non Aktif</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="<?= base_url() ?>/crud/hapusjurusan/<?= $jurusan['id_jurusan'] ?>" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Hapus</a>
                                        <a href="<?= base_url() ?>/crud/editjurusan/<?= $jurusan['id_jurusan'] ?>" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Edit</a>
                                        <!-- Modal -->

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


<?= $this->endSection(); ?>