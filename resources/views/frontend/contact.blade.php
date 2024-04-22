@extends('frontend.layout.app')
@section('customCss')
@endsection
@section('content')
    <!-- START:: TOP Banner -->
    <section class="top-banner">
      <div class="top-banner-img">
        <img src="{{asset('./frontend/assets/images/breadcrumb1.png')}}" alt="Banner" class="img-fluid">
        <div class="text-container">
          <h2>Contact</h2>
          <p><a href="index.html"> Home </a>> Contact</p>
        </div>
      </div>
    </section>
    <!-- END:: TOP Banner -->

    <!-- START: Contact Section -->
  <section class="contact-section">
    <div class="container mt-4">
      <div class="row" class="inner-contact-section">
        <div class="col-lg-4 col-sm-12 mb-4 py-5 border contact-section-para">
          <p>Wood Worth Cabinatry</p>
          <h2>Get in Touch</h2>
          <hr style="color:#29384B; width: 50px; font-weight: bold;">
          <p>Studio 101, 13 Bowden St
            Alexandria NSW, 2015</p>

          <p class="mt-4">
            Parking only available on weekends.
            Feel free to buzz 101 at the intercom!
            Email: alexandria@brosa.com
            Ph: (02) 7202 5701
            Customer Service: 1300 027 672 (for all queries)
          </p>
          <h6>FOLLOW US</h6>
          <hr style="color: #000"; width="60px" ; >
          <!-- Social Media Icons -->
          <div class="social-icons mt-4">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-youtube"></a>
          </div>

        </div>
        <div class="col-lg-8 col-sm-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4967.865308490466!2d-0.024290844705197046!3d51.496103327804384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c0671641a1%3A0x266a92454825f03e!2s10%2C%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1701078741032!5m2!1sen!2s"
            width="100%" height="95%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
      </div>
    </div>

    <div class="container contact-form-section">
      <h2>Have a question? Contact us!</h2>
      <form>
        <div class="input-row">
          <input type="text" id="name" name="name" placeholder="Your name" required>
          <input type="email" id="email" name="email" placeholder="Your email" required>
        </div>

        <textarea id="message" name="message" placeholder="Your question here..." rows="10" required></textarea>
        <button type="submit">SEND</button>
      </form>
    </div>

  </section>
  <!-- START: Contact Section -->

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
