<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Password;
use App\Classes\Form;
use App\Classes\Tools;

class GetPasswordController extends Controller
{

  public function index(){
    $form = new Form($_POST);

    # Instantiate the objects we'll need




    return view('results.show')->with([
        'form' => $form
    ]);
  }
}
