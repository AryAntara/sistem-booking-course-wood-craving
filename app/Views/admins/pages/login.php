<?= $this->extend("admins/layouts/index") ?>
<?= $this->section("content") ?>
<div class="container">
    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Login</h1>
            <hr />
        </div>
        <div class="column-6">
            <img src="<?= base_url('admins/images/login.jpg') ?>" class="img-responsive">
        </div>
        <div class="column-6">
            <br />
            <br />
            <br />
            <h3>Isi form dibawah untuk login :</h3>
            <?php
            
            $errorMessage = session('gagal');            
            if ($errorMessage) { ?>
                <p class="text-error"> <?= $errorMessage ?> </p>
            <?php } ?>
            <form action="<?= base_url('admin/login') ?>" method="post">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Login</button>\
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>