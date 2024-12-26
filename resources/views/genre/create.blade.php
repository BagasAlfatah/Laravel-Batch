@extends('layout.master')

@section('title')
 Create Genre
@endsection

@section('content')
<h2>Tambah Data</h2>
        <form action="/genre" method="POST">
            @csrf
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Genre">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection

