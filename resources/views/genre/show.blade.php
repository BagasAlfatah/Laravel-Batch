@extends('layout.master')

@section('title')
    Halaman Show Genre
@endsection

@section('content')

<h2>Judul Genre {{$genre->id}}</h2>

<h1 class="mt-3">{{$genre->name}}</h1>


@endsection