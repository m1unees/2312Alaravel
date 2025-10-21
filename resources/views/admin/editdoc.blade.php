


<body class="bg-light p-5 mt-5">
  <div class="container col-md-6 bg-white text-dark p-4 rounded shadow">
    <h3 class="mb-4">Edit Doctor</h3>

    <form action="{{ route('doctor.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="3" required>{{ $doctor->description }}</textarea>
      </div>

 <div class="mb-3">
        <label class="form-label">specialization</label>
        <textarea name="specialization" class="form-control" rows="3" required>{{ $doctor->specialization }}</textarea>
      </div>


      <div class="mb-3">
        <label class="form-label">Image</label><br>
        @if ($doctor->image)
          <img src="{{ asset('storage/' . $doctor->image) }}" width="80" height="80" class="rounded mb-2">
        @endif
        <input type="file" name="image" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('show.doctor') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</body>

