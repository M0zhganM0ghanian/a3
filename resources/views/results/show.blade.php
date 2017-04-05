@extends('layouts.master')


@section('title')
    Password Generatore
@endsection


@push('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
<div class="container">
  <h1>Password Generator</h1>
  <div class='form'>
    <form method='POST' action='index.php'>
      {{ csrf_field() }}

      <div class='NumOfWords'>
        <label>Number Of Characters (required)</label>
        <input type='text' name='numOfWords' required  id='NumOfWords' value='{{ old('numOfWords') }}'>
      </div>

      <div class='checkbox'>
        <h3>Main criteria</h3>
        <input type='checkbox' name='includeNumer'>
        <label>Include Number</label><br>

        <input type='checkbox' name='includeSymbols'>
        <label>Include Symboles</label><br>

        <input type='checkbox' name='excludeSimilar'>
        <label>Exclude Similar Characters e.g. (i, l, 1, L, o, 0, O)</label><br>

        <input type='checkbox' name='excludeAmbiguous'>
        <label>Exclude Ambiguous Characters e.g. ({ } [ ] ( ) / \ ' " ` ~ , ; : . )</label><br>
      </div>

      <div class="radio">
        <h3>Letter type </h3>
        <label><input type="radio" name="case" value="Lower">Lower case</label>
        <label><input type="radio" name="case" value="Upper">Upper case</label>
        <label><input type="radio" name="case" value="Mixed">Mixed</label>
      </div>

      <input type='submit' id='btn'>
      <br>
    </form>
  </div>
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

  <div class='alert alert-info'>Number of words : <?=$form->sanitize($length)?></div>
        <div class="result">
          <h2><?=$createdPassword?></h2>
        </div>
@endif

@endsection


@push('body')

@endpush
