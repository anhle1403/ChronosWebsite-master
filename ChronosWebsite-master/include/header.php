<header class="my-header">
    <div class="container respHeader">
        <div class="row align-items-center">
            <div class="col-5 col-sm-4 col-lg-3">
                <a href="<?php echo BASE_URL ?>/index"><img class="w-100" src="<?php echo BASE_URL ?>/Assets/logo/logo.png" alt=""></a>

            </div>
            <div class=" header__content col-7 col-lg-8 d-flex align-items-center  ml-auto">
                <input id="checkboxMenu" class="checkboxMenu d-none" type="checkbox">
                <ul class="header__nav mb-0 ">
                    <li><a class="px-0 px-lg-2  px-xl-3" href="<?php echo BASE_URL ?>/index">HOME</a></li>
                    <li class=" link-product"><a class=" px-0 px-lg-4  px-xl-5" href="<?php echo BASE_URL ?>/products">PRODUCTS</a>
                    </li>
                    <li><a class="px-0 px-lg-2  px-xl-3" href="<?php echo BASE_URL ?>/cart">CART</a></li>
                </ul>
                <div class="header__search d-flex align-items-center px-2 px-sm-3 px-lg-2 px-xl-3 ">
                    <a href="<?php echo BASE_URL ?>/search" class="pr-3 pr-xl-5 header__search-text">SEARCH</a>
                    <a href="<?php echo BASE_URL ?>/search" class="material-icons icon-search">
                        search
                    </a>
                </div>
                <label for="checkboxMenu" class="d-block d-lg-none mb-0 ">
                    <span class="material-icons header__hamburger">
                        menu
                    </span>
                </label>
                <a href="<?php echo BASE_URL ?>/user/signin">
                    <button class="btn header__btn-singIn mb-2 mr-2 ml-2 ml-sm-3 ml-lg-0 " style="display: <?php echo (session::get('customer_id')) ? 'none' : 'block' ?>">
                        Sign In
                    </button>
                </a>

                <div class="dropdown ml-2 ml-sm-3 ml-lg-0" style="display: <?php echo (session::get('customer_id')) ? 'block' : 'none' ?>">
                    <span class="material-icons icon-user dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"> person </span>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo BASE_URL ?>/user/getAccountById/<?php if (session::get('customer_id')) echo session::get('customer_id') ?>">Account</a>
                        <a class="dropdown-item" href="<?php echo BASE_URL ?>/user/logout">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>