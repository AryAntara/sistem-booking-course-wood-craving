<div class="row">
    <div class="column-12">
        <ul class="daftar-menu">
            <li <?= $type == 'dashboard' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/dashboard') ?>">Beranda Admin</a></li>
            <li <?= $type == 'product' ? 'class="active"' : '' ?>><a href="<?= base_url('admin/product') ?>">Manajemen Product</a></li>
            <li><a href="<?= base_url("") ?>" target="_blank">Lihat Website</a></li>
            <li><a href="<?= base_url("admin/logout") ?>">logout</a></li>
        </ul>
    </div>
</div>