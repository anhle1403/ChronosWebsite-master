<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/search.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <title>Search</title>
</head>

<body>
    <?php
    include './include/header.php'
    ?>


    <div class="container">
        <div class="row">
            <div class="container">
                <form action="<?php echo BASE_URL ?>/search/viewsearch" method="GET">
                    <div class="sw">
                        <input type="text" name="search_result" class="search" id="userInputFilterByName" placeholder="SEARCH" />
                        <span onclick="closeInput()" class="material-icons icon-close">close</span>
                        <button class="go" onclick="renderBySearch()" type="submit">
                            <i class="material-icons" id="searchIcon">search</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3 text_researcher" style="display: <?php echo (isset($resultProductBySearch) || $resultProductBySearch == "") ? 'none' : 'block' ?>">
            <p class="text_recent">Recent Search</p>
            <div style="height: 200px"></div>
        </div>
        <div class="row">
            <div class="reseutlS" style="display: <?php echo (isset($result)) ? 'block' : 'none' ?>">
                <p>Search results for "<?php if (isset($result)) echo $result ?>"</p>
            </div>
        </div>

        <div class="notFound" style="display: <?php echo (!isset($resultProductBySearch) || !empty($resultProductBySearch)) ? 'none' : 'block' ?>">
            <p>No product finds any of your choice</p>
        </div>

        <div class="row">
            <div id="showProducts" class="container">
                <div id="allProducts" class="row">
                    <?php
                    if (isset($resultProductBySearch) && !empty($resultProductBySearch)) {
                        while ($value = mysqli_fetch_assoc($resultProductBySearch)) {
                    ?>
                            <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
                                <div>
                                    <figure class="card card-product-grid">
                                        <div class="img-wrap item-zoom">
                                            <img src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $value['productImage'] ?>" alt="<?php echo $value['productName'] ?>">
                                            <a href="<?php echo BASE_URL ?>/products/productDetail/<?php echo $value['productId'] ?>">
                                                <div class="titleProduct"><?php echo $value['productMovement'] ?>, <?php echo $value['productStrap'] ?> Strap - <?php echo $value['productSize'] ?> (<?php echo $value['productName'] ?>)</div>
                                            </a>
                                        </div>
                                        <button href="#" class="btnProduct button"><a href="<?php echo BASE_URL ?>/products/productDetail/<?php echo $value['productId'] ?>">See more</a></button>
                                    </figure>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row mt-3 text_suggestions">
            <p class="text_suggest">Suggestions</p>
            <?php
            if (!empty($suggestionProduct)) {
                while ($value = mysqli_fetch_assoc($suggestionProduct)) {
            ?>
                    <a href="<?php echo BASE_URL ?>/products/productDetail/<?php echo $value['productId'] ?>"><span><?php echo $value['productMovement'] ?> , <?php echo $value['productStrap'] ?> Strap (<?php echo $value['productName'] ?>)</span></a>
                <?php }
            } else {
                ?>
                <a href="<?php echo BASE_URL ?>/products/productDetail/1"><span>Mechanical , Leather Strap (RA-NB0104)</span></a>
                <a href="<?php echo BASE_URL ?>/products/productDetail/2"><span>Mechanical , Leather Strap (RA-NB0105S)</span></a>
                <a href="<?php echo BASE_URL ?>/products/productDetail/10"><span>Mechanical , Metal Strap (RA-NB0103S)</span></a>
                <a href="<?php echo BASE_URL ?>/products/productDetail/11"><span>Mechanical , Metal Strap ( RA-NR2001G)</span></a>
            <?php
            }
            ?>
        </div>
    </div>

    <?php
    include './include/footer.php'
    ?>
    <script src="<?php echo BASE_URL ?>/public/JS/search.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>

</body>

</html>