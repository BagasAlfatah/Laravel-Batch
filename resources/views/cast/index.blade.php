@extends('layout.master')

@section('title')
Index Cast
@endsection

@section('content')

<a href="/cast/create" class="btn btn-sm btn-info mb-3">Create</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Bio</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($casts as $key => $value)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->bio}}</td>
        <td>
           
            <!-- <a href="/cast/{{$value->id}}" class="btn btn-sm btn-danger">Delete</a> -->
             <form action="/cast/{{$value->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/cast/{{$value->id}}" class="btn btn-sm btn-success">Details</a>
                <a href="/cast/{{$value->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
             </form>
        </td>
    </tr>
@empty
    <tr>
        <td>tidak ada data</td>
    </tr>
@endforelse
  </tbody>
</table>

@endsection