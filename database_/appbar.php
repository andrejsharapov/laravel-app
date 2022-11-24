<?php

return [
  [
    'label' => 'Pages',
    'path' => '/page',
    'blank' => false,
  ], [
    'label' => 'Modules',
    'path' => '/modules',
    'blank' => false,
  ], [
    'label' => 'Practices',
    'path' => [
      [
        'label' => 'App (MVC 24.5)',
        'path' => '/resource/views/practices/application/',
        'blank' => true,
      ], [
        'label' => 'OOP 23.10',
        'path' => '/modules?module=23.10',
        'blank' => true,
      ], [
        'label' => 'SPA (14.8)',
        'path' => '/practices/spa',
        'blank' => true,
        // ], [
        //   'label' => 'test',
        //   'path' => '#',
        //   'blank' => true,
      ]
    ]
  ], [
    'label' => 'Resources',
    'path' => [
      [
        'label' => 'Tailwind CSS',
        'path' => config('app_config.links.tailwindcss'),
        'blank' => true,
        // ], [
        //   'label' => '',
        //   'path' => '#',
        //   'blank' => true,
      ], [
        'label' => 'PHP docs',
        'path' => config('app_config.links.php'),
        'blank' => true,
//         ], [
//        'label' => 'test',
//        'path' => '#',
//        'blank' => true,
      ],
    ],
  ], [
    'label' => 'GitHub',
    'path' => config('app_config.links.github'),
    'blank' => true,
  ],
];
