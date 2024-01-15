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
        <nav class="navbar bg-body-tertiary" style="text-align: center;"> <h2>Login ke <?= $judul?></h2>
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
        <form class="users" method="post" action="<?= base_url('auth/on_login') ?>">
        <div class="w3l-login-form">
        <?= $this->session->flashdata('pesan') ?>
            <h3>Silahkan Login</h3>
            <div class="w3l-form-group">
                <label>Email :</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off">
                </div>
            </div>
            <div class="w3l-form-group">
                <label>Password :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password1" class="form-control" placeholder="Password" >
                </div>
            </div>

            <div class="mb-2">
                <button type="submit">Login</button>
            </div>
            <div class="mt-3 d-flex justify-content-center text-center">
                <a href="<?= base_url('register')?>" class="text-white" style="background: #fc3955;
                color: #ffffff;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 1px;
                border: none;
                padding: 12px 60px;
                cursor: pointer;
                width: 100%;
                border-radius: 6px;
                ">
                Daftar
                </a>
            </div>

        </div>
        <?php form_close() ?>
    </section>
    
    <footer>
        <p class="copyright-agileinfo">&copy; 2023</p>
    </footer>

</body>
</html>