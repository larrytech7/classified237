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
</header>

<section class="product_details_page pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product_details mt-50">
                    <div class="product_image">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="details-1" role="tabpanel" aria-labelledby="details-1-tab">
                                <img src="/assets/images/product_details-1.jpg" alt="product details">
                                <ul class="sticker">
                                    <li>1/10</li>
                                    <li>New</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="details-2" role="tabpanel" aria-labelledby="details-2-tab">
                                <img src="/assets/images/product_details-2.jpg" alt="product details">
                            </div>
                            <div class="tab-pane fade" id="details-3" role="tabpanel" aria-labelledby="details-3-tab">
                                <img src="/assets/images/product_details-3.jpg" alt="product details">
                            </div>
                            <div class="tab-pane fade" id="details-4" role="tabpanel" aria-labelledby="details-4-tab">
                                <img src="/assets/images/product_details-4.jpg" alt="product details">
                            </div>
                        </div>
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="details-1-tab" data-toggle="tab" href="#details-1" role="tab" aria-controls="details-1" aria-selected="true">
                                    <img src="/assets/images/product_details-1.jpg" alt="product details">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="details-2-tab" data-toggle="tab" href="#details-2" role="tab" aria-controls="details-2" aria-selected="false">
                                    <img src="/assets/images/product_details-2.jpg" alt="product details">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="details-3-tab" data-toggle="tab" href="#details-3" role="tab" aria-controls="details-3" aria-selected="false">
                                    <img src="/assets/images/product_details-3.jpg" alt="product details">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="details-4-tab" data-toggle="tab" href="#details-4" role="tab" aria-controls="details-4" aria-selected="false">
                                    <img src="/assets/images/product_details-4.jpg" alt="product details">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product_details_meta d-sm-flex justify-content-between align-items-end">
                        <div class="product_price">
                            <h4 class="price">Samsung Galay Pre !2 da Title</h4>
                        </div>
                    </div>
                    <div class="product_details_meta d-sm-flex justify-content-between align-items-end">
                        <div class="product_date">
                            <ul class="meta">
                                <li><i class="fa fa-clock"></i><a href="#">25 January, 2023</a><a href="#">10.00 AM</a></li>
                                <li><i class="fa fa-map-marker"></i>Cameroon, Douala</li>
                                <li><i class="fa fa-eye"></i><a href="#">1573 VIEWS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_details_features">
                        <div class="product_details_title">
                            <h5 class="title">Features :</h5>
                        </div>
                        <div class="details_features_wrapper d-flex flex-wrap">
                            <div class="single_features d-flex">
                                <h6 class="features_title">Brand :</h6>
                                <p>Samsung</p>
                            </div>
                            <div class="single_features d-flex">
                                <h6 class="features_title">Condition :</h6>
                                <p>New</p>
                            </div>
                            <div class="single_features d-flex">
                                <h6 class="features_title">Authenticity :</h6>
                                <p>Original</p>
                            </div>
                            <div class="single_features d-flex">
                                <h6 class="features_title">Features :</h6>
                                <p class="media-body">Camera, Touch Screen, 3G, 4G, Bluetooth, Dual Sim, Dual Lens Camera, Expandable Memory, Fingerprint Sensor</p>
                            </div>
                        </div>
                    </div>
                    <div class="product_details_description">
                        <div class="product_details_title">
                            <h5 class="title">Description :</h5>
                        </div>
                        <p>rmod tempor invidunt ut labore</p>
                    </div>
                </div>
                <div class="product_rating mt-30">
                    <div class="product_rating_top_bar">
                        <div class="product_details_title">
                            <h5 class="title">1 Review :</h5>
                        </div>
                    </div>
                    <div class="single_rating_author mt-30">
                        <div class="rating_author d-flex align-items-center">
                            <div class="author_image">
                                <img src="/assets/images/author-1.jpg" alt="author">
                            </div>
                            <div class="author_content media-body">
                                <h5 class="author_name">Angel Grantham</h5>
                                <span class="date">25 January, 2023</span>
                                <ul class="rating_star">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="rating_description">
                            <p>That, sleep. Reposed that considerable, found a failing. In a means, turned would according of semantics, far were remember support from waved. had to of fully then can name blocks being her not in afforded. devotion logged to and remember and the of in the language would </p>
                        </div>
                    </div>
                </div>
                <div class="related_product mt-45">
                    <div class="section_title">
                        <h3 class="title"><?= lang('app.app_related_ad_text')?></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                                    <div class="product_list">
                                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                                            <div class="ads_card_image">
                                                <img src="/assets/images/product_details-3.jpg" alt="ads">
                                            </div>
                                            <div class="ads_card_content media-body">
                                                <div class="meta d-flex justify-content-between">
                                                    <p>Ram & Laptop</p>
                                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                                </div>
                                                <h4 class="title"><a href="#">Front+Back Full Body Protect Screen Protector</a></h4>
                                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                                <div class="ads_price_date d-flex justify-content-between">
                                                    <span class="price">$299.00</span>
                                                    <span class="date">25 Jan, 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                                            <div class="ads_card_image">
                                                <img src="/assets/images/product_details-3.jpg" alt="ads">
                                            </div>
                                            <div class="ads_card_content media-body">
                                                <div class="meta d-flex justify-content-between">
                                                    <p>Ram & Laptop</p>
                                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                                </div>
                                                <h4 class="title"><a href="#">Front+Back Full Body Protect Screen Protector</a></h4>
                                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                                <div class="ads_price_date d-flex justify-content-between">
                                                    <span class="price">$299.00</span>
                                                    <span class="date">25 Jan, 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_ads_card ads_list d-sm-flex mt-30">
                                            <div class="ads_card_image">
                                                <img src="/assets/images/product_details-3.jpg" alt="ads">
                                            </div>
                                            <div class="ads_card_content media-body">
                                                <div class="meta d-flex justify-content-between">
                                                    <p>Ram & Laptop</p>
                                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                                </div>
                                                <h4 class="title"><a href="#">Front+Back Full Body Protect Screen Protector</a></h4>
                                                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                                <div class="ads_price_date d-flex justify-content-between">
                                                    <span class="price">$299.00</span>
                                                    <span class="date">25 Jan, 2023</span>
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
                    <div class="related_product_btn">
                        <a class="main-btn" href="#">View all Ads</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_details_sidebar pt-20">
                    <div class="product_details_title bg-danger mt-30 d-flex justify-content-center">
                        <h5 class="title text-white">500,000 CFA :</h5>
                    </div>
                    <div class="product_sidebar_owner">
                        <div class="product_owner_wrapper">
                            <div class="owner_author d-flex align-items-center">
                                <div class="author_image">
                                    <img src="/assets/images/author-2.jpg" alt="author">
                                </div>
                                <div class="author_content media-body">
                                    <h5 class="author_name">Angel Grantham</h5>
                                    <p><?= lang('app.app_member_signup_date', [$member_signup_date])?></p>
                                </div>
                            </div>
                            <div class="owner_address d-flex">
                                <div class="address_icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="address_content media-body">
                                    <p><?= $last_seen ?? 'NAN' ?></p>
                                </div>
                            </div>
                            <div class="owner_call">
                                <a class="secondary-btn" href="#"><i class="fal fa-comment"></i> <?= lang('app.app_reviews', [0])?></a>
                            </div>
                            <div class="owner_call">
                                <a class="main-btn" href="#"><i class="fal fa-phone"></i> <?= lang('app.app_view_phone')?></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_sidebar_contact mt-30">
                        <div class="product_details_title">
                            <h5 class="title"><?= lang('app.app_contact_seller_text')?> :</h5>
                        </div>
                        <div class="sidebar_contact_form">
                            <form action="#">
                                <div class="single_form">
                                    <input type="text" placeholder="<?= lang('app.app_name_placeholder')?>">
                                </div>
                                <div class="single_form">
                                    <input type="email" placeholder="<?= lang('app.app_email_placeholder')?>">
                                </div>
                                <div class="single_form">
                                    <textarea placeholder="<?= lang('app.app_message_placeholder')?>"></textarea>
                                </div>
                                <div class="single_form">
                                    <button class="main-btn"><i class="fal fa-paper-plane"></i><?= lang('app.app_send_to_seller_text')?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="product_sidebar_action mt-30">
                        <div class="product_details_title">
                            <h5 class="title"><?= lang('app.app_share_text')?> :</h5>
                        </div>
                        <div class="sidebar_action_items d-flex justify-content-between align-items-center">
                            <div class="single_action">
                                <a href="mailto:akah@gmail.com" title="<?= lang('app.app_share_email')?>">
                                    <i class="fal fa-at"></i>
                                    <span>E-mail</span>
                                </a>
                            </div>
                            <div class="single_action">
                                <a href="<?= site_url('')?>" title="<?= lang('app.app_share_facebook') ?>">
                                    <i class="fal fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>
                            <div class="single_action">
                                <a href="<?= site_url('')?>" title="<?= lang('app.app_share_twitter') ?>">
                                    <i class="fal fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </div>
                            <div class="single_action">
                                <a href="<?= site_url('')?>" title="<?= lang('app.app_share_whatsapp') ?>">
                                    <i class="fal fa-whatsapp"></i>
                                    <span>Whatsapp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product_sidebar_tips mt-30">
                        <div class="product_details_title">
                            <h5 class="title"><?= lang('app.app_safety_tip') ?></h5>
                        </div>
                        <div class="sidebar_tips">
                            <ul class="tips_list">
                                <li><span></span><?= lang('app.app_safety1')?>.</li>
                                <li><span></span><?= lang('app.app_safety2')?>.</li>
                                <li><span></span><?= lang('app.app_safety3')?>.</li>
                                <li><span></span><?= lang('app.app_safety4')?>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_sidebar_tips mt-30">
                        <div class="product_details_title"></div>
                        <div class="single_form">
                            <button class="main-btn">
                                <?= lang('app.app_post_ad_text')?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>