<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
  * GET
  * /help
  */
  public function info() {
      return view('results.info');
  }

    /**
  * GET
  * /safe
  */
  public function safe() {
      return view('links.safe');
  }


  /**
  * GET
  * /random
  */
  public function random() {
    return view('links.random');
  }

  /**
  * GET
  * /strong
  */
  public function strong() {
    return view('links.strong');
  }

}
