<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | USSI Inventory</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/images/icon/8.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <!-- <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/icon/8.png" alt="IMG">
                </div> -->

                <form action="/auth/valid_login" method="post" class="login100-form validate-form">
                    <?= csrf_field() ?>
                    <span class="login100-form-title">
                        Login
                    </span>

                    <?php
                    $session = session();
                    $login = $session->getFlashdata('login');
                    $username = $session->getFlashdata('username');
                    $password = $session->getFlashdata('password');
                    ?>

                    <?php if ($username) { ?>
                        <p style="color:red"><?php echo $username ?></p>
                    <?php } ?>

                    <?php if ($password) { ?>
                        <p style="color:red"><?php echo $password ?></p>
                    <?php } ?>

                    <?php if ($login) { ?>
                        <p style="color:green"><?php echo $login ?></p>
                    <?php } ?>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="login">
                            Login
                        </button>
                    </div>
                    <hr>

                    <p class="text-center"><a href="<?= url_to('register') ?>">Belum punya akun?</a></p>

                    <div class="text-center p-t-127">
                        <span>Copyright &copy; PKL13 2022</span>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/js/main1.js"></script>

</body>

</html>