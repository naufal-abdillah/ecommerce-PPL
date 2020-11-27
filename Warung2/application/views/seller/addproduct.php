<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/simple-line-icons.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/smoothproducts.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a></div>
    </nav>
    <main class="add product">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Tambah Produk</h2>
                </div>
                <?php echo form_open_multipart('Seller/tambah_aksi'); ?>
                <div class="form-group">
                    <label for="namaBarang">Nama Barang</label>
                    <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga (Rupiah)</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="kategori">Pilih Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option value='elektronik'>Elektronik</option>
                        <option value='fashion'>Fashion</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gambar">Image file</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Tambah</button>
                <?php echo form_close(); ?>
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
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="<?php echo base_url('assets/js/smoothproducts.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>

</html>