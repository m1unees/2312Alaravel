@extends('users.master')


@section('content')
<section id="appointment" class="appointment section">
  <div class="container">
    <div class="section-title">
      <h2>Make an Appointment</h2>
      <p>Fill in the form below to schedule your appointment.</p>
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto">
        @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

        <form action="{{ route('appointment.store') }}" method="POST" class="php-email-form">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6 form-group">
              <input type="text" name="phone" class="form-control" placeholder="Your Phone" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="datetime-local" class="form-control" name="appointment_date" placeholder="Select Date & Time" required>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6 form-group">
              <select name="department" class="form-select" required>
                <option value="">Select Department</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Ophthalmology">Ophthalmology</option>
              </select>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <select name="doctor" class="form-select" required>
                <option value="">Select Doctor</option>
                <option value="Dr. Walter White">Dr. Walter White</option>
                <option value="Dr. Sarah Johnson">Dr. Sarah Johnson</option>
                <option value="Dr. William Anderson">Dr. William Anderson</option>
                <option value="Dr. Amanda Jepson">Dr. Amanda Jepson</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea name="message" class="form-control" rows="5" placeholder="Message (Optional)"></textarea>
          </div>

          <div class="text-center mt-3">
            <button type="submit">Make an Appointment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
