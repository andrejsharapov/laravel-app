<?php

return [
  [
    'label' => config('app_config.app.app_name'),
    'path' => '/',
    'blank' => false,
  ], [
    'label' => 'PHP docs',
    'path' => 'https://www.php.net/manual/ru/language.basic-syntax.phpmode.php',
    'blank' => true,
  ], [
    'label' => 'Resources',
    'path' => [
      [
        'label' => 'Tailwind CSS',
        'path' => 'https://tailwindcss.com',
        'blank' => true,
        // ], [
        //   'label' => '',
        //   'path' => '#',
        //   'blank' => true,
      ],
    ],
  ], [
    'label' => 'GitHub',
    'path' => 'https://github.com/andrejsharapov/sf-php',
    'blank' => true,
    // ], [
    //   'label' => 'test',
    //   'path' => '#',
    //   'blank' => true,
  ],
];
