@extends('layouts.master')

@section('title')
    Help
@endsection

@push('head')
@endpush

@section('headSec')
  <div class="jumbotron text-center">
    <h2>How Does It Work <span class="glyphicon glyphicon-question-sign"></span></h2>
  </div>
@endsection

@section('content')

  <div class="row">
    <div class="col-sm-4">
      <h3>What is password length?</h3>
      <p>The number of characters.</p>
      <p>e.g. "h7E)W#" has 6 characters.</p>
    </div>
    <div class="col-sm-4">
      <h3>What is main criteria?</h3>
      <p>Make sure about policy of your needed password.</p>
      <p>You might not be allowed to use numbers or/and symboles.</p>
    </div>
    <div class="col-sm-4">
      <h3>What is letter type?</h3>
      <p>Sometimes lower/upper case letters are not accepted.</p>
      <p>Sometimes you need both.</p>
    </div>
  </div>

@endsection
