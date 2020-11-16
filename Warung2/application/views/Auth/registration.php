<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
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
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Cart');?>">Shopping Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Login');?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form method = "post" action = "<?= base_url('index.php/auth/registration'); ?>" >
                    <div class="form-group"><label for="name">Name</label><input name = "name" class="form-control item" type="text" id="name"> <small><?= form_error('name');?></small></div>
                    <div class="form-group"><label for="email">Email</label><input name = "email" class="form-control item" type="email" id="email"><small><?= form_error('email');?></small></div>
                    <div class="form-group"><label for="password">Password</label><input name ="password" class="form-control item" type="password" id="password"><small><?= form_error('password');?></small></div>
                    <div class = "form-group"><label for = "gender">gender</label>
                        <select id = "gender" name = "gender">
                            <option value = "male">male</option>
                            <option value = "female">female</option>
                        </select>
                    </div>
                    <div class="form-group"><label for="telp">Phone Number</label><input name = "phone" class="form-control item" type="number" id="telp"><small><?= form_error('phone');?></small></div><button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    <div class = "form-group"><a href = "<?php base_url($uri = '');?>">Already have an account?</a></div> <?php // yang ini belom bekerja dengan baik?>
                </form>
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