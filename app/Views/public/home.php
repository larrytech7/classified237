<!--
 * Created by PhpStorm.
 * User: Akah
 * Date: 1/30/2021
 * Time: 10:42 AM
-->
<body class="gray-bg">

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header_area">
    <div class="header_navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?= site_url() ?>">
                    <img src="/assets/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li><?= lang('app.app_slogan') ?></li>
                    </ul>
                </div>
                <div class="navbar_btn">
                    <ul>
                        <li><?= anchor(site_url('login'), 'Sign In <span class="line"></span>', ['aria-expanded' => true, 'aria-haspopup' => 'true'])?></li>
                        <li><?= anchor(site_url('signup'), 'Register')?></li>
                        <li><a class="sign-up" href="post-ads.html">Post Ads</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="header_content bg_cover" style="background-image: url(assets/images/hero.jpg)">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content_wrapper d-flex justify-content-center">
                        <div class="search_column d-flex flex-wrap">
                            <h3 class="mt-15" style="color : #fff">Find anything in</h3> &nbsp;&nbsp;
                            <div class="home_cat_search">
                                <div class="search_select mt-15">
                                    <i class="far fa-map-marker text-white"></i>
                                    <select>
                                        <option value="0">Select Category</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="header_search">
                        <form action="#">
                            <div class="search_wrapper d-flex flex-wrap">
                                <div class="search_column d-flex flex-wrap">
                                    <div class="search_form mt-15">
                                        <input type="text" placeholder="Type Your Keyword">
                                        <i class="far fa-i-cursor"></i>
                                    </div>
                                    <div class="search_btn mt-15">
                                        <button class="main-btn"><i class="far fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
</header>

<section class="product_page pb-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="product_sidebar pt-20">
                    <div class="sidebar_categories mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Categories</h5>
                        </div>
                        <div class="sidebar_categories_content">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><img src="assets/images/sidebar_icon/categories-1.svg" alt="Icon"> Women's Clothing (10)</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><img src="assets/images/sidebar_icon/categories-2.svg" alt="Icon"> Men's Clothing (87)</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><img src="assets/images/sidebar_icon/categories-3.svg" alt="Icon"> Telecommunications (25)</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><img src="assets/images/sidebar_icon/categories-4.svg" alt="Icon"> Cellphones (10078)</a>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><img src="assets/images/sidebar_icon/categories-5.svg" alt="Icon"> Computer & Office (597)</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><img src="assets/images/sidebar_icon/categories-6.svg" alt="Icon"> Consumer Electronics (27) </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><img src="assets/images/sidebar_icon/categories-7.svg" alt="Icon"> Jewelry & Accessories (92) </a>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><img src="assets/images/sidebar_icon/categories-8.svg" alt="Icon"> Home & Garden (07) </a>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><img src="assets/images/sidebar_icon/categories-9.svg" alt="Icon"> Luggage & Bags (346) </a>
                                    </div>
                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="product_topbar d-md-flex align-items-center justify-content-between pb-10">
                    <div class="product_select pt-60 d-flex flex-grow-1">
                        <div id="carouselExampleControls" class="carousel slide flex-grow-1" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/assets/images/about-image-2.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Learn how to sell on Crowd Classified</h5>
                                        <p>Click here to get started.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/assets/images/about-image-2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Need premium services</h5>
                                        <p>We offer a variety of VIP services.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="product_tab_menu">
                        <div class="category-column" style="width: 100%">
                            <div class="single_category text-center mt-30">
                                <p class="title"><?= lang('app.app_sell_text') ?></p>
                                <div class="icon">
                                    <i class="fal fa-plus-circle"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><?= lang('app.app_post_add_text')?></h6>
                                </div>
                                <a href=""></a>
                            </div>
                        </div>
                        <ul class="nav justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-7 col-sm-8">
                                <div class="single_locations mt-30">
                                    <div class="locations_image">
                                        <a href="<?= site_url('home/product/123')?>"> <img src="assets/images/locations-1.jpg" alt=""> </a>
                                    </div>
                                    <div class="locations_content">
                                        <h5 class="title">
                                            <a href="<?= site_url('home/product/123')?>">
                                                <i class="far fa-map-marker-alt"></i>Los Angeles
                                            </a>
                                        </h5>
                                        <p class="d-flex justify-content-between">25000 CFA <a class="like" href="#"><i class="fal fa-heart"></i></a></p>
                                        <a class="view" href="<?= site_url('home/product/123')?>"><?= lang('app.app_see_more') ?> <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-sm-8">
                                <div class="single_locations mt-30">
                                    <div class="locations_image">
                                        <a href=""> <img src="assets/images/locations-1.jpg" alt=""> </a>
                                    </div>
                                    <div class="locations_content">
                                        <h5 class="title">
                                            <a href="product.html">
                                                <i class="far fa-map-marker-alt"></i>Los Angeles
                                            </a>
                                        </h5>
                                        <p class="d-flex justify-content-between">25000 CFA <a class="like" href="#"><i class="fal fa-heart"></i></a></p>
                                        <a class="view" href="product.html"><?= lang('app.app_see_more') ?> <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-sm-8">
                                <div class="single_locations mt-30">
                                    <div class="locations_image">
                                        <a href=""> <img src="assets/images/locations-1.jpg" alt=""> </a>
                                    </div>
                                    <div class="locations_content">
                                        <h5 class="title">
                                            <a href="product.html">
                                                <i class="far fa-map-marker-alt"></i>Los Angeles
                                            </a>
                                        </h5>
                                        <p class="d-flex justify-content-between">25000 CFA <a class="like" href="#"><i class="fal fa-heart"></i></a></p>
                                        <a class="view" href="product.html"><?= lang('app.app_see_more') ?> <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination_wrapper mt-50">
                    <ul class="pagination justify-content-center">
                        <li><a class="Previous" href="#"><i class="fal fa-angle-left"></i></a></li>
                        <li><a class="number" href="#">1</a></li>
                        <li><a class="number active" href="#">2</a></li>
                        <li><a class="number" href="#">3</a></li>
                        <li><a class="next" href="#"><i class="fal fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category_area pt-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3 class="title">Popular <br> Categories</h3>
                </div>
            </div>
        </div>
        <div class="category_wrapper d-flex flex-wrap justify-content-center pt-30">
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-camera"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">DSLR Camera</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-mobile"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Cell Phone</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-laptop"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Laptop</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-headphones-alt"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Headphones</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-ring"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Jewelry</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-backpack"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Backpacks</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-bicycle"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Vehicles</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-door-open"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Furniture</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-gamepad"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Gadgets</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category-column">
                <div class="single_category text-center mt-30">
                    <div class="icon">
                        <i class="fal fa-watch"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Watches</h6>
                    </div>
                    <a href="product.html"></a>
                </div>
            </div>
            <div class="category_btn">
                <a class="main-btn" href="categories.html">View all Catagories</a>
            </div>
        </div>
    </div>
</section>

<section class="choose_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose_content pt-35">
                    <div class="section_title pb-20">
                        <h3 class="title"><?= lang('app.app_why_text') ?></h3>
                    </div>
                    <p><?= lang('app.app_why_description_text')?>.</p>
                    <ul class="list">
                        <li><i class="fa fa-check"></i> <?= lang('app.app_why_reason_one')?>.</li>
                        <li><i class="fa fa-check"></i> <?= lang('app.app_why_reason_two')?>.</li>
                        <li><i class="fa fa-check"></i> <?= lang('app.app_why_reason_three')?>.</li>
                    </ul>
                    <a href="<?= site_url('home/about')?>" class="main-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="choose_image">
        <div class="image">
            <img src="assets/images/choose.png" alt="choose">
        </div>
    </div>
</section>

<section class="counter_area bg_cover" style="background-image: url(assets/images/counter-bg.jpg)">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-9">
                <div class="counter_wrapper d-flex flex-wrap justify-content-between">
                    <div class="single_counter">
                        <div class="counter_items d-flex">
                            <div class="counter_icon">
                                <img src="assets/images/icon/counter-1.svg" alt="counter">
                            </div>
                            <div class="counter_count media-body">
                                <span class="count"><span class="counter">5000</span>+</span>
                            </div>
                        </div>
                        <p><?= lang('app.app_published_ads_count_text') ?></p>
                    </div>
                    <div class="single_counter">
                        <div class="counter_items d-flex">
                            <div class="counter_icon">
                                <img src="assets/images/icon/counter-2.svg" alt="counter">
                            </div>
                            <div class="counter_count media-body">
                                <span class="count"><span class="counter">300</span>+</span>
                            </div>
                        </div>
                        <p><?= lang('app.app_registered_users_text') ?></p>
                    </div>
                    <div class="single_counter">
                        <div class="counter_items d-flex">
                            <div class="counter_icon">
                                <img src="assets/images/icon/counter-3.svg" alt="counter">
                            </div>
                            <div class="counter_count media-body">
                                <span class="count"><span class="counter">200</span>+</span>
                            </div>
                        </div>
                        <p><?= lang('app.app_verified_users_text')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call_to_action_area pt-30 pb-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="call_to_action_content mt-45">
                    <h4 class="title"><?= lang('app.app_subscribe_text') ?></h4>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="call_to_action_form mt-50">
                    <form action="#">
                        <i class="fal fa-envelope"></i>
                        <input type="text" placeholder="Enter your mail address . . .">
                        <button class="main-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
