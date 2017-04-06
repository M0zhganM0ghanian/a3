<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
      /**
    * GET
    * /books/{title?}
    */
    public function show() {
        return view('results.start');
    }

    /**
  * GET
  * /books/{title?}
  */
  public function info() {
      return view('results.info');
  }

    /**
  * GET
  * /books/{title?}
  */
  public function safe() {
      return view('links.safe');
  }


  /**
  * GET
  * /books/{title?}
  */
  public function random() {
    return view('links.random');
  }

}
