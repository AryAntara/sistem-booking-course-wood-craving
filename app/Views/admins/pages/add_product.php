<?= $this->extend("admins/layouts/index") ?>
<?= $this->section("content") ?>
<div class="container" style="min-height:80vh;">
    <?= $this->include("admins/includes/navbar", ['type' => 'product']) ?>
    <div class=" row">
        <div class="column-12">
            <h1 align="center">Halaman Manajemen Product</h1>
            <br />
            <br />
            <br />
        </div>
        <div class="column-12">
            <h3>Isi form dibawah untuk Tambah Product :</h3>
            <form action="<?= base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" class="form-control" name="product_name" required>
                </div>
                <div class="form-group">
                    <label>Harga Product</label>
                    <input type="number" class="form-control" name="product_price" required>
                </div>
                <div class="form-group">
                    <label>Gambar Product</label>
                    <input type="file" class="form-control" name="product_image" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="product_description" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Product</button>
                    <a href="<?= base_url('admin/product') ?>" class="btn btn-warning">Kembali ke Daftar
                        Product</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>