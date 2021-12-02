<?= $this->extend('admin/templates/index'); ?>


<?= $this->section('konten'); ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4> Detail Data Pendaftar</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url() ?>/crud/updatependaftar/<?= $siswa['nik'] ?>">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>No Pendaftaran </label>
                        <input type="text" disabled value="<?= $siswa['no_daftar'] ?><?= $siswa['id'] ?>" name="no_daftar" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class='form-control' name='jurusan' required>
                            <option value=''>Pilih Jurusan</option>";
                            <?php foreach ($jurusan as $j) : ?>
                                <?php if ($siswa['jurusan'] == $j['id_jurusan']) {
                                    echo "<option value='$j[id_jurusan]' selected>$j[nama_jurusan]</option>";
                                } else {
                                    echo "<option value='$j[id_jurusan]'>$j[nama_jurusan]</option>";
                                }
                                ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ukuran Baju</label>
                        <input type="text" style="text-transform: uppercase;" name="baju" value="<?= $siswa['baju'] ?>" placeholder="M/L/XL/XXL/XXXL" class="form-control">
                    </div>

                    <div class="form-group">
                        <h5><i class="fas fa-home    "></i> Data Diri Siswa</h5>
                    </div>
                    <div class="form-group">
                        <label>NISN</label>
                        <input style="text-transform: uppercase;" type="number" name="nisn" value="<?= $siswa['nisn'] ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input style="text-transform: uppercase;" type="text" name="nik" value="<?= $siswa['nik'] ?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label>No KK</label>
                        <input style="text-transform: uppercase;" type="number" name="nokk" value="<?= $siswa['no_kk'] ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input style="text-transform: uppercase;" type="text" name="nama" value="<?= $siswa['nama_lengkap'] ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input style="text-transform: uppercase;" type="text" name="tempat" value="<?= $siswa['tempat_lahir'] ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tgllahir" value="<?= $siswa['tgl_lahir'] ?>" class="form-control datepicker" required="">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class='form-control' name='jenkel' required>
                            <option value=''>Pilih Jenis Kelamin</option>";

                            <?php if ($siswa['jenkel'] == 'L') { ?>
                                <option selected value='L'>Laki-Laki</option>
                                <option value='P'>Perempuan</option>
                            <?php  } else { ?>
                                <option value='L'>Laki-Laki</option>
                                <option selected value='P'>Perempuan</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select class='form-control' name='agama' required>
                            <option value=''>Pilih Agama</option>";

                            <?php if ($siswa['agama'] == 'Islam') { ?>
                                <option selected value='Islam'>Islam</option>
                                <option value='Kristen'>Kristen</option>
                                <option value='Hindu'>Hindu</option>
                                <option value='Budha'>Budha</option>
                            <?php  } else if ($siswa['agama'] == 'Kristen') { ?>
                                <option value='Islam'>Islam</option>
                                <option selected value='Kristen'>Kristen</option>
                                <option value='Hindu'>Hindu</option>
                                <option value='Budha'>Budha</option>
                            <?php  } else if ($siswa['agama'] == 'Hindu') { ?>
                                <option value='Islam'>Islam</option>
                                <option value='Kristen'>Kristen</option>
                                <option selected value='Hindu'>Hindu</option>
                                <option value='Budha'>Budha</option>
                            <?php  } else if ($siswa['agama'] == 'Budha') { ?>
                                <option value='Islam'>Islam</option>
                                <option value='Kristen'>Kristen</option>
                                <option value='Hindu'>Hindu</option>
                                <option selected value='Budha'>Budha</option>
                            <?php  } else { ?>
                                <option value='Islam'>Islam</option>
                                <option value='Kristen'>Kristen</option>
                                <option value='Hindu'>Hindu</option>
                                <option value='Budha'>Budha</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor Hp/Wa</label>
                        <input type="number" name="nohp" value="<?= $siswa['no_hp'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input style="text-transform: uppercase;" type="text" name="asal" value="<?= $siswa['asal_sekolah'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Anak Ke</label>
                        <input type="number" name="anakke" value="<?= $siswa['anak_ke'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Saudara</label>
                        <input type="number" name="saudara" value="<?= $siswa['saudara'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input type="number" name="tinggi" value="<?= $siswa['tinggi'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="number" name="berat" value="<?= $siswa['berat'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status Dalam Keluarga</label>
                        <select class='form-control' name='statuskeluarga' required>
                            <option value=''>Pilih Status</option>";

                            <?php if ($siswa['status_keluarga'] == 'Anak Kandung') { ?>
                                <option selected value='Anak Kandung'>Anak Kandung</option>
                                <option value='Anak Angkat'>Anak Angkat</option>
                                <option value='Anak Tiri'>Anak Tiri</option>
                            <?php  } else if ($siswa['status_keluarga'] == 'Anak Angkat') { ?>
                                <option value='Anak Kandung'>Anak Kandung</option>
                                <option selected value='Anak Angkat'>Anak Angkat</option>
                                <option value='Anak Tiri'>Anak Tiri</option>
                            <?php  } else { ?>
                                <option value='Anak Kandung'>Anak Kandung</option>
                                <option value='Anak Angkat'>Anak Angkat</option>
                                <option selected value='Anak Tiri'>Anak Tiri</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No KIP (Jika Ada)</label>
                        <input style="text-transform: uppercase;" type="text" name="kip" value="<?= $siswa['no_kip'] ?>" class="form-control">
                    </div>
                    <h5><i class="fas fa-home    "></i> Data Alamat</h5>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input style="text-transform: uppercase;" type="alamat" name="alamat" placeholder="Nama Jalan/Kampung" value="<?= $siswa['alamat'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>RT/RW</label>
                        <div class="form-group row">
                            <div class="col">
                                <input type="number" name="rt" value="<?= $siswa['rt'] ?>" class="form-control">
                            </div>
                            <div class="col">
                                <input type="number" name="rw" value="<?= $siswa['rw'] ?>" class="form-control">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" style="text-transform: uppercase;" name="provinsi" value="<?= $siswa['provinsi'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" style="text-transform: uppercase;" name="kabupaten" value="<?= $siswa['kota'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" style="text-transform: uppercase;" name="kecamatan" value="<?= $siswa['kecamatan'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Desa</label>
                        <input type="text" style="text-transform: uppercase;" name="desa" value="<?= $siswa['desa'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="number" name="kodepos" value="<?= $siswa['kode_pos'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tinggal Bersama</label>
                        <select class='form-control' name='tinggal' required>
                            <option value=''>Pilih Tinggal</option>";

                            <?php if ($siswa['tinggal'] == 'Bersama Orang Tua') { ?>
                                <option selected value='Bersama Orang Tua'>Bersama Orang Tua</option>
                                <option value='Bersama Wali'>Bersama Wali</option>
                                <option value='Kost'>Kost</option>
                            <?php  } else if ($siswa['tinggal'] == 'Bersama Wali') { ?>
                                <option value='Bersama Orang Tua'>Bersama Orang Tua</option>
                                <option selected value='Bersama Wali'>Bersama Wali</option>
                                <option value='Kost'>Kost</option>
                            <?php  } else { ?>
                                <option value='Bersama Orang Tua'>Bersama Orang Tua</option>
                                <option value='Bersama Wali'>Bersama Wali</option>
                                <option selected value='Kost'>Kost</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jarak Ke Sekolah (Meter)</label>
                        <input type="number" name="jarak" value="<?= $siswa['jarak'] ?>" class="form-control">
                    </div>
                    <h5><i class="fas fa-user-check    "></i> Data Lengkap Ayah</h5>
                    <div class="form-group">
                        <label>Nama Lengkap Ayah</label>
                        <input type="text" style="text-transform: uppercase;" name="namaayah" value="<?= $siswa['nama_ayah'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NIK Ayah</label>
                        <input type="number" style="text-transform: uppercase;" name="nikayah" value="<?= $siswa['nik_ayah'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir Ayah</label>
                        <input type="text" style="text-transform: uppercase;" name="tempatayah" value="<?= $siswa['tempat_ayah'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Ayah</label>
                        <input type="text" style="text-transform: uppercase;" name="tglayah" value="<?= $siswa['tgl_lahir_ayah'] ?>" class="form-control datepicker" required>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select class='form-control' name='pendidikan_ayah' required>
                            <option value=''>Pilih Pendidikan</option>";

                            <?php if ($siswa['pendidikan_ayah'] == 'Tidak Sekolah') { ?>
                                <option selected value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ayah'] == 'SD') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option selected value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ayah'] == 'SMP') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option selected value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ayah'] == 'SMA') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option selected value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ayah'] == 'D3') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option selected value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ayah'] == 'S1') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option selected value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ayah'] == 'S2') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option selected value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option selected value='S3'>S3</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP Ayah</label>
                        <input type="number" style="text-transform: uppercase;" name="nohpayah" value="<?= $siswa['no_hp_ayah'] ?>" class="form-control">
                    </div>
                    <h5><i class="fas fa-user-check    "></i> Data Lengkap Ibu</h5>
                    <div class="form-group">
                        <label>Nama Lengkap Ibu</label>
                        <input type="text" style="text-transform: uppercase;" name="namaibu" value="<?= $siswa['nama_ibu'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NIK Ibu</label>
                        <input type="number" style="text-transform: uppercase;" name="nikibu" value="<?= $siswa['nik_ibu'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir Ibu</label>
                        <input type="text" style="text-transform: uppercase;" name="tempatibu" value="<?= $siswa['tempat_ibu'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Ibu</label>
                        <input type="text" style="text-transform: uppercase;" name="tglibu" value="<?= $siswa['tgl_lahir_ibu'] ?>" class="form-control datepicker" required>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select class='form-control' name='pendidikan_ibu' required>
                            <option value=''>Pilih Pendidikan</option>";

                            <?php if ($siswa['pendidikan_ibu'] == 'Tidak Sekolah') { ?>
                                <option selected value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ibu'] == 'SD') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option selected value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ibu'] == 'SMP') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option selected value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ibu'] == 'SMA') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option selected value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ibu'] == 'D3') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option selected value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ibu'] == 'S1') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option selected value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_ibu'] == 'S2') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option selected value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option selected value='S3'>S3</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP Ibu</label>
                        <input type="number" style="text-transform: uppercase;" name="nohpibu" value="<?= $siswa['no_hp_ibu'] ?>" class="form-control">
                    </div>

                    <h5><i class="fas fa-user-check    "></i> Data Lengkap Wali</h5>
                    <div class="form-group">
                        <label>Nama Lengkap Wali</label>
                        <input type="text" style="text-transform: uppercase;" name="namwali" value="<?= $siswa['nama_wali'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIK Wali</label>
                        <input type="number" style="text-transform: uppercase;" name="nikwali" value="<?= $siswa['nik_wali'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir Wali</label>
                        <input type="text" style="text-transform: uppercase;" name="tempatwali" value="<?= $siswa['tempat_wali'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Wali</label>
                        <input type="text" style="text-transform: uppercase;" name="tglwali" value="<?= $siswa['tgl_lahir_wali'] ?>" class="form-control datepicker">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select class='form-control' name='pendidikan_wali'>
                            <option value=''>Pilih Pendidikan</option>";

                            <?php if ($siswa['pendidikan_wali'] == 'Tidak Sekolah') { ?>
                                <option selected value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_wali'] == 'SD') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option selected value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_wali'] == 'SMP') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option selected value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_wali'] == 'SMA') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option selected value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_wali'] == 'D3') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option selected value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_wali'] == 'S1') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option selected value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else if ($siswa['pendidikan_wali'] == 'S2') { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option selected value='S2'>S2</option>
                                <option value='S3'>S3</option>
                            <?php  } else { ?>
                                <option value='Tidak Sekolah'>Tidak Sekolah</option>
                                <option value='SD'>SD</option>
                                <option value='SMP'>SMP</option>
                                <option value='SMA'>SMA</option>
                                <option value='D3'>D3</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option selected value='S3'>S3</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP Wali</label>
                        <input type="number" style="text-transform: uppercase;" name="nohpwali" value="<?= $siswa['no_hp_wali'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="control-label">Status Diterima</div>
                        <label class="custom-switch mt-2">
                            <input type="checkbox" name="status" class="custom-switch-input" value='1' <?php if ($siswa['status'] == 1) {
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