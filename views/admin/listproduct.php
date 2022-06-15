<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/listproduct.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/listorder.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <title>Document</title>
</head>

<body>

    <?php include 'header.php';
    ?>


    <h2 class="mt-4">LIST OF PRODUCTS</h2>
    
    <p class="error-mess"><?php
    if (!empty($_GET['mess'])) {
        $mess = unserialize($_GET['mess']);
        foreach ($mess as $key => $value) {
            echo '' . $value . '';
        }
    }
    ?></p>
    <table class="container mb-5 productlist">
        <thead>
            <tr>
                <th>
                    <h1>ID</h1>
                </th>
                <th>
                    <h1>NAME</h1>
                </th>
                <th>
                    <h1>PRICE</h1>
                </th>
                <th>
                    <h1>IMAGE</h1>
                </th>
                <th>
                    <h1>MOVEMENT</h1>
                </th>
                <th>
                    <h1>STRAP</h1>
                </th>
                <th>
                    <h1>SIZE</h1>
                </th>
                <th>
                    <h1>ACTION</h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($product) && !empty($product)) {
                while ($value = mysqli_fetch_assoc($product)) {
            ?>
                    <tr>
                        <td><?php echo $value['productId'] ?></td>
                        <td><?php echo $value['productName'] ?></td>
                        <td><?php echo $value['productPrice'] ?></td>
                        <td><img src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $value['productImage'] ?>" width="80"></td>
                        <td><?php echo $value['productMovement'] ?></td>
                        <td><?php echo $value['productStrap'] ?></td>
                        <td><?php echo $value['productSize'] ?></td>
                        <td><a href="<?php echo BASE_URL ?>/product/editProduct/<?php echo $value['productId'] ?>">Edit</a> || <a href="<?php echo BASE_URL ?>/product/deleteProduct/<?php echo $value['productId'] ?>">Delete</a></td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
    <nav class="mt-5 mb-4" aria-label="Page navigation sample" id="pagination_link">
        <ul class="pagination" style="justify-content: center">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
</body>

</html>