@extends('frontend.layout.app')
@section('customCss')
@endsection
@section('content')
    <!-- START:: TOP Banner -->
    <section class="top-banner">
      <div class="top-banner-img">
        <img src="{{asset('./assets/images/breadcrumb1.png')}}" alt="Banner" class="img-fluid">
        <div class="text-container">
          <h2>Checkout</h2>
          <p><a href="index.html"> Home </a>> <a href="shop.html"> Shop </a> > Checkout</p>
        </div>
      </div>       
    </section>
    <!-- END:: TOP Banner -->

    <!-- START: Customer and Cupon bar -->
    <section class="customer-and-cupon px-5 mt-3">
      <!-- Coupen -->
      <div class="container-fluid returning-customer p-2 mt-3">
        <p> <i class="fa-regular fa-file"></i> Have a Coupon? <a href="login.html">Click Here to Enter Your Code</a></p> 
      </div>
    </section>
    <!-- END: Customer and Cupon bar -->
    
    <!-- START: Checkout form -->
    <section class="checkout-form mt-5 mb-5">
      <div class="container-fluid px-5">
        <div class="row">
          
          <!-- Billing Details -->
          <div class="col-md-12 col-lg-6">
            <h2>Billing Details</h2>
            <form class="billing-details" action="#" method="post">
              <!-- first name -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">First name <span style="color: red;">*</span></label>
                <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <!-- last name -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Last name <span style="color: red;">*</span></label>
                <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <!-- Company Name -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Company name (optional)</label>
                <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <!-- last name -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Country / Region <span style="color: red;">*</span></label>
                <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <!-- Street Address -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Street Address <span style="color: red;">*</span></label>
                <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="House number and street name" required>
                <input style="color: black;" type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Apartment, Suit, Unit etc. (optional)">
              </div>
              <!-- Town/City -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Town / City <span style="color: red;">*</span></label>
                <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <!-- State/Country -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label wide">State / Country <span style="color: red;">*</span></label>
                <select class="form-select wide">
                  <option selected class="list">State / Country</option>
                  <option value="1" class="list">One</option>
                  <option value="2" class="list">Two</option>
                  <option value="3" class="list">Three</option>
                </select>
              </div>
              <!-- Postal/Zip -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Postal / Zip <span style="color: red;">*</span></label>
                <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <!-- Phone -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone <span style="color: red;">*</span></label>
                <input style="color: black;" type="number" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email <span style="color: red;">*</span></label>
                <input style="color: black;" type="email" class="form-control" id="exampleFormControlInput1" required>
              </div>
              
              <!-- Create Account -->
              <div class="create-account">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onchange="toggleCreateAccountForm()">
                  <label class="form-check-label" for="flexCheckDefault">
                    Create and Account?
                  </label>
                </div>
                <section class="create-account-form" id="createAccountForm" style="display: none;">
                  <div class="mb-3 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Create Account and Passsword <span style="color: red;">*</span></label>
                    <input style="color: black;" type="email" class="form-control" id="exampleFormControlInput1" required>
                  </div>
                </section>
              </div>
              <!-- Create Account -->

              <!-- Ship to different Address -->
              <div class="create-account">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onchange="toggleCreateShipmentForm()">
                  <label class="form-check-label" for="flexCheckDefault">
                    <strong>Shipment to different address</strong>
                  </label>
                </div>
               
                <section class="shipment-form" id="createShipmentForm" style="display: none;">
                  <div class="mb-3 mt-3">
                    <!-- last name -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Last name <span style="color: red;">*</span></label>
                      <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <!-- Company Name -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Company name (optional)</label>
                      <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <!-- last name -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Country / Region <span style="color: red;">*</span></label>
                      <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <!-- Street Address -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Street Address <span style="color: red;">*</span></label>
                      <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="House number and street name" required>
                      <input style="color: black;" type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Apartment, Suit, Unit etc. (optional)">
                    </div>
                    <!-- Town/City -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Town / City <span style="color: red;">*</span></label>
                      <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <!-- State/Country -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label wide">State / Country <span style="color: red;">*</span></label>
                      <select class="form-select wide">
                        <option selected class="list">State / Country</option>
                        <option value="1" class="list">One</option>
                        <option value="2" class="list">Two</option>
                        <option value="3" class="list">Three</option>
                      </select>
                    </div>
                    <!-- Postal/Zip -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Postal / Zip <span style="color: red;">*</span></label>
                      <input style="color: black;" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <!-- Phone -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Phone <span style="color: red;">*</span></label>
                      <input style="color: black;" type="number" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email <span style="color: red;">*</span></label>
                      <input style="color: black;" type="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>

                  </div>
                </section>
              </div>
              <!-- Ship to different Address -->
              <!-- Order Notes -->
              <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Order Notes (Optional)</label>
                <textarea style="color: black;" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </form>
          </div>
          <!-- Billing Details -->
          
          <!-- Your Order -->
          <div class="col-md-12 col-lg-6" id="checkout-data">
            
            <h2>Your Order</h2>
            <!-- Checkout data -->
            <div class="checkout-data p-2" style="background-color: #f5f5f5;">
              <!-- card -->
              <div class="container-lg mt-5">
                <div class="card">
                    <div class="your-order-box p-4" style="display: flex;">
                        <!-- left -->
                       <div class="box-left" style="width: 50%;">
                          <h5 class="card-title">Product</h5>
                                <p class="card-text" style="color: #afafaf;">
                                  <hr>
                                  <div class="p_name"><span>Bed Neck Pillows x 1</span></div>
                                  <hr>
                                  <div class="subtotal"><span>Subtotle</span></div>
                                  <hr>
                                  <div style="margin-bottom: 53px;"><span>Shipping</span></div>  
                                  <hr>
                                  <div><span>Total</span></div>
                                </p>
                        </div>
                        <!-- right -->
                        <div class="box-right" style="width: 50%;">
                          <h5 class="card-title">Subtotal</h5>
                                <p class="card-text">
                                  <hr>
                                  <div><h4 class="br-price"><b>£200</b></h4></div>
                                  <hr>
                                  <div><h4><b>£200</b></h4></div>
                                  <hr>
                                  <!-- Radio Btn -->
                                  <div>
                                    <div>
                                      <input type="radio" name="free-ship" id="free-ship">
                                      <label>Free Ship</label>
                                    </div>
                                    
                                    <div>
                                      <input type="radio" name="flat-rate" id="flat-rate">
                                      <label>Flat Rate</label>
                                    </div>
                                  </div>
                                  <!-- Radio Btn -->
                                  <hr>
                                  <div><h3 class="total_price"><b>£200</b></h3></div>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
              <!-- card -->
              <!-- Details -->
              <div class="product_details p-4" style="background-color: #f5f5f5;">
                <input type="radio" name="bank-transfer" id="bank-transfer">
                <label>Direct Bank Transfer</label>
                <p><small>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</small></p>
                <hr>
                <input type="radio" name="cod" id="cod">
                <label>Cash on Delivery</label>
                <hr>
                  <input type="radio" name="paypal" id="palypal">
                  <label>Paypal</label>

                  <div class="input-group newsletter-btn mt-5">
                    <div class="input-group-append">
                        <a href="#" class="center_btn_2" id="basic-addon2">Place Order</a>
                    </div>
                 </div>

              </div>
              <!-- Details -->

             <!-- <div class="input-group mt-4">
              <div class="input-group-append">
                  <a href="#" class="btn_3" id="basic-addon2">Place Order</a>
              </div>
            </div> -->  
            </div>
            <!-- Checkout data -->
           
          </div>
        </div>
      </div>
    </section>
    <!-- END: Checkout form -->

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
   