@extends('layout.master')

@section('title')
Data Film
@endsection

@section('content')

<a href="/film/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">summary</th>
                <th scope="col">release year</th>
                <th scope="col">poster</th>
                <th scope="col">genre</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($film as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->title}}</td>
                        <td>{{$value->summary}}</td>
                        <td>{{$value->release_year}}</td>
                        <td>
                        @if($value->poster)
        <img src="{{ asset('storage/' . $value->poster) }}" alt="{{ $value->title }}" style="width: 100px; height: auto;">
    @else
        Tidak ada poster
    @endif
                        </td>
                        <td>{{ $value->genre ? $value->genre->name : 'Genre tidak tersedia' }}</td>
                        <td>
                            
                            <form action="/film/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/film/{{$value->id}}" class="btn btn-info">Show</a>
                                @auth
                                <a href="/film/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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