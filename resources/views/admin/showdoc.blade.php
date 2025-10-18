@extends('admin.layout')


@section('content')

<table class="table container col-md-6 bg-white text-dark p-4 rounded shadow mt-5">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Specialization</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doc)
        <tr>
            <td>{{ $doc->id }}</td>
            <td>{{ $doc->name }}</td>
            <td>{{ $doc->description }}</td>
            <td>{{ $doc-> specialization}}</td>
            <td>
                <img src="{{ asset('storage/' . $doc->image) }}" width="80" height="80" class="rounded">
            </td>
            <td>
                <a href="{{ url('edit_doctor/' . $doc->id) }}" class="btn btn-primary text-white">Edit</a>
                <a href="{{ url('delete_doctor/' . $doc->id) }}" 
                   class="btn btn-dark text-white" 
                   onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection