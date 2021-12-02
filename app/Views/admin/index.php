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
                    <h4>Daftar Ulang</h4>
                </div>
                <div class="card-body">
                    34
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
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
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Online Users</h4>
                </div>
                <div class="card-body">
                    899
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-lg-8 col-md-12 col-12 col-sm-12">
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

                            <tr>
                                <td>
                                    <div class="sort-handler ui-sortable-handle">
                                        <i class="fas fa-th"></i>
                                    </div>
                                </td>
                                <td>36</td>
                                <td>hddh</td>

                                <td>
                                    <div class="badge badge-success">3653</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>INFO KUOTA</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenjang</th>
                            <th>Peminat</th>
                            <th>Sisa Kuota</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row">364</td>
                            <td>346</td>
                            <td>344</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Peminat</th>
                            <th>Sisa Kuota</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row">7567</td>
                            <td>6757</td>
                            <td>677</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12 col-12 col-sm-12">
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