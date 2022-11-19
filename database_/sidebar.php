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
        'label' => '11',
        'path' => 'modules?utm=11',
        'icon' => '',
        'blank' => false,
      ], [
        'label' => '12',
        'path' => 'modules?utm=12',
        'icon' => 'bi bi-wind',
        'blank' => false,
      ], [
        'label' => '13',
        'path' => 'modules?utm=13',
        'icon' => '',
        'blank' => false,
      ], [
        'label' => '14',
        'path' => 'modules?utm=14',
        'icon' => '',
        'blank' => false,
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
