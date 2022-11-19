<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
  public function getContent()
  {
    $title = 'Modules';

    if (isset($_GET['utm'])) {
      $title = $_GET['utm'];
    }

    $caption = 'List of modules';
    $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate debitis earum enim et iure laboriosam libero nemo obcaecati quas recusandae, repellendus reprehenderit.';

    switch ($title):
      case "11":
        $title = '11';
        $caption = '';
        $content = '';
        break;

      case "12":
        $title = '12';
        $caption = '';
        $content = '';
        break;

      case "13":
        $title = '13';
        $caption = '';
        $content = '';
        break;

      case "14":
        $title = '14';
        $caption = '';
        $content = '';
        break;

      default:
        break;
    endswitch;

    return view('modules/index', compact('title', 'caption', 'content'));
  }
}
