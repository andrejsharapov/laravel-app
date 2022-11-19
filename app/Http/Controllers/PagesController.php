<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
  public function getContent()
  {
    $title = '';

    return view('pages/page', compact('title'));
  }
}
