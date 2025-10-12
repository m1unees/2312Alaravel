@extends('admin.layout')

@section('content')
<body class="bg-light p-5 mt-5">
  <div class="container col-md-6 bg-white text-dark p-4 rounded shadow">
    <h3 class="mb-4">Add New Doctor</h3>

    <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Specialization</label>
        <input type="text" name="specialization" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Profile Image</label>
        <input type="file" name="image" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Add Doctor</button>
    </form>
  </div>
</body>
@endsection
