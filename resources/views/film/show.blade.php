@extends('layout.master')

@section('title')
    Halaman Show Film
@endsection

@section('content')

<!-- <h2>Show Film {{$film->id}}</h2> -->


<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/' . $film->poster) }}" class="card-img-top" alt="{{ $film->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $film->title }}</h5>
        <p class="card-text">{{ $film->summary }}</p>
        <p class="card-text"><strong>Release Year:</strong> {{ $film->release_year }}</p>
        <p class="card-text"><strong>Genre:</strong> {{ $film->genre ? $film->genre->name : 'Genre tidak tersedia' }}</p>
        <a href="{{ route('film.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>


@endsection