<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/homepage.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/CSS/footer.css">
    <!-- link icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link font chữ -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/Assets/lib/css/bootstrap.min.css">
    <title>Homepage</title>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"> </script>
</head>

<body>

    <?php
    include './include/header.php'
    ?>



    <div class="carousel"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>

        </ol>
        <div class="carousel-inner" role="button">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo BASE_URL ?>/Assets/homeImg/baner1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo BASE_URL ?>/Assets/homeImg/baner2.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo BASE_URL ?>/Assets/homeImg/baner3.jpg" alt="Four slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo BASE_URL ?>/Assets/homeImg/baner4.png" alt="Five slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo BASE_URL ?>/Assets/homeImg/baner5.jpg" alt="Six slide">
            </div>
        </div>
    </div>
    </div>

    <hr id="rules1">
    <div class="container">


        <div class="Vision-Mission">
            <h1>Vision & Mission</h1>
            <br>
            <div id="text-born">
                <p id="line1">"Chronos oriented development into the leading Asian men's watch brand. Constantly
                    innovation and </p>
                <p id="line2"> creativity to produce class-level clock products, contributing to improving the bravery
                    and quality of </p>
                <p id="line3">men and lift the position of the Vietnamese brand in the international arena. "</p>
            </div>
        </div>
    </div>

    <hr id="rules2">
    <div class="container-fluid">
        <div class="row">
            <div class="text_Title">
                <div class="title_Text">
                    <p>CHRONOS,</p>
                </div>
                <hr>
                <hr class="hr2">
                <p style="margin-top: 25px"> A History of Exploration Throughout the Years</p>
            </div>
        </div>
        <div class="row">
            <div class="timeline">
                <div class="box left">
                    <div class="date">1952</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/1.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>The original CHRONOS</p>
                            </div>
                            <div class="text2">
                                <p>
                                    The birth of a star that never stops shining
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box right">
                    <div class="date">1957</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/2.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>Dynamic Semi</p>
                            </div>
                            <div class="text2">
                                <p>
                                    The birth of a watch that pioneered a new era
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box left">
                    <div class="date">1971</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/3.jpg">
                        </div>
                        <div class="text_3">
                            <div class="text3">
                                <p>
                                    The creation of the 46
                                    series movement</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box right">
                    <div class="date">1997</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/4.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>Titanium</p>
                            </div>
                            <div class="text2">
                                <p>
                                    CHRONOS first model with a power reserve indicator
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box left">
                    <div class="date">1999</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/5.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>Mechanical Moon Phase</p>
                            </div>
                            <div class="text2">
                                <p>
                                    A model by the in-house developed silicon escape wheel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box right">
                    <div class="date">2003</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/6.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>Semeleton Semieton.</p>
                            </div>
                            <div class="text2">
                                <p>
                                    The introduction of a semi-skeleton model in the CHRONOS range
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box left">
                    <div class="date">2005</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/7.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>World Time</p>
                            </div>
                            <div class="text2">
                                <p>
                                    A stylish mechanical watch with a rotating world time bezel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box right">
                    <div class="date">2008</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/8.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>Power Reserve</p>
                            </div>
                            <div class="text2">
                                <p>
                                    The comfort of titanium lightness to the charms of mechanical watches.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box left">
                    <div class="date">2010</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/9.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>
                                    Skeleton</p>
                            </div>
                            <div class="text2">
                                <p>
                                    The release of a model with a built-in GMT function
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box right">
                    <div class="date">2012</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/10.jpg">
                        </div>
                        <div class="text_3">
                            <div class="text3">
                                <p>
                                    The creation of the 46
                                    series movement</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box left">
                    <div class="date">2019</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/11.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>Dynamic</p>
                            </div>
                            <div class="text2">
                                <p>
                                    Model boasting a beautiful movement with a gold color finish
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box right">
                    <div class="date">2021</div>

                    <div class="content">
                        <div class="img">
                            <img src="<?php echo BASE_URL ?>/Assets/homeImg/12.jpg">
                        </div>
                        <div class="text">
                            <div class="text1">
                                <p>Skeleton Montserrat Gold</p>
                            </div>
                            <div class="text2">
                                <p>
                                    The birth of CHRONOS irst timepiece that displays the phases of the moon
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-number my-3 my-sm-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-sm-5  mb-sm-5 number__item">
                    <p class="number__item-nub counter">69</p>
                    <p class="number__item-text">69 years of development and innovation</p>
                </div>
                <div class="col-12 col-sm-6 ml-auto mb-sm-5 number__item">
                    <p class="number__item-nub counter">18</p>
                    <p class="number__item-text">Available in the 18 countries of Asia</p>
                </div>
                <div class="col-12 col-sm-5 number__item">
                    <p class="number__item-nub counter">300+</p>
                    <p class="number__item-text">Branches throughout Asia</p>
                </div>
                <div class="col-12 col-sm-6 ml-auto number__item">
                    <p class="number__item-nub counter">24.020+</p>
                    <p class="number__item-text">Potential customers</p>
                </div>
            </div>
        </div>
    </div>

    <div class="my-testimonials my-3 my-sm-5 py-3 py-sm-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <img class="w-100" src="<?php echo BASE_URL ?>/Assets/homeImg/poster.png" alt="">
                </div>
                <div class="col-md-5 mx-auto px-4">
                    <h3 class="">Testimonials</h3>
                    <p class="testimonials__content my-3 my-lg-5">Loving my new Chronos watch from Vietnam's first
                        Chronos brand, using manual methods. Like any other Chronos products, Chronos is inspired by
                        minimalist oriental style</p>
                    <h4>Gita Savitri</h4>
                    <span>Content Creator/Influencer</span>
                </div>
            </div>
        </div>
    </div>


    <?php
    include './include/footer.php'
    ?>
    <script src="<?php echo BASE_URL ?>/public/JS/homepage.js"></script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="<?php echo BASE_URL ?>/Assets/lib/js/bootstrap.min.js"></script>

</body>

</html>