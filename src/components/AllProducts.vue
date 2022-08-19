<template>
  <div>
    <HeaderProduct />
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="../assets/img/shop01.png" alt="" />
              </div>
              <div class="shop-body">
                <h3>Laptop<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="../assets/img/shop03.png" alt="" />
              </div>
              <div class="shop-body">
                <h3>Accessories<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="../assets/img/shop02.png" alt="" />
              </div>
              <div class="shop-body">
                <h3>Cameras<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">New Products</h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                  <li class="active">
                    <a data-toggle="tab" href="#tab1">Laptops</a>
                  </li>
                  <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                  <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                  <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick row" data-nav="#slick-nav-1">
                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product01.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product02.png" alt="" />
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product03.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating"></div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product04.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <!-- <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product05.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div> -->
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-1" class="-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="hot-deal">
              <ul class="hot-deal-countdown">
                <li>
                  <div>
                    <h3>02</h3>
                    <span>Days</span>
                  </div>
                </li>
                <li>
                  <div>
                    <h3>10</h3>
                    <span>Hours</span>
                  </div>
                </li>
                <li>
                  <div>
                    <h3>34</h3>
                    <span>Mins</span>
                  </div>
                </li>
                <li>
                  <div>
                    <h3>60</h3>
                    <span>Secs</span>
                  </div>
                </li>
              </ul>
              <h2 class="text-uppercase">hot deal this week</h2>
              <p>New Collection Up to 50% OFF</p>
              <a class="primary-btn cta-btn" href="#">Shop now</a>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">Top selling</h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                  <li class="active">
                    <a data-toggle="tab" href="#tab2">Laptops</a>
                  </li>
                  <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                  <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                  <li><a data-toggle="tab" href="#tab2">Accessories</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab2" class="tab-pane fade in active">
                  <div class="products-slick row" data-nav="#slick-nav-2">
                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product06.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product07.png" alt="" />
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product08.png" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating"></div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product09.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <!-- <div class="product col-3">
                      <div class="product-img">
                        <img src="../assets/img/product01.png" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div> -->
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-2" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-3" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-3">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product07.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product08.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product09.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product01.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product02.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product03.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-4" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-4">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product04.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product05.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product06.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product07.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product08.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product09.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-5" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-5">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product01.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product02.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product03.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product04.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product05.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="../assets/img/product06.png" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="newsletter">
              <p>Sign Up for the <strong>NEWSLETTER</strong></p>
              <form>
                <input
                  class="input"
                  type="email"
                  placeholder="Enter Your Email"
                />
                <button class="newsletter-btn">
                  <i class="fa fa-envelope"></i> Subscribe
                </button>
              </form>
              <ul class="newsletter-follow">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <FooterProduct />
    <!-- /NEWSLETTER -->
  </div>
</template>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.0.3/nouislider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.min.js"></script>
<script>
import axios from "axios";
import HeaderProduct from "./HeaderProduct.vue";
import FooterProduct from "./FooterProduct.vue";
// import footer from "@/FooterProduct";
export default {
  name: "AllProduct",
  components: {
    HeaderProduct,
    FooterProduct,
  },
  data() {
    return {
      user_name: "",
    };
  },
  methods: {
    checkLogin() {
      let token = window.localStorage.getItem("token");
      if (token == null) {
        this.$router.push({ name: "Login" });
      }
      axios
        .get("http://127.0.0.1:8000/api/userInf", {
          headers: {
            Accept: "application/json",
            Authorization: "Bearer" + " " + token,
          },
        })
        .then((response) => {
          this.user_name = response.data;
          console.log(response.data[0].user_name);
        })
        .catch((e) => {
          console.log("Bearer" + token);
          console.log(e);
        });
    },
  },
  mounted() {
    this.checkLogin();
    // (function ($) {
    //   "use strict";
    //   // Products Slick
    //   $(".products-slick").each(function () {
    //     var $this = $(this),
    //       $nav = $this.attr("data-nav");

    //     $this.slick({
    //       slidesToShow: 4,
    //       slidesToScroll: 1,
    //       autoplay: true,
    //       infinite: true,
    //       speed: 300,
    //       dots: false,
    //       arrows: true,
    //       appendArrows: $nav ? $nav : false,
    //       responsive: [
    //         {
    //           breakpoint: 991,
    //           settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 1,
    //           },
    //         },
    //         {
    //           breakpoint: 480,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //           },
    //         },
    //       ],
    //     });
    //   });

    //   // Products Widget Slick
    //   $(".products-widget-slick").each(function () {
    //     var $this = $(this),
    //       $nav = $this.attr("data-nav");

    //     $this.slick({
    //       infinite: true,
    //       autoplay: true,
    //       speed: 300,
    //       dots: false,
    //       arrows: true,
    //       appendArrows: $nav ? $nav : false,
    //     });
    //   });

    //   /////////////////////////////////////////

    //   // Product Main img Slick
    //   $("#product-main-img").slick({
    //     infinite: true,
    //     speed: 300,
    //     dots: false,
    //     arrows: true,
    //     fade: true,
    //     asNavFor: "#product-imgs",
    //   });

    //   // Product imgs Slick
    //   $("#product-imgs").slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     arrows: true,
    //     centerMode: true,
    //     focusOnSelect: true,
    //     centerPadding: 0,
    //     vertical: true,
    //     asNavFor: "#product-main-img",
    //     responsive: [
    //       {
    //         breakpoint: 991,
    //         settings: {
    //           vertical: false,
    //           arrows: false,
    //           dots: true,
    //         },
    //       },
    //     ],
    //   });

    //   // Product img zoom
    //   var zoomMainProduct = document.getElementById("product-main-img");
    //   if (zoomMainProduct) {
    //     $("#product-main-img .product-preview").zoom();
    //   }

    //   /////////////////////////////////////////

    //   // Input number
    //   $(".input-number").each(function () {
    //     var $this = $(this),
    //       $input = $this.find('input[type="number"]'),
    //       up = $this.find(".qty-up"),
    //       down = $this.find(".qty-down");

    //     down.on("click", function () {
    //       var value = parseInt($input.val()) - 1;
    //       value = value < 1 ? 1 : value;
    //       $input.val(value);
    //       $input.change();
    //       updatePriceSlider($this, value);
    //     });

    //     up.on("click", function () {
    //       var value = parseInt($input.val()) + 1;
    //       $input.val(value);
    //       $input.change();
    //       updatePriceSlider($this, value);
    //     });
    //   });

    //   var priceInputMax = document.getElementById("price-max"),
    //     priceInputMin = document.getElementById("price-min");

    //   priceInputMax.addEventListener("change", function () {
    //     updatePriceSlider($(this).parent(), this.value);
    //   });

    //   priceInputMin.addEventListener("change", function () {
    //     updatePriceSlider($(this).parent(), this.value);
    //   });

    //   function updatePriceSlider(elem, value) {
    //     if (elem.hasClass("price-min")) {
    //       console.log("min");
    //       priceSlider.noUiSlider.set([value, null]);
    //     } else if (elem.hasClass("price-max")) {
    //       console.log("max");
    //       priceSlider.noUiSlider.set([null, value]);
    //     }
    //   }

    //   // Price Slider
    //   var priceSlider = document.getElementById("price-slider");
    //   if (priceSlider) {
    //     noUiSlider.create(priceSlider, {
    //       start: [1, 999],
    //       connect: true,
    //       step: 1,
    //       range: {
    //         min: 1,
    //         max: 999,
    //       },
    //     });

    //     priceSlider.noUiSlider.on("update", function (values, handle) {
    //       var value = values[handle];
    //       handle
    //         ? (priceInputMax.value = value)
    //         : (priceInputMin.value = value);
    //     });
    //   }
    // })(jQuery);
  },
};
/* eslint-env jquery */
</script>

<style scoped>
/* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.0.3/nouislider.min.css"></link> */
</style>

