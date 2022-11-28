<?php

use App\Models\Module;

//$data = Module::all();
//$data = collect($data)->all();
$data = [];

/**
 * @param $val
 * @return array
 */
function listModules($val): array
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

$modules = array_map('listModules', $data);

// if there is no table in the database, use other static data
if (!count($data)) {
  $modules = require __DIR__ . '/../database_/modules.php';
}

return [
  [
    'label' => 'Главная',
    'path' => '/',
    'icon' => 'bi bi-house-door',
    'blank' => false,
  ], [
    'label' => 'Модули',
    'path' => $modules,
    'icon' => 'bi bi-list-nested',
  ], [
    'label' => 'PHP docs',
    'path' => config('app_config.links.php'),
    'icon' => 'bi bi-filetype-php',
    'blank' => true,
  ], [
    'label' => 'GitHub',
    'path' => config('app_config.links.github'),
    'icon' => 'bi bi-github',
    'blank' => true,
  ],
];
