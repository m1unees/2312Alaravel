@extends('users.master')



@section('content')
<section id="about" class="about section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="{{ asset('asset/img/about.jpg') }}" class="img-fluid" alt="About">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content">
        <h3>About Medicio</h3>
        <p class="fst-italic">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit.</p>
        <ul>
          <li><i class="bi bi-check-circle"></i> Voluptatem dignissimos provident quasi corporis voluptates.</li>
          <li><i class="bi bi-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
