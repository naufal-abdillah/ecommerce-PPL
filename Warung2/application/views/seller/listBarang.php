<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>






<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="<?php if (isset($_SESSION['logged_in'])) {
                                                                                echo base_url('Auth/logout');
                                                                            } else {
                                                                                echo base_url('Auth');
                                                                            } ?>">
                            <?php if (isset($_SESSION['logged_in'])) {
                                echo ("Log out");
                            } else {
                                echo ("Log in");
                            } ?></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-heading">

                </div>
                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <?php echo ("Nama Seller : " . $_SESSION['namaSeller']); ?>
                    </div>
                    <div class="card-header">
                        <?php echo anchor('Seller/addproduct', '<div class="btn btn-sm btn-success"> + Tambah Produk</div>') ?>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($barang as $product) : ?>
                                        <tr>
                                            <td width="150">
                                                <?php echo $product->namaBarang ?>
                                            </td>
                                            <td>
                                                RP. <?php echo number_format($product->harga, 0, ',', '.') ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('/assets/img/' . $product->gambar) ?>" width="64" />
                                            </td>
                                            <td class="small">
                                                <?php echo substr($product->deskripsi, 0, 150) ?>...</td>
                                            <td>
                                                <?php echo $product->kategori ?>
                                            </td>
                                            <td width="300">
                                                <a href="<?php echo base_url('Seller/preview/' . $product->idBarang) ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Preview</a>
                                                <a href="<?php echo base_url('Seller/update/' . $product->idBarang) ?>" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="deleteConfirm('Are you Sure?')" href="<?php echo base_url('Seller/delete/' . $product->idBarang) ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>