<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/product.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <title>Product</title>
</head>

<body>

    <?php
    include './include/header.php'
    ?>

    <div class="container-fluid p-0 mb-4">
        <img src="<?php echo BASE_URL ?>/Assets/homeImg/baner-products.png" class="w-100 p-0" alt="">
    </div>

    <section class="section-content padding-y mb-5">
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <div class="card" style="margin-top: 50px">
                        <article class="filter-group">
                            <div class="head_content">
                                <p class="text_title">Filter your Product</p>
                            </div>
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                    <p class="title">CASE SIZE 3H-9H</p>
                                </a>
                            </header>

                            <div class="filter-content collapse show" id="collapse_1">
                                <div class="card-body">
                                    <nav class="fiter-selection-size">
                                        <ul class="fiter-size">
                                            <li class="fiter-size-item fiter-item">
                                                <input type="checkbox" name="size" class="fiterSize" id="size1" value="-32">
                                                <label for="size1" class="fiter-size-item__label">Small than
                                                    32mm</label>
                                            </li>
                                            <li class="fiter-size-item fiter-item">
                                                <input type="checkbox" name="size" class="fiterSize" id="size2" value="32-40">
                                                <label for="size2" class="fiter-size-item__label">32 to 40 mm</label>
                                            </li>
                                            <li class="fiter-size-item fiter-item">
                                                <input type="checkbox" name="size" class="fiterSize" id="size3" value="+40">
                                                <label for="size3" class="fiter-size-item__label">Larger than 40
                                                    mm</label>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                                    <p class="title">STRAP</p>
                                </a>
                            </header>

                            <div class="filter-content collapse show" id="collapse_2">
                                <div class="card-body">
                                    <nav class="fiter-strap">
                                        <ul class="fiter-strap-list">
                                            <li class="fiter-strap-item fiter-item">
                                                <input type="checkbox" name="strap" class="fiterStrap" id="strap1" value="Leather">
                                                <label for="strap1" class="fiter-strap-item__label">Leather</label>
                                            </li>
                                            <li class="fiter-strap-item fiter-item">
                                                <input type="checkbox" name="strap" class="fiterStrap" id="strap2" value="Metal">
                                                <label for="strap2" class="fiter-strap-item__label">Metal</label>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                    <p class="title">MOVEMENT</p>
                                </a>
                            </header>

                            <div class="filter-content collapse show" id="collapse_3">
                                <div class="card-body">
                                    <nav class="fiter-moventment">
                                        <ul class="fiter-moventment-list">
                                            <li class="fiter-moventment-item fiter-item">
                                                <input type="checkbox" name="mov" class="filterMov" id="mov1" value="Mechanical">
                                                <label for="mov1" class="fiter-mov-item__label">Mechanical</label>
                                            </li>
                                            <li class="fiter-mov-item fiter-item">
                                                <input type="checkbox" name="mov" class="filterMov" id="mov2" value="Quartz">
                                                <label for="mov2" class="fiter-mov-item__label">Quartz</label>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
                                    <p class="title">PRICE</p>
                                </a>
                            </header>

                            <div class="filter-content collapse show" id="collapse_4">
                                <div class="card-body">
                                    <nav class="fiter-price">
                                        <ul class="fiter-price-list">
                                            <li class="fiter-price-item fiter-item">
                                                <input type="checkbox" name="price" class="filterPrice" id="price1" value="-500">
                                                <label for="price1" class="fiter-price-item__label">Small than
                                                    500$</label>
                                            </li>
                                            <li class="fiter-price-item fiter-item">
                                                <input type="checkbox" name="price" class="filterPrice" id="price2" value="500-1000">
                                                <label for="price2" class="fiter-price-item__label">500$ to
                                                    1000$</label>
                                            </li>
                                            <li class="fiter-price-item fiter-item">
                                                <input type="checkbox" name="price" class="filterPrice" id="price3" value="+1000">
                                                <label for="price3" class="fiter-price-item__label">Larger than
                                                    1000$</label>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </article>

                        <div class="mt-4">
                            <button class="btn btn-block " id="showProduct">Show All
                                Products</button>
                        </div>
                    </div>

                </aside>
                <?php
                $response = array();
                $product = array();
                if (isset($get_product) && !empty($get_product)) {
                    while ($value = mysqli_fetch_array($get_product)) {
                        $id = $value['productId'];
                        $name = $value['productName'];
                        $price = $value['productPrice'];
                        $movement = $value['productMovement'];
                        $strap = $value['productStrap'];
                        $size = $value['productSize'];
                        $image = $value['productImage'];
                        $product[] = array('id' => $id, 'name' => $name, 'price' => $price, 'movement' => $movement, 'strap' => $strap, 'size' => $size, 'image' => $image);
                    }
                }
                $response['product'] = $product;
                $fp = fopen('data.json', 'w');
                fwrite($fp, json_encode($response));
                fclose($fp);
                ?>


                <main class="col-md-9" style="margin-top: 20px">
                    <div class="row">
                        <div id="showProducts" class="container">
                            <div id="renderProduct">
                                <div id="allProducts" class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="mt-4" aria-label="Page navigation sample" id="pagination_link">
                        <ul class="pagination" id="myDIV" style="justify-content: center">
                            <?php
                            if (isset($total_product) && !empty($total_product)) {
                                $value = mysqli_num_rows($total_product);
                                $total_page = ceil($value / $product_per_page);
                                if ($page > 1) {
                                    echo "<li class='page-item'><a class='page-link' href='?page=" . ($page - 1) . "'>Previous</a></li>";
                                }
                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($page == $i) {
                                        echo "<li class='page-item active'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
                                    } else {
                                        echo "<li class='page-item '><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
                                    }
                                }
                                if ($i > $page + 1) {
                                    echo "<li class='page-item'><a class='page-link' href='?page=" . ($page + 1) . "'>Next</a></li>";
                                }
                            }
                            ?>

                        </ul>
                    </nav>
                </main>
            </div>
        </div>
    </section>

    <?php
    include './include/footer.php'
    ?>

    <script src="<?php echo BASE_URL ?>/public/JS/product.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>


</body>

</html>