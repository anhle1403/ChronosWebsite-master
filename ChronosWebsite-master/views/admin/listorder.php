<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/listorder.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/listproduct.css">
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

  <h2 class="mt-4 mb-3">LIST OF ORDER</h2>
  <p class="error-mess"><?php
    if (!empty($_GET['mess'])) {
        $mess = unserialize($_GET['mess']);
        foreach ($mess as $key => $value) {
            echo '' . $value . '';
        }
    }
    ?></p>
  <div class="container order">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Order Number</th>
          <th>Date</th>
          <th>Grand Total</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (isset($all_order) && !empty($all_order)) {
          while ($value = mysqli_fetch_assoc($all_order)) {
        ?>
            <tr>
              <td><?php echo $value['orderId'] ?></td>
              <td><?php echo $value['orderNumber'] ?></td>
              <td><?php echo $value['orderDate'] ?></td>
              <td class="amount"><?php echo $value['grandTotal'] ?></td>
              <td>
                <?php if ($value['orderStatus'] == 0) {
                  echo '<p class="status status-uncomplete"> Waiting for progressing... </p>';
                } else {
                  echo '<p class="status status-complete"> Order processed successfully! </p>';
                } ?>
              </td>
              <td style="font-size: 14px"><a href="<?php echo BASE_URL ?>/order/orderDetail/<?php echo $value['orderNumber'] ?>"> See more </a></td>
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
        if (isset($total_order) && !empty($total_order)) {
          $value = mysqli_num_rows($total_order);
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
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
</body>

</html>