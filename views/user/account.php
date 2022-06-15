<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/account.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <title>Profile</title>
</head>

<body>

    <?php
    include './include/header.php'
    ?>
   <div class="container">
        <div class="btn-back mt-3 mb-3 mb-lg-0">
            <a class="d-flex align-items-center" href="<?php echo BASE_URL ?>">
                <i class="material-icons mr-2">arrow_back_ios</i>
                <p class="d-inline-block mb-0">HOME PAGE</p>
            </a>
        </div>
    </div>
    <div class="my-body mx-auto py-5">
        <div class="title text-center">
            <h3>PERSONAL PROFILE</h3>
            <?php if (!empty($error_message)) echo $error_message ?>
        </div>
        <div class="address ">
            <?php
            if (isset($getAccountById) && !empty($getAccountById)) {
                while ($value = mysqli_fetch_assoc($getAccountById)) {
            ?> 
                    <form action="<?php echo BASE_URL ?>/user/getAccountById/<?php echo $value['customer_id'] ?>" method="POST">
                        <div class=" form-group ">
                            <p class="form-text">Fullname</p>
                            <input type="text" name="fullname" value="<?php echo $value['customer_name'] ?>" class="form-control txt-name" placeholder="Ex: Rasyidin Arsyad Nasution">
                            <p class="form-text">Email Address</p>
                            <input type="text" name="email" value="<?php echo $value['customer_email'] ?>" class="form-control txt-email" placeholder="Ex: rasyid.arsyad@gmail.com">
                            <p class="form-text">Phone Number</p>
                            <input type="text" name="phone" value="<?php echo $value['customer_phone'] ?>" class="form-control txt-phone" placeholder="Ex: 089111888999">

                            <p class="form-text">Province/ City</p>
                            <div class="position-relative">
                                <select name="city" value="<?php echo $value['customer_city'] ?>" id="provinces" class="provinces custom-select">
                                </select>
                            </div>
                            <p class="form-text py-2">Dictrict</p>
                            <select name="district" value="<?php echo $value['customer_district'] ?>" id="dictricts" class="dictricts custom-select">
                            </select>
                            <p class="form-text py-2">Ward/ Commune</p>
                            <select name="ward" value="<?php echo $value['customer_ward'] ?>" id="wards" class="wards custom-select">
                            </select>
                            <p class="form-text py-2">Shipping Address</p>
                            <input type="text" name="address" value="<?php echo $value['customer_address'] ?>" class="form-control txt-address" placeholder="Ex: Patriot Street Number 666">
                            <p class="form-text py-2">Password</p>
                            <div class="position-relative">
                                <input type="password" name="password" class="form-control form-passWord">
                                <span onclick="ShowPassWord()" class="material-icons icon-eye">visibility_off</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn form-btn w-100" type="submit" name="submit">UPDATE YOUR PROFILE</button>
                        </div>
                    </form>
            <?php }
            } ?>
            <div class="text-center mt-4 ">
                <a href="<?php echo BASE_URL ?>/user/logout" class=" log-out">Log out</a>
            </div>
        </div>
    </div>


    <?php
    include './include/footer.php'
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL ?>/public/JS/account.js"></script>

</body>

</html>