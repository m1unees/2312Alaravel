@extends('users.master')



@section('content')
<section id="contact" class="contact section">
  <div class="container">
    <div class="section-title">
      <h2>Contact</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit.</p>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bi bi-geo-alt"></i>
          <h3>Our Address</h3>
          <p>A108 Adam Street, New York, NY 535022</p>
        </div>
      </div>
      <div class="col-lg-6">
        <form action="" method="post" class="php-email-form">
          <div class="row">
            <div class="col form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col form-group">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
