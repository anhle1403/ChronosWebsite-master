<footer class="my-footer pt-3 pt-md-4 pt-xl-5">
    <div class="container footer_res pb-3">
        <div class="row ">
            <div class=" col-6 col-sm-5 col-xl-6  px-0 px-sm-3">
                <div class="widt-img">
                    <img class="w-100" src="<?php echo BASE_URL ?>/Assets/logo/logo.png" alt="">
                </div>
            </div>
            <!-- <div class="col-6  col-sm-9 col-md-8 col-lg-7 d-flex justify-content-around align-items-center ml-auto "> -->
            <div class="footer__contact ml-auto col-6 col-sm-4 col-xl-3">
                <h6 class="text-sm-left text-right">Customer care support</h6>
                <p class="d-flex align-items-center my-1 my-md-2 my-lg-4 text-position">
                    <i class="material-icons mr-4 mr-sm-5">
                        email
                    </i>
                    <a class="text-white mr-3 mr-sm-0">Chronos@bit.vn</a>
                </p>
                <p class="d-flex align-items-center text-position mb-0">
                    <i class="material-icons mr-4 mr-sm-5">
                        call
                    </i>
                    <a class="text-white mr-3 pr-1 pr-sm-0 mr-sm-0">+84 68 790 812</a>
                </p>
            </div>
            <div class="footer__btn col-12 col-sm-3 col-xl-3 mt-3 mt-sm-0" style="display: <?php echo (session::get('customer_id')) ? 'none' : 'block' ?>">
                <div class="text-sm-right d-inline d-sm-block">
                    <a href="<?php echo BASE_URL ?>/user/signin">
                        <button class="btn  footer__btn-singIn">
                            Sign In
                        </button>
                    </a>

                </div>
                <div class="  text-sm-right d-inline d-sm-block">
                    <a href="<?php echo BASE_URL ?>/user/signup">
                        <button class="btn  footer__btn-singUp">
                            Sign Up
                        </button>
                    </a>

                </div>


            </div>
            <!-- </div> -->
        </div>
    </div>
    <div class="footer-bottom py-3 py-md-4 py-xl-5">
        <div class="container d-flex justify-content-between align-items-center ">
            <div>
                <span>© Photo, Inc. 2021. From group 2 with love!</span>
            </div>
            <div class="">
                <a class="text-white" href="">Terms of Use </a>
                <a class="text-white" href=""> Privacy Policy </a>
            </div>
        </div>
    </div>
</footer>