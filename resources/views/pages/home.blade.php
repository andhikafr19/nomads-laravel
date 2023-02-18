@extends('layouts.app')

@section('title')
NOMADS - PROJECT
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
      Explore The Beautiful World
      <br>
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br>
      moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
</header>

<!-- main -->
<main>
    <div class="container">
      <section class="row justify-content-center section-stats" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12K</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>
              Wisata Popular
            </h2>
            <p>
              Something that you never try
              <br>
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popular-content">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-1.jpeg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-1.jpeg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-1.jpeg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-1.jpeg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>
              Our Networks
            </h2>
            <p>
              Companies are trusted us
              <br>
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img src="frontend/images/partner.png" alt="Logo Partners" class="img-partner">
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>
              They Are Loving Us
            </h2>
            <p>
              Moments were giving them
              <br>
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="row section-popular-travel justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testimonial-1.png" alt="user" class="rounded-circle mb-4">
                <h3 class="mb-4">Rizky Angga</h3>
                <p class="testimonial">
                  “ It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Ubud
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testimonial-1.png" alt="user" class="rounded-circle mb-4">
                <h3 class="mb-4">Rizky Angga</h3>
                <p class="testimonial">
                  “ It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Ubud
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testimonial-1.png" alt="user" class="rounded-circle mb-4">
                <h3 class="mb-4">Rizky Angga</h3>
                <p class="testimonial">
                  “ It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Ubud
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mx-1 mt-4">
              I need Help
            </a>
            <a href="#" class="btn btn-get-started px-4 mx-1 mt-4">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>ACCOUNT</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Refund</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Reward</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>CAMPANY</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Media</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>GET CONNECTED</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Jakarta Selatan</a></li>
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">082-222-8888</a></li>
                  <li><a href="#">support@nomads.id</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row border-top justify-content-center align-items-center pt-4">
          <div class="col-auto text-gray-500 font-weight-light">
            2019 Copyright Nomads • All rights reserved • Made in Jakarta
          </div>
        </div>
      </div>
    </footer>

</main>

@endsection
