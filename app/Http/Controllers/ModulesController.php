<?php

namespace App\Http\Controllers;

// https://laravel.com/docs/9.x/helpers#method-array-get
use Illuminate\Support\Arr;

class ModulesController extends Controller
{
  public function getModuleInfo()
  {
    $sidebar = require __DIR__ . '/../../../database_/sidebar.php';
    $data = Arr::get($sidebar, '1.path');

    return $data;
  }

  public function getContent()
  {
    $id = null;
    $title = 'Modules';
    $caption = 'List of modules';
    $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate debitis earum enim et iure laboriosam libero nemo obcaecati quas recusandae, repellendus reprehenderit.';

    if (isset($_GET['utm'])) {
      $id = $_GET['utm'];
    };

    dd($this->getModuleInfo());

//    foreach ($this->getModuleInfo() as $key => $val) {
////      array_map(){
//      dd($key, $val);
////    }
//
//      switch ($id):
//        case $id:
//          $title = $val['label'];
//          $caption = $val['id'];
//          $content = '';
//          break;
//      endswitch;
//
//    }

    switch ($id):
      case "11":
        $title = '11';
        $caption = 'first';
        $content = '';
        break;

      case "12":
        $title = '12';
        $caption = 'second';
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
