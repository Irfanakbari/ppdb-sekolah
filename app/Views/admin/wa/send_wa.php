<?= $this->extend('admin/templates/index'); ?>
<?= $this->section('konten'); ?>

<div class="section-header">
    <h1>Kirim Pesan</h1>

</div>
<h2 class="section-title">Kirim Pesan Whatsapp</h2>
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-info" role="alert">
                    <strong>Template Kirim Pesan Dinamis</strong><br>
                    <button class="btn btn-sm" id="btnnama">{{nama}}</button>
                    <button class="btn btn-sm" id="btnasal">{{asal_sekolah}}</button>
                    <button class="btn btn-sm" id="btnsekolah">{{nama_sekolah}}</button>
                    <button class="btn btn-sm" id="btnalamat">{{alamat_sekolah}}</button>

                </div>

                <form method="POST" action="<?= base_url() ?>/admin/wa/blastpesan">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="Pesan">Isi Pesan</label>
                        <textarea class="form-control " name="pesan" id="pesan" style="min-height: 150px;"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="device">Pilih Device</label>
                                <select class="form-control" name="device" id="device" required>
                                    <?php foreach ($device as $device) : ?>
                                        <option value="<?= $device['id_device'] ?>"><?= $device['nama_device'] ?> - <?= $device['no_hp'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Status Pendaftar</label>
                                <select class="select2 form-control" name="status" id="status" style="width: 100%;">
                                    <option value="3">Semua</option>
                                    <option value="1">Diterima</option>
                                    <option value="0">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label style="width: 100%;" for="submit">Kirim Broadcast</label>
                                <button class='btn btn-success'><i class='fab fa-whatsapp'></i> Kirim Pesan</button>
                            </div>
                        </div>
                    </div>
            </div>

            </form>

        </div>
    </div>
</div>
</div>

<script>
    $('#btnnama').click(function() {
        $('#pesan').val($('#pesan').val() + '{{nama}}');
    });
    $('#btnasal').click(function() {
        $('#pesan').val($('#pesan').val() + '{{asal_sekolah}}');
    });

    $('#btnsekolah').click(function() {
        $('#pesan').val($('#pesan').val() + '{{nama_sekolah}}');
    });
    $('#btnalamat').click(function() {
        $('#pesan').val($('#pesan').val() + '{{alamat_sekolah}}');
    });
    $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "mod_whatsapp/crud_pesan.php?pg=get_kontak", // Isi dengan url/path file php yang dituju
        // data yang akan dikirim ke file yang dituju
        success: function(response) { // Ketika proses pengiriman berhasil
            $("#coba").html(response);

        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
    $("#status").change(function() {
        var valu = $(this).val();
        console.log(valu);
        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "mod_whatsapp/crud_pesan.php?pg=get_kontak", // Isi dengan url/path file php yang dituju
            data: "status=" + valu, // data yang akan dikirim ke file yang dituju
            success: function(response) { // Ketika proses pengiriman berhasil
                $("#coba").html(response);
                // console.log(response);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
</script>

<?= $this->endSection(); ?>