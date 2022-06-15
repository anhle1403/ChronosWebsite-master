<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/payment.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/Assets/lib/css/bootstrap.min.css">

    <title>Payment</title>
</head>

<body>
    <?php
    include './include/header.php'
    ?>


    <section class="my-transaction py-3 py-md-4 py-xl-5">
        <div class="container">
            <div class="btn-back mt-3 mb-3 mb-lg-0">
                <a class="d-flex align-items-center" href="<?php echo BASE_URL ?>/cart">
                    <i class="material-icons mr-2">arrow_back_ios</i>
                    <p class="d-inline-block mb-0">Back</p>
                </a>
            </div>
            <div class="row transaction text-center  mx-auto">
                <div class="px-1 px-sm-3 col-3 col-sm-3  transaction__item">
                    <span class="material-icons">
                        add_shopping_cart
                    </span>
                    <p>1. Checkout</p>
                </div>
                <div class="px-1 px-sm-3 col-6 col-sm-6 transaction__payment transaction__item  mx-auto">
                    <span class="material-icons">
                        payment
                    </span>
                    <div class=" row align-items-center justify-content-center flex-nowrap ">
                        <div class="col-2 col-sm-3 transaction__hr"></div>
                        <p class="px-1 px-sm-3 col-6 col-sm-6">2. Payment</p>
                        <div class="col-2 col-sm-3 transaction__hr"></div>
                    </div>

                </div>
                <div class="px-1 px-sm-3 col-3 col-sm-3 transaction__item">
                    <span class="material-icons">
                        description
                    </span>
                    <p>3. Confirmation</p>
                </div>
            </div>

        </div>
    </section>
    <section class="my-card py-3 py-md-4 py-xl-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" id="left-container">
                    <div class="col-12 py-5" id="detail-order">
                        <?php if (!empty($total_price)) {
                        ?>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Detail Order</h3>
                                </div>
                                <div class="col-6">
                                    <p>Subtoal</p>
                                    <p>Shipping code</p>
                                    <p>Packaging</p>
                                </div>
                                <div class="col-6">
                                    <p>Rp <?php echo $total_price ?></p>
                                    <p>Rp 50</p>
                                    <p>Rp 50</p>
                                </div>
                            <?php
                        } ?>
                            <hr style="width: 100%;">
                            <div class="col-6">
                                <p style="margin-bottom: 0px;">Grand Total</p>
                            </div>
                            <div class="col-6">
                                <h5 class="grand-total">Rp <?php if (!empty($grand_total)) echo $grand_total ?></h5>
                            </div>

                            </div>

                    </div>
                    <div class="col-12" id="delivery">
                        <h4>Delivery Instructions:</h4>
                        <p style="margin-bottom: 0px;">The system will ask you to login to your USPS.com account (you
                            can set one up at that time, if you don't already have one). Follow the prompts to see if
                            your address is eligible and to then specify for delivery.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6" id="right-container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Order Detail</h3>
                        </div>
                        <div class="col-5">
                            <p>Order Number</p>
                        </div>
                        <div class="col-7">
                            <p> <?php if (!empty($orderNumber)) echo $orderNumber ?> </p>
                            <p class="blockquote">Always remember Order Number for easy tracking</p>
                        </div>
                        <div class="col-5">
                            <p>Items</p>
                        </div>
                        <div class="col-7">
                            <?php if (isset($get_product) && !empty($get_product)) {
                                while ($product_order = mysqli_fetch_assoc($get_product)) {
                            ?>
                                    <p><?php echo $product_order['productMovement'] ?>, <?php echo $product_order['productStrap'] ?>, <?php echo $product_order['productSize'] ?>mm (<?php echo $product_order['productName'] ?>)</p>
                                    <p class="blockquote"><?php echo $product_order['productQuantity'] ?> x IDR <?php echo $product_order['productPrice'] ?></p>
                            <?php }
                            } ?>
                        </div>
                        <?php
                        if (isset($get_information) && !empty($get_information)) {
                            $value = mysqli_fetch_assoc($get_information);
                        ?>
                            <div class="col-5">
                                <p>Name</p>
                            </div>
                            <div class="col-7">
                                <p><?php echo $value['name'] ?></p>
                            </div>
                            <div class="col-5">
                                <p>Phone</p>
                            </div>
                            <div class="col-7">
                                <p>+<?php echo $value['phone'] ?></p>
                            </div>
                            <div class="col-5">
                                <p>Email</p>
                            </div>
                            <div class="col-7">
                                <p><?php echo $value['email'] ?></p>
                            </div>
                            <div class="col-5">
                                <p>Shipping Address</p>
                            </div>
                            <div class="col-7">
                                <p class="shipping"><?php echo $value['address'] ?>, <?php echo $value['ward'] ?>, <?php echo $value['district'] ?>, <?php echo $value['city'] ?></p>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>

                <form action="<?php echo BASE_URL ?>/payment/proceedPayment" method="post">
                    <input type="hidden" name="payment_number" value="<?php if (!empty($orderNumber)) echo $orderNumber ?>" />
                    <div class="col-12" id="payment-method">
                        <div class="row">
                            <div class="col-12">
                                <h3>Payment Method</h3>
                            </div>
                            <div class="col-6 col-md-4 col-xl-3">
                                <input type="radio" name="payment_proceed" value="BNI Cicilan" class="txt" checked="checked" /><label> BNI Cicilan 0%</label>
                                <br>
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/bni.png" class="img">
                            </div>
                            <div class="col-6 col-md-4 col-xl-3">
                                <input type="radio" name="payment_proceed" value="Mandiri Cicilan" class="txt" /><label> Mandiri Cicilan 0%</label>
                                <br>
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/mandiri.png" class="img">
                            </div>
                            <div class="col-6 col-md-4 col-xl-3">
                                <input type="radio" name="payment_proceed" value="Bank Transfer" class="txt" /><label>Bank Transfer</label>
                                <br>
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/permatabank.png" class="img">
                            </div>
                            <div class="col-6 col-xl-3">
                                <input type="radio" name="payment_proceed" value="Credit Card" class="txt" /><label>Credit Card</label>
                                <br>
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/mastercard.png">
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/visa.png">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="radio" name="payment_proceed" value="Credit Card Cicilan" class="txt" /><label>Credit Card Cicilan 0%</label>
                                <br>
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/danamon.png" class="img">
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/uob.png" class="img" id="oub">
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/standard chartered.png" class="img" id="standard">
                            </div>
                            <div class="col-6 col-xl-3">
                                <input type="radio" name="payment_proceed" value="GO-PAY" class="txt" /><label>GO-PAY</label>
                                <br>
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/gopay.png" class="img">
                            </div>
                            <div class="col-6 col-xl-3">
                                <input type="radio" name="payment_proceed" value="Kredivo" class="txt" /><label>Kredivo</label>
                                <br>
                                <img src="<?php echo BASE_URL ?>/Assets/pmImg/kredivo.png" class="img">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-pp" type="submit" name="payment_method">Proceed Payment</button>
                    </div>
                </form>
            </div>

        </div>
    </section>


    <?php
    include './include/footer.php'
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
</body>

</html>