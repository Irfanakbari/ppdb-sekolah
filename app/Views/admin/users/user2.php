<?= $this->extend('admin/templates/index'); ?>



<?= $this->section('konten'); ?>
<div class="section-header">

    <button type="button" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#tambahdata">
        <i class="far fa-edit"></i> Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form-tambah">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data user</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama user</label>
                            <input type="text" name="nama" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control" name="level" id="level" required>
                                <option value="">Pilih Level</option>
                                <option value="admin">Administrator</option>
                                <option value="kepala">Kepala Sekolah</option>
                                <option value="bendahara">Bendahara</option>
                                <option value="operator">Operator</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ganti Password</label>
                            <input type="password" name="password" class="form-control" required="">
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data user</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $user->email ?></td>
                                    <td><?= $user->username ?></td>
                                    <td><?= $user->name ?></td>

                                    <td>
                                        <button data-id="null" class="hapus btn btn-danger btn-sm"><i class="fas fa-trash-alt    "></i> Hapus</button>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit ">
                                            <i class="fas fa-edit    "></i> Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-edit null" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form id="form-edit null">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" value="id" name="id_user" class="form-control" required="">
                                                            <div class="form-group">
                                                                <label>Nama user</label>
                                                                <input type="text" name="nama" value="<?= $user->full_name ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Username</label>
                                                                <input type="text" name="username" value="<?= $user->username ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="level">Level</label>
                                                                <select class="form-control" name="level" id="level" required>
                                                                    <option value="">Pilih Level</option>
                                                                    <option value="admin">Administrator</option>

                                                                    <option value="operator">Operator</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ganti Password</label>
                                                                <input type="password" name="password" class="form-control">
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
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <script>
                                $('#form-edit<?= $no ?>').submit(function(e) {
                                    e.preventDefault();
                                    $.ajax({
                                        type: 'POST',
                                        url: 'mod_user/crud_user.php?pg=ubah',
                                        data: $(this).serialize(),
                                        success: function(data) {
                                            if (data == 'OK') {
                                                iziToast.success({
                                                    title: 'OKee!',
                                                    message: 'Data Berhasil diubah',
                                                    position: 'topRight'
                                                });
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 2000);
                                                $('#modal-edit null').modal('hide');
                                            } else {
                                                iziToast.error({
                                                    title: 'Maaf!',
                                                    message: 'Data Gagal ditambahkan atau username sudah ada',
                                                    position: 'topRight'
                                                });
                                            }

                                            //$('#bodyreset').load(location.href + ' #bodyreset');
                                        }
                                    });
                                    return false;
                                });
                            </script>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#txtConfirmPassword").keyup(function() {
            var password = $("#txtNewPassword").val();
            $("#divCheckPasswordMatch").html(password == $(this).val() ? "Passwords match." : "Passwords do not match!");
        });

    });
    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_user/crud_user.php?pg=tambah',
            data: $(this).serialize(),
            success: function(data) {
                if (data == 'OK') {
                    iziToast.success({
                        title: 'Mantap!',
                        message: 'Data Berhasil ditambahkan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                    $('#tambahdata').modal('hide');
                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: 'Data Gagal ditambahkan atau username sudah ada',
                        position: 'topRight'
                    });
                }
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
                    url: 'mod_user/crud_user.php?pg=hapus',
                    method: "POST",
                    data: 'id_user=' + id,
                    success: function(data) {

                        iziToast.success({
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