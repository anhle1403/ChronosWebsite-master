<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/forgot.css">
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

<div class="my-body mx-auto py-5">
        <div class="title text-center">
            <h3>FORGOTTEN PASSWORD</h3>
            <h4 class="text-center pb-4">Enter your email to reset your password</h4>
        </div>        
        <div class="address ">
            <form action="/payment.html">
                <div class=" form-group mb-0">
                    <p class="form-text">Email</p>
                    <input type="email" class="form-control" placeholder="Ex: rasyid.arsyad@gmail.com">                
                </div>
                <div class="text-center">
                    <button class="btn form-btn w-100"><a href="">RESET YOUR PASSWORD</a></button>
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


</body>

</html>