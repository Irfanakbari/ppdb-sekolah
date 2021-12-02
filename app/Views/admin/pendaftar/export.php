<?php

// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=datasemua_pendaftar.xls");
?>
<style>
    .str {
        mso-number-format: \@;
    }
</style>
<table style="font-size: 12px" class="table table-striped table-sm" id="table-1">
    <thead>
        <tr>
            <th class="text-center">
                #
            </th>
            <th>NISN</th>
            <th>Nama Pendaftar</th>
            <th>Asal Sekolah</th>
            <th>No Hp</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($pendaftar as $daftar) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td class="str"><?= $daftar['nisn'] ?></td>
                <td><?= $daftar['nama'] ?></td>
                <td><?= $daftar['asal_sekolah'] ?></td>
                <td class="str">
                    <i class="fab fa-whatsapp text-success   "></i>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=62<?= $daftar['no_hp'] ?>"><?= $daftar['no_hp'] ?></a>
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

            </tr>

        <?php endforeach; ?>


    </tbody>
</table>