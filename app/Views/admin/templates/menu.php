<ul class="sidebar-menu">
    <li class="menu-header">Main Menu</li>
    <li><a class="nav-link" href="<?= base_url() ?>/admin"><i class="fas fa-home fa-fw"></i> <span>Beranda</span></a></li>


    <li><a class="nav-link" href="?pg=sekolahpilihan"><i class="fas fa-school"></i> <span>Sekolah Pilihan</span></a></li>
    <?php if (in_groups('admin')) : ?>
        <li class="dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire fa-fw"></i> <span>Data Master</span></a>
            <ul class="dropdown-menu">
                <!-- <li><a class="nav-link" href="?pg=sekolah">Master Sekolah Asal</a></li> -->

                <li><a class="nav-link" href="<?= base_url() ?>/admin/jurusan">Master Jurusan</a></li>

            </ul>
        </li>
    <?php endif; ?>

    <li class="dropdown ">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Data Pendaftar</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url() ?>/admin/pendaftar">Semua Data</a></li>
            <li><a class="nav-link text-success" href="<?= base_url() ?>/admin/pendaftarditerima">Data Diterima</a></li>
            <li><a class="nav-link text-danger" href="<?= base_url() ?>/admin/pendaftarpending">Dipending / Cadangan</a></li>
        </ul>
    </li>





    <li class="dropdown ">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe"></i> <span>Web</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url() ?>/admin/kontak">Kontak Pendaftaran</a></li>
            <li><a class="nav-link text-success" href="<?= base_url() ?>/admin/syarat">Info Persyaratan</a></li>
        </ul>
    </li>

    <li class="dropdown ">
        <a class="nav-link has-dropdown" href="#"><i class="fab fa-whatsapp    "></i> <span> Pesan</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link " href="<?php base_url() ?>/admin/wa/device">Device</a></li>
            <li><a class="nav-link " href="<?= base_url() ?>/admin/wa/pesan">Kirim Pesan</a></li>
            <!-- <li><a class="nav-link" href="?pg=riwayatpesan">Riwayat Pesan</a></li> -->
        </ul>
    </li>



    <?php if (in_groups('admin')) : ?>
        <li><a class="nav-link" href="<?= base_url() ?>/admin/pengumuman"><i class="fas fa-bullhorn fa-fw"></i> <span>Pengumuman</span></a></li>


        <li class="menu-header">Pengaturan</li>
        <li><a class="nav-link" href="<?= base_url() ?>/admin/users"><i class="fas fa-user-friends    "></i> <span>Manajemen User</span></a></li>
        <li><a class="nav-link" href="<?= base_url() ?>/admin/setting"><i class="fas fa-toolbox"></i> <span>Pengaturan Aplikasi</span></a></li>
    <?php endif; ?>

</ul>