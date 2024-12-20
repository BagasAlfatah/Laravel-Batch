@extends('layout.master')

@section('title')
Halaman Create Cast
@endsection

@section('content')
<form action="/cast" method="POST">
    @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{old('name')}}">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label>Age</label>
    <input type="text" name="age" class="form-control" value="{{old('age')}}">
  </div>
  @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label>Bio</label>
    <input type="text" name="bio" class="form-control" value="{{old('bio')}}">
  </div>
  @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection