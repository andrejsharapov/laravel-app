<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
  public function getContent()
  {
    $title = 'Modules';
    $caption = 'List of modules';

    return view('modules/index', compact('title', 'caption'));
  }
}
