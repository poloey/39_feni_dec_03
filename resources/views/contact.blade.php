@extends('master')

@section('title')
Contact page
@endsection

@section('content')
<div class="container mt-4 text-light">
  <form action="" class="p-5">
    <h2>Please contact us</h2>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" class="form-control"></textarea>
    </div>
    <div class="from-group">
      <button type="submit" class="btn btn-warning"><i class="fa fa-envelope" aria-hidden="true"></i> Contact me</button>
    </div>
  </form>
</div>
@endsection