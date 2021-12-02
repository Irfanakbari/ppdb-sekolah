<?= $this->extend('admin/templates/index'); ?>



<?= $this->section('konten'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Pendaftar Diterima</h4>
                <div class="card-header-action">
                    <a class="btn btn-success" href="<?= base_url() ?>/admin/exportdata/1" role="button"> Download Excel</a>
                </div>
            </div>
            <?php
            if (session()->getFlashdata('hapus')) :
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('hapus'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table style="font-size: 12px" class="table table-striped table-sm" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th>NIK</th>
                                <th>Nama Pendaftar</th>
                                <th>Asal Sekolah</th>
                                <th>No Hp</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($siswa as $daftar) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $daftar['nik'] ?></td>
                                    <td><?= $daftar['nama_lengkap'] ?></td>
                                    <td><?= $daftar['asal_sekolah'] ?></td>
                                    <td>
                                        <i class="fab fa-whatsapp text-success   "></i>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=62<?= $daftar['no_hp'] ?>&text=Terima%20kasih%20sudah%20mendaftar%20di%20SMK%20HS%20AGUNG%2C%0AHarap%20segera%20melakukan%20proses%20%2ADAFTAR%20ULANG%2A%20agar%20bisa%20diterima%20menjadi%20siswa%20baru%20di%20SMK%20HS%20AGUNG.%0AInfo%20lebih%20lanjut%20silahkan%20kunjungi%20website%20ppdb.smkhsagung.sch.id%0ASilahkan%20login%20dan%20lengkapi%20data%20formulirnya.%20%0Ausername%20%3A%20%2A<?= $daftar['nik'] ?>%2A%0Apassword%20%3A%20%2A%2A">
                                            <?= $daftar['no_hp'] ?></a>
                                    </td>

                                    <td>
                                        <?php if ($daftar['status'] == 1) { ?>
                                            <span class="badge badge-success">diterima</span>
                                        <?php } elseif ($daftar['status'] == 2) { ?>
                                            <span class="badge badge-danger">Cadang </span>
                                        <?php } else { ?>
                                            <span class="badge badge-warning">pending</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="detail siswa" href="<?= base_url() ?>/admin/editpendaftar/<?= $daftar['nik'] ?>" class="btn btn-sm btn-success"><i class="fas fa-eye    "></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="detail siswa" href="<?= base_url() ?>/admin/hapuspendaftar/<?= $daftar['nik'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash    "></i></a>
                                        <!-- Button trigger modal -->

                                        <!-- <button data-id="<?= $daftar['nik'] ?>" class="hapus btn-sm btn btn-danger"><i class="fas fa-trash    "></i></button> -->
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