@extends('frontend.layout.app')
@section('customCss')
@endsection
@section('content')
    <!-- START:: TOP Banner -->
    <section class="top-banner">
      <div class="top-banner-img">
        <img src="{{asset('./assets/images/breadcrumb1.png')}}" alt="Banner" class="img-fluid">
        <div class="text-container">
          <h2>FAQ</h2>
          <p class="lead" style="color: #fff;">Find answers to common questions about our furniture products.</p>
        </div>
      </div>       
    </section>
    <!-- END:: TOP Banner -->

    <!-- START: FAQ Section -->
    <div class="container mb-5 mt-5">
      <div class="row">
  
        <!-- Section 1 - Living Room Furniture -->
        <div class="col-md-6"> <!-- Adjusted width to col-md-6 -->
          <div class="card">
            <div class="card-header" id="livingRoomHeader">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#livingRoomCollapse" aria-expanded="true" aria-controls="livingRoomCollapse">
                  Your Order
                </button>
              </h2>
            </div>
            <div id="livingRoomCollapse" class="collapse show" aria-labelledby="livingRoomHeader" data-parent="#faqAccordion">
              <div class="card-body">
                <!-- FAQ Item 1 - Where is my order? -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq1Collapse" aria-expanded="true" aria-controls="faq1Collapse">
                      Where is my order?
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq1Collapse" aria-expanded="true" aria-controls="faq1Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faq1Collapse" class="collapse" aria-labelledby="faq1Header" data-parent="#livingRoomCollapse">
                  <p>Once your order has been shipped, you will receive an email with a tracking number. You can use this tracking number to monitor the status of your delivery.</p>
                </div>
  
                <!-- FAQ Item 2 - How can I make a complaint? -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq2Collapse" aria-expanded="true" aria-controls="faq2Collapse">
                      How can I make a complaint?
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faq2Collapse" aria-expanded="true" aria-controls="faq2Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faq2Collapse" class="collapse" aria-labelledby="faq2Header" data-parent="#livingRoomCollapse">
                  <p>If you have any issues or complaints about your order, please contact our customer service team through our <a href="contact.html">contact page</a>. We will be happy to assist you.</p>
                </div>
  
                <!-- Add more FAQ items as needed -->
              </div>
            </div>
          </div>
        </div>
  
        <!-- Section 2 - Delivery -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header" id="deliveryHeader">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#deliveryCollapse" aria-expanded="true" aria-controls="deliveryCollapse">
                  Delivery
                </button>
              </h2>
            </div>
            <div id="deliveryCollapse" class="collapse show" aria-labelledby="deliveryHeader" data-parent="#faqAccordion">
              <div class="card-body">
                <!-- FAQ Item 1 - Delivery Options -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery1Collapse" aria-expanded="true" aria-controls="faqDelivery1Collapse">
                      Delivery Options
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery1Collapse" aria-expanded="true" aria-controls="faqDelivery1Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faqDelivery1Collapse" class="collapse" aria-labelledby="faqDelivery1Header" data-parent="#deliveryCollapse">
                  <p>We offer various delivery options, including standard and express delivery. Choose the one that suits you best.</p>
                </div>
  
                <!-- FAQ Item 2 - Tracking Orders -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery2Collapse" aria-expanded="true" aria-controls="faqDelivery2Collapse">
                      Tracking Orders
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqDelivery2Collapse" aria-expanded="true" aria-controls="faqDelivery2Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faqDelivery2Collapse" class="collapse" aria-labelledby="faqDelivery2Header" data-parent="#deliveryCollapse">
                  <p>Once your order is shipped, you will receive a tracking number to monitor the delivery status. You can use this tracking number on our website to track your order.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
  
      <!-- New Row for Payment and Refunds & Returns -->
      <div class="row mt-4">
  
        <!-- Section 3 - Payment -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header" id="paymentHeader">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#paymentCollapse" aria-expanded="true" aria-controls="paymentCollapse">
                  Payment
                </button>
              </h2>
            </div>
            <div id="paymentCollapse" class="collapse show" aria-labelledby="paymentHeader" data-parent="#faqAccordion">
              <div class="card-body">
                <!-- FAQ Item 1 - Payment Methods -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment1Collapse" aria-expanded="true" aria-controls="faqPayment1Collapse">
                      Payment Methods
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment1Collapse" aria-expanded="true" aria-controls="faqPayment1Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faqPayment1Collapse" class="collapse" aria-labelledby="faqPayment1Header" data-parent="#paymentCollapse">
                  <p>We accept various payment methods, including credit cards, PayPal, and other online payment services.</p>
                </div>
  
                <!-- FAQ Item 2 - Payment Security -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment2Collapse" aria-expanded="true" aria-controls="faqPayment2Collapse">
                      Payment Security
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqPayment2Collapse" aria-expanded="true" aria-controls="faqPayment2Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faqPayment2Collapse" class="collapse" aria-labelledby="faqPayment2Header" data-parent="#paymentCollapse">
                  <p>Your payment information is secure. We use encryption technology to protect your personal and financial information.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Section 4 - Refunds & Returns -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header" id="returnsHeader">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#returnsCollapse" aria-expanded="true" aria-controls="returnsCollapse">
                  Refunds & Returns
                </button>
              </h2>
            </div>
            <div id="returnsCollapse" class="collapse show" aria-labelledby="returnsHeader" data-parent="#faqAccordion">
              <div class="card-body">
                <!-- FAQ Item 1 - Return Policy -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns1Collapse" aria-expanded="true" aria-controls="faqReturns1Collapse">
                      Return Policy
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns1Collapse" aria-expanded="true" aria-controls="faqReturns1Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faqReturns1Collapse" class="collapse" aria-labelledby="faqReturns1Header" data-parent="#returnsCollapse">
                  <p>Our return policy allows you to return items within 30 days of purchase. Please review our <a href="return-policy.html">return policy</a> for more details.</p>
                </div>
  
                <!-- FAQ Item 2 - Refund Process -->
                <div class="faq-item d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">
                    <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns2Collapse" aria-expanded="true" aria-controls="faqReturns2Collapse">
                      Refund Process
                    </button>
                  </h5>
                  <button class="btn btn-link plus-minus-btn" type="button" data-toggle="collapse" data-target="#faqReturns2Collapse" aria-expanded="true" aria-controls="faqReturns2Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="faqReturns2Collapse" class="collapse" aria-labelledby="faqReturns2Header" data-parent="#returnsCollapse">
                  <p>Our refund process is designed to ensure a smooth and timely return of funds in case of a return. Refunds are typically processed within 5 business days.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
    <!-- END: FAQ Section -->

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