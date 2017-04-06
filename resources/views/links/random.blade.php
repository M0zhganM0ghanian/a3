@extends('layouts.master')

@section('title')
    About
@endsection

@push('head')
@endpush

@section('headSec')
  <div class="jumbotron text-center">
    <h3>To prevent your passwords from being hacked:</h3>
  </div>
@endsection

@section('content')

 <p><span class="glyphicon glyphicon-ban-circle"></span> Do not use the same password, security question and answer for multiple important accounts.</p>
 <p><span class="glyphicon glyphicon-ban-circle"></span> Do not use the names of your families, friends or pets in your passwords.</p>
 <p><span class="glyphicon glyphicon-ban-circle"></span> Do not use postcodes, house numbers, phone numbers, birthdates, ID card numbers, and so on in your passwords.</p>
 <p><span class="glyphicon glyphicon-ban-circle"></span> Do not use any dictionary word in your passwords.</p>
 <p><span class="glyphicon glyphicon-ban-circle"></span> Do not use two or more similar passwords which most of their characters are same.</p>
 <p><span class="glyphicon glyphicon-ok"></span> Use a random password which does not even contain your favorite num or letter.<span class="glyphicon glyphicon-thumbs-up"></span></p>

@endsection
