@extends('layout.master')

@section('title')
Halaman Update Profile

@endsection

@section('content')


<form action="/profile/{{$detailProfile->id}}" method="POST">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label>Name user</label>
    <input type="text"  class="form-control" value="{{$detailProfile->user->name}}" disabled>
  </div>
  <!-- @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror -->

<div class="form-group">
    <label>Email user</label>
    <input type="text"  class="form-control" value="{{$detailProfile->user->email}}" disabled>
  </div>
  <!-- @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror -->

  <div class="form-group">
    <label>Age</label>
    <input type="number" name="age" class="form-control" value="{{$detailProfile->age}}">
  </div>
  @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

  <div class="form-group">
    <label>Bio</label>
    <input type="text" name="bio" class="form-control" value="{{$detailProfile->bio}}">
  </div>
  @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" value="{{$detailProfile->address}}">
  </div>
  @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/post" class="btn btn-sm btn-secondary">Back</a>
</form>

@endsection