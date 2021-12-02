<form method="POST" action="<?= base_url() ?>/admin/setting/update">
    <div class="card" id="settings-card">
        <div class="card-header">
            <h4>Pengaturan Aplikasi</h4>
        </div>
        <div class="card-body">
            <p class="text-muted">pengaturan ini memuat dasar pengaturan aplikasi</p>
            <div class="form-group row align-items-center">
                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Sekolah</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="nama" class="form-control" value="<?= $setting['nama_sekolah'] ?>" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-title" class="form-control-label col-sm-3 text-md-right">NPSN Sekolah</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="npsn" class="form-control" value="<?= $setting['npsn'] ?>" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Alamat Sekolah</label>
                <div class="col-sm-6 col-md-9">
                    <textarea class="form-control" name="alamat"><?= $setting['alamat'] ?></textarea>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Kabupaten / Kota</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="kota" class="form-control" value="<?= $setting['kota'] ?>" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Kepala Sekolah</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="nama_kepsek" class="form-control" value="<?= $setting['nama_kepsek'] ?>" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-title" class="form-control-label col-sm-3 text-md-right">NIP Kepsek</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="nip_kepsek" class="form-control" value="<?= $setting['nip_kepsek'] ?>" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Logo Sekolah</label>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input" id="site-logo">
                        <label class="custom-file-label">Choose File</label>
                    </div>
                    <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                </div>

            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-6">
                    <img src="../<?= $setting['logo'] ?>" class="img-thumbnail" width="100">
                </div>
            </div>
            <!-- <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Text Klik Chat Daftar</label>
                <div class="col-sm-6 col-md-9">
                    <textarea class="form-control" name="klikchat"><?= urldecode($setting['klikchat']) ?></textarea>
                </div>
            </div> -->
            <div class="form-group row align-items-center">
                <label for="site-title" class="form-control-label col-sm-3 text-md-right">No Wa Live Chat</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="nolivechat" class="form-control" value="<?= $setting['nolivechat'] ?>" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Text Live Chat</label>
                <div class="col-sm-6 col-md-9">
                    <textarea class="form-control" name="livechat"><?= urldecode($setting['livechat']) ?></textarea>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Pendaftaran Dibuka <small></small></label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="ppdb_open" class=" form-control" value="<?= $setting['ppdb_open'] ?>" placeholder="YYYY-BB-HH JAM:MENIT">
                    <small id="helpId" class="form-text text-muted">Format: YYYY-BB-HH JAM:MENIT:DETIK Contoh : 2021-03-24 07:00:00</small>

                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Pendaftaran Ditutup</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="ppdb_close" class=" form-control" value="<?= $setting['ppdb_close'] ?>" placeholder="YYYY-BB-HH JAM:MENIT">
                </div>
            </div>

            <!-- <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Jurusan / Peminatan</label>
                <div class="col-sm-6 col-md-6">
                    <select class="form-control" name="jurusan">
                        <option value="1" <?php if ($setting['jurusan'] == 1) {
                                                echo "selected";
                                            } ?>>Aktif</option>
                        <option value="0" <?php if ($setting['jurusan'] == 0) {
                                                echo "selected";
                                            } ?>>Non Aktif</option>
                    </select>
                </div>
            </div> -->
            <!-- <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Jalur Pendaftaran</label>
                <div class="col-sm-6 col-md-6">
                    <select class="form-control" name="jalur">
                        <option value="1" <?php if ($setting['jalur'] == 1) {
                                                echo "selected";
                                            } ?>>Aktif</option>
                        <option value="0" <?php if ($setting['jalur'] == 0) {
                                                echo "selected";
                                            } ?>>Non Aktif</option>
                    </select>
                </div>
            </div> -->
            <!-- <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Pembayaran</label>
                <div class="col-sm-6 col-md-6">
                    <select class="form-control" name="pembayaran">
                        <option value="1" <?php if ($setting['pembayaran'] == 1) {
                                                echo "selected";
                                            } ?>>Aktif</option>
                        <option value="0" <?php if ($setting['pembayaran'] == 0) {
                                                echo "selected";
                                            } ?>>Non Aktif</option>
                    </select>
                </div>
            </div> -->
            <!-- <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Device ID WA</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="devid_wa" class=" form-control" value="<?= $setting['devid_wa'] ?>">
                </div>
            </div> -->
            <!-- <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">No Rekening</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="no_rek" class=" form-control" value="<?= $setting['no_rek'] ?>">
                </div>
            </div> -->
            <!-- <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Nama Bank</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="nama_bank" class=" form-control" value="<?= $setting['nama_bank'] ?>">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="site-description" class="form-control-label col-sm-3 text-md-right">Atas Nama Rek.</label>
                <div class="col-sm-6 col-md-9">
                    <input type="text" name="nama_rek" class=" form-control" value="<?= $setting['nama_rek'] ?>">
                </div>
            </div> -->
        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
            <button class="btn btn-secondary" type="button">Reset</button>
        </div>
    </div>
</form>