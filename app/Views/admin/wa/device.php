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
                    <form method="POST" action="<?= base_url() ?>/admin/device/tambah">
                        <?= csrf_field() ?>
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Token ID</label>
                                <input type="text" name="device_id" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Nama Device</label>
                                <input type="text" name="nama_device" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>No_Hp</label>
                                <input type="number" name="no_hp" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <div class="control-label">Status device</div>
                                <label class="custom-switch mt-2">
                                    <input type="checkbox" name="status" class="custom-switch-input" value='1'>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"> Pilih Status</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="control-label">No Utama</div>
                                <label class="custom-switch mt-2">
                                    <input type="checkbox" name="no_utama" class="custom-switch-input" value='1'>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"> No Utama Ya/ Tidak</span>
                                </label>
                            </div>
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
                <h4>Data Device</h4>
            </div>
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
                                <th>Device Id</th>
                                <th>Nama Device</th>
                                <th>No_HP</th>
                                <th>Status</th>
                                <th>No Utama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($device as $device) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $device['device_id'] ?></td>
                                    <td><?= $device['nama_device'] ?></td>
                                    <td><?= $device['no_hp'] ?></td>
                                    <td>
                                        <?php if ($device['status'] == 1) { ?>
                                            <span class="badge badge-success">Aktif</span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger">Non Aktif</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($device['no_utama'] == 1) { ?>
                                            <span class="badge badge-success">Ya</span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger">Tidak</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>/admin/wa/device/hapus/<?= $device['id_device'] ?>" class="hapus btn btn-danger">Hapus</a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaledit<?= $no ?>">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modaledit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="card-body">
                                                        <form method="POST" action="<?= base_url() ?>/admin/device/edit/<?= $device['id_device'] ?>">
                                                            <?= csrf_field() ?>
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Data</h5>

                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" name="id" value="<?= $device['id_device'] ?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Token ID</label>
                                                                    <input type="text" value="<?= $device['device_id'] ?>" name="device_id" class="form-control" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama Device</label>
                                                                    <input type="text" value="<?= $device['nama_device'] ?>" name="nama_device" class="form-control" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>No_Hp</label>
                                                                    <input type="number" name="no_hp" value="<?= $device['no_hp'] ?>" class="form-control" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="control-label">Status device</div>
                                                                    <label class="custom-switch mt-2">
                                                                        <input type="checkbox" name="status" class="custom-switch-input" value='1' <?php if ($device['status'] == 1) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?>>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description"> Pilih Status</span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="control-label">No Utama</div>
                                                                    <label class="custom-switch mt-2">
                                                                        <input type="checkbox" name="no_utama" class="custom-switch-input" value='1' <?php if ($device['no_utama'] == 1) {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description"> No Utama Ya/ Tidak</span>
                                                                    </label>
                                                                </div>
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

<?= $this->endSection(); ?>