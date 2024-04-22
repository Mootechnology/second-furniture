@extends('frontend.layout.app')
@section('customCss')
@endsection
@section('content')
    <!-- START:: TOP Banner -->
    <section class="top-banner">
      <div class="top-banner-img">
        <img src="./frontend/assets/images/breadcrumb1.png" alt="Banner" class="img-fluid">
        <div class="text-container">
          <h2>Wishlist</h2>
          <p><a href="index.html"> Home </a>> Whishlist</p>
        </div>
      </div>
    </section>
    <!-- END:: TOP Banner -->

    <!-- START:: Wish list -->
    <section class="container-fluid mt-3 mb-3">

      <div class="row px-3">
        <div class="col-md-6 border wishlist_products d-flex align-items-center py-3">

            <div class="cross mr-3">
              <a href="#"><i class="fa-solid fa-xmark"></i></a>
            </div>

            <div class="wish_product mr-3">
              <img src="frontend/assets/images/product/product_1.png" width="120px" height="120px" alt="wish_product">
            </div>

            <div class="wish_description">
              <h5>Product Name</h5>
              <h5>£200</h5>
              <p>December 5, 2023</p>
            </div>

        </div>
        <div class="col-md-6 border wish_btn pt-3">
            <p>In Stock</p>
            <button type="submit" value="submit" class="btn_3 mb-3">Buy Product</button>
        </div>
    </div>

    </section>
    <!-- START:: Wish list -->

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
