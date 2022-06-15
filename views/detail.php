<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/detail.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <title>Details</title>
</head>

<body>
    <?php
    include './include/header.php'
    ?>

    <div class="my-details mt-4">
        <div class="container">
            <div class="btn-back my-4">
                <a class="d-flex align-items-center" href="<?php echo BASE_URL ?>/products">
                    <i class="material-icons mr-2">arrow_back_ios</i>
                    <p class="d-inline-block mb-0">Back</p>
                </a>
            </div>
            <?php
            if (isset($detail_product) && !empty($detail_product)) {
                $value = mysqli_fetch_assoc($detail_product);
                $movement = $value['productMovement'];
                $price = $value['productPrice'];
                $strap = $value['productStrap'];
                $size = $value['productSize'];
                $image = $value['productImage'];
                $productName = $value['productName'];
            ?>
                <form action="<?php echo BASE_URL ?>/cart/addToCart" method="POST">
                    <input type="hidden" name="productId" value="<?php echo $value['productId'] ?>" />
                    <input type="hidden" name="productName" value="<?php echo $productName ?>" />
                    <input type="hidden" name="productPrice" value="<?php echo $price ?>" />
                    <input type="hidden" name="productMovement" value="<?php echo $movement ?>" />
                    <input type="hidden" name="productStrap" value="<?php echo $strap ?>" />
                    <input type="hidden" name="productSize" value="<?php echo $size ?>" />
                    <input type="hidden" name="productImage" value="<?php echo $image ?>" />
                    <input type="hidden" name="productQuantity" value="1" />
                    <h3 style="font-size: 20px; margin-bottom: 30px;  ">CHRONOS: <span class="title__movement"><?php echo $movement ?></span> <span class="title__strap"><?php echo $strap ?></span> Strap - <span class="title__size"><?php echo $size ?>mm</span> (<span class="title__name"><?php echo $productName ?></span>)</h3>
                    <hr>
                    <div class="row py-3 mb-3">
                        <div class="productShow col-8 col-sm-5 col-lg-3 mb-5 mx-auto ">
                            <div class="row">
                                <div class="col-12 mb-5">
                                    <img class="w-100 product__imgShow " src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $image ?>" alt="<?php echo $productName ?>">
                                </div>

                                <div class=" productImg col-6 ">
                                    <img class="w-100 product__img1" src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $image ?>" alt="<?php echo $productName ?>" onclick=zoomImg(this)>
                                </div>
                                <div class=" productImg col-6">
                                    <img class="w-100 product__img2 " src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $value['productImageDetail'] ?>" alt="<?php echo $productName ?>" onclick=zoomImg(this)>
                                </div>
                            </div>
                        </div>
                        <div class=" inforProduct col-10 col-sm-7 col-lg-9 mx-auto  ">
                            <p class="product__content"><?php echo $value['productDesc'] ?></p>
                            <ul class="productDetail">
                                <li class="product__li1">Case size (3H-9H): <?php echo $size ?>mm</li>
                                <li class="product__li2"><?php echo $value['productDetail1'] ?></li>
                                <li class="product__li3"><?php echo $value['productDetail2'] ?></li>
                            </ul>
                            <p style=" font-weight: bold"> <span class="product__price "><?php echo $price ?></span> $ </p>

                            <div class="inforProduct_btn text-center">
                                <button class="btn btn_addToCart" type="submit" name="addtocart"> Add To Cart </button>

                                <button class="btn btn_BuyNow" type="submit" name="buynow">Buy Now</button>
                            </div>

                        </div>

                    </div>
                </form>
            <?php
            }

            ?>
            <hr>
            <div class="productSuggest mb-5 mt-4">
                <h4 style="font-size: 20px;margin-bottom: 20px;">Other Variants</h4>
                <div class=" row productSuggestList ">
                    <?php
                    if (!empty($related_product)) {
                        while ($value = mysqli_fetch_assoc($related_product)) {
                    ?>
                            <div class="col-6 col-md-3 ">
                                <a href="<?php echo BASE_URL ?>/products/productDetail/<?php echo $value['productId'] ?>">
                                    <img class="w-100 mb-3" src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $value['productImage'] ?>" alt="<?php echo $value['productName'] ?>">
                                    <p class="productDetails"><?php echo $value['productMovement'] ?>, <?php echo $value['productStrap'] ?> - <?php echo $value['productSize'] ?>mm (<?php echo $value['productName'] ?>)</p>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <!-- <div class="col-3">
                        <img class="w-100" src="../img/sg1.png" alt="">
                        <p>Mechanical Contemporary Watch, Metal Strap - 32.0mm (RA-NB0101B)</p>
                    </div>
                    <div class="col-3">
                        <img class="w-100" src="../img/sg2.png" alt="">
                        <p>Mechanical Contemporary Watch, Metal Strap - 32.0mm (RA-NB0101B)</p>
                    </div>
                    <div class="col-3">
                        <img class="w-100" src="../img/sg3.png" alt="">
                        <p>Mechanical Contemporary Watch, Metal Strap - 32.0mm (RA-NB0101B)</p>
                    </div>
                    <div class="col-3">
                        <img class="w-100" src="../img/sg4.png" alt="">
                        <p>Mechanical Contemporary Watch, Metal Strap - 32.0mm (RA-NB0101B)</p>
                    </div> -->
                </div>
            </div>

        </div>

    </div>

    <?php
    include './include/footer.php'
    ?>
    <script src="<?php echo BASE_URL ?>/public/JS/detail.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>

</body>

</html>