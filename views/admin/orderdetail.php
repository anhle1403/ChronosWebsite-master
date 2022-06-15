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


    <h2 class="mt-4 mb-3">DETAIL ORDER</h2>

    <table class="container mb-5 productlist">
        <thead>
            <tr>
                <th>
                    <h1>ID</h1>
                </th>
                <th>
                    <h1>Order Number</h1>
                </th>
                <th>
                    <h1>Name</h1>
                </th>
                <th>
                    <h1>Price</h1>
                </th>
                <th>
                    <h1>Image</h1>
                </th>
                <th>
                    <h1>Quantity</h1>
                </th>
                <th>
                    <h1>Total Price</h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($order_detail) && !empty($order_detail)) {
                $i = 0;
                $totalPrice = 0;
                while ($value = mysqli_fetch_assoc($order_detail)) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $value['orderNumber'] ?></td>
                        <td><?php echo $value['productName'] ?></td>
                        <td><?php echo $value['productPrice'] ?></td>
                        <td><img src="<?php echo BASE_URL ?>/Assets/upload/<?php echo $value['productImage'] ?>" width="80"></td>
                        <td><?php echo $value['productQuantity'] ?></td>
                        <td><?php echo $tPrice = $value['productQuantity'] * $value['productPrice'] ?></td>
                    </tr>
            <?php

                }
            }
            ?>

            <form method="post" action="<?php echo BASE_URL ?>/order/orderConfirm/<?php if (!empty($order_number)) echo $order_number ?>">
                <tr>
                    <td colspan="7" class="text-right">

                        <?php if (isset($order_status) && !empty($order_status)) {
                            $value = mysqli_fetch_assoc($order_status);
                            if ($value['orderStatus'] == 0) {
                                echo '<button  type="submit" name="confirm_order" id="confirm">  Confint order </button>';
                            } else {
                                echo '<button  type="submit" name="back" id="confirm">  Back </button>';
                            }
                        }
                        ?>

                    </td>
                </tr>
            </form>

        </tbody>

    </table>

    <table class="container mb-5 productlist">
        <thead>
            <tr>
                <th>
                    <h1>Name</h1>
                </th>
                <th>
                    <h1>Email</h1>
                </th>
                <th>
                    <h1>Phone</h1>
                </th>
                <th>
                    <h1>Street</h1>
                </th>
                <th>
                    <h1>Address</h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($order_info) && !empty($order_info)) {
                while ($value = mysqli_fetch_assoc($order_info)) {
            ?>
                    <tr>
                        <td style="color: unset"><?php echo $value['name'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['phone'] ?></td>
                        <td><?php echo $value['address'] ?></td>
                        <td><?php echo $value['ward'] ?>, <?php echo $value['district'] ?>, <?php echo $value['city'] ?></td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
</body>

</html>