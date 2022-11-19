<?php

return [
  [
    'label' => 'Modules',
    'path' => '/modules',
    'blank' => false,
  ], [
    'label' => 'Practices',
    'path' => [
      [
//        'label' => 'Oop (23.10)',
//        'path' => '#',
//        'blank' => true,
//      ], [
        'label' => 'SPA (14.8)',
        'path' => '#',
        'blank' => true,
        // ], [
        //   'label' => 'test',
        //   'path' => '#',
        //   'blank' => true,
      ]
    ]
  ], [
    'label' => 'Layouts',
    'path' => [
      [
        'label' => 'Home page',
        'path' => '/',
        'blank' => true,
      ], [
        'label' => 'Pages',
        'path' => '/page',
        'blank' => true,
      ], [
        'label' => 'Modules',
        'path' => '/modules',
        'blank' => true,
//          ], [
//        'label' => 'test',
//        'path' => '#',
//        'blank' => true,
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
    'path' => config('app_config.links.tailwindcss'),
    'blank' => true,
  ],
];
