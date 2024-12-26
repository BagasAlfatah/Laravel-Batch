@extends('layout.master')

@section('title')
Halaman Edit Cast
@endsection

@section('content')

<form action="/cast/{{$casts->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" value="{{$casts->name}}" class="form-control" value="{{old('name')}}">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label>Age</label>
    <input type="text" name="age" value="{{$casts->age}}" class="form-control" value="{{old('age')}}">
  </div>
  @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label>Bio</label>
    <input type="text" name="bio" value="{{$casts->bio}}" class="form-control" value="{{old('bio')}}">
  </div>
  @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection