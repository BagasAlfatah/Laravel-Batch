@extends('layout.master')

@section('title')
Halaman Detail

@endsection

@section('content')
    <h1>{{$casts->name}}</h1>
    <p>{{$casts->age}}</p>
    <p>{{$casts->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-secondary">Back</a>
@endsection