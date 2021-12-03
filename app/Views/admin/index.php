<?= $this->extend('admin/templates/index') ?>

<?= $this->section('konten') ?>
<div class="section-header">
    <h1>Hai, <?= strtoupper(user()->username); ?></h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Pendaftar</h4>
                </div>
                <div class="card-body">
                    <?= $pendaftar; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Pending</h4>
                </div>
                <div class="card-body">
                    <?= $pending ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-check"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Diterima</h4>
                </div>
                <div class="card-body">
                    <?= $diterima ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Sisa Kuota</h4>
                </div>
                <div class="card-body">
                    <?php $sisa = 0; ?>
                    <?php foreach ($kuota as $key) : ?>
                        <?php $sisa = $sisa + $key['kuota'] ?>
                    <?php endforeach; ?>
                    <?= $sisa - $pendaftar; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Detail Pendaftar</h4>
                <div class="card-header-action">

                </div>
            </div>
            <div class="card-body ">
                <div class="mb-4">
                    <div class="text-medium float-right font-weight-bold text-muted"><?= $sisa ?> Orang</div>
                    <div class="font-weight-bold mb-1">Persentase Kuota</div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= ($pendaftar / $sisa) * 100 ?>%;" aria-valuenow="<?= ($pendaftar / $sisa) * 100 ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="text-medium float-right font-weight-bold text-muted"><?= $pria ?> Orang</div>
                    <div class="font-weight-bold mb-1">Laki-Laki</div>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $pria ?>%;" aria-valuenow="<?= $pria ?>" aria-valuemin="0" aria-valuemax="<?= $sisa ?>"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="text-medium float-right font-weight-bold text-muted"><?= $wanita ?> Orang</div>
                    <div class="font-weight-bold mb-1">Perempuan</div>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $wanita ?>%;" aria-valuenow="<?= $wanita ?>" aria-valuemin="0" aria-valuemax="<?= $sisa ?>"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Statistik Asal Sekolah</h4>
                <div class="card-header-action">

                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="sortable-table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <i class="fas fa-th"></i>
                                </th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Pendaftar</th>
                            </tr>
                        </thead>
                        <tbody class="ui-sortable">
                            <?php $no = 1; ?>
                            <?php $index = 0; ?>
                            <?php foreach ($sekol as $sekolah) : ?>
                                <tr>
                                    <td>
                                        <div class="sort-handler ui-sortable-handle">
                                            <center> <i class="fas fa-th"></i></center>
                                        </div>
                                    </td>
                                    <td>null</td>
                                    <td><?= $sekolah ?></td>

                                    <td>
                                        <div class="badge badge-success"><?= $jumlah[$index++] ?></div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Info Kuota</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="sortable-table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <center> <i class="fas fa-th"></i></center>
                                </th>
                                <th>Jurusan</th>
                                <th>Kuota</th>
                            </tr>
                        </thead>
                        <tbody class="ui-sortable">
                            <?php $no = 1; ?>
                            <?php foreach ($kuota as $jurusan) : ?>
                                <tr>
                                    <td>
                                        <center> <?= $no++ ?></center>
                                    </td>
                                    <td><?= $jurusan['nama_jurusan'] ?></td>
                                    <td>
                                        <div class="badge badge-success"><?= $jurusan['kuota'] ?></div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Statistik Sekolah Tujuan</h4>
                <div class="card-header-action">

                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="sortable-table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <i class="fas fa-th"></i>
                                </th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Pendaftar</th>
                            </tr>
                        </thead>
                        <tbody class="ui-sortable">

                            <tr>
                                <td>
                                    <div class="sort-handler ui-sortable-handle">
                                        <i class="fas fa-th"></i>
                                    </div>
                                </td>
                                <td>34646</td>
                                <td>ggsgg</td>

                                <td>
                                    <div class="badge badge-success">636</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>