<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/signup.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <title>Sign Up</title>
</head>

<body>
    <?php
    include './include/header.php'
    ?>

    <div class="my-body mx-auto py-5">
        <div class="title text-center">            
            <h3>MY ACCOUNT</h3>
            <div class="title-btn">
                <a href="<?php echo BASE_URL ?>/user/signin" class="btn-sign">SIGN IN</a>
                <a class="btn-create">CREATE AN ACCOUNT</a>
            </div>
            <h4 class="mt-3">Create an account to get a personalized shopping</h4>
            <h4>experience and order faster.</h4>
            <h5 class="text-left pb-4"><?php if (!empty($error_message)) echo $error_message ?></h5>
            <h5 style="color: #0b9f09"><?php if (!empty($success_message)) echo $success_message ?></h5>
        </div>
        <div class="address ">
            <form action="<?php echo BASE_URL ?>/user/signup" method="POST">
                <div class=" form-group ">
                    <p class="form-text">Fullname</p>
                    <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                    <p class="form-text">Email Address</p>
                    <input type="text" class="form-control" name="email" placeholder="Ex: rasyid.arsyad@gmail.com">
                    <p class="form-text">Phone Number</p>
                    <input type="text" class="form-control" name="phone" placeholder="Ex: 089111888999">

                    <p class="form-text">Province/ City</p>
                    <div class="position-relative">
                        <select name="city" id="provinces" class="provinces custom-select">
                        </select>
                    </div>
                    <p class="form-text py-2">Dictrict</p>
                    <select name="district" id="dictricts" class="dictricts custom-select">
                    </select>
                    <p class="form-text py-2">Ward/ Commune</p>
                    <select name="ward" id="wards" class="wards custom-select">
                    </select>
                    <p class="form-text py-2">Shipping Address</p>
                    <input type="text" name="address" class="form-control" placeholder="Ex: Patriot Street Number 666">
                    <p class="form-text py-2">Password</p>
                    <div class="position-relative">
                        <input type="password" name="password" class="form-control form-passWord">
                        <span onclick="ShowPassWord()" class="material-icons icon-eye">visibility_off</span>
                    </div>
                </div>
                <h4></h4>

                <div class="form-checkbox d-flex mt-4">
                    <input type="checkbox" value="check" name="confirm" class="mt-2 mr-2">
                    <p>I authorize CHRONOS to send me marketing information relating to CHRONOS creations by e-mail, telephone, letter, messaging or SMS.</p>
                </div>
                <div class="text-center">
                    <button class="btn form-btn w-100" type="submit" name="submit">CREATE AN ACCOUNT</button>
                </div>
            </form>
        </div>
    </div>


    <?php
    include './include/footer.php'
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL ?>/public/JS/signup.js"></script>

</body>

</html>