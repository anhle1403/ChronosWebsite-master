<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/signin.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <title>Sign In</title>
</head>

<body>
    <?php
    include './include/header.php'
    ?>
    <div class="text-right btn-admin container mt-5 mb-3 mb-md-0">
                <a href="<?php echo BASE_URL ?>/admin">Login as admin</a>
            </div>
    <div class="my-body mx-auto pb-5">
        <div class="title text-center">
           
            <h3>MY ACCOUNT</h3>
            <div class="title-btn">
                <a class="btn-sign">SIGN IN</a>
                <a href="<?php echo BASE_URL ?>/user/signup" class="btn-create">CREATE AN ACCOUNT</a>
            </div>
            <h2 class="pt-3">WELLCOME!</h2>
            <h4 class="py-3">Log in using your email address and password.</h4>
            <h5 class="text-left pb-4"><?php if (!empty($error_message)) echo $error_message ?></h5>
        </div>
        <div class="address ">
            <form action="<?php echo BASE_URL ?>/user/signin" method="POST">
                <div class=" form-group ">
                    <p class="form-text">Email Address</p>
                    <input type="text" class="form-control" name="email" value="<?php if (isset($_COOKIE['email'])) echo $_COOKIE['email']  ?>" placeholder="Ex: rasyid.arsyad@gmail.com" required autocomplete>
                    <p class="form-text py-2">Password</p>
                    <div class="position-relative">
                        <input type="password" name="password" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password']  ?>" class="form-control form-passWord" required autocomplete>
                        <span onclick="ShowPassWord()" class="material-icons icon-eye">visibility_off</span>
                    </div>
                </div>
                <a href="<?php echo BASE_URL ?>/user/forgotpassword" class="forgot-password">Forgot the password?</a>
                <div class="form-checkbox d-flex mt-4">
                    <input type="checkbox"  name="remember" class="mt-1">
                    <p class="pl-3">Remember me</p>
                </div>
                <div class="text-center">
                    <button class="btn form-btn w-100" type="submit" name="submit">SIGN IN</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include './include/footer.php'
    ?>
    <script src="<?php echo BASE_URL ?>/public/JS/signin.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>

</body>

</html>