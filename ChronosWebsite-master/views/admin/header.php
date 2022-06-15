   <header class="my-header">
       <div class="container-fluid respHeader">
           <div class="row align-items-center">
               <div class="col-5 col-sm-4 col-lg-3">
                   <a href="<?php echo BASE_URL ?>/product"><img class="w-100" src="<?php echo BASE_URL ?>/Assets/logo/logo.png" alt=""></a>

               </div>
               <div class=" header__content col-7 col-lg-8 d-flex align-items-center ">
                   <input id="checkboxMenu" class="checkboxMenu d-none" type="checkbox">
                   <ul class="header__nav mb-0 ml-auto">
                       <li><a class="px-0 px-lg-2  px-xl-3" href="<?php echo BASE_URL ?>/product/listProduct">PRODUCTS</a></li>
                       <li class=" link-product"><a class=" px-0 px-lg-4  px-xl-5" href="<?php echo BASE_URL ?>/product/addProduct">ADD</a></li>
                       <li><a class="px-0 px-lg-2  px-xl-3" href="<?php echo BASE_URL ?>/order">ORDERS</a></li>
                   </ul>

                   <label for="checkboxMenu" class="d-block d-lg-none mb-0 ">
                       <span class="material-icons header__hamburger">
                           menu
                       </span>
                   </label>
                   <div class="user_content ml-3 d-flex align-items-center">
                       <div class="text-center">
                           <i class="fas fa-user" style="font-size: 28px" ></i>
                           <p class="mb-0"><?php echo session::get('adminName') ?></p>
                       </div>
                       <a href="<?php echo BASE_URL ?>/admin/logoutAdmin" class="ml-4">Logout</a>
                   </div>
               </div>
           </div>
       </div>
   </header>