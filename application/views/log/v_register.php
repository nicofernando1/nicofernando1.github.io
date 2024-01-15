<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url();?>/assets/fontawesome/css/main.css">
    <!--FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">
    <!--BOOTSTRAPS-->
    <link rel="stylesheet" href="<?= base_url();?>/assets/bootstraps/css/bootstrap.min.css">
    <script src="<?= base_url();?>/assets/bootstraps/js/jquery-3-3.1.min.js"></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="<?= base_url();?>/assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/fontawesome/css/solid.css">

    <div class="top-text">
        <nav class="navbar bg-body-tertiary" style="text-align: center;"> <h2>Register ke <?= $judul?></h2>
    </div>
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>/assets/image/logoe.png" alt="Logo" >
            </a>
        </div>
    </nav>
</head>
<body style="background-image:url('http://localhost/Pertamina/assets/image/gam.jpg');">
    <section>
    <?= form_open('register/on_register')?>
        <div class="w3l-login-form">
            <h3>Silahkan Registrasi</h3>
            <div class="form-group mt-1">
                <label style="color:white;" >Name :</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?= set_value('name') ?>" autocomplete="off">
                        <?= form_error('name','<small class="text-danger pl-3" style="background-color:white;"><strong>','</strong></small>') ?>
                </div>
            </div>
            <div class="form-group">
                <label style="color:white;">Username :</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" class="form-control" placeholder="username" value="<?= set_value('username') ?>" autocomplete="off">
                    <?= form_error('username','<small class="text-danger pl-3" style="background-color:white;"><strong>','</strong></small>') ?>
                </div>
            </div>
            <div class="form-group">
                <label style="color:white;">Email :</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Email" name="email" class="form-control" value="<?= set_value('email') ?>" autocomplete="off">
                    <?= form_error('email','<small class="text-danger pl-3" style="background-color:white;"><strong>','</strong></small>') ?>
                </div>
            </div>
            <div class="form-group">
                <label style="color:white;">Password :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password1" class="form-control" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3" style="background-color:white;"><strong>','</strong></small>') ?>
                </div>
            </div>
            <div class="form-group">
                <label style="color:white;">Confirm Password :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password2" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form pt-0 pb-2 d-flex justify-content-end">
                <small class="text-light">Sudah punya akun? &nbsp; <a href="<?= base_url('auth') ?>" class="btn btn-sm bg-light">Login</a></small>
            </div>
            <button type="submit" name="daftar"  >Daftar</button>
            <?= form_close()?>

        </div>
        
    </section>
    
    <footer>
        <p class="copyright-agileinfo">&copy; 2023</p>
    </footer>

</body>
</html>