<?php

namespace App\Http\Controllers;

use App\Models\Module;

class SidebarController extends Controller
{
  /**
   * @return array
   */
  public function getData(): array
  {
    $data = Module::all();
    $data = [];

    // if there is no table in the database, use other static data
    if (!count($data)) {
      $data = require __DIR__ . '/../../../database_/modules.php';
    }

    return collect($data)->all();
  }

  /**
   * @param $val
   * @return array
   */
  function getModuleInfo($val): array
  {
    return [
      'module' => $val['module'],
      'label' => $val['label'],
      'path' => $val['path'],
      'icon' => $val['icon'],
      'blank' => $val['blank'],
      'caption' => $val['caption'],
    ];
  }
}
