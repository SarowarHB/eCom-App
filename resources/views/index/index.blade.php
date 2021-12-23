@extends('index.indexMaster')

@section('title')
Home
@endsection

@section('content')

<div id="main-content" class="main-content">

<!--Block 01: Vertical Menu And Main Slide-->
<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
            <div class="biolife-vertical-menu none-box-shadow  ">
                <div class="vertical-menu vertical-category-block always ">
                    <div class="block-title">
                        <span class="menu-icon">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="line-3"></span>
                        </span>
                        <span class="menu-title">All departments</span>
                        <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                    </div>
                    <div class="wrap-menu">
                        <ul class="menu clone-main-menu">
                            <li class="menu-item menu-item-has-children has-megamenu">
                                <a href="#" class="menu-name" data-title="Fruit & Nut Gifts"><i class="biolife-icon icon-fruits"></i>Fruit & Nut Gifts</a>
                                <div class="wrap-megamenu lg-width-900 md-width-640">
                                    <div class="mega-content">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Fresh Fuits</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Fruit & Nut Gifts</a></li>
                                                        <li><a href="#">Mixed Fruits</a></li>
                                                        <li><a href="#">Oranges</a></li>
                                                        <li><a href="#">Bananas & Plantains</a></li>
                                                        <li><a href="#">Fresh Gala Apples</a></li>
                                                        <li><a href="#">Berries</a></li>
                                                        <li><a href="#">Pears</a></li>
                                                        <li><a href="#">Produce</a></li>
                                                        <li><a href="#">Snack Foods</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Nut Gifts</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                        <li><a href="#">Coffee Creamers</a></li>
                                                        <li><a href="#">Mayonnaise</a></li>
                                                        <li><a href="#">Almond Milk</a></li>
                                                        <li><a href="#">Ghee</a></li>
                                                        <li><a href="#">Beverages</a></li>
                                                        <li><a href="#">Ranch Salad Dressings</a></li>
                                                        <li><a href="#">Hemp Milk</a></li>
                                                        <li><a href="#">Nuts & Seeds</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                <div class="biolife-products-block max-width-270">
                                                    <h4 class="menu-title">Bestseller Products</h4>
                                                    <ul class="products-list default-product-style biolife-carousel nav-none-after-1k2 nav-center" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}' >
                                                        <li class="product-item">
                                                            <div class="contain-product none-overlay">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="link-to-product">
                                                                        <img src="assets/images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                    </a>
                                                                </div>
                                                                <div class="info">
                                                                    <b class="categories">Fresh Fruit</b>
                                                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                    <div class="price">
                                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="product-item">
                                                            <div class="contain-product none-overlay">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="link-to-product">
                                                                        <img src="assets/images/products/p-11.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                    </a>
                                                                </div>
                                                                <div class="info">
                                                                    <b class="categories">Fresh Fruit</b>
                                                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                    <div class="price">
                                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="product-item">
                                                            <div class="contain-product none-overlay">
                                                                <div class="product-thumb">
                                                                    <a href="#" class="link-to-product">
                                                                        <img src="assets/images/products/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                    </a>
                                                                </div>
                                                                <div class="info">
                                                                    <b class="categories">Fresh Fruit</b>
                                                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                    <div class="price">
                                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 md-margin-top-9">
                                                <div class="biolife-brand" >
                                                    <ul class="brands">
                                                        <li><a href="#"><img src="assets/images/megamenu/brand-organic.png" width="161" height="136" alt="organic"></a></li>
                                                        <li><a href="#"><img src="assets/images/megamenu/brand-explore.png" width="160" height="136" alt="explore"></a></li>
                                                        <li><a href="#"><img src="assets/images/megamenu/brand-organic-2.png" width="99" height="136" alt="organic 2"></a></li>
                                                        <li><a href="#"><img src="assets/images/megamenu/brand-eco-teas.png" width="164"  height="136" alt="eco teas"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children has-megamenu">
                                <a href="#" class="menu-name" data-title="Vegetables"><i class="biolife-icon icon-broccoli-1"></i>Vegetables</a>
                                <div class="wrap-megamenu lg-width-900 md-width-640 background-mega-01">
                                    <div class="mega-content">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Vegetables</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Fruit & Nut Gifts</a></li>
                                                        <li><a href="#">Mixed Fruits</a></li>
                                                        <li><a href="#">Oranges</a></li>
                                                        <li><a href="#">Bananas & Plantains</a></li>
                                                        <li><a href="#">Fresh Gala Apples</a></li>
                                                        <li><a href="#">Berries</a></li>
                                                        <li><a href="#">Pears</a></li>
                                                        <li><a href="#">Produce</a></li>
                                                        <li><a href="#">Snack Foods</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Gifts</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                        <li><a href="#">Coffee Creamers</a></li>
                                                        <li><a href="#">Mayonnaise</a></li>
                                                        <li><a href="#">Almond Milk</a></li>
                                                        <li><a href="#">Ghee</a></li>
                                                        <li><a href="#">Beverages</a></li>
                                                        <li><a href="#">Ranch Salad Dressings</a></li>
                                                        <li><a href="#">Hemp Milk</a></li>
                                                        <li><a href="#">Nuts & Seeds</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-4 col-sm-12 lg-padding-left-57 md-margin-bottom-30">
                                                <div class="biolife-brand vertical md-boder-left-30">
                                                    <h4 class="menu-title">Hot Brand</h4>
                                                    <ul class="brands">
                                                        <li><a href="#"><img src="assets/images/megamenu/v-brand-organic.png" width="167" height="74" alt="organic"></a></li>
                                                        <li><a href="#"><img src="assets/images/megamenu/v-brand-explore.png" width="167" height="72" alt="explore"></a></li>
                                                        <li><a href="#"><img src="assets/images/megamenu/v-brand-organic-2.png" width="167" height="99" alt="organic 2"></a></li>
                                                        <li><a href="#"><img src="assets/images/megamenu/v-brand-eco-teas.png" width="167" height="67" alt="eco teas"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children has-megamenu">
                                <a href="#" class="menu-name" data-title="Fresh Berries"><i class="biolife-icon icon-grape"></i>Fresh Berries</a>
                                <div class="wrap-megamenu lg-width-900 md-width-640 background-mega-02">
                                    <div class="mega-content">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 sm-col-12 md-margin-bottom-83 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Fresh Berries</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Fruit & Nut Gifts</a></li>
                                                        <li><a href="#">Mixed Fruits</a></li>
                                                        <li><a href="#">Oranges</a></li>
                                                        <li><a href="#">Bananas & Plantains</a></li>
                                                        <li><a href="#">Fresh Gala Apples</a></li>
                                                        <li><a href="#">Berries</a></li>
                                                        <li><a href="#">Pears</a></li>
                                                        <li><a href="#">Produce</a></li>
                                                        <li><a href="#">Snack Foods</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 sm-col-12 lg-padding-left-23 xs-margin-bottom-36px md-margin-bottom-0">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Gifts</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                        <li><a href="#">Coffee Creamers</a></li>
                                                        <li><a href="#">Mayonnaise</a></li>
                                                        <li><a href="#">Almond Milk</a></li>
                                                        <li><a href="#">Ghee</a></li>
                                                        <li><a href="#">Beverages</a></li>
                                                        <li><a href="#">Ranch Salad Dressings</a></li>
                                                        <li><a href="#">Hemp Milk</a></li>
                                                        <li><a href="#">Nuts & Seeds</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-4 sm-col-12 lg-padding-left-25 md-padding-top-55">
                                                <div class="biolife-banner layout-01">
                                                    <h3 class="top-title">Farm Fresh</h3>
                                                    <p class="content"> All the Lorem Ipsum generators on the Internet tend.</p>
                                                    <b class="bottomm-title">Berries Series</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item"><a href="#" class="menu-name" data-title="Ocean Foods"><i class="biolife-icon icon-fish"></i>Ocean Foods</a></li>
                            <li class="menu-item menu-item-has-children has-child">
                                <a href="#" class="menu-name" data-title="Butter & Eggs"><i class="biolife-icon icon-honey"></i>Butter & Eggs</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Omelettes</a></li>
                                    <li class="menu-item"><a href="#">Breakfast Scrambles</a></li>
                                    <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Eggs & other considerations">Eggs & other considerations</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Classic Breakfast</a></li>
                                            <li class="menu-item"><a href="#">Huevos Rancheros</a></li>
                                            <li class="menu-item"><a href="#">Everything Egg Sandwich</a></li>
                                            <li class="menu-item"><a href="#">Egg Sandwich</a></li>
                                            <li class="menu-item"><a href="#">Vegan Burrito</a></li>
                                            <li class="menu-item"><a href="#">Biscuits and Gravy</a></li>
                                            <li class="menu-item"><a href="#">Bacon Avo Egg Sandwich</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="#">Griddle</a></li>
                                    <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Sides & Extras">Sides & Extras</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Breakfast Burrito</a></li>
                                            <li class="menu-item"><a href="#">Crab Cake Benedict</a></li>
                                            <li class="menu-item"><a href="#">Corned Beef Hash</a></li>
                                            <li class="menu-item"><a href="#">Steak & Eggs</a></li>
                                            <li class="menu-item"><a href="#">Oatmeal</a></li>
                                            <li class="menu-item"><a href="#">Fruit & Yogurt Parfait</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="#">Biscuits</a></li>
                                    <li class="menu-item"><a href="#">Seasonal Fruit Plate</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fast-food"></i>Fastfood</a></li>
                            <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-beef"></i>Fresh Meat</a></li>
                            <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-onions"></i>Fresh Onion</a></li>
                            <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-avocado"></i>Papaya & Crisps</a></li>
                            <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-contain"></i>Oatmeal</a></li>
                            <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fresh-juice"></i>Fresh Bananas & Plantains</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12">
            <div class="main-slide block-slider nav-change hover-main-color type02">
                <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                    <li>
                        <div class="slide-contain slider-opt04__layout01 light-version first-slide">
                            <div class="media"></div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Vegetables 100% Organic</h3>
                                <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Shop now</a>
                                    <a href="#" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt04__layout01 light-version second-slide">
                            <div class="media"></div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Vegetables 100% Organic</h3>
                                <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Shop now</a>
                                    <a href="#" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt04__layout01 light-version third-slide">
                            <div class="media"></div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Vegetables 100% Organic</h3>
                                <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Shop now</a>
                                    <a href="#" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<!--Block 02: Banners-->
<div class="banner-block sm-margin-bottom-57px xs-margin-top-80px sm-margin-top-30px">
    <div class="container">
        <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
            <li>
                <div class="biolife-banner biolife-banner__style-08">
                    <div class="banner-contain">
                        <div class="media">
                            <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style08.png" width="193" height="185" alt=""></a>
                        </div>
                        <div class="text-content">
                            <span class="text1">Sumer Fruit</span>
                            <b class="text2">100% Pure Natural Fruit Juice</b>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="biolife-banner biolife-banner__style-09">
                    <div class="banner-contain">
                        <div class="media">
                            <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style09.png" width="191" height="185" alt=""></a>
                        </div>
                        <div class="text-content">
                            <span class="text1">California</span>
                            <b class="text2">Fresh Fruit</b>
                            <span class="text3">Association</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="biolife-banner biolife-banner__style-10">
                    <div class="banner-contain">
                        <div class="media">
                            <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style10.png" width="185" height="185" alt=""></a>
                        </div>
                        <div class="text-content">
                            <span class="text1">Naturally fresh taste</span>
                            <p class="text2">With <span>25% Off</span> All Teas</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--Block 03: Categories-->
<div class="wrap-category xs-margin-top-80px">
    <div class="container">
        <div class="biolife-title-box style-02 xs-margin-bottom-33px">
            <span class="subtitle">Hot Categories 2019</span>
            <h3 class="main-title">Featured Categories</h3>
            <p class="desc">Natural food is taken from the world's most modern farms with strict safety cycles</p>
        </div>
        <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb01.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">Fresh Fruit</h4>
                        <span class="cat-number">(20 items)</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb02.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">Drink Fruits</h4>
                        <span class="cat-number">(220 items)</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb03.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">vegetables</h4>
                        <span class="cat-number">(350 items)</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb04.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">Dried Fruits</h4>
                        <span class="cat-number">(520 items)</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb01.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">Fresh Fruit</h4>
                        <span class="cat-number">(20 items)</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb02.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">Drink Fruits</h4>
                        <span class="cat-number">(220 items)</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb03.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">vegetables</h4>
                        <span class="cat-number">(350 items)</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-cat-box-item">
                    <div class="cat-thumb">
                        <a href="#" class="cat-link">
                            <img src="assets/images/home-04/cat-thumb04.jpg" width="277" height="185" alt="">
                        </a>
                    </div>
                    <a class="cat-info" href="#">
                        <h4 class="cat-name">Dried Fruits</h4>
                        <span class="cat-number">(520 items)</span>
                    </a>
                </div>
            </li>
        </ul>
        <div class="biolife-service type01 biolife-service__type01 xs-margin-top-60px sm-margin-top-45px">
            <ul class="services-list">
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">1</span>
                        <span class="biolife-icon icon-beer"></span>
                        <a class="srv-name" href="#">full stamped product</a>
                    </div>
                </li>
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">2</span>
                        <span class="biolife-icon icon-schedule"></span>
                        <a class="srv-name" href="#">place and delivery on time</a>
                    </div>
                </li>
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">3</span>
                        <span class="biolife-icon icon-car"></span>
                        <a class="srv-name" href="#">Free shipping in the city</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--Block 04: Product Tab-->
<div class="product-tab z-index-20 sm-margin-top-59px xs-margin-top-20px">
    <div class="container">
        <div class="biolife-title-box slim-item">
            <span class="subtitle">All the best item for You</span>
            <h3 class="main-title">Our Products</h3>
        </div>
        <div class="biolife-tab biolife-tab-contain sm-margin-top-23px">
            <div class="tab-head tab-head__sample-layout">
                <ul class="tabs">
                    <li class="tab-element active">
                        <a href="#tab01_1st" class="tab-link">Featured</a>
                    </li>
                    <li class="tab-element" >
                        <a href="#tab01_2nd" class="tab-link">Top Rated</a>
                    </li>
                    <li class="tab-element" >
                        <a href="#tab01_3rd" class="tab-link">On Sale</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="tab01_1st" class="tab-contain active">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15 }}]}'>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="tab01_2nd" class="tab-contain ">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15 }}]}'>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="tab01_3rd" class="tab-contain ">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15 }}]}'>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Block 05: Banner Promotion-->
<div class="banner-promotion-04 xs-margin-top-50px sm-margin-top-40px">
    <div class="biolife-banner promotion4 biolife-banner__promotion4 v2">
        <div class="container">
            <div class="banner-contain">
                <div class="media">
                    <div class="img-moving position-1">
                        <a href="#" class="banner-link"><img src="assets/images/home-04/bn_promotion-child01-2.png" width="780" height="450" alt="img msv"></a>
                    </div>
                    <div class="img-moving position-2">
                        <img src="assets/images/home-04/bn_promotion-child02-2.png" width="149" height="139" alt="img msv">
                    </div>
                </div>
                <div class="text-content">
                    <span class="sub-line">Special Offer!</span>
                    <b class="first-line">Special discount<br>for all fruit products</b>
                    <div class="biolife-countdown" data-datetime="2020-01-18 00:00 +00:00"></div>
                    <p class="buttons">
                        <a href="#" class="btn btn-bold">See Offer Now!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Block 06: Advance Box-->
<div class="container z-index-20 xs-margin-top-80px sm-margin-top-0">
    <div class="row">
        <div class="col-lg-4 sm-margin-top-60px ">
            <div class="row">
                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="biolife-banner style-05 biolife-banner__style-05">
                        <div class="banner-contain">
                            <div class="media">
                                <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style05.png" width="197" height="230" alt=""></a>
                            </div>
                            <div class="text-content">
                                <b class="text1">Mid June Royal Lee cherries</b>
                                <b class="text-pr"><span>Only:</span>£8.00</b>
                                <a href="#" class="btn btn-shopnow">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 xs-margin-top-30px sm-margin-top-0 lg-margin-top-30px">
                    <div class="biolife-banner style-06 biolife-banner__style-06">
                        <div class="banner-contain">
                            <div class="media">
                                <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style06.png" width="214" height="230" alt=""></a>
                            </div>
                            <div class="text-content">
                                <b class="text1">California</b>
                                <b class="text2">Peaches</b>
                                <b class="text-pr"><span>Only:</span>£8.00</b>
                                <a href="#" class="btn btn-shopnow">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12 xs-margin-top-30px md-margin-top-0 lg-margin-top-30px">
                    <div class="biolife-banner style-07 biolife-banner__style-07">
                        <div class="banner-contain">
                            <div class="media">
                                <a href="#" class="bn-link"><img src="assets/images/home-04/bn_style07.png" width="204" height="230" alt=""></a>
                            </div>
                            <div class="text-content">
                                <b class="text1">Grapes</b>
                                <span class="text2">Make the plate</span>
                                <b class="text-pr"><span>Only:</span>£18.00</b>
                                <a href="#" class="btn btn-shopnow">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 sm-margin-top-64px">
            <div class="advance-product-box">
                <div class="biolife-title-box bold-style biolife-title-box__bold-style xs-margin-top-80px-im sm-margin-top-0-im lg-margin-bottom-26px-im">
                    <h3 class="title">Bestseller Products</h3>
                </div>
                <ul class="products-list biolife-carousel nav-top-right nav-main-color nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":0,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin": 20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin": 15}}]}'>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-24.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-23.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                </a>
                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                            </div>
                            <div class="info">
                                <b class="categories">Vegetables</b>
                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                    <div class="buttons">
                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--Block 07: Brands-->
<div class="brand-slide background-fafafa xs-margin-top-50px sm-margin-top-80px sm-margin-bottom-73px">
    <div class="container">
        <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":650, "settings":{ "slidesToShow": 1}}]}'>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
            <li>
                <div class="biolife-brd-container">
                    <a href="#" class="link">
                        <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163" alt=""></figure>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--Block 08: Products-->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12">
            <div class="advance-product-box">
                <div class="biolife-title-box bold-style biolife-title-box__bold-style mobile-tiny sm-margin-bottom-36px">
                    <h3 class="title">Top Rated Products</h3>
                </div>
                <ul class="products-list vertical-layout products-list__vertical-layout">
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-01.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-02.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-03.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xs-12">
            <div class="advance-product-box">
                <div class="biolife-title-box bold-style biolife-title-box__bold-style mobile-tiny">
                    <h3 class="title">Featured Products</h3>
                </div>
                <ul class="products-list vertical-layout products-list__vertical-layout">
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-04.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-05.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-06.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xs-12 sm-margin-top-54px md-margin-top-0">
            <div class="advance-product-box">
                <div class="biolife-title-box bold-style biolife-title-box__bold-style mobile-tiny">
                    <h3 class="title">Bestseller Products</h3>
                </div>
                <ul class="products-list vertical-layout products-list__vertical-layout">
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-07.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-08.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="contain-product contain-product__right-info-layout2">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="assets/images/home-04/pr-100-09.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                </div>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                    <span class="review-count">(05 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--Block 09: Blog Post-->
<div class="blog-posts xs-margin-top-80px sm-margin-top-61px sm-padding-top-54px xs-padding-bottom-50px">
    <div class="container">
        <div class="biolife-title-box link-all">
            <h3 class="main-title">Our Latest Articles</h3>
            <a href="#" class="blog-link">View All Articles</a>
        </div>
        <ul class="biolife-carousel nav-center xs-margin-top-33px nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
            <li>
                <div class="post-item style-bottom-info layout-02 ">
                    <div class="thumbnail">
                        <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-01.jpg" width="370" height="270" alt=""></a>
                        <div class="post-date">
                            <span class="date">26</span>
                            <span class="month">dec</span>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                        <div class="post-meta">
                            <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                            <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                            <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                            <div class="post-meta__item post-meta__item-social-box">
                                <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <div class="inner-content">
                                    <ul class="socials">
                                        <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                        <div class="group-buttons">
                            <a href="#" class="btn readmore">continue reading</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-item style-bottom-info layout-02">
                    <div class="thumbnail">
                        <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-02.jpg" width="370" height="270" alt=""></a>
                        <div class="post-date">
                            <span class="date">26</span>
                            <span class="month">dec</span>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                        <div class="post-meta">
                            <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                            <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                            <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                            <div class="post-meta__item post-meta__item-social-box">
                                <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <div class="inner-content">
                                    <ul class="socials">
                                        <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                        <div class="group-buttons">
                            <a href="#" class="btn readmore">continue reading</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-item style-bottom-info layout-02">
                    <div class="thumbnail">
                        <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-04.jpg" width="370" height="270" alt=""></a>
                        <div class="post-date">
                            <span class="date">26</span>
                            <span class="month">dec</span>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                        <div class="post-meta">
                            <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                            <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                            <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                            <div class="post-meta__item post-meta__item-social-box">
                                <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <div class="inner-content">
                                    <ul class="socials">
                                        <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                        <div class="group-buttons">
                            <a href="#" class="btn readmore">continue reading</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-item style-bottom-info layout-02">
                    <div class="thumbnail">
                        <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-03.jpg" width="370" height="270" alt=""></a>
                        <div class="post-date">
                            <span class="date">26</span>
                            <span class="month">dec</span>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                        <div class="post-meta">
                            <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                            <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                            <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                            <div class="post-meta__item post-meta__item-social-box">
                                <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <div class="inner-content">
                                    <ul class="socials">
                                        <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                        <div class="group-buttons">
                            <a href="#" class="btn readmore">continue reading</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-item style-bottom-info layout-02">
                    <div class="thumbnail">
                        <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-05.jpg" width="370" height="270" alt=""></a>
                        <div class="post-date">
                            <span class="date">26</span>
                            <span class="month">dec</span>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                        <div class="post-meta">
                            <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                            <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                            <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                            <div class="post-meta__item post-meta__item-social-box">
                                <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <div class="inner-content">
                                    <ul class="socials">
                                        <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                        <div class="group-buttons">
                            <a href="#" class="btn readmore">continue reading</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-item style-bottom-info layout-02">
                    <div class="thumbnail">
                        <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-06.jpg" width="370" height="270" alt=""></a>
                        <div class="post-date">
                            <span class="date">26</span>
                            <span class="month">dec</span>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                        <div class="post-meta">
                            <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                            <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                            <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                            <div class="post-meta__item post-meta__item-social-box">
                                <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <div class="inner-content">
                                    <ul class="socials">
                                        <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                        <div class="group-buttons">
                            <a href="#" class="btn readmore">continue reading</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

</div>


@endsection
