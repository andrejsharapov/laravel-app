<?php

return [
  [
    'label' => 'Главная',
    'path' => '/',
    'icon' => 'bi bi-house-door',
    'blank' => false,
  ], [
    'label' => 'Модули',
    'path' => [
      [
        'module' => 11,
        'label' => 'Старт в PHP',
        'path' => '?module=11',
        'icon' => '',
        'blank' => false,
        'caption' => 'This module caption',
      ], [
        'module' => 12,
        'label' => 'Типы данных',
        'path' => '?module=12',
        'icon' => 'bi bi-wind',
        'blank' => false,
        'caption' => '',
      ], [
        'module' => 13,
        'label' => 'Основные алгоритмические конструкции',
        'path' => '?module=13',
        'icon' => '',
        'blank' => false,
        'caption' => '',
      ], [
        'module' => 14,
        'label' => 'Сессии и Cookie',
        'path' => '?module=14',
        'icon' => '',
        'blank' => false,
        'caption' => '',
//         ], [
//        'id' => '1',
//        'label' => '',
//        'path' => '?module=1',
//        'icon' => '',
//        'blank' => true,
//        'caption' => '',
      ],
    ],
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
