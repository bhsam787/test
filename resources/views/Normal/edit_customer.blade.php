@extends('master')

@section('section-01')


<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{ url('/update/'.$customer->id).'/customer' }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $customer->email }}">
      {{ $errors->first('email') }}
    </div>


    <div class="form-group">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Name" name="name" value="{{ $customer->name }}">
      {{ $errors->first('name') }}
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>
@endsection
