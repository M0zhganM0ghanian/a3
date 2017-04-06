@extends('layouts.master')

@section('title')
    Password Generatore
@endsection

@push('head')
@endpush

@section('content')
  <h1>Let's Try!</h1>
  <div class="form-group">
    <form method='POST' action='/generate'>
      {{ csrf_field() }}

      <div class="form-group">
        <label>Number Of Characters (required)</label>
        <input type='text' class="form-control" name='numOfWords' required  id='NumOfWords' placeholder="Length of Password" value='{{ old('numOfWords') }}'>
      </div>

      <div class="checkbox">
        <h3>Main criteria</h3>
        <label><input type="checkbox" name='includeNumer'> Include Number</label><br>
        <label><input type='checkbox' name='includeSymbols'> Include Symboles</label><br>
        <label><input type='checkbox' name='excludeSimilar'> Exclude Similar Characters e.g. (i, l, 1, L, o, 0, O)</label><br>
        <label><input type='checkbox' name='excludeAmbiguous'> Exclude Ambiguous Characters e.g. ({ } [ ] ( ) / \ ' " ` ~ , ; : . )</label><br>
      </div>

      <div class="radio">
        <h3>Letter type </h3>
        <label><input type="radio" name="case" value="Lower">Lower case</label>
        <label><input type="radio" name="case" value="Upper">Upper case</label>
        <label><input type="radio" name="case" value="Mixed">Mixed</label>
      </div>

      <input type='submit' id='btn' class="btn btn-info" value="Submit">
      <br>
    </form>
  </div>

@if(count($errors) > 0)
  <div class='alert alert-danger'>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif

@if($form->isSubmitted())
  <div class="panel panel-success">
    <div class="panel-heading">Choosen length: {{ $length }}</div>
    <div class="panel-body"><h4>Your password: {{ $createdPassword }}</h4></div>
  </div>
@endif

@endsection
