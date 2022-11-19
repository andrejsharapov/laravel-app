<?php

return [
  [
    'label' => config('app_config.app.app_name'),
    'path' => '/',
    'icon' => 'bi bi-house-door',
    'blank' => false,
  ], [
    'label' => 'Modules',
    'path' => [
      [
        'label' => '1',
        'path' => '#',
        'icon' => '',
        'blank' => false,
      ], [
        'label' => '3',
        'path' => '#',
        'icon' => 'bi bi-wind',
        'blank' => true,
      ], [
        'label' => '2',
        'path' => '#',
        'icon' => '',
        'blank' => true,
//         ], [
//        'label' => 'test',
//        'path' => '#',
//        'icon' => '',
//        'blank' => true,
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
