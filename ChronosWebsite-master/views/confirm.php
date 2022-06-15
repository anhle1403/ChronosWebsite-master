<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/CSS/confirm.css">
    <link rel="stylesheet" href="../public/CSS/header.css">
    <link rel="stylesheet" href="../public/CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="../Assets/lib/css/bootstrap.min.css">
    <title>Confirm</title>
</head>

<body>
    <?php
    include './include/header.php'
    ?>


    <section class="my-transaction py-3 py-md-4 py-xl-5">
        <div class="container">

            <div class="row transaction text-center  mx-auto">
                <div class="px-1 px-sm-3 col-3 col-sm-3  transaction__item">
                    <span class="material-icons">
                        add_shopping_cart
                    </span>
                    <p>1. Checkout</p>
                </div>
                <div class="px-1 px-sm-3 col-6 col-sm-6 transaction__item  mx-auto">
                    <span class="material-icons">
                        payment
                    </span>
                    <div class=" row align-items-center justify-content-center flex-nowrap ">
                        <div class="col-2 col-sm-3 transaction__hr"></div>
                        <p class="px-1 px-sm-3 col-6 col-sm-6">2. Payment</p>
                        <div class="col-2 col-sm-3 transaction__hr"></div>
                    </div>
                </div>
                <div class="px-1 px-sm-3 col-3 col-sm-3 transaction__confirmation transaction__item">
                    <span class="material-icons">
                        description
                    </span>
                    <p>3. Confirmation</p>
                </div>
            </div>
        </div>
    </section>
    <section class="my-confirmation py-3 py-md-4 py-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 text-center confirmation-left">
                    <div class="w-75 mx-auto">
                        <img src="../Assets/pmImg/CheckIcon.jpg" class="w-100" alt="">
                        <p class="mt-3 mb-2 mt-md-5 mb-md-4">Order Confirmed</p>
                        <span class="mb-3 mb-md-5">Your order have been confirmed, please wait and track your
                            order</span>
                        <button class="btn btn-hp"><a href="<?php echo BASE_URL ?>/index">Go to track page</a></button>
                    </div>
                </div>
                <div class="col-12 col-md-6 confirmation-right ">
                    <div class="confirmation__timeShip d-flex align-items-center">
                        <i class="material-icons"> schedule</i>
                        <span>10 days delivery</span>
                        <i class="material-icons">airport_shuttle </i>
                        <span>DHL Express</span>
                    </div>
                    <div class="confirmation__products my-4">
                        <?php if (isset($product_order) && !empty($product_order)) {
                            $subtotal = 0;
                            while ($value = mysqli_fetch_assoc($product_order)) {
                                $subtotal += $value['productPrice'] * $value['productQuantity'];
                        ?>
                                <p class="confirmation__products-name"><?php echo $value['productMovement'] ?>, <?php echo $value['productStrap'] ?>, <?php echo $value['productSize'] ?>mm</p>
                                <p class="confirmation__products-price"><?php echo $value['productQuantity'] ?> x IDR <?php echo $value['productName'] ?></p>
                        <?php }
                        } ?>
                    </div>
                    <div class="confirmation__money row">
                        <p class="col-5 ">Subtotal</p>
                        <p class="col-7 ">Rp <span class="confirmation__money-subtotal"><?php if (!empty($subtotal)) echo $subtotal ?></span></p>
                        <p class="col-5">Shipping Cost </p>
                        <p class="col-7 ">Rp <span class="confirmation__money-ship">50</span>
                        <p class="col-5 ">Packaging </p>
                        <p class="col-7 ">Rp <span class="confirmation__money-packaging">50</span>
                    </div>
                    <?php if (isset($shipping_order) && !empty($shipping_order)) {
                        $ship_order = mysqli_fetch_assoc($shipping_order);

                    ?>
                        <div class="row confirmation__grandTotal my-2  my-md-4 py-2 py-md-3">
                            <p class="col-5 ">Grand Total</p>
                            <p class="col-7 confirmation__grandTotal-money">Rp <span class="confirmation__money-subtotal"><?php echo $ship_order['grandTotal'] ?></span></p>
                        </div>
                        <div class="row confirmation__address">
                            <p class="col-5 ">Shipping Address</p>
                            <p class="col-7 "><?php echo $ship_order['address'] ?>, <?php echo $ship_order['ward'] ?>, <?php echo $ship_order['district'] ?>, <?php echo $ship_order['city'] ?></p>
                        </div>

                         </div>
                    <?php
                    }
                     ?>
            </div>
        </div>
    </section>

    <?php
    include './include/footer.php'
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="../Assets/lib/js/bootstrap.min.js"></script>

</body>

</html>