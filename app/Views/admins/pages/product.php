<?= $this->extend("admins/layouts/index") ?>
<?= $this->section("content") ?>
<div class="container" style="min-height:80vh;">
    <?= $this->include('admins/includes/navbar') ?>

    <div class="row">
        <div class="product">
            <div class="column-12">
                <h1 align="center">Halaman Manajemen Product</h1>
                <br />
                <br />
                <br />
            </div>
            <div class="column-12">
                <div class="text-right">
                    <a href="<?= base_url('admin/product/add') ?>" class="btn btn-success">Tambah Product</a>
                </div>
                <br />
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar Product</th>
                            <th>Nama Product</th>
                            <th>Harga Product</th>
                            <th>Deskripsi Product</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($products as $number => $product) { ?>
                            <tr>
                                <td align="center">
                                    <?= $number + 1 ?>.
                                </td>
                                <td align="center">
                                    <img src="<?= base_url("images/" . $product['product_image']) ?>" width="250px" height="250px" style="object-fit: cover"> </img>
                                </td>
                                <td align="center">
                                    <?= $product['product_name'] ?>
                                </td>
                                <td align="center">
                                    <?= 'Rp. '. number_format($product['product_price']) ?>
                                </td>
                                <td align="left">
                                    <p style="margin-left: 20px">
                                    <?php foreach($product['benefit_points'] as $benefit_point){
                                        if(!$benefit_point) continue;
                                        ?>
                                        - <?= $benefit_point ?><br />
                                    <?php } ?>
                                    </p>
                                </td>
                                <td align="center">
                                    <a href="<?= base_url('admin/product/edit/'.$product['id_product']) ?>"
                                        class="btn btn-success">Edit</a>
                                    <a href="<?= base_url('admin/product/delete') ?>?id_product=<?= $product['id_product'] ?>"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>