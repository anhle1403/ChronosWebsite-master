<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/cart.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">

    <title>Cart</title>
</head>

<body>

    <?php
    include './include/header.php'
    ?>


    <section class="my-transaction py-3 py-md-4 py-xl-5">
        <div class="container">
            <div class="row transaction text-center  mx-auto">
                <div class="px-1 px-sm-3 col-3 col-sm-3 transaction__checkOut transaction__item">
                    <span class="material-icons">
                        add_shopping_cart
                    </span>
                    <p>1. Checkout</p>
                </div>
                <div class="px-1 px-sm-3 col-5 col-sm-6 transaction__item  mx-auto">
                    <span class="material-icons">
                        payment
                    </span>
                    <div class=" row align-items-center justify-content-center flex-nowrap ">
                        <div class="col-2 col-sm-3 transaction__hr"></div>
                        <p class="px-1 px-sm-3 col-6 col-sm-6">2. Payment</p>
                        <div class="col-2 col-sm-3 transaction__hr"></div>
                    </div>

                </div>
                <div class="px-1 px-sm-3 col-4 col-sm-3 transaction__item">
                    <span class="material-icons">
                        description
                    </span>
                    <p>3. Confirmation</p>
                </div>
            </div>

        </div>
    </section>
    <section class="my-card pb-3 pb-md-4 pb-xl-5 ">
        <div class="container">
            <div class="cards  mx-auto">
                <div class="card__more mb-5">
                    <a class="d-flex align-items-center" href="<?php echo BASE_URL ?>/products">
                        <i class="material-icons mr-2">arrow_back_ios</i>
                        <p class="d-inline-block mb-0">Buy more products</p>
                    </a>
                </div>
                <div class="card__items">
                    <?php
                    if (isset($_SESSION["existProduct"])) {
                    ?>
                        <form action="<?php echo BASE_URL ?>/cart/updateCart" method="post">
                            <?php
                            foreach ($_SESSION["existProduct"] as $key => $value) {
                                $totalPrice = $value['productQuantity'] * $value['productPrice'];
                            ?>
                                <div class="card__item mb-5 d-flex flex-wrap align-items-center justify-content-between ">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3 mb-3 mb-xl-0 card__item__img">
                                            <img src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $value['productImage'] ?>" alt="<?php echo $value['productName'] ?>">
                                        </div>
                                        <div>
                                            <p class="card__item__name"><?php echo $value['productMovement'] ?>, <?php echo $value['productStrap'] ?>, <?php echo $value['productSize'] ?>mm(<?php echo $value['productName'] ?>)</p>
                                            <p class="card__item__price"><?php echo $value['productPrice'] ?><span>$</span></p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="m-0 d-flex align-items-center">
                                            <button class="material-icons icon-except product-quantity-subtract" onclick="decreaser('product_quantity[<?php echo $value['productId'] ?>]')">remove</button>
                                            <input type="text" id="product-quantity-input" class="product-quantity-input text-center mx-2" value="<?php echo $value['productQuantity'] ?>" name="product_quantity[<?php echo $value['productId'] ?>]" />
                                            <button class="material-icons icon-plus product-quantity-add" onclick="increaser('product_quantity[<?php echo $value['productId'] ?>]')">add</button>
                                            <span class="card__item-money "> <?php echo $totalPrice ?> </span>
                                            <span class="mr-2">Rp</span>
                                            <button data-toggle="modal" data-target="#exampleModal1" class="material-icons icon-delete" name="delete_product" value="<?php echo $value['productId'] ?>"> delete </button>
                                        <div class="modal fade modalConfirm" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">

                                            <button type="button" class="btn btn-primary btn-showModal d-none" data-toggle="modal" data-target="#exampleModal1">
                                                Launch demo modal
                                            </button>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body pt-5">
                                                        <p class="mb-1">You are about to delete a product</p>
                                                        <span>This will delete your product from cart</span>
                                                        <div class="text-right mt-4">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button class="btn btn-delete ml-3  " data-dismiss="modal" data-toggle="modal" data-target="#exampleModal2">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade modalDeleted" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body position-relative p-4">
                                                        <i class="material-icons icon-exit" data-dismiss="modal">
                                                            highlight_off
                                                        </i>
                                                        <p class="mb-2">Successfully Deleted</p>
                                                        <span>Done!</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            <?php

                            }
                            ?>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>

    </div>
    <section class="my-address ">
        <div class="container">
            <div class="w-75 mx-auto address py-3 py-md-4 py-xl-5">
                <h3>Billing Address</h3> 
                <p style="color: red"><?php if (!empty($error_message)) echo $error_message ?></p style="color: red">
                <form action="<?php echo BASE_URL ?>/cart/orderProduct" method="post">
                <?php
                    if (isset($info_user) && !empty($info_user)) {
                        while ($value = mysqli_fetch_assoc($info_user)) {
                    ?>
                    <div class=" form-group ">
                        <p class="form-text">Fullname</p>
                        <input type="text" class="form-control" name="name" placeholder="Ex: Fullname" value="<?php echo $value['customer_name'] ?>">
                        <p class="form-text">Email Address</p>
                        <input type="email" class="form-control" name="email" placeholder="Ex: rasyid.arsyad@gmail.com" value="<?php echo $value['customer_email'] ?>">
                        <p class="form-text">Phone Number</p>
                        <input type="text" class="form-control" name="phone" placeholder="Ex: 089111888999" value="<?php echo $value['customer_phone'] ?>">
                        <p class="form-text">Province/ City</p>
                        <div onclick="getProvinces()" class="position-relative">
                            <select name="city" id="provinces" class="provinces custom-select form-select"value="<?php echo $value['customer_city'] ?>">
                            </select>
                        </div>
                        <p class="form-text py-2">Dictrict</p>
                        <select name="district" id="dictricts" class="dictricts custom-select" value="<?php echo $value['customer_district'] ?>">
                        </select>
                        <p class="form-text py-2">Ward/ Commune</p>
                        <select name="ward" id="wards" class="wards custom-select" value="<?php echo $value['customer_ward'] ?>">
                        </select>
                        <p class="form-text py-2">Shipping Address</p>
                        <input type="text" class="form-control" name="address" placeholder="Ex: Patriot Street Number 666" value="<?php echo $value['customer_address'] ?>">
                    </div>
                    <div class="text-center">
                        <button class="btn form-btn" type="submit" name="order_now">Oder Now</button>
                    </div>
                    <?php
                        }
                    }
                    else{
                    ?>
                    <div class=" form-group ">
                        <p class="form-text">Fullname</p>
                        <input type="text" class="form-control" name="name" placeholder="Ex: Fullname" >
                        <p class="form-text">Email Address</p>
                        <input type="email" class="form-control" name="email" placeholder="Ex: rasyid.arsyad@gmail.com" >
                        <p class="form-text">Phone Number</p>
                        <input type="text" class="form-control" name="phone" placeholder="Ex: 089111888999" >
                        <p class="form-text">Province/ City</p>
                        <div onclick="getProvinces()" class="position-relative">
                            <select name="city" id="provinces" class="provinces custom-select form-select">
                            </select>
                        </div>
                        <p class="form-text py-2">Dictrict</p>
                        <select name="district" id="dictricts" class="dictricts custom-select" >
                        </select>
                        <p class="form-text py-2">Ward/ Commune</p>
                        <select name="ward" id="wards" class="wards custom-select" >
                        </select>
                        <p class="form-text py-2">Shipping Address</p>
                        <input type="text" class="form-control" name="address" placeholder="Ex: Patriot Street Number 666">
                    </div>
                    <div class="text-center">
                        <button class="btn form-btn" type="submit" name="order_now">Oder Now</button>
                    </div>
                    <?php }
                    ?>
                </form>
            </div>
        </div>
    </section>

    <?php
    include './include/footer.php'
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL ?>/public/JS/cart.js"></script>

</body>

</html>