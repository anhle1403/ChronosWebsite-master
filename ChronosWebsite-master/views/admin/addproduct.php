<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/addproduct.css">
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

    <div class="container form-product">
        <form action="<?php echo BASE_URL ?>/product/addProduct" method="POST" enctype="multipart/form-data">
            <div class="header">
                <h2>ADD PRODUCT</h2>
                <p><?php if (!empty($error)) echo $error ?></p>
                <p style="color: #0b9f09"><?php if (!empty($success)) echo $success ?></p>
            </div>
            <fieldset>
                <section>
                    <div class="input-block">
                        <label for="name">Name</label>
                        <input class="input" type="text" name="name" autocomplete="off" placeholder="Enter your Product name" >
                    </div>

                    <div class="input-block">
                        <label for="size">Size</label>
                        <input class="input" type="text" name="size" autocomplete="off" placeholder="Size" >
                    </div>
                    <div class="input-block">
                        <label for="price">Price</label>
                        <input class="input" type="text" name="price" autocomplete="off" placeholder="Price" >
                    </div>
                    <div class="input-block">
                        <label for="Description">Description</label>
                        <textarea class="input" placeholder="Description" name="description" cols="30" rows="10"></textarea>
                    </div>
                </section>

                <section>
                    <div class="input-block">
                        <label for="detail1">Detail about Product</label>
                        <input class="input" type="text" name="detail1" autocomplete="off" placeholder="Detail" >
                    </div>

                    <div class="input-block">
                        <label for="detail2">Detail</label>
                        <input class="input" type="text" name="detail2" autocomplete="off" placeholder="Detail" >
                    </div>

                    <div class="input-block">
                        <label for="strap">Strap</label>
                        <select class="input" name="strap">
                            <option value="Leather">Leather</option>
                            <option value="Metal">Metal</option>
                        </select>

                    </div>
                    <div class="input-block">
                        <label for="movement">Movement</label>
                        <select class="input" name="movement">
                            <option value="Mechanical">Mechanical</option>
                            <option value="Quartz">Quartz</option>
                        </select>

                    </div>
                    <div class="input-block upload">

                        <div class="UploadImage">
                            <label for="thumb1">Upload Image</label>
                            <label for="thumb1-btn" class="upload-btn" id="thumb1">Upload File</label>
                            <input type="file" name="image" id="thumb1-btn">
                            <span class="image-upload-check1">No file uploaded</span>
                        </div>

                        <div class="UploadImage">
                            <label for="thumb2">Upload Image Detail</label>
                            <label for="thumb2-btn" class="upload-btn" id="thumb2">Upload File</label>
                            <input type="file" name="image_detail" id="thumb2-btn">
                            <span class="image-upload-check2">No file uploaded</span>
                        </div>

                    </div>

                </section>
            </fieldset>

            <button type="submit" name="submit">
                <p class="submit">SUBMIT</p>
            </button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL ?>/public/JS/addproduct.js"></script>
</body>

</html>