@extends('layouts.master')

@section('title')
    Make Strong Password
@endsection

@push('head')
@endpush

@section('headSec')
  <div class="jumbotron text-center">
    <h3>Strong Password <span class="glyphicon glyphicon-lock"></span></h3>
  </div>
@endsection

@section('content')

  <p>Use a password that has at least:</p>
     <p><b>  - 16 characters</b></p>
     <p><b>  - one number</b></p>
     <p><b>  - one uppercase letter</b></p>
     <p><b>  - one lowercase letter</b></p>
     <p><b>  - one special symbol</b></p>
  <p>Do not use something that can be cloned( but you can't change ) as your passwords, such as your fingerprints.</p>

@endsection
