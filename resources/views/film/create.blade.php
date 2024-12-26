@extends('layout.master')

@section('title')
 Create Film
@endsection

@section('content')
<h2>Tambah Data</h2>
        <form action="/film" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" class="form-control" name="summary" id="summary" placeholder="Masukkan Summary">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="release_year">Release Year</label>
                <input type="text" class="form-control" name="release_year" id="release_year" placeholder="Masukkan Tahun Rilis">
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
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @empty
                    <option value="">Tidak ada data genre</option>
                    @endforelse
                </select>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection

