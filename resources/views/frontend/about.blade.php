@extends('frontend.layout.app')

@section('customCsd')
@endsection

@section('content')

    <!-- START:: TOP Banner -->
    <section class="top-banner">
      <div class="top-banner-img">
        <img src="{{ asset('.frontend/assets/images/breadcrumb1.png')}}" alt="Banner" class="img-fluid">
        <div class="text-container">
          <h2>About</h2>
          <p><a href="index.html"> Home </a>> About</p>
        </div>
      </div>
    </section>
    <!-- END:: TOP Banner -->

    <!-- START:: About Section -->
    <section class="about-section mb-5">
      <!-- Logo -->
      <div class="container about-container text-center mt-4">
        <img src="{{ asset('frontend/assets//images/logo2.png')}}" alt="Logo" class="logo">
        <h3>The Future of WoodWorth</h3>
        <h5>GETTING BETTER AND BETTER - TOGETHER</h5>
      </div>

      <!-- Second Banner Section -->
      <div class="second-banner mt-5 mb-5">
        <div class="container">
          <!-- Add the "image-hover" class to the images you want to have the hover effect -->
          <img src="{{ asset('frontend/assets//images/about1-1.jpg.webp')}}" class="image-hover">
        </div>
      </div>

      <!-- New Section with Picture on the Left and Content on the Right -->
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-6">
            <!-- "image-hover" class to the images you want to have the hover effect -->
            <img src="{{ asset('frontend/assets//images/about1-2-1.jpg.webp')}}" alt="Picture" class="img-fluid image-hover">
          </div>
          <div class="col-md-6 mt-3">
            <h6 style="color: #29384B;">WE DESIGN FURNITURE</h6>
            <h3>Simple Creative</h3>
            <hr style="color: black; width: 5em; margin-left: 2px; font-weight: bold;">
            <p>Ut leo. Vivamus aliquet elit ac nisl. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac enim.
              Sed cursus turpis vitae tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
              cubilia Curae; Fusce id purus.In consectetuer turpis ut velit. Suspendisse feugiat. Nam quam nunc, blandit
              vel, luctus pulvinar, hendrerit id, lorem. Fusce neque. Nam commodo suscipit quam.

              Suspendisse feugiat. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Fusce neque. Nam
              commodo suscipit quam.</p>
          </div>
        </div>
      </div>

      <!-- Third Content Section -->
      <div class="container mt-7 mb-7">
        <div class="row">
          <div class="col-md-6">
            <h6 style="color: #29384B;">WE DESIGN FURNITURE</h6>
            <h3>Design Quality</h3>
            <hr style="color: black; width: 5em; margin-left: 2px; font-weight: bold;">
            <p>Ut leo. Vivamus aliquet elit ac nisl. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac enim.
              Sed cursus turpis vitae tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
              cubilia Curae; Fusce id purus.In consectetuer turpis ut velit. Suspendisse feugiat. Nam quam nunc, blandit
              vel, luctus pulvinar, hendrerit id, lorem. Fusce neque. Nam commodo suscipit quam.

              Suspendisse feugiat. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Fusce neque. Nam
              commodo suscipit quam.</p>
          </div>
          <div class="col-md-6">
            <!-- Add the "image-hover" class to the images you want to have the hover effect -->
            <img src="{{ asset('frontend/assets///images/about1-3.jpg.webp')}}" alt="Picture" class="img-fluid image-hover">
          </div>
        </div>
      </div>

      <!-- Fourth Content Section (Map Section) -->
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 style="color: #29384B;">Our Location</h2>
            <h4>Visit us at the following address</h4>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-6 mb-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4967.865308490466!2d-0.024290844705197046!3d51.496103327804384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c0671641a1%3A0x266a92454825f03e!2s10%2C%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1701078741032!5m2!1sen!2s"
              style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-md-6 mb-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4967.865308490466!2d-0.024290844705197046!3d51.496103327804384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c0671641a1%3A0x266a92454825f03e!2s10%2C%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1701078741032!5m2!1sen!2s"
              style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

    </section>
    <!-- END:: About Section -->

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
    <!-- START:: Footer -->
    @section('customJs')
    @endsection
