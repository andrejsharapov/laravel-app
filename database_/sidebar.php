<?php

return [
  [
    'label' => 'Home',
    'path' => '/',
    'icon' => 'bi bi-house-door',
    'blank' => false,
  ], [
    'label' => 'Modules',
    'path' => [
      [
        'id' => '11',
        'label' => '11. Старт в PHP',
        'path' => '?utm=11',
        'icon' => '',
        'blank' => false,
        'caption' => '',
        'content' => '',
      ], [
        'id' => '12',
        'label' => '12. Типы данных',
        'path' => '?utm=12',
        'icon' => 'bi bi-wind',
        'blank' => false,
        'caption' => '',
        'content' => '/path/to/code/example',
      ], [
        'id' => '13',
        'label' => '13. Основные алгоритмические конструкции',
        'path' => '?utm=13',
        'icon' => '',
        'blank' => false,
        'caption' => '',
        'content' => '',
      ], [
        'id' => '14',
        'label' => '14. Сессии и Cookie',
        'path' => '?utm=14',
        'icon' => '',
        'blank' => false,
        'caption' => '',
        'content' => '',
//         ], [
//        'id' => '0',
//        'label' => '',
//        'path' => '#',
//        'icon' => '',
//        'blank' => true,
//        'caption' => '',
//        'content' => '',
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
