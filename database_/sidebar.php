<?php

use App\Models\Module;

$data = Module::all();
$data = collect($data)->all();

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

if (!count($data)) {
  $modules = require 'modules.php';
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
    'label' => 'Tailwind CSS',
    'path' => config('app_config.links.tailwindcss'),
    'icon' => 'bi bi-wind',
    'blank' => true,
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
