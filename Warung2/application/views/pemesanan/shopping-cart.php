<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shopping Cart - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/simple-line-icons.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/smoothproducts.css');?>">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>">Catalog</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?php echo base_url('Cart');?>">Shopping Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Login');?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="assets/img/tech/image2.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$120</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="assets/img/tech/image2.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$120</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="assets/img/tech/image2.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Lorem Ipsum dolor</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$120</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <h4><span class="text">Subtotal</span><span class="price">$360</span></h4>
                                <h4><span class="text">Discount</span><span class="price">$0</span></h4>
                                <h4><span class="text">Shipping</span><span class="price">$0</span></h4>
                                <h4><span class="text">Total</span><span class="price">$360</span></h4><button class="btn btn-primary btn-block btn-lg" type="button">Checkout</button></div>
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
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="<?php echo base_url('assets/js/smoothproducts.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js');?>"></script>
</body>

</html>