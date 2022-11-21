<?php

namespace App\Http\Controllers;

// https://laravel.com/docs/9.x/helpers#method-array-get
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ModulesController extends Controller
{
  /**
   * @return array|\ArrayAccess|mixed
   */
  public function getModuleInfo()
  {
    $sidebar = require __DIR__ . '/../../../database_/sidebar.php';
    $data = Arr::get($sidebar, '1.path');

    return $data;
  }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
   */
  public function getContent()
  {
    if (isset($_GET['module'])) {
      $module = $_GET['module'];
    } else {
      $module = null;
    }

    $data = $this->getModuleInfo();
    $data = array_filter($data, function ($val) use ($module) {
      return ($val["module"] == $module);
    });

    $data = Arr::get(array_values($data), '0');

    // display on the page
    $title = Arr::get($data, 'label', 'Модули');
    $caption = Arr::get($data, 'caption', 'Модули и задачи, с которыми возникли сложности или требуется уделить особое внимание.');
//    $content = Arr::get($data, 'content', '');
    $content = Storage::disk('modules')->get($module . '.php');

    return view('modules/index', compact('title', 'caption', 'content'));
  }
}
