@extends('frontend.layout.app')
@section('customCss')
@endsection
@section('content')
    <!-- START:: TOP Banner -->
    <section class="top-banner">
      <div class="top-banner-img">
        <img src="{{('./assets/images/breadcrumb1.png')}}" alt="Banner" class="img-fluid">
        <div class="text-container">
          <h2>Cart</h2>
          <p><a href="index.html"> Home </a>> Cart</p>
        </div>
      </div>       
    </section>
    <!-- END:: TOP Banner -->

    <!-- START: Cart Section -->
    <section class="cart-section mb-5 mt-5">
      <div class="container">
        <h1>Shopping</h1>
        <table class="table table-xs">
          <tr>
            <th></th>
            <th>Description</th>
            <th class="text-right">Amount</th>
            <th class="text-right">Price</th>
            <th class="text-right">Total</th>
          </tr>
          
          <tr class="item-row">
            <td> <img src="http://placehold.it/50x50"/></td>
            <td>
              <p> <strong>Item 1</strong></p>
              <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
            </td>
            <td class="text-right" title="Amount">3</td>
            <td class="text-right" title="Price">2.00</td>
            <td class="text-right" title="Total">6.00</td>
          </tr>

          <tr class="item-row">
            <td> <img src="http://placehold.it/50x50"/></td>
            <td>
              <p> <strong>Item 1</strong></p>
              <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
            </td>
            <td class="text-right" title="Amount">3</td>
            <td class="text-right" title="Price">2.00</td>
            <td class="text-right" title="Total">6.00</td>
          </tr>

          <tr class="item-row item-row-last">
            <td> <img src="http://placehold.it/50x50"/></td>
            <td>
              <p> <strong>Item 2</strong></p>
              <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
            </td>
            <td class="text-right" title="Amount">3</td>
            <td class="text-right" title="Price">4.00</td>
            <td class="text-right" title="Total">12.00</td>
          </tr>
          <tr class="total-row info">
            <td class="text-right" colspan="4">Total</td>
            <td class="text-right">18.00</td>
          </tr>
        </table>
      </div>
    </section>
    <!-- END: Cart Section -->
   
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
   