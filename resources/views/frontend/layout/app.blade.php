<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Furni Mart</title>
    <!-- START:: Styles -->
    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}} " />
    <!-- font awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/price_rangs.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
    
    <!-- style CSS -->
    <link rel="stylesheet" href=" {{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/homebanner.css')}}">
    <!-- END:: Styles -->
    <!-- component -->
    <script src="footer.js"></script>
    <!-- component -->
    @yield('customCss')
  </head>
  <body>
    <!--START::Nav Section-->
    <header class="main_menu home_menu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              
              <a class="navbar-brand" href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="logo" /></a>
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_icon"><i  style="color: #78909c;" class="fas fa-bars"></i></span>
              </button>

              <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('index')}}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                      <a class="dropdown-item" href="{{route('category')}}">
                        shop category
                      </a>
                      <a class="dropdown-item" href="{{route('allproducts')}}">
                        All Products
                      </a>
                      <a class="dropdown-item" href="{{route('single-product')}}">
                        product details
                      </a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                      <a class="dropdown-item" href="{{route('checkout')}}">product checkout</a>
                      <a class="dropdown-item" href="{{route('cart')}}">shopping cart</a>
                    </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                  </li>
                </ul>
              </div>
              <div class="hearer_icon d-flex">
                <a id="search_1" href="#"><i style="color: #78909c" class="fa-solid fa-magnifying-glass"></i></a>
                <a href="{{route('wishlist')}}"><i style="color: #78909c" class="fa-regular fa-heart"></i></a>
                <a href="{{route('cart')}}"><i style="color: #78909c" class="fas fa-cart-plus"></i></a>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between search-inner">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here"/>
            <button type="submit" class="btn"></button>
            <span id="close_search" title="Close Search">
              <i class="fa-solid fa-xmark"></i>
            </span>
          </form>
        </div>
      </div>
    </header>
    <!-- END::Nav Section-->





    @yield('content')
    
    
    
    
    
    <!-- START:: Footer -->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Shop</h4>
                        <ul class="list-unstyled">
                            <li><a href="category.html">Shop Category</a></li>
                            <li><a href="allproducts.html">All Products</a></li>
                            <li><a href="single-product.html">Product Details</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Pages</h4>
                        <ul class="list-unstyled">
                            <li><a href="checkout.html">Product Checkout</a></li>
                            <li><a href="cart.html">Shoping Cart</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</P>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon fab fa-facebook-f"></a></li>
                                <li><a href="#" class="single_social_icon fab fa-twitter"></a></li>
                                <li><a href="#" class="single_social_icon fas fa-globe"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END:: Footer -->

    <!-- START:: JS -->
    <script src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->

    {{-- coustom Js --}}
    @yield('customJs')
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" ></script>

    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3,
                loop: false
            }
        }
    })
    </script>
    <!-- END:: JS -->
  </body>
</html>
