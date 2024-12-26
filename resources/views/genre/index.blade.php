@extends('layout.master')

@section('title')
Data Genre
@endsection

@section('content')

<a href="/genre/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Genre</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($genre as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->name}}</td>
                        <td>
                            
                            <form action="/genre/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/genre/{{$value->id}}" class="btn btn-info">Show</a>
                                @auth
                                <a href="/genre/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                                @endauth
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>

@endsection