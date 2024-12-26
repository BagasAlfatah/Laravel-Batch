@extends('layout.master')

@section('title')
 Edit Film
@endsection

@section('content')

<div>
        <h2>Edit Film {{$film->id}}</h2>
        <form action="/film/{{$film->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Edit Genre</label>
                <input type="text" class="form-control" name="title" value="{{old('title',$film->title)}}" id="title" placeholder="Masukkan title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" class="form-control" name="summary" value="{{old('summary',$film->summary)}}" id="summary" placeholder="Masukkan Summary">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="release_year">Release Year</label>
                <input type="text" class="form-control" name="release_year" value="{{old('release_year',$film->release_year)}}" id="release_year" placeholder="Masukkan Tahun Rilis">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Masukkan Gambar Poster">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

                    <div class="form-group">
            <label for="genre_id" class="mt-3">Genre</label>
            <select name="genre_id" class="form-control" id="">
                <option value="">--pilih genre--</option>
                @forelse($genre as $item)
                    <option name="genre_id" value="{{ $item->id }}">{{ $item->name }}</option>
                @empty
                    <option value="">Tidak ada data genre</option>
                @endforelse
            </select>
            @error('genre_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

          
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection