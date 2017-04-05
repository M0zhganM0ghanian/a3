<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Password;
use App\Classes\Form;
use App\Classes\Tools;

class PostPasswordController extends Controller
{

  public function index(Request $request){

    # Instantiate the objects we'll need
    $password = new Password();
    $form = new Form($_POST);

    $length = 0;
    $createdPassword = "";
    $method = $request->method();

    if($form->isSubmitted()) {

      $length = $request->input('numOfWords'); # double
      $includeNum = $request->input('includeNumer'); # Boolean
      $includeSymbole = $request->input('includeSymbols'); # Boolean
      $excludeSimilarChar = $request->input('excludeSimilar'); # Boolean
      $excludeAmbiguousChar = $request->input('excludeAmbiguous'); # Boolean
      $letterCase = $request->input('case'); # String

      $this->validate($request, [
        'numOfWords' => 'required|numeric|min:2|max:24',
      ]);

      $createdPassword = $password->createPassword($includeNum, $includeSymbole,
      $length, $excludeAmbiguousChar, $excludeSimilarChar, $letterCase);

    }

    return view('results.show')->with([
        'form' => $form,
        'length' => $length,
        'createdPassword' => $createdPassword
    ]);
  }
}
