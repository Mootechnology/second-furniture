@extends('frontend.layout.app')
@section('customCss')

@endsection

@section('content')
<!-- banner part start-->
<section class="mycrousel mb-3" style="color: #f8fbff;">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-12">
              <div class="banner_slider owl-carousel">
                  <div class="single_banner_slider">
                      <div class="row">
                          <div class="col-lg-5 col-md-8">
                              <div class="banner_text">
                                  <div class="banner_text_iner">
                                      <h1>Wood & Cloth Sofa</h1>
                                      <p class="mt-3">Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                      <a href="category.html" class="btn_3 mt-3">Shop Now</a>
                                  </div>
                              </div>
                          </div>
                          <div class="banner_img d-none d-lg-block">
                              <img src="{{ asset('assets/images/banner_img.png')}}" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="single_banner_slider">
                      <div class="row">
                          <div class="col-lg-5 col-md-8">
                              <div class="banner_text">
                                  <div class="banner_text_iner">
                                    <h1>Wood & Cloth Sofa</h1>
                                    <p class="mt-3">Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                      <a href="category.html" class="btn_3 mt-3">Shop Now</a>
                                  </div>
                              </div>
                          </div>
                          <div class="banner_img d-none d-lg-block">
                              <img src="{{ asset('assets/images/banner_img.png')}}" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="single_banner_slider">
                    <div class="row">
                        <div class="col-lg-5 col-md-8">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                  <h1>Wood & Cloth Sofa</h1>
                                  <p class="mt-3">Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                    <a href="category.html" class="btn_3 mt-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner_img d-none d-lg-block">
                            <img src="{{ asset('assets/images/banner_img.png')}}" alt="">
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- banner part start-->

<!-- START:: Sales -->
<div class="owl-carousel px-3 mt-4">
<div class="sales-carousel"> <img src="{{ asset('assets/images/sale1.jpg')}}" alt="1"> </div>
<div class="sales-carousel"> <img src="{{ asset('assets/images/sale2.jpg')}}" alt="2"> </div>
<div class="sales-carousel"> <img src="{{ asset('assets/images/sale3.jpg')}}" alt="3"> </div>
</div>

<!-- END:: Sales -->
<br>
<!-- START:: Best Seller Product Slider -->
<section class="product_list best_seller">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-12 mt-4">
              <div class="section_tittle text-center">
                  <h2>Products</h2>
              </div>
          </div>
      </div>
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-12">
            <div class="best_product_slider owl-carousel">
                <div class="single_product_item">
                    <a href="single-product.html"><img src="{{ asset('assets/images/product/product_1.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_2.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_3.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_4.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_5.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- END:: Best Seller Product Slider -->

<!-- START:: Best Seller Product Slider -->
<section class="product_list best_seller">
<div class="container">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-12">
            <div class="best_product_slider owl-carousel">
                <div class="single_product_item">
                    <a href="single-product.html"><img src="{{ asset('assets/images/product/product_1.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_2.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_3.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_4.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
                <div class="single_product_item">
                  <a href="single-product.html"><img src="{{ asset('assets/images/product/product_5.png')}}" alt=""></a>
                    <div class="single_product_text">
                        <h4>Quartz Belt Watch</h4>
                        <h3>$150.00</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- END:: Best Seller Product Slider -->

<!-- START:: Shop by category -->
<section class="feature_part padding_top">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="section_tittle text-center">
                  <h2>Shop By Category</h2>
              </div>
          </div>
      </div>
      <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 col-sm-6">
              <div class="single_feature_post_text single_feature_post_first">
                  <p>Premium Quality</p>
                  <h3>Category Name</h3>
                  <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                  <img src="{{ asset('assets/images/feature/feature_1.png')}}" alt="">
              </div>
          </div>
          <div class="col-lg-5 col-sm-6">
              <div class="single_feature_post_text single_feature_post_scnd">
                  <p>Premium Quality</p>
                  <h3>Category Name</h3>
                  <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                  <img src="{{ asset('assets/images/feature/feature_2.png')}}" alt="">
              </div>
          </div>
          <div class="col-lg-5 col-sm-6">
              <div class="single_feature_post_text single_feature_post_scndlast">
                  <p>Premium Quality</p>
                  <h3>Category Name</h3>
                  <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                  <img src="{{ asset('assets/images/feature/feature_3.png')}}" alt="">
              </div>
          </div>
          <div class="col-lg-7 col-sm-6">
              <div class="single_feature_post_text single_feature_post_last">
                  <p>Premium Quality</p>
                  <h3>Category Name</h3>
                  <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                  <img src="{{ asset('assets/images/feature/feature_4.png')}}" alt="">
              </div>
          </div>
      </div>
  </div>
</section>
<!-- END:: Shop by category -->

<!-- START:: Sales Banner -->
<section class="our_offer section_padding">
<div class="container">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 col-md-6">
            <div class="offer_img">
                <img src="{{ asset('assets/images/offer_img.png')}}" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="offer_text">
                <h2>Weekly Sale on 60% Off All Products</h2>
                
                <div class="date_countdown">
                    <div id="timer">
                        <div id="days" class="date"></div>
                        <div id="hours" class="date"></div>
                        <div id="minutes" class="date"></div>
                        <div id="seconds" class="date"></div>
                    </div>
                </div>

                <div class="input-group newsletter-btn">
                    <div class="input-group-append">
                        <a href="shop.html" class="center_btn_2" id="basic-addon2">Shop Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
<!-- END:: Sales Banner -->

<!-- START:: Connect With Us Section -->
<section class="connect-withus-section">
<div class="home-connect page-container">
  <h3>Connect with us!</h3>
  <div class="connections">
      <i class="connect-button fa-brands fa-square-facebook"></i>
      <i class="connect-button fa-brands fa-square-twitter"></i>
      <i class="connect-button fa-brands fa-google"></i>
      <i class="connect-button fa-brands fa-square-instagram"></i>
      <i class="connect-button fa-brands fa-square-pinterest"></i>
  </div>
</div>
</section>
<!-- END:: Connect With Us Section -->

<!-- START::Brands Section -->
<Section class="brands_section">
<div class="u-layout-row">
<div>
  <div>
    <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/b26eaa96084b5d63a1b8d98d/5.png')}}" alt="" class="u-image u-image-contain u-image-default u-image-1">
  </div>
</div>
<div>
  <div>
    <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/303f208dbbed58b0ad91b352/3.png')}}" alt="" class="u-image u-image-contain u-image-default u-image-2">
  </div>
</div>
<div>
  <div>
    <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/edcb21a5c3ce51d686ceb941/4.png')}}" alt="" class="u-image u-image-contain u-image-default u-image-3">
  </div>
</div>
<div>
  <div>
    <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/f152870f5c9d5ab28268fb89/2.png')}}" alt="" class="u-image u-image-contain u-image-default u-image-4">
  </div>
</div>
<div>
  <div>
    <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/8cf263ed39d95b719e7321a1/6.png')}}" alt="" class="u-image u-image-contain u-image-default u-image-5">
  </div>
</div>
</div>
</Section>
<!-- END::Brands Section -->

<!-- START:: News Letter -->
<section class="subscribe_area">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-7">
              <div class="subscribe_area_text text-center">
                  <h5>Join Our Newsletter</h5>
                  <h2>Subscribe to get Updated with new offers</h2>
                  <div class="input-group newsletter-container">
                      <input type="text" class="form-control newsletter-input" placeholder="enter email address" aria-label="Recipient's username" aria-describedby="basic-addon2" style="color: black;">
                      <div class="input-group-append newsletter-btn">
                          <a href="#" id="basic-addon2">Subscribe now</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- END:: News Letter -->
@endsection


@section('customJs')
@endsection

