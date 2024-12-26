@extends('layout.master')

@section('title')
 Edit Genre
@endsection

@section('content')

<div>
        <h2>Edit Genre {{$genre->id}}</h2>
        <form action="/genre/{{$genre->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Edit Genre</label>
                <input type="text" class="form-control" name="name" value="{{$genre->name}}" id="name" placeholder="Masukkan Genre">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
          
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection