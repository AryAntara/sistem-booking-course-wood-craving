<?= $this->extend("admins/layouts/index") ?>
<?= $this->section("content") ?>
<div class="container" style="min-height:80vh;">
    <?= $this->include('admins/includes/navbar',['type' => 'dashbord']) ?>
    <div class="container">
        <div class="row">
            <h1 align="center">Halaman Admin</h1>
            <div class="text-center">
                <img src="<?= base_url("admins/images/admin.jpg") ?>" width="50%">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>