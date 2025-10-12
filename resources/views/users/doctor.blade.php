@extends('users.master')



@section('content')
<section id="doctors" class="doctors section">
  <div class="container">
    <div class="section-title">
      <h2>Doctors</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit.</p>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 doctor-item">
        <img src="{{ asset('asset/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt="">
        <h4>Walter White</h4>
        <span>Chief Medical Officer</span>
      </div>
      <div class="col-lg-3 col-md-6 doctor-item">
        <img src="{{ asset('asset/img/doctors/doctors-2.jpg') }}" class="img-fluid" alt="">
        <h4>Sarah Jhonson</h4>
        <span>Anesthesiologist</span>
      </div>
      <div class="col-lg-3 col-md-6 doctor-item">
        <img src="{{ asset('asset/img/doctors/doctors-3.jpg') }}" class="img-fluid" alt="">
        <h4>William Anderson</h4>
        <span>Cardiology</span>
      </div>
      <div class="col-lg-3 col-md-6 doctor-item">
        <img src="{{ asset('asset/img/doctors/doctors-4.jpg') }}" class="img-fluid" alt="">
        <h4>Amanda Jepson</h4>
        <span>Neurosurgeon</span>
      </div>
    </div>
  </div>
</section>
@endsection
