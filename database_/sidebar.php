<?php

$modules = require 'modules.php';

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
