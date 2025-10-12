@extends('users.master')



@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">
  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('asset/img/hero-carousel/hero-carousel-1.jpg') }}" class="d-block w-100" alt="">
        <div class="container">
          <h2>Welcome to Medicio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#about" class="btn-get-started">Read More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('asset/img/hero-carousel/hero-carousel-2.jpg') }}" class="d-block w-100" alt="">
        <div class="container">
          <h2>At vero eos et accusamus</h2>
          <p>Nam libero tempore, cum soluta nobis est eligendi optio.</p>
          <a href="#about" class="btn-get-started">Read More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('asset/img/hero-carousel/hero-carousel-3.jpg') }}" class="d-block w-100" alt="">
        <div class="container">
          <h2>Temporibus autem quibusdam</h2>
          <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
          <a href="#about" class="btn-get-started">Read More</a>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
</section>

<!-- Featured Services -->
<section id="featured-services" class="featured-services section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-heartbeat"></i></div>
          <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores.</p>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-pills"></i></div>
          <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate.</p>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-thermometer"></i></div>
          <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident.</p>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-dna"></i></div>
          <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section id="call-to-action" class="call-to-action section accent-background">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 text-center">
        <h3>In an emergency? Need help now?</h3>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
        <a class="cta-btn" href="#appointment">Make an Appointment</a>
      </div>
    </div>
  </div>
</section>
@endsection
