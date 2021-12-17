<section class="section">
    <div class="section-header">
        <h1>AYO SEGERA DAFTAR KUOTA TERBATAS !</h1>
        <div class="section-header-breadcrumb">
            <button type="button" data-id="pendaftaran" class="btn klikmenu btn-danger animated infinite pulse delay-2s">Daftar Sekarang</button> &nbsp;
            &nbsp;
            <!-- <button id="btnmasuk" data-id="login" type="button" class="klikmenu btn btn-primary">MASUK KE WEB</button> -->
        </div>
    </div>

    <div class="section-body ">




        <?php if (strtotime(date('Y-m-d H:i:s')) < strtotime($pendaftaran['ppdb_open'])) { ?>

            <center>
                <h3>PENDAFTARAN BELUM DIBUKA</h3>
            </center>
            <div class="clock" style="margin:2em;"></div>


            <script>
                <?php
                $datetime = strtotime($pendaftaran['ppdb_open']) - strtotime(date('Y-m-d H:i:s'));
                ?>
                var datetime = <?= $datetime ?>;
                var clock = $('.clock').FlipClock({
                    clockFace: 'DailyCounter',
                    autoStart: false,
                    callbacks: {
                        stop: function() {
                            location.reload();
                        }
                    }
                });

                clock.setTime(datetime);
                clock.setCountdown(true);
                clock.start();
            </script>

        <?php } elseif ($kuota <= $count) { ?>
            <h3>PENDAFTARAN DITUTUP KUOTA TERPENUHI <?= $sisa; ?></h3>
        <?php } elseif (strtotime(date('Y-m-d H:i:s')) > strtotime($pendaftaran['ppdb_close'])) { ?>
            <h3>PENDAFTARAN SUDAH DITUTUP</h3>
        <?php } else { ?>

            <div class="row">
                <div class="col-md-12 animated bounceInLeft">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Pendaftaran (ISI DENGAN BENAR)</h4>
                        </div>

                        <form id="form-daftar" method="POST">
                            <?= csrf_field() ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIK (lihat di Kartu Keluarga)</label>
                                    <input type="number" id="nik" maxlength="16" minlength="16" class="form-control" name="nik" placeholder="NIK" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">NAMA LENGKAP</label>
                                    <input type="text" id="nama" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" style="text-transform: uppercase;" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Asal Sekolah</label>
                                    <input type="text" id="nama" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" autocomplete="off" style="text-transform: uppercase;" required>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class='form-control' name='jenkel' required>
                                        <option selected value=''>Pilih Jenis Kelamin</option>
                                        <option value='L'>Laki-Laki</option>
                                        <option value='P'>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">


                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select class='form-control' name='jurusan' required>
                                            <option value=''>Pilih Jurusan</option>";
                                            <?php foreach ($jurusan as $j) : ?>
                                                <option value='<?= $j['id_jurusan'] ?>'><?= $j['nama_jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_hp">NO HANDPHONE (diisi untuk info dan konfirmasi)</label>
                                        <input type="number" id="nohp" class="form-control" name="no_hp" placeholder="No HP/Whatsapp" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tempat_lahir">TEMPAT LAHIR</label>
                                            <input type="text" id="tempat" class="form-control" name="tempat_lahir" style="text-transform: uppercase;" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tgl_lahir">TANGGAL LAHIR</label>
                                            <input type="date" id="tgllahir" class="form-control md-form md-outline input-with-post-icon " name="tgl_lahir" required>
                                        </div>

                                    </div>
                                    <div class="form-group">

                                        <div class="form-group mb-0">
                                            <p>* HARAP ISIKAN DATA DENGAN BENAR</p>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">KIRIM DATA</button>
                                    </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-12 animated bounceInRight">
                    <div class="card">
                        <div class="card-header">
                            <h4>Info Lebih Lanjut</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                <?php foreach ($kontak as $key) : ?>
                                    <li class="media">
                                        <img alt="image" class="mr-3 rounded-circle" width="50" src="<?= base_url() ?>/assets/img/avatar/avatar-1.png">
                                        <div class="media-body">
                                            <div class="media-title"><?= $key['nama_kontak'] ?></div>
                                            <div class="text-job text-muted"><a href="https://api.whatsapp.com/send?phone=+62<?= $key['no_kontak'] ?>&text=njkjjkj"> <?= $key['no_kontak'] ?></a></div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
        <script>
            $(document).ready(function() {
                // hide loader
                $('.loader').hide();
                $('#form-daftar').submit(function(e) {
                    e.preventDefault();
                    var form = $(this);
                    var url = '<?= base_url() ?>/crud/save';
                    var data = form.serialize();
                    // show loader
                    $('.loader').show();
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: data,
                        error: function(xhr, status, error) {
                            // hide loader
                            $('.loader').hide();
                            // show error message iziToast
                            iziToast.error({
                                title: 'Error!',
                                position: 'topRight',
                                message: 'Terjadi Kesalahan Server!',
                            });
                        },
                        success: function(data) {
                            console.log(data);
                            if (data.status == 'success') {
                                iziToast.success({
                                    title: 'Berhasil',
                                    message: data.message,
                                    position: 'topRight'
                                });
                                // hide loader
                                $('.loader').hide();

                            } else if (data.status == 'error') {
                                iziToast.error({
                                    title: 'Error!',
                                    message: data.message,
                                });
                                // hide loader
                                $('.loader').hide();
                            } else {
                                iziToast.error({
                                    title: 'Gagal',
                                    message: data.message,
                                    position: 'topRight'
                                });
                                // hide loader
                                $('.loader').hide();
                                // reload delay 2 detik

                            }
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    });
                });
            });
        </script>
    </div>
</section>