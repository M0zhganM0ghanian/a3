@extends('layouts.master')

@section('title')
    welcome
@endsection

@push('head')

@endpush

@section('content')

<div class="jumbotron text-center">
  <h1>Welcome</h1>
  <p>Be more sequre</p>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Why use random password?</h2>
      <h4>Go to "About" to know more</h4>
      <h3>For start go to "Generate Password" tab</h3>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-question-sign"></span>
    </div>

        <h3>Is it not clear enough? check the "Help" section</h3>

  </div>
</div

@endsection
