<?php
//require_once "../configuration/library.php";
//require_once "../configuration/database_connection.php";
//check_admin();
//$id_product = $_GET['id_product'];
//$sql = "SELECT * FROM product WHERE id_product=$id_product";
//$result = $conn->query($sql);
//echo mysqli_error($conn);
//$row =mysqli_fetch_array($result);
//?>
<!---->
<!--<html>-->
<!--<head>-->
<!--    <title>ADMIN PEKEN JANGER</title>-->
<!--    <link rel="stylesheet" type="text/css" href="style.css">-->
<!--    <link rel="stylesheet" type="text/css" href="plugins/fancybox/jquery.fancybox.css">-->
<!--</head>-->
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="column-12">-->
<!--            <ul class="daftar-menu">-->
<!--                <li><a href="../admin">Beranda Admin</a></li>-->
<!--                <li class="active"><a href="manajemen_product.php">Manajemen Product</a></li>-->
<!--                <li><a href="../index.php" target="_blank">Lihat Website</a></li>-->
<!--                <li><a href="process/logout.php">logout</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<?= $this->extend("admins/layouts/index") ?>
<?= $this->section("content") ?>
<div class="container" style="min-height:80vh;">
    <?= $this->include("admins/includes/navbar", ['type' => 'product']) ?>
    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Manajemen Product</h1>
            <br/>
            <br/>
            <br/>
        </div>
        <div class="column-12">
            <h3>Isi form dibawah untuk Tambah Product :</h3>
            <form action="<?= base_url('admin/product/update/') . $product_entry['id_product'] ?>" method="post"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" class="form-control" name="product_name"
                           value="<?= ucfirst($product_entry['product_name']) ?>"
                           required>
                </div>
                <div class="form-group">
                    <label>Harga Product</label>
                    <input type="number" class="form-control" name="product_price"
                           value="<?= $product_entry['product_price'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Gambar Product</label>
                    <br/>
                    <img id="preview" src="<?= base_url('images/' . $product_entry['product_image']) ?>" width="150">
                    <br/>
                    <br/>
                    <input type="file" class="form-control" name="product_image">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="product_description"
                              required><?= $product_entry['product_description'] ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Perbaharui Product</button>
                    <a href="<?= base_url('admin/product') ?>" class="btn btn-warning">Kembali ke Daftar Product</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready( function() {
        console.log("X");
        $("[name=product_image]").on("change", function () {
            const input = $(this)
                , file = input.files[0]
                , url = URL.createObjectURL(file);

            console.log($("#preview").attr('src', url));
        })
    })
</script>
<?= $this->endSection() ?>
<!--</div>-->

