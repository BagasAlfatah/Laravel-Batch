@extends('layout.master')

@section('title')
    Halaman Show Post
@endsection

@section('content')

<h2>Show Post {{$post->id}}</h2>
<h4>{{$post->title}}</h4>
<p>{{$post->body}}</p>


@endsection