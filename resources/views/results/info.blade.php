@extends('layouts.master')

@section('title')
    welcome
@endsection

@push('head')
@endpush


@section('headSec')
  <div class="jumbotron text-center">
    <h1>How Does It Work?</h1>
  </div>
@endsection

@section('content')

  <div class="row">
    <div class="col-sm-4">
      <h3>What is password length?</h3>
      <p>The number of characters</p>
      <p>e.x. "h7E)W#" has 6 Characters</p>
    </div>
    <div class="col-sm-4">
      <h3>What is main criteria?</h3>
      <p>Make sure about policy of your needed password</p>
      <p>You might not allowed to use numbers or simbols</p>
    </div>
    <div class="col-sm-4">
      <h3>What is letter type?</h3>
      <p>Sometimes lower/upper case is not accepted</p>
      <p>Sometimes it must be combined</p>
    </div>
  </div>

@endsection
