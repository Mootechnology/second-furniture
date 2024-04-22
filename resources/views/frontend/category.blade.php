@extends('frontend.layout.app')

@section('customCsd')
@endsection

@section('content')

    <!-- START:: TOP Banner -->
    <section class="top-banner">
        <div class="top-banner-img">
          <img src="{{ asset('./frontend/assets/images/breadcrumb1.png')}}" alt="Banner" class="img-fluid">
          <div class="text-container">
            <h2>Category</h2>
            <p><a href="index.html"> Home </a>> Category</p>
          </div>
        </div>
      </section>
      <!-- END:: TOP Banner -->

    <!-- START: Products -->
    <section class="cat_product_area">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-3 px-4">
                    <div class="left_sidebar_area bg-light">
                        <aside class="category-box left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Color Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!-- PRICE RANGE -->
                        <section class="mb-5 left_widgets p_filter_widgets p-2">
                            <div>
                                <h3>Price Filter</h3>
                            </div>
                            <div>
                                <input type="text" class="js-range-slider my_range" name="my_range" value="" />
                            </div>
                        </section>
                        <!-- PRICE RANGE -->
                    </div>
                </div>
                <div class="col-lg-9">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-bar-container bg-light px-4 py-2">
                                <div>
                                    <p><span>10000 </span> Products Found</p>
                                </div>
                                <div class="sort-by">
                                    <h5 class="mt-2">Sort: </h5>
                                    <select class="wide">
                                        <option data-display="Select">name</option>
                                        <option class="list" value="1">price</option>
                                        <option class="list" value="2">product</option>
                                    </select>
                                </div>

                                <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input style="color: black;" type="text" class="form-control" placeholder="search" aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend product-search-button">
                                            <span class="input-group-text product-search-button" id="inputGroupPrepend"><i class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_1.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="cart.html" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_2.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_3.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_4.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_2.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_6.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_7.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_8.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_2.png')}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <h3>£150.00</h3>
                                    <a href="#" class="add_cart">+ add to cart</a>
                                    <a href="wishlist.html" class="add_cart" style="margin-top: -28px;"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="fa-solid fa-angles-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="fa-solid fa-angles-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Products -->

    <!-- START:: Best Seller Product Slider -->
    <section class="product_list best_seller">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="section_tittle text-center">
                      <h2>New Arrivals</h2>
                  </div>
              </div>
          </div>
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_1.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_2.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_3.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_4.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{ asset('frontend/assets/images/product/product_5.png')}}" alt=""></a>
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
